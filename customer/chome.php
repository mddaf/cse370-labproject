<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="..\css\style.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com" >
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin >
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap"
      rel="stylesheet" >
    <title>AutoMob</title>
</head>
<body>
    <header>
        <nav>
            <div class="nav_logo">
                <h1><a href="chome.php">AutoMob</a></h1>
            </div>
            <ul class="nav_link">
                <li><a href="customer_profile.php">Account</a></li>
                <li><a href="myorders.php">My Orders</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>
    <!-- product -->

    <main class="c_product">
    <section class="products">
        <div class="product_filters">
            <input type="text" id="search" placeholder="Search...">

            <select id="Category">
                <option value="All">All Category</option>
                <option value="Brake">Brake</option>
                <option value="Tires">Tires</option>
                <option value="Engine">Engine</option>
                <option value="Helmet">Helmet</option>
            </select>

            <select id="sort">
                <option value="default">Sort by</option>
                <option value="price_asc">Price: Low to High</option>
                <option value="price_desc">Price: High to Low</option>
                <option value="name_asc">Name: A to Z</option>
                <option value="name_desc">Name: Z to A</option>
            </select>

            <button id="filter">Filter</button>
        </div>

        <div class="product_container">
            <!-- Product items will be dynamically added here -->
            <div class="product_item">
                <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Product Image">
                <h2>Product Name</h2>
                <p>Price: $XX.XX</p>
                <button>Add to Cart</button>
            </div>
            <!-- Repeat for each product -->

            <div class="product_item">
                <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Product Image">
                <h2>Product Name</h2>
                <p>Price: $XX.XX</p>
                <button>Add to Cart</button>
            </div>

            <div class="product_item">
                <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Product Image">
                <h2>Product Name</h2>
                <p>Price: $XX.XX</p>
                <button>Add to Cart</button>
            </div>

            <div class="product_item">
                <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Product Image">
                <h2>Product Name</h2>
                <p>Price: $XX.XX</p>
                <button>Add to Cart</button>
            </div>

            <div class="product_item">
                <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Product Image">
                <h2>Lens Cover</h2>
                <p>Price: $XX.XX</p>
                <button>Add to Cart</button>
            </div>

            <div class="product_item">
                <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Product Image">
                <h2>Product Name</h2>
                <p>Price: $XX.XX</p>
                <button>Add to Cart</button>
            </div>

            <div class="product_item">
                <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Product Image">
                <h2>Product Name</h2>
                <p>Price: $XX.XX</p>
                <button>Add to Cart</button>
            </div>

            <div class="product_item">
                <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Product Image">
                <h2>Product Name</h2>
                <p>Price: $XX.XX</p>
                <button>Add to Cart</button>
            </div>

            <div class="product_item">
                <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Product Image">
                <h2>Product Name</h2>
                <p>Price: $XX.XX</p>
                <button>Add to Cart</button>
            </div>

            <div class="product_item">
                <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Product Image">
                <h2>Product Name</h2>
                <p>Price: $XX.XX</p>
                <button>Add to Cart</button>
            </div>

            <div class="product_item">
                <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Product Image">
                <h2>Product Name</h2>
                <p>Price: $XX.XX</p>
                <button>Add to Cart</button>
            </div>

            <div class="product_item">
                <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Product Image">
                <h2>Product Name</h2>
                <p>Price: $XX.XX</p>
                <button>Add to Cart</button>
            </div>
            
        </div>
    </section>
</main>

</body>
</html>