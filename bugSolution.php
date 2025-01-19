function foo($a, $b) {
  if ($a == $b) { // Use loose comparison here
    return true; 
  } else {
    return false; 
  }
}

// This will now return true
$result = foo(0, "0");
var_dump($result); // bool(true)

//Alternatively, be explicit about type checking if needed
if (is_numeric($a) && is_numeric($b) && $a == $b) { ... }