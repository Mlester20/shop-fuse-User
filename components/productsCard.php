<div class="max-w-7xl mx-auto mt-10 p-4">
    <h1 class="text-2xl font-bold mb-6">Available Products</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        <?php
        require '../includes/config.php';

        $db = new Database();
        $con = $db->getConnection();
        $stmt = $con->prepare("SELECT * FROM products");
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()):
        ?>

        <!-- Product Card -->
        <a href="product-details.php?id=<?php echo $row['product_id']; ?>" class="block rounded-xl transition duration-200 transform hover:scale-105 hover:shadow-2xl">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">

            <?php
            // =====================================
            // IMAGE URL BUILDER (HTTP accessible)
            // =====================================

            $rawImg = $row['image'];

            // Clean the path - remove any absolute paths
            $img = str_replace('C:\\xampp\\htdocs\\', '', $rawImg);
            $img = str_replace('C:/xampp/htdocs/', '', $img);
            $img = str_replace('\\', '/', $img);
            $img = preg_replace('#^\.\./#', '', $img);
            $img = ltrim($img, '/');

            // Extract just the filename (e.g., "1764583512_da3f767f8801.png")
            $filename = basename($img);

            // Build HTTP URL pointing to sellers system
            $imageUrl = "http://localhost/sellers/assets/uploads/" . $filename;
            ?>

            <!-- Product Image -->
            <img 
                src="<?php echo htmlspecialchars($imageUrl); ?>" 
                alt="<?php echo htmlspecialchars($row['product_name']); ?>" 
                class="w-full h-40 object-cover"
                onerror="this.onerror=null; this.src='http://localhost/sellers/assets/uploads/placeholder.png';"
            >

            <div class="p-4">
                <h2 class="text-lg font-semibold">
                    <?php echo htmlspecialchars($row['product_name']); ?>
                </h2>

                <p class="text-sm text-gray-600 mt-1 line-clamp-2">
                    <?php echo htmlspecialchars($row['description']); ?>
                </p>

                <p class="mt-3 font-bold text-indigo-600">
                    ₱<?php echo number_format($row['price'], 2); ?>
                </p>

                <div class="flex justify-between items-center mt-3 text-sm">
                    <span class="text-gray-500">Stock: <?php echo $row['stock']; ?></span>
                    <span class="px-2 py-1 bg-indigo-100 text-indigo-600 rounded-lg">
                        <?php echo htmlspecialchars($row['category']); ?>
                    </span>
                </div>
            </div>
            </div>
        </a>

        <?php endwhile; ?>

    </div>
</div>