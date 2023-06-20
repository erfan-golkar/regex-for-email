<?php
if (isset($_POST["email"]) && $_POST["email"] !== "") {
    $pattern = "/^[\w\-\.]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,6}$/";
    $is_match = preg_match($pattern, $_POST["email"]);
    if ($is_match === 1) {
      ?><script>alert("Valid Email!")</script><?php
    } else {
    ?><script>alert("Invalid Email!")</script><?php
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>regEx for email</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="index.php" method="post">
    <fieldset>
      <legend>regEx for Email</legend>
      <input name="email" type="text" placeholder="Your Email">
      <button type="submit">Submit</button>
    </fieldset>
  </form>
</body>
</html>