<?php
#ルーティング
if(empty($_SERVER['REQUEST_URI'])) {
    exit;
}
// URLをスラッシュで分解
$array_parse_uri = explode('/', $_SERVER['REQUEST_URI']);
$last_uri = end($array_parse_uri); // 最後の文字を取り出す
//var_dump($last_uri);
$call = substr($last_uri, 0, strcspn($last_uri,'?'));   // クエリ文字列を外す
//var_dump($call);


// view/配下に同名のPHPファイルがないか探す。
if(file_exists('./view/' . $call . '.php')){
	echo $call;
	// 見つかったファイルをインクルードしてコントローラーをインスタンス化
    include('./view/' . $call . '.php');
	exit;
}else if($_SERVER['SCRIPT_NAME'] === "/model_db/index.php"){
	#初期表示　urlが　/model_db/ の時表示するページ　
	
	include('./view/json.php');
	
	#こっちはOK　階層に注意
	#include('./view/top.php');
	exit;
}else{
	// ファイルがなければ404エラー
    header("HTTP/1.0 404 Not Found");
	exit;
}
