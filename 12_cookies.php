<?php

setcookie('name', 'abf', time() + 86400);

if (isset($_COOKIE)) {
  echo $_COOKIE['name'];
}
// setcookie('name', '');
