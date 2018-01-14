<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <script src="assets/assets.js"></script>
    <title>Login</title>
    <?php
    require('../init.php');
    $username='';
    $password='';
    $errors='';
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $username = htmlentities($_POST['username']);
        $password = $_POST['password'];
        $hashed_pwd = hash(md5, $password);
        $q = "SELECT * FROM users WHERE password = '". $hashed_pwd . "' AND username = '" . $username . "'";       
        $result = mysqli_query($link, $q);
        $user = mysqli_fetch_assoc($result);
        if ($user === NULL){
            $errors = 'Invalid username or password';
        } else {
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            echo 'You have been successfully logged in !';
        
            header('Location: ../../index.php');
            exit();
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
            <div class="error-block"><?php echo $errors; ?></div>
            <div class="block-reg">
                <form action="login.php" method="POST" class="inputDB">
                    <label>
                        <input type="text" name="username" id="username" class="inscription-form" placeholder="Enter your username">
                    </label>
                    <label>
                        <input type="password" name="password" id="password" class="inscription-form" placeholder="Enter your password">
                    </label>
                    <label>
                        <button type="submit" name="submit" class="inscription-form button-submit">Login</button>
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