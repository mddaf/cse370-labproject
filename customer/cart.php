<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Shopping Cart</title>
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

    <main class=c_product>
        <section class="cart">
            <h1>Shopping Cart</h1>
            <div class="cart_items">
                <!-- Sample cart item (repeat for each item in cart) -->
                <div class="cart_item">
                    <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Product Image">
                    <div class="cart_item_details">
                        <h2>Product Name</h2>
                        <p>Price: $XX.XX</p>
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1">
                        <button class="remove_btn">Remove</button>
                    </div>
                </div>
                <!-- Repeat for each product in cart -->
                <div class="cart_item">
                    <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Product Image">
                    <div class="cart_item_details">
                        <h2>Product Name</h2>
                        <p>Price: $XX.XX</p>
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1">
                        <button class="remove_btn">Remove</button>
                    </div>
                </div>

                <div class="cart_item">
                    <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Product Image">
                    <div class="cart_item_details">
                        <h2>Product Name</h2>
                        <p>Price: $XX.XX</p>
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1">
                        <button class="remove_btn">Remove</button>
                    </div>
                </div>

                <div class="cart_item">
                    <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Product Image">
                    <div class="cart_item_details">
                        <h2>Product Name</h2>
                        <p>Price: $XX.XX</p>
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1">
                        <button class="remove_btn">Remove</button>
                    </div>
                </div>
            </div>
            <div class="cart_actions">
                <button class="checkout_btn">Checkout</button>
            </div>
        </section>
    </main>
</body>
</html>
