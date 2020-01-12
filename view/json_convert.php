<?php
//Model db接続クラスの読み込み
include_once "must_include.php";
//routing　一階層上のindex.phpで読み込むときは階層がずれる
// include('./model/model.php');
// include('./class/indexClass.php');

$obj=new index();
$select_querry = $obj->perl();

#連想配列をjsonに変更　日本語をエスケープして変換する
$json=json_encode($select_querry, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
echo $json;
//json形式にする　非常に重要な構文↓
header("Content-Type: application/json");
?>
<?php
// $box = array();
// foreach($select_querry as $key =>$row){
	// $box[] = array(
	// 'id'	  => (int)$row['id'],
	// 'keyword' => $row['keyword'],
	// 'kensu'   => $row['kensu'],
	// 'css'     => $row['css']
	// );
// }
// $json = json_encode($box, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
//echo $json;
