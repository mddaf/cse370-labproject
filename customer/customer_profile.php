<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Customer Profile</title>
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
       
        <section class="profile_section">
        <center>
            <h1>Customer Profile</h1>
</center>
            <br>
            <div class="profile_info">
                <div class="profile_picture">
                    <img src="https://static-01.daraz.com.bd/p/31bf5351ac7d6dd97d775548938ef6c6.jpg" alt="Profile Picture">
                    <input type="file" id="profile_pic" name="profile_pic">
                    <br>
                    <h1>ID: 545634340</h1>
                    <br>
                    <label for="profile_pic">Change Profile Picture</label>
                </div>
                <div class="profile">
                    <div class="profile_info">
                        <div class="profile_item">
                            <div class="label">Name</div>
                            <div class="value">John Doe</div>
                        </div>
                        <div class="profile_item">
                            <div class="label">Username</div>
                            <div class="value">johndoe123</div>
                        </div>
                        <div class="profile_item">
                            <div class="label">Email</div>
                            <div class="value">johndoe@example.com</div>
                        </div>
                        <div class="profile_item">
                            <div class="label">Phone</div>
                            <div class="value">+1234567890</div>
                        </div>
                        <div class="profile_item">
                            <div class="label">Address</div>
                            <div class="value">123 Street, City, Country</div>
                        </div>
                        <div class="profile_item">
                            <div class="label">Gender</div>
                            <div class="value">Male</div>
                        </div>
                    </div>
                    <br>
                    <button class="update_button">Update Profile</button>
<br>
                    <div class="profile_item">
                        <div class="label">Old Password</div>
                        <input type="password" id="old_password" name="old_password">
                    </div>
                    <div class="profile_item">
                        <div class="label">New Password</div>
                        <input type="password" id="new_password" name="new_password">
                    </div>
                    <div class="profile_item">
                        <button class="update_button">Update Password</button>
                    </div>
                    </div>
            </div>

        </section>

    </main>
</body>
</html>
