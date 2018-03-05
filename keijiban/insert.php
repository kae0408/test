
<!doctype HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問合せ内容確認</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>

	<?php
	mb_internal_encoding("utf8");

	$pdo = new PDO("mysql:dbname=keiziban;host=localhost;","root","");
	$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
	values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

	header("Location:http://localhost/keijiban/index.php");
	?>


<div class="wp">
	<h1>お問合せ内容確認</h1>
<div class="confirm">
<p>お問い合わせありがとうございました<br>3営業日以内に担当者よりご連絡差し上げます。</p>
</div>
</div>
</body>
</html>
