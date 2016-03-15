<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="utf-8">
   <title>Orange Glasses</title>
   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
session_start();

$id = $_SESSION['id'];
?>

<div class="site">
<div class="login-name"><p><i class="fa fa-graduation-cap"></i> <span id="login-name" style="color: #FFA600"><?php echo "$id"; ?></span>さんでログイン</p></div>
<div class="rogo"><img src="img/Orange-logo.png" width="200px;"></div>

<div class="calender"><iframe src="gcalendar-wrapper.php?showTitle=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=info.orange.glasses%40gmail.com&amp;color=%231B887A&amp;src=ja.japanese%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=Asia%2FTokyo" style="border-width:0" width="600" height="600" frameborder="0" scrolling="no"></iframe></div>

<div class="app">
	<h1><i class="fa fa-angle-double-down"></i> APPLICATION</h1>
    <div class="applist">
	<ul>
    	<li><a href="#"><i class="fa fa-link"></i> 企画一覧</a></li>
        <li><a href="http://onwalker.daa.jp/orange-glasses/code-storage/code_list.php"><i class="fa fa-link"></i> コードストレージ</a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
    </ul>
    </div>
</div>

</div>
</body>
</html>