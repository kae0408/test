<!doctype HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問合せ内容確認</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>

<div class="wp">
	<h1>お問合せ内容確認</h1>
<div class="confirm">
	<p>お問い合わせ内容はこちらでよろしいでしょうか？
		<br>よろしければ「送信する」ボタンを押して下さい。
	</p>
	<p>名前
		<br>
		<?php echo $_POST['name'];?>
	</p>

	<p>メールアドレス
		<br>
		<?php echo $_POST['mail'];?>
	</p>

	<p>年齢
		<br>
		<?php echo $_POST['comments'];?>
	</p>
	<div class="btnwp">
	<form action="index.html">
		<input type="submit" class="button1 mr" value="戻って修正する"/>
	</form>

	<form action="insert.php" method="post">
		<input type="submit" class="button2" value="送信する"/>
		<input type="hidden" value="<?php echo $_POST['name'];?>" name="">
		<input type="hidden" value="<?php echo $_POST['mail'];?>" name="">
		<input type="hidden" value="<?php echo $_POST['age'];?>" name="">
		<input type="hidden" value="<?php echo $_POST['comments'];?>" name="">
	</form>
  </div>
</div>
</div>
</body>
</html>
