<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="utf-8">
   <title>コードストレージ</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>

<?php
   session_start();
   $code = $_SESSION['edit_code'];
   $title = $_SESSION['edit_title'];
   $code_text = $_SESSION['edit_text'];
   $name = $_SESSION['editor'];
?>

<div class="site">

   <form method="POST" action="code_edit_end.php">
         <input type="hidden" name="edit_ID" value="<?php echo $code; ?>" />
         <input type="hidden" name="edit_action" value="1" />
         <input type="text" name="name" placeholder=" 名前を入力" value="<?php echo "$name"; ?>">
         <br> 
          <input type="text" name="title" placeholder=" タイトルを入力" value="<?php echo "$title"; ?>"> 
         <br>
         コードを入力
         <textarea name="code_text" cols="50" rows="5"><?php echo "$code_text"; ?></textarea>
         <br>
         <input type="text" name="comment" placeholder=" コメントを入力" value="<?php echo "$comment"; ?>">
         <br>
         <input id="submit-button" type="submit" value="編集完了">
      </form>

      <a href="code_edit_end.php">このコードを削除する</a>
</div>
</body>
</html>