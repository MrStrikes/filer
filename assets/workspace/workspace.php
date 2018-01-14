<!DOCTYPE html>
<html>
<head>
    <title>Filer</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../assets/styles.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="../../assets/assets.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    $data = [];
    error_reporting(E_ALL);
    require("../../assets/init.php");
    if(empty($_SESSION['username'])){
        header('Location: ../../index.php');
    }
    require("../../assets/header.php");
    $uploaddir = '../../assets/users/'.$_SESSION['username'].'/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        if(file_exists($_FILE['userfile']['name'])){
            for($i = 0; $i = file_exists($file); $i++){
                rename($file, $file.$i);
            }
        }
        echo "Le fichier est valide, et a été téléchargé avec succès.";
    } else {
        echo "Attaque potentielle par téléchargement de fichiers.";
    }
    ?>
    <main>
        <form enctype="multipart/form-data" action="workspace.php" method="post">
            <input type="hidden" name="MAX_FILE_SIZE" value="9000000000">
            Envoyez ce fichier : <input name="userfile" type="file">
            <input type="submit" value="Envoyer le fichier" name='submitFile'>
        </form>
        <?php
            $data = array_diff(scandir($uploaddir), array(".", "..",));
            foreach($data as $datas){
                $downloadFile = $uploaddir.$datas;
                echo '<a href="'.$downloadFile.'" class="downloadFiles '.substr($datas, 0, 2).'">'.$datas.'</a>
                <div class="tasks">
                    <form action="rename/rename.php" method="POST">
                        <input type="submit" name="ren" value="Rename">
                        <input type="hidden" value="../'.$downloadFile.' name="'.$datas.'">
                    </form>
                    <form action="delete/delete.php" method="POST">
                        <input type="submit" name="del" value="Delete">
                        <input type="hidden" value="../'.$downloadFile.'" name="hiddenFile">
                    </form>
                </div>
                <br>';
            }
        ?>
    </main>
    <?php
    require("../../assets/footer.php");
    ?>
</body> 
</html>