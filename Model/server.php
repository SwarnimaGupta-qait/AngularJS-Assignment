<?php 
$conn = new mysqli("localhost","root","","employee");
if($conn){
echo "Connected to database successfully.";
}

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$firstName=$request->FirstName;
$lastName=$request->SecondName;
$empId=$request->EmployeID;
$supervisorName=$request->SupervisorName;

$sql="INSERT INTO emp (firstName, lastName, empId, supervisorName) VALUES ('".$firstName."', '".$lastName."', '".$empId."', '".$supervisorName."')";


if($conn->query($sql) === TRUE){
	echo "Inserted record into the database.";
}

?>