```php
<?php
$myArray = ['a' => 1, 'b' => 2];

// Check if the key exists before accessing it
if (isset($myArray['c'])) {
  echo $myArray['c'] + 5; 
} else {
  echo "Key 'c' does not exist!";
}

//Alternative using array_key_exists
if(array_key_exists('d', $myArray)){
    $result = $myArray['d'] + 10; 
echo $result;
}else{
    echo "Key 'd' does not exist!";
}

// Safe string concatenation using the null coalescing operator
$greeting = "Hello, " . ($myArray['e'] ?? ''); 
echo $greeting;

?>
```