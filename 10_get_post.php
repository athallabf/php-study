<?php



if (isset($_POST['submit'])) {
  echo $_POST["name"];
  echo $_POST["age"];
}
echo $_SERVER["PHP_SELF"];
echo "/php-learn/11_sanitaze_input.php"

?>

<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?name=ngops">click me</a>


<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
  <div>
    <label for="name">name</label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="age">age</label>
    <input type="text" name="age">
  </div>
  <input type="submit" value="submit" name="submit">
</form>