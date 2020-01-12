<?php
//Model db接続クラスの読み込み
//routing　一階層上のindex.phpで読み込むときは階層がずれる
include('./model/model.php');
include('./class/indexClass.php');

$obj=new index();
$select_querry = $obj->perl();


?>
<?php
//3項演算子
function kensu($kensu){
	$msg= ($kensu > 10000)? "(↑)10000以上" : "(↓)10000以下";	
	return $msg;
}

foreach($select_querry as $key =>$value){
	//var_dump((int)$value["kensu"]);
	
	$smt.="<a href="."./index_details.php?id=".
	htmlspecialchars($value["id"],ENT_QUOTES,'UTF-8').">"
	.$value["keyword"]."</a><br>";
	$smt.= "id:".$value["id"]."<br>";
	
	//3項演算子の関数の埋め込み　キャスト処理してやらないと$vaulue["kensu"]は文字列の為
	$smt.= "kensu:".kensu((int)$value["kensu"])."<br>"; //return 返り値が$smtに格納される
	
	$smt.= "件数:".$value["kensu"]."<br>";
	$smt.= "name:".$value["keyword"]."<br>";
	$smt.= "<hr>";	
}
echo $smt;
?>