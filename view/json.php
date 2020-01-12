<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(function(){
	//josnファイルを入力される
  $.getJSON('json_convert.php' , function(data) {
    console.log(data);
  });
});
</script>
</head>
	<body>
	
	
	<dl id="wrap">
	  <script type="text/javascript">
	  //#　　#RewriteRule ^.*$ index.phpの場合
	  //json形式で全件出力
		$(function(){
		  $.getJSON('./view/json_convert.php', function(sample_list){
			for(var i in sample_list){
			  var h = 
					'<dt>'
					+ sample_list[i].id
					+ '</dt>'
					
					+ '<dd>' + "url:"
					+'<a href=/model_db/view/index_details.php/?id='
					+ sample_list[i].id+'>'
					+"リンク"
					+'</a>'
					+ '</dd>'					
					
					+ '<dd>' + "keyword:"
					+ sample_list[i].keyword
					+ '</dd>'
					
					+ '<dd>' + "件数:"
					+ sample_list[i].kensu
					+ '</dd>'
					
					+ '<dd>' + "css:"
					+ sample_list[i].css
					+ '</dd>';
			  $("dl#wrap").append(h);
			}
		  });
		});
	  </script>
	</dl>
	
	
	<dl id="wrap">
	  <script type="text/javascript">
	  //#　　#RewriteRule ^.*$ index.phpの場合
	  //json形式で全件出力
		$(function(){
		  $.getJSON('json_convert.php', function(sample_list){
			for(var i in sample_list){
			  var h = 
					'<dt>'
					+ sample_list[i].id
					+ '</dt>'
					
					+ '<dd>' + "url:"
					+'<a href=/model_db/view/index_details.php/?id='
					+ sample_list[i].id+'>'
					+"リンク"
					+'</a>'
					+ '</dd>'					
					
					+ '<dd>' + "keyword:"
					+ sample_list[i].keyword
					+ '</dd>'
					
					+ '<dd>' + "件数:"
					+ sample_list[i].kensu
					+ '</dd>'
					
					+ '<dd>' + "css:"
					+ sample_list[i].css
					+ '</dd>';
			  $("dl#wrap").append(h);
			}
		  });
		});
	  </script>
	</dl>
	
	
	
</body>
</html>