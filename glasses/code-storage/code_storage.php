<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="utf-8">
   <title>コードストレージ</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="css/header.css" rel="stylesheet" type="text/css">
<link href="css/code_storage.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
   
    $link = mysql_connect('mysql105.phy.lolipop.lan', 'LAA0707699', 'sota1015');
   $db_selected = mysql_select_db('LAA0707699-account', $link);
   mysql_query('SET NAMES utf8', $link ); //この行を追加
   $result = mysql_query('SELECT * FROM code_storage');

   $post_code = $_POST['code_num'];

   while ($row = mysql_fetch_assoc($result)) {
   
   
   if($row['code'] == $post_code) {
      $master_pass = $row['pass'];

      $title = $row['title'];
      $code = $row['code'];
      $name = $row['name'];
      $time = $row['time'];
      $code_text = $row['code_text'];
      $comment = $row['comment'];

      }
   }

   //$code_text = htmlspecialchars($code_text);
   session_start();
   $_SESSION['edit_code'] = $code;
   $_SESSION['edit_title'] = $title;
   $_SESSION['edit_text'] = $code_text;
   $_SESSION['editor'] = $name;
   $_SESSION['comment'] = $comment;

   mysql_close($link);

?>

<div class="site">
<?php
session_start();

$id = $_SESSION['id'];
?>


<div class="login-name"><p><i class="fa fa-graduation-cap"></i> <span id="login-name" style="color: #FFA600"><?php echo "$id"; ?></span>さんでログイン</p></div>
<div class="rogo"><a href="	http://onwalker.daa.jp/orange-glasses/main/main.php"><img src="img/Orange-logo.png" width="200px"></a></div>

<div class="main">
   <p>編集者：<?php echo $name; ?></p>
   <p><?php echo $title; ?> <i class="fa fa-clock-o"></i><?php echo $time; ?></p>
   <p id="border"><?php echo nl2br($code_text); ?></p>
   <a href="code_edit.php">コードを編集する</a>
</div>   
 
</div>
</body>
</html>