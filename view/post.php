<?php echo "post_test";?>
<?php
  $server  = "example.com";  // 送信したいサーバのアドレス
  $host    = "localhost";
  $port    = 80;             // HTTPなので80
  $timeout = 30;             // 接続に失敗した場合の待ち時間

  $sock = fsockopen($host, $port, $errno, $errstr, $timeout);  // サーバに接続する
  if($sock === FALSE){    // 接続に失敗したらメッセージを表示し、終了させる
    echo "SOCK OPEN ERROR<br>";
    exit(-1);
  }

  // HTTPヘッダ部分の送信になる。
  fwrite($sock, "GET http://" . $server . "/index.php?id=1&data=test HTTP/1.0\r\n");
  // ヘッダの終了を通知
  fwrite($sock, "\r\n\r\n");

  fclose($sock);

?>


<?php

// GETとは違い直接リクエスト内容はURLに含めない
$server   = "http://example.com/index.php";
$host    = "localhost";
$port    = 80;
$timeout = 30;
// 送信したい内容をGETと同じくname=value&name=valueの形式で指定する。
$data    = "id=1&data=test";

  $sock = fsockopen($host, 80, $errno, $errstr, 60);
  if($sock === FALSE){
    echo "fsockopen error";
    return (-1);
  }


  fwrite($sock, "POST " . $server . " HTTP/1.0\r\n");
  // おまじないのような物、POSTで送信する為に必要なヘッダ
  fwrite($sock, "Content-Type: application/x-www-form-urlencoded\r\n");
  // 送信する内容のデータ長を送る
  fwrite($sock, "Content-Length: " . strlen($data) . "\r\n");
  // ヘッダの終了を通知
  fwrite($sock, "\r\n");
  // 内容の送信
  fwrite($sock, $data);
  // 内容の終了を通知
  fwrite($sock, "\r\n");

  fclose($sock);

?>
