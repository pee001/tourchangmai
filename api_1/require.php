<?php

//include 'config.php';
//include_once 'config.php';
//require 'config.php';
require_once 'config.php';

//INSERT INTO [TABLE] (COLUMN1, COLUMN2, ...) VALUES ("[VALUE1]", "[VALUE2]",)
//mysql_query('INSERT INTO students (name, lastname) VALUES ("แดง", "นะ")');

//SELECT (COLUMN1, COLUMN2, ...) FROM [TABLE]

$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];


$query = mysql_query('SELECT id,tel, email FROM students WHERE id = "'. $id .'" AND name = "'. $name .'" AND lastname = "'. $lastname .'" ORDER BY id ASC')or die ('error');
//$arr->id, $arr->name, $arr->lastname
//mysql_fetch_object()

//$arr[0] = 1, $arr[1] = แดง, $arr[2] = นะ
//$arr[id] = 1, $arr[name], $arr[lastname] 
//mysql_fetch_array()

//$arr[0] = 1, $arr[1] = แดง, $arr[2] = นะ
//mysql_fetch_row()

//$arr[id] = 1, $arr[name], $arr[lastname] 

//$student = array();

while($arr = mysql_fetch_assoc($query))
{
	
	/*echo $arr['id'];
	echo ' ';
	echo $arr['name'];
	echo ' ';
	echo $arr['lastname'];
	echo '<br>';*/
	

	$id = $arr['id'];

	$student[$id]['id'] = $arr['id'];
	$student[$id]['tel'] = $arr['tel'];
	$student[$id]['email'] = $arr['email'];	
}

echo json_encode($student);

/*
$data[1]['id'] = '1';
$data[1]['name'] = 'A';
$data[1]['lastname'] = 'B';

$data[2]['id'] = '2';
$data[2]['name'] = 'AA';
$data[2]['lastname'] = 'BB';

echo json_encode($data);
*/
?>