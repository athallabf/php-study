<?php



if (isset($_POST['submit'])) {
  echo filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
  echo htmlspecialchars($_POST["age"]);
}

?>

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