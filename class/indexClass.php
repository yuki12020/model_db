<?php
class index extends ModelBase
{
	public function perl(){
		$sql .="select * from perl";
		$sql .=" where true ";		
		#クエリの実行 #$this->db　はModelBaseからの変数＄ｄｂを引き継いでいる
		$info = $this->db->query($sql);	
		//$info= $db->query($sql);
		#データベースのデータを全て取得fetchAll(PDO::FETCH_ASSOC);
		#データベースのデータを1行取得fetchColumn();
		$results = $info->fetchAll(PDO::FETCH_ASSOC);	
		return $results;
	}
	
	public function select_detail($id){
		$sql="select * from perl where id=".$id;
		$info= $this->db->query($sql);
		
		$results= $info->fetchAll(PDO::FETCH_ASSOC);
		return $results;		
	}	
	
}
?>