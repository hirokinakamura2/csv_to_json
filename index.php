<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $csv = $_FILES['csv'];
        $csvName = $csv['name'];
        $ext = substr($csvName, strrpos($csvName, '.') + 1);
        if($ext != 'csv'){
            $erMsg = '※選択したファイルはcsvファイルではありません<br>
                    もう一度選択してください。';

        }
        //var_dump($ext);
        //var_dump( mime_content_type($_FILES['upload_file']['tmp_name']));
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
</head>
<body>
    <header>
        <p>CSV TO JSON</p>
        <p>for DESCENTE</p>
    </header>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <?php if(isset($erMsg)){ ?>
                <div class="form-item erMsg">
                    <p><?php echo $erMsg; ?></p>
                </div>
            <?php } ?>
            <div class="form-item">
                <p>CSVデータを選択してください。</p>
                <input type="file" name="csv">
            </div>
            <div class="form-item">
                <input type="submit" value="変換">
            </div>
        </form>
    </div>
</body>
</html>
