<?php
echo "perl";
$id = $_GET["id"];
echo "query_string_number:".$id;
include_once "./../class/indexClass.php";

$obj=new index();
$select_querry = $obj->select_detail($id);
foreach($select_querry as $value){
	$result.="<hr>";
	$result.="ID:".$value[id]."<br>";
	$result.="keyword:".$value[keyword]."<br>";
	$result.="kensu:".$value[kensu]."<hr>";
}
echo $result;
?>