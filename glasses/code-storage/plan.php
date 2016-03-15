<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>plan</title>
<link href="plan.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

<div class="title">
 <h1><i class="fa fa-angle-double-down"></i> 企画一覧</h1>
    <div class="list">
    <?php
 $link = mysql_connect('mysql105.phy.lolipop.lan', 'LAA0707699', 'sota1015');
 $db_selected = mysql_select_db('LAA0707699-account', $link);
 $result = mysql_query('SELECT * FROM plan_list');
 
if (!$link) {
    die('接続失敗です。'.mysql_error());
}else{
	print'<p>mySQLへの接続成功！</p>';
}
 
 
 print '<p>test</p>';
    while ($row = mysql_fetch_assoc($result)) {

 	$master_passs = $row['title'];
    $master_pass = $row['url'];
    echo '<a href="' . $master_pass . '">'. $master_passs .'</a>';
    print '<br />'; 
}

 
 
 mysql_close($link);



 ?>
    </div>
</div>

</body>
</html>