<?php

function inverse($x)
{
  if (!$x) {
    throw new DivisionByZeroError();
    // throw new Exception();
  }

  return 1 / $x;
}

try {
  echo inverse(5);
  echo inverse(0);
  echo inverse(5);
} catch (Error $e) {
  //  catch (Exception $e) {}
  // print_r($e);
  echo 'Caught Exception', $e->getMessage();
}

echo 'ngops';
