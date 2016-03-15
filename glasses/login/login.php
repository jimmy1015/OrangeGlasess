<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="utf-8">
   <title>ログイン認証</title>
</head>
<body>
<?php
//フォームの内容をPOSTで取得して、変数に格納
$id = $_POST['id'];
$pass = $_POST['pass'];
 
//emptyでフォームの内容が空かどうかを調べる
if(empty($id)){
   if(empty($pass)){
      //空の場合はheader関数でlogin.htmlにリダイレクト
      header('location: login.html');
      exit();
   }
}


$link = mysql_connect('mysql105.phy.lolipop.lan', 'LAA0707699', 'sota1015');
/*if (!$link) {
    die('接続失敗です。'.mysql_error());
}else{
	print'<p>mySQLへの接続成功！</p>';
}*/



$db_selected = mysql_select_db('LAA0707699-account', $link);
/*if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}else{
	print'<p>データベース選択成功！</p>';
}*/

$result = mysql_query('SELECT * FROM account');
/*if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}else{
	print'<p>テーブルの取得成功！</p>';
	
}*/

$result = mysql_query('SELECT id, code, pass from account');
while ($row = mysql_fetch_assoc($result)) {
	
	
	if($row['id'] == $id) {
		$master_pass = $row['pass'];
		}
}


mysql_close($link);


if($pass == $master_pass) {
	session_start();

	$_SESSION['id'] = $_POST['id'];
	header('location: http://onwalker.daa.jp/orange-glasses/main/main.php'); 
	
}else{
	header('location: login.html');
}






?>
</body>
</html>