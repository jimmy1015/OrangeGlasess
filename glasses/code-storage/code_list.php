<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="utf-8">
   <title>投稿確認</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="css/code_list.css" rel="stylesheet" type="text/css">
<link href="css/header.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
session_start();

$id = $_SESSION['id'];
?>


<div class="login-name"><p><i class="fa fa-graduation-cap"></i> <span id="login-name" style="color: #FFA600"><?php echo "$id"; ?></span>さんでログイン</p></div>
<div class="rogo"><a href="	http://onwalker.daa.jp/orange-glasses/main/main.php"><img src="img/Orange-logo.png"></a></div>

<div class="list">
<a href="new-code.php"><i class="fa fa-commenting-o"></i> 新しいコードを投稿する<br /></a>
<?php
 $link = mysql_connect('mysql105.phy.lolipop.lan', 'LAA0707699', 'sota1015');
 $db_selected = mysql_select_db('LAA0707699-account', $link);
 mysql_query('SET NAMES utf8', $link ); //この行を追加
 $result = mysql_query('SELECT * FROM code_storage');


    while ($row = mysql_fetch_assoc($result)) {

   $title = $row['title'];
   $code = $row['code'];
   $name = $row['name'];
   $time = $row['time'];
    $code_text = $row['code_text'];

    print '<form method="post" action="code_storage.php">';
    print '<input type="hidden" name="code_num" value="'. $code .'" />';
	
    echo $title; print '  <i class="fa fa-user"></i>';
    echo $name;   print '  <i class="fa fa-clock-o"></i>';
    //echo nl2br($code_text);
    echo $time;
    print '<input id="submit" type="submit" value="コードを表示する">
';

    print '<br />';
    print '</form>';
}

 
 
 mysql_close($link);



 ?>
 
 </div>
</body>
</html>