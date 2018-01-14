<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <script src="assets/assets.js"></script>
    <title>Register</title>
    <?php
    require('../init.php');
    $firstname = '';
    $lastname = '';
    $username = '';
    $email = '';
    $password = '';
    $password_repeat = '';
    $firstname = htmlentities($_POST['firstname']);
    $lastname = htmlentities($_POST['lastname']);
    $username = htmlentities($_POST['username']);
    $email = htmlentities($_POST['mail']);
    $password = $_POST['password'];
    $password_repeat = $_POST['retype-password'];

    if (isset($_POST['submit'])){
        if ($password === $password_repeat){
            $hashed_pwd = hash(md5, $password);
            $q = "INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES (NULL, '".$firstname."', '".$lastname."', '".$username."', '".$email."', '".$hashed_pwd."')";
            mysqli_query($link, $q);
            mkdir('../users/'.$username.'/', 0777, true);
        } else {
            $errors;
        }
    }
    ?>
</head>
<body>
    <?php
    require("../header.php");
    ?>
    <main>
        <div class="inscription-form form-reg">
            <span class="separate-from-header"></span>
            <?php if($q = true){
                $sucess = '<p>Thanks '.$username.' for registering into our website ! &hearts;</p>';
            } else {
                $errors = '<p>Passwords don\'t match ! Try again please.</p>';
            }
            ?>
            <div class="error-block"><?php echo $errors ?></div>
            <div class="sucess-block"><?php echo $sucess ?></div>
            <div class="block-reg">
            <form action="register.php" method="POST" class="inputDB">
                <label>
                <input type="text" name="firstname" id="firstname" class="inscription-form" placeholder="Enter your first name">
                </label>
                <label>
                    <input type="text" name="lastname" id="lastname" class="inscription-form" placeholder="Enter your last name">
                </label>
                <label>
                    <input type="text" name="username" id="username" class="inscription-form" placeholder="Enter your username">
                </label>
                <label>
                    <input type="text" name="mail" id="mail" class="inscription-form" placeholder="Enter your e-mail">
                </label>
                <label>
                    <input type="password" name="password" id="password" class="inscription-form" placeholder="Enter your password">
                </label>
                <label>
                    <input type="password" name="retype-password" id="retype-password" class="inscription-form" placeholder="Retype your password">
                </label>
                <label>
                    <button type="submit" name="submit" class="inscription-form button-submit">Register !</button>
                </label>
            </form>
            </div>
        </div>
    </main>
    <?php
    require("../footer.php");
    ?>
</body>
</html>