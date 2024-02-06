<?php


$allowedExt = ['png', 'jpg', 'jpeg'];
if (isset($_POST['submit'])) {
  if (empty($_FILES['upload']['name'])) {
    $message = '<p style="color: red;">Please select an image</p>';
  } else {
    $fileName = $_FILES['upload']['name'];
    print_r($_FILES['upload']['name']);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php echo $message; ?>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="upload">
    <input type="submit" value="Submit" name="submit">
  </form>
</body>

</html>