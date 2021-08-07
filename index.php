<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light Box Example</title>

    <link rel="stylesheet" href="./src/css/fs-lightbox.css">
</head>
<body>
    <div style='width: 655px;margin: auto;'>

    <?php
        $lipsum = explode(" ", strip_tags(file_get_contents('https://loripsum.net/generate.php?p=1&l=long') ));


        for( $i=0; $i<10; $i++){
            $link = "https://dummyimage.com/800x600/000/fff&text=" . $lipsum[rand(0,50)];
            echo '"<img src="' . $link . '" class="fs-lightbox" />';
        }
    ?>
    </div>
    <script src="./src/js/fs-lightbox.js"></script>
</body>
</html>