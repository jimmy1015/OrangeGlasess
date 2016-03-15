<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="utf-8">
   <title>コードストレージ</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>

<?php

   
   if($_POST[edit_action] != "1") {

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
      $result = mysql_query('SELECT * FROM code_storage');

      session_start();
      $edit_ID = $_SESSION['edit_code'];

      $sql = sprintf("DELETE FROM code_storage WHERE code = %s"
         , quote_smart($edit_ID));

      $result_flag = mysql_query($sql);

      if (!$result_flag) {
         die('DELETEクエリーが失敗しました。'.mysql_error());
      }else {
         print '削除完了';
      }

      $close_flag = mysql_close($link);
      //$result = "DELETE FROM code_storage WHERE `code` <=> '$edit_code'");
        
      

   }else {

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

      $sql = sprintf("UPDATE code_storage SET name = %s, code_text = %s, title = %s, comment = %s WHERE code = %s"
         , quote_smart($name),quote_smart("$code_text"),quote_smart($title),quote_smart($comment), quote_smart($edit_ID));

      $result_flag = mysql_query($sql);

         if (!$result_flag) {
            die('UPDATEクエリーが失敗しました。'.mysql_error());
         }else {
            print '編集完了';
         }

         $close_flag = mysql_close($link);
      
   }
?>






  
</div>
</body>
</html>