<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <?php
  mb_internal_encoding("utf8");
  $pdo = new PDO("mysql:dbname=keiziban;host=localhost;","root","");
  $stmt = $pdo->query("select * from 4each_keijiban");



?>


<div class="wp">
<h1>入力フォーム</h1>
<form method="post" action="insert.php">
<div>
<label>ハンドルネーム</label>
<br>
<input type ="text" class="text" size="35" name="handlename">
</div>


<div>
<label>タイトル</label>
<br>
<input type ="text" class="text" size="35" name="title">
</div>


<div>
<label>コメント</label>
<br>
<textarea cols="35" rows="7" class="textarea" name="comments"></textarea>
</div>


<div>
<input type ="submit" class="submit" value="送信する">
</div>

</form>
</div>


<?php
while ($row = $stmt->fetch()){

echo "<div class='kiji mt30'>";
echo "<h3>".$row['title']."</h3>";
echo "<div class='contents'>";
echo $row['comments'];
echo "<div class='handlename'>post by ".$row['comments']."</div>";
echo "</div>";
echo "</div>";
}

?>
</body>
</html>
