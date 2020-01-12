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
	//alert(data);
  });
});
</script>
</head>
	<body>
	<dl id="wrap"></dl>
	  <script type="text/javascript">
	  //json形式で全件出力
		$(function(){
		  $.getJSON('json_convert.php', 
			  function(data){
				console.log(data.pop());
				  var h = 
						'<dt>'
						+ data.pop().id
						+ '</dt>'
						+ '<dd>' + "keyword:"
						+ data.pop().keyword
						+ '</dd>'
						+ '<dd>' + "件数:"
						+ data.pop().kensu
						+ '</dd>';
				  $("dl#wrap").append(h);
				}
		  );
		});
	  </script>
	</body>
</html>