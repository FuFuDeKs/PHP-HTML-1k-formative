<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <a href="index.html">index.html</a>
        </li>
        <li>
            <a href="contact.php">contact.php</a>
        </li>
    </ul>
    <?php
        $indexedArray = [
            "Lorem ipsum dolor sit amet.",
            "Lorem ipsum dolor sit amet, consectetur adipisicing.",
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iusto."
        ];
        foreach($indexedArray as $array){
            echo "<p>" . $array . "</p>";

        }
    ?>
</body>
</html>