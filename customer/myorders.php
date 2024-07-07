<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
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

    <main>
        <section class="order_section">
            <h1 class="order_title">Previous Orders</h1>
            <div class="order_item">
                <p>Order #12345</p>
                <p class="order_status">Delivered</p>
                <p class="order_date">Order Date: January 15, 2024</p>
            </div>
            <div class="order_item">
                <p>Order #67890</p>
                <p class="order_status">Delivered</p>
                <p class="order_date">Order Date: February 28, 2024</p>
            </div>
        </section>

        <section class="order_section">
            <h1 class="order_title">Pending Orders</h1>
            <div class="order_item">
                <p>Order #24680</p>
                <p class="order_status">Pending</p>
                <p class="order_date">Order Date: March 10, 2024</p>
            </div>
            <div class="order_item">
                <p>Order #13579</p>
                <p class="order_status">Pending</p>
                <p class="order_date">Order Date: April 5, 2024</p>
            </div>
        </section>

        <section class="order_section">
            <h1 class="order_title">Shipping Status</h1>
            <div class="order_item">
                <p>Order #67890</p>
                <p class="order_status">Shipped</p>
                <p class="order_date">Order Date: February 28, 2024</p>
            </div>
            <div class="order_item">
                <p>Order #13579</p>
                <p class="order_status">Shipped</p>
                <p class="order_date">Order Date: April 5, 2024</p>
            </div>
        </section>
    </main>
</body>
</html>
