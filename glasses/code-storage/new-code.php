<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="utf-8">
   <title>コード投稿</title>


<link href="css/header.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="css/new-code.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
session_start();

$id = $_SESSION['id'];
?>


<div class="login-name"><p><i class="fa fa-graduation-cap"></i> <span id="login-name" style="color: #FFA600"><?php echo "$id"; ?></span>さんでログイン</p></div>
<div class="rogo"><a href="	http://onwalker.daa.jp/orange-glasses/main/main.php"><img src="img/Orange-logo.png"></a></div>


<div class="form"><br />
   <form method="POST" action="code_check.php">
         <input type="text" name="name" placeholder=" 名前を入力" value="<?php echo $id; ?>">
         <br> 
          <input type="text" name="title" placeholder=" タイトルを入力"> 
         <br>
         <p><i class="fa fa-pencil"></i> コード入力</p>
         <textarea name="code_text" cols="200" rows="50">Plese letter code.</textarea>
         <br>
         <input type="text" name="comment" placeholder=" コメントを入力">
         <br>
         <input id="submit-button" type="submit" value="投稿">
      </form>
</div>
</body>
</html>