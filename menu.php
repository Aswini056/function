
<?php

include 'connection.php';

header("Content-Type: application/json; charset=UTF-8");

$db = new Database();
$pdo = $db->connection();



$sql = "select * from employee_master where rfid_card IN('0010549163','0011008270'); " ;


 foreach( $pdo->query($sql, PDO::FETCH_ASSOC) as $row)
 {

 	//var_dump($row);
     $result[] = $row;

 }

echo json_encode($result)


 
 
//$rfid = '0010549163';
//$a_rfid = '7549337' ;

//var_dump($row);
 	//$fetch['employee_master'][] = $row;

 	 	//$emp_code = $row['emp_code'];
 	//$emp_name = $row['emp_name'];
 	//$category_id = $row['category_id'];
 	//$veg_nonveg = $row['veg_nonveg'];
 	//$image = $row['image'];
 	//$rfid_card = $row['rfid_card'];

 	//echo $emp_code.$emp_name.$category_id.$veg_nonveg.$image.$rfid_card ;
?>



