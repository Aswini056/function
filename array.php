<?Php

$array = array(1, 2, 3, 4, 5,6);
print_r($array);


$array[] = 6;
print_r($array);



// Multidimensional Array

$student = array (
  array("Aswini",22,18),
  array("Anusha",15,13),
  array("Supraja",5,2),
  array("Himaja",17,15)
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  //echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$student[$row][$col]."</li>";
  }
  //echo "</ul>";
}



?>
