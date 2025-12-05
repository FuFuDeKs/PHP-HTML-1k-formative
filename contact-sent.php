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
            <a href="about.php">About.php</a>
        </li>
        <li>
            <a href="contact.php">contact.php</a>
        </li>
        <li>
            <a href="index.html">index.html</a>
        </li>
    </ul>
    <?php
        echo "Ziņa tika aizsutīta.";

        echo " Jusu vards: ";
        echo $_POST["name"];

        echo ". Jusu pasts: ";
        echo $_POST["email"];

        echo ". Un Jusu ziņa: ";
        echo $_POST["ziņa"];
    ?>
</body>
</html>