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
            <a href="about.php">about.php</a>
        </li>
    </ul>
    <form action="contact-sent.php" method="post" class="form-example">
  <div class="form-example">
    <label for="name">Enter your name: </label>
    <input type="text" name="name" id="name" required />
  </div>
  <div class="form-example">
    <label for="email">Enter your email: </label>
    <input type="text" name="email" id="email" required />
  </div>
  <div>
    <textarea id="ziņa" name="ziņa" rows="5" cols="33">
    rakstiet jusu ziņu šeit...
    </textarea>
  </div>
  <div class="form-example">
    <input type="submit" value="Submit" />
  </div>
</form>
</body>
</html>