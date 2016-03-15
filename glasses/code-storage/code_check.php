<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="utf-8">
   <title>投稿確認</title>


</head>
<body>

<?php
   if($name='' || $title='' || $code_text='') {
      echo "<p>必須項目が入力されていません</p>";
   } else {/*


   $str = $_POST['code_text'];
   htmlspecialchars($str, ENT_QUOTES, ‘UTF-8′);



   $name = $_POST['name'];
   $title = $_POST['title'];
   $code_text = $_POST['code_text'];
   $comment = $_POST['comment'];

   $name = htmlspecialchars($name);
   $title = htmlspecialchars($title);
   htmlspecialchars($code_text, ENT_QUOTES, 'UTF-8');
   //$code_text = htmlspecialchars($code_text);
   $comment = htmlspecialchars($comment);

   
   echo $name;print '<br />';
   echo $title;print '<br />';
   //echo nl2br($code_text);print '<br />';
   echo nl2br(htmlspecialchars($str));print '<br />';
   echo $comment;print '<br />';


   $link = mysql_connect('mysql105.phy.lolipop.lan', 'LAA0707699', 'sota1015');
 $db_selected = mysql_select_db('LAA0707699-account', $link);
 mysql_query('SET NAMES utf8', $link ); //この行を追加
 $result = mysql_query('SELECT * FROM code_storage');

 $sql = "INSERT INTO code_storage (name, code_text, title, comment) VALUES ('$name', '$code_text', '$title', '$comment')";
$result_flag = mysql_query($sql);

if (!$result_flag) {
    die('INSERTクエリーが失敗しました。'.mysql_error());
}else {
   print '投稿が完了しました';
}


   }*/

   function quote_smart($value)
      {  
       // 数値以外をクオートする
         if (!is_numeric($value)) {
             $value = "'" . mysql_real_escape_string($value) . "'";
         }
         return $value;
      }

      $link = mysql_connect('mysql105.phy.lolipop.lan', 'LAA0707699', 'sota1015');
      $db_selected = mysql_select_db('LAA0707699-account', $link);
      mysql_set_charset('utf8');

      $name = $_POST['name'];
      $edit_ID = $_POST['edit_ID'];
      $title = $_POST['title'];
      $code_text = $_POST['code_text']; 
      $comment = $_POST['comment'];

      $name = htmlspecialchars($name);
      $title = htmlspecialchars($title);
      $code_text = htmlspecialchars($code_text);
      $comment = htmlspecialchars($comment);

      //$sql = sprintf("UPDATE code_storage SET name = %s, code_text = %s, title = %s, comment = %s WHERE code = %s"
      //   , quote_smart($name),quote_smart("$code_text"),quote_smart($title),quote_smart($comment), quote_smart($edit_ID));

      $sql = "INSERT INTO shouhin (name, code_text, title, comment) VALUES ('$name', '$code_text', "$title", '$comment')";
         $result_flag = mysql_query($sql);

      $result_flag = mysql_query($sql);

         if (!$result_flag) {
            die('UPDATEクエリーが失敗しました。'.mysql_error());
         }else {
            print '編集完了';
         }

         $close_flag = mysql_close($link);

?>
</body>
</html>