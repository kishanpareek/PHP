<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
  <!-- The form will submit the data to the current PHP script (the same file) when the submit button is clicked -->

  username:<br>
  <input type="text" name="username">
  <!-- Text input field where the user can enter their username -->

  <input type="submit">
  <!-- Submit button to trigger the form submission -->
</form>

<?php


/*PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.

The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. In this example, we point to this file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_REQUEST to collect the value of the input field:*/
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_REQUEST['username'];
  if (empty($username)){
    echo"Name is empty";
  } else{
    echo $username;
  }
}

?>

</body>
</html>















