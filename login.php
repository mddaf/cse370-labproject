<?php
require_once('DBconnect.php');

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['usertype'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype=$_POST['usertype'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'AND usertype='$usertype'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        // echo "Let him enter";
        if($usertype=='Customer'){
            header("Location: customer\chome.php");
        }
        else{
            header("Location: customer\shome.php");
        }
    }
    else{
        ?>
        <script type="text/javascript">
            alert("Incorrect information! Please try again.");
            window.location="login.php";
        </script>
    <?php
    }
}
?>