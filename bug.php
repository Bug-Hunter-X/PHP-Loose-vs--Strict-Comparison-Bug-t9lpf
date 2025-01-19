function foo($a, $b) {
  if ($a === $b) {
    return true; 
  } else {
    return false; 
  }
}

// This will return false, even though 0 == "0"
$result = foo(0, "0");
var_dump($result); // bool(false)