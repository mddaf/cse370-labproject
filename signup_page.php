<!-- !<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="css\style.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com" >
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin >
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap"
      rel="stylesheet">
    <title>AutoMob</title>
</head>
<body>
    <header>
        <nav>
            <div class="nav_logo">
                <h1><a href="index.php">AutoMob</a></h1>
            </div>
            <ul class="nav_link">
                <li><a href="login_page.php">Log in</a></li>
            </ul>
        </nav>
    </header>

    <main>
      <section class="login">
        <div class="login_box">
          <h1>Sign up</h1>
          
          
        <form class="login_form" action="signup.php" method="post">

            <input type="text" name="fullname" id="fullname" placeholder="Fullname">

            <input type="text" id="username" name="username" placeholder="Username">

            <input type="email" name="email" id="email" placeholder="Email">
            <input type="tel" name="tel" id="tel" placeholder="Phone number">

            <input type="text" name="address" id="address" placeholder="address">

            <span>Gender</span>
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            
            <input type="password" id="password" name="password" placeholder="Password">

            <span>Please select</span>
            <div class="user_type">
                <label>
                    <input type="radio" name="usertype" value="Customer" />
                    Customer
                </label>
                <label>
                    <input type="radio" name="usertype" value="Seller" />
                    Seller
                </label>
            </div>

            <input type="submit" value="Submit" />
        </form>

        </div>
      </section>
    </main>

</body>
</html> -->

<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <title>AutoMob - Sign Up</title>
</head>
<body>
    <header>
        <nav>
            <div class="nav_logo">
                <h1><a href="index.php">AutoMob</a></h1>
            </div>
            <ul class="nav_link">
                <li><a href="login_page.php">Log in</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="login">
            <div class="login_box">
                <h1>Sign up</h1>
                <form class="login_form" action="signup.php" method="post">
            
                    <input type="text" name="fullname" id="fullname" placeholder="Full Name" required>

                    <input type="text" id="username" name="username" placeholder="Username" required>

                    <input type="email" name="email" id="email" placeholder="Email" required>

            
                    <input type="tel" name="tel" id="tel" placeholder="Phone Number" required>

                 
                    <input type="text" name="address" id="address" placeholder="Address" required>

                    <select name="gender" id="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    
                    <label>User type:</label>
                    <br>
                    <div class="user_type">
                        <select name="user_type" id="user_type" required>
                            <option value="customer">Customer</option>
                            <option value="seller">Seller</option>
                        </select>
                    </div>

                    <label for="password">Create password</label>
                    <br>
                    <input type="password" id="password" name="password" placeholder="Password" required>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </section>
    </main>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <title>AutoMob - Sign Up</title>
</head>
<body>
    <header>
        <nav>
            <div class="nav_logo">
                <h1><a href="index.php">AutoMob</a></h1>
            </div>
            <ul class="nav_link">
                <li><a href="login_page.php">Log in</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="login">
            <div class="signup_box">
                <h1>Sign up</h1>
                <form class="signup_form" action="signup.php" method="post">
                    <div class="form-row">
                        <input type="text" name="fullname" id="fullname" placeholder="Full Name" required>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-row">
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <input type="tel" name="tel" id="tel" placeholder="Phone Number" required>
                    </div>
                    <input type="text" name="address" id="address" placeholder="Address" required>
                    <div class="form-row">
                        <select name="gender" id="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        <select name="user_type" id="user_type" required>
                            <option value="customer">Customer</option>
                            <option value="seller">Seller</option>
                        </select>
                    </div>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </section>
    </main>
</body>
</html>
