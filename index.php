<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
  <!-- The form will submit the data to the current PHP script (the same file) when the submit button is clicked -->

  username:<br>
  <input type="text" name="username">
  <!-- Text input field where the user can enter their username -->

  <input type="submit">
  <!-- Submit button to trigger the form submission -->
</form>

</body>
</html>















