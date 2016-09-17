<?php
//0.外部ファイル読み込み
include("functions.php");

//1.  DB接続します
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  queryError($stmt);
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<tr>';
    $view .= '<td><a href="detail.php?id='.$result["id"].'">'.$result["indate"].'</a></td>';
    $view .= '<td><a href="detail.php?id='.$result["id"].'">'.$result["book_name"].'</a></td>';
    $view .= '<td><a href="detail.php?id='.$result["id"].'">'.$result["book_url"].'</a></td>';
    $view .= '<td><a href="delete.php?id='.$result["id"].'">[削除]</a></td>';
    $view .= '</tr>';
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>フリーアンケート表示</title>
  <link rel="stylesheet" href="css/range.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
  <!-- Head[Start] -->
  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">データ登録</a>
        </div>
      </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
  <div>
    <table border="1">
      <thead>
        <tr>
          <th>登録日</th>
          <th>書籍名</th>
          <th>書籍URL</th>
          <th>削除</th>
        </tr>
      </thead>
      <?=$view?>
    </table>
  </div>
</div>
<!-- Main[End] -->

</body>
</html>
