<?php
// we must never forget to start the session 

$errorMessage = '';
if (isset($_POST['txtUserId']) && isset($_POST['txtPassword'])) {
include 'Library/Config.php'; include 'Library/Opendb.php';

$userId	= $_POST['txtUserId'];
$password = $_POST['txtPassword'];

// check if the user id and password combination exist in database
$sql = "SELECT user_id
FROM tbl_auth_user
WHERE user_id = '$userId' AND user_password = '$password'";

$result = mysqli_query($conn, $sql) or die('Query failed. ' . mysqli_error());

if (mysqli_num_rows($result) == 1) {
// the user id and password match,

// set the session
session_start();
$_SESSION['db_is_logged_in'] = true;
// after login we move to the main page 
header('Location: Index.php');
exit;
} else {
$errorMessage = 'Sorry, wrong user id / password';
 }

include 'Library/Closedb.php';
}
?>
<html>
<head><!-- 
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
    .login {
        margin: 250px auto;
        width: 400px;
        height: 160px;
        padding: 10px;
        border: 1px solid #ccc;
        background: lavender;
    }
    img{
        width: 200px;
        height: 200px;

    }
    input[type=text], input[type=password] {
        margin: 5px auto;
        width: 94%;
        padding: 10px;
    }
    input[type=submit] {
        margin : 20px auto;
        float: right;
        padding: 10px;
        width: 400px;
        border: 1px solid #fff;
        color: #fff;
        background: grey;
        cursor: pointer;
    }

</style> -->
<title>Login V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>

<body style="background-color: #666666;">
<?php
if ($errorMessage != '') {
?>
<p align="center"><strong><font color="#990000"><?php echo $errorMessage; ?></font></strong></p>
<?php
}
?>
 <?php       
//include kelas captcha!
        session_start();
        require_once ('captcha.php');
?>
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="" method="post" name="frmLogin" id="frmLogin">
                    <span class="login100-form-title p-b-43">
                        Login to continue
                    </span>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" name="txtUserId" type="text" id="txtUserId" >
                        <span class="focus-input100"></span>
                        <span class="label-input100">Username</span>
                    </div>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" name="txtPassword" type="password" id="txtPassword">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        
                        <img alt="captcha" src="<?php
            //kode untuk menampilkan captcha!
        echo captcha::image_url('pesan');
        ?>">
    <input id="captcha" name="captcha" type="text" placeholder="Captcha" />

                        
                    </div>
            

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                    
                </form>

                <div class="login100-more" style="background-image: url('https://image.architonic.com/imgArc/project-1/4/5206227/crosby-studios-bulka-cafe-architonic-08-08.jpg');">
                </div>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

<!-- <div class="login">
   
<form action="" method="post" name="frmLogin" id="frmLogin">
    <input name="txtUserId" type="text" id="txtUserId" placeholder="Username"><br>
    <input name="txtPassword" type="password" id="txtPassword" placeholder="Password"><br>
    <img alt="captcha" src="<?php
            //kode untuk menampilkan captcha!
        echo captcha::image_url('pesan');
        ?>">
    <input id="captcha" name="captcha" type="text" placeholder="Captcha" />

            <br />
    <input type="submit" name="kirim" value="Submit">
</form>
</div> -->
<?php
//cara mengecek apakah input capthca user
//benar atau salah
if($_POST) {

    if(captcha::check('pesan')) {
        echo ' captcha! OK! <br>';
        /*Di bagian ini bisa anda ganti
        dengan code untuk menyimpan data kedatabase
        atau pemrosesan lainnya sesuai kebutuhan */
        echo "Nama :" . $_POST['nama'] . "<br/>";
        echo "<p>Pesan :" . $_POST['pesan'] . "<br/>";

    } else
        echo "captcha salah, silahkan ulangi!";
}?>
</body>
</html>


 
