<?php

$allowedExt = ['png', 'jpg', 'jpeg'];

if (isset($_POST['submit'])) {
  if (!empty($_FILES['upload']['name'])) {
    $fileName = $_FILES['upload']['name'];
    $fileTmp = $_FILES['upload']['tmp_name'];

    // $fileExt = explode('.', $fileName);
    // $fileExt = strtolower(end($fileExt));
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $targetDir = "uploads/$fileName";

    if (in_array($fileExt, $allowedExt)) {
      move_uploaded_file($fileTmp, $targetDir);
      $message = '<p style="color: green;">File uploaded</p>';
    } else {
      $message = '<p style="color: red;">Invalid file type. Please upload PNG, JPG, or JPEG files only</p>';
    }
  } else {
    $message = '<p style="color: red;">Please select an image</p>';
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
  <?php echo $message ?? null ?>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="upload">
    <input type="submit" value="Submit" name="submit">
  </form>
</body>

</html>