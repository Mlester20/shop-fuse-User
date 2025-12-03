<?php
require '../includes/config.php';

$db = new Database();
$con = $db->getConnection();

// Get and validate product ID
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id <= 0) {
    header('Location: index.php');
    exit;
}

$stmt = $con->prepare("SELECT * FROM products WHERE product_id = ? LIMIT 1");
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    ?>
    <!doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="dist/output.css" rel="stylesheet">
        <title>Product Not Found</title>
    </head>
    <body class="bg-gray-50 min-h-screen flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-md text-center">
            <h2 class="text-xl font-semibold mb-4">Product not found</h2>
            <a href="index.php" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Back to Products</a>
        </div>
    </body>
    </html>
    <?php
    $db->closeConnection();
    exit;
}

$row = $result->fetch_assoc();

// Build image URL (use filename only to match seller uploads)
$rawImg = isset($row['image']) ? $row['image'] : '';
$img = str_replace('C:\\xampp\\htdocs\\', '', $rawImg);
$img = str_replace('C:/xampp/htdocs/', '', $img);
$img = str_replace('\\', '/', $img);
$img = preg_replace('#^\.\./#', '', $img);
$img = ltrim($img, '/');
$filename = basename($img);
$imageUrl = 'http://localhost/sellers/assets/uploads/' . ($filename ? $filename : 'placeholder.png');

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="../dist/output.css" rel="stylesheet">
    <title><?php echo htmlspecialchars($row['product_name']); ?> - Product Details</title>
</head>
<body class="bg-gray-50">

    <!-- header component -->
    <?php require '../components/headerUI.php'; ?>

    <div class="max-w-5xl mx-auto py-10 px-4 mt-10">
        <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col md:flex-row">
            <div class="md:w-1/2">
                <img src="<?php echo htmlspecialchars($imageUrl); ?>" alt="<?php echo htmlspecialchars($row['product_name']); ?>" class="w-full h-80 object-cover" onerror="this.onerror=null; this.src='http://localhost/sellers/assets/uploads/placeholder.png';">
            </div>

            <div class="p-6 md:w-1/2">
                        <h1 class="text-2xl font-bold mb-2"><?php echo htmlspecialchars($row['product_name']); ?></h1>
                        <?php
                        // Fetch seller/shop name from sellers table using seller_id
                        $sellerName = '';
                        if (!empty($row['seller_id'])) {
                            $sid = intval($row['seller_id']);
                            $sstmt = $con->prepare("SELECT shop_name FROM sellers WHERE seller_id = ? LIMIT 1");
                            if ($sstmt) {
                                $sstmt->bind_param('i', $sid);
                                $sstmt->execute();
                                $sres = $sstmt->get_result();
                                if ($sres && $sres->num_rows) {
                                    $srow = $sres->fetch_assoc();
                                    $sellerName = $srow['shop_name'];
                                }
                                $sstmt->close();
                            }
                        }
                        ?>
                        <?php if ($sellerName): ?>
                            <p class="text-sm text-gray-600 mb-3">Shop: <span class="font-medium text-indigo-600"><?php echo htmlspecialchars($sellerName); ?></span></p>
                        <?php endif; ?>
                <p class="text-gray-600 mb-4"><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>

                <p class="text-xl font-semibold text-indigo-600 mb-2">₱<?php echo number_format($row['price'], 2); ?></p>
                <p class="text-sm text-gray-500 mb-4">Stock: <?php echo htmlspecialchars($row['stock']); ?></p>
                <p class="inline-block px-3 py-1 bg-indigo-100 text-indigo-700 rounded mb-6"><?php echo htmlspecialchars($row['category']); ?></p>

                <div class="flex space-x-3 mt-6">
                    <a href="home.php" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">Back to Products</a>

                    <form action="cart.php" method="post" class="inline">
                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($row['product_id']); ?>">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
