<?php
  if($_SESSION["kanri_flg"]!="1"){
?>
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="select.php">データ一覧</a>　
      <a class="navbar-brand" href="logout.php">ログアウト</a>
      </div>
    </div>
  </nav>
</header>
<?php
  }else{
?>
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="bm_index.php">ブックマーク登録</a>　
        <a class="navbar-brand" href="bm_select.php">ブックマーク一覧</a>　
        <a class="navbar-brand" href="index.php">ユーザー登録</a>　
        <a class="navbar-brand" href="select.php">ユーザー一覧</a>　
        <a class="navbar-brand" href="logout.php">ログアウト</a>
      </div>
    </div>
  </nav>
  <div>ようこそ <?php echo $_SESSION["name"] ?> さん</div>
</header>
<?php
  }
?>
