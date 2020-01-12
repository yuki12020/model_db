<?php
//database.confファイルの読み込みを行う　　配列で返す
$db_conf = parse_ini_file("database.conf");
//ModelクラスのsetConnectionInfo関数に$db_confの配列を渡す。
ModelBase::setdb_conf($db_conf);

class ModelBase
{
    private static $db_conf;
    protected $db;
    protected $name;
	
	//コンストラクタはインスタンス作成時に関数（initDb()）実行
    public function __construct()
    {
        $this->initDb();
    }

    public function initDb()
    {
		try{
			$dsn= "mysql:host=".self::$db_conf['host'].
			  ";port=".self::$db_conf['port'].
			  ";dbname=".self::$db_conf['db'];
			$options = array(
				PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"
			);
			
			$this->db = new PDO(
			$dsn, 
			self::$db_conf['user'], 
			self::$db_conf['password'],
			$options);
		}catch(PDOException $e){
			//エラー表示 確認
			print "error:".$e->getMessage()."</br>";
			die();			
		}	
    }
	
	//ModelBase::setdb_conf($db_conf); $db_confにポート番号などの記述が含まれている
    public static function setdb_conf($db_conf)
    {
        self::$db_conf = $db_conf;
    }
}
?>