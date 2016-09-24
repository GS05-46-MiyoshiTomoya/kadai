<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

  <!-- Head[Start] -->
  <?php
    session_start();
    include("menu.php");
  ?>
  <!-- Head[End] -->

  <!-- Main[Start] -->
  <form method="post" action="insert.php">
    <div class="jumbotron">
     <fieldset>
      <legend>フリーアンケート</legend>
      <label>書籍名<input type="text" name="book_name" value=""></label><br>
      <label>書籍URL<input type="text" name="book_url" value=""></label><br>
      <label>書籍コメント<input type="text" name="book_cmt" value=""></label><br>
      <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
