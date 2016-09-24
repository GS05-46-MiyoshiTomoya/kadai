<?php
session_start();
//0.外部ファイル読み込み
include("functions.php");

ssidCheck();

//1.  DB接続します
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_an_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  queryError($stmt);
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<tr>';
    $view .= '<td><a href="detail.php?id='.$result["id"].'">';
    $view .= h($result["name"]);
    $view .= '</a></td>';
    $view .= '<td><a href="detail.php?id='.$result["id"].'">';
    $view .= "[".h($result["indate"])."]";
    $view .= '</a></td>';
    $view .= '<td><a href="delete.php?id='.$result["id"].'">';
    $view .= '[削除]';
    $view .= '</a><td>';
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
  <?php
  session_start();
  include("menu.php");
  ?>
  <!-- Head[End] -->

  <!-- Main[Start] -->
  <div class="container jumbotron">
    <table border="1">
      <thead>
        <tr>
          <th>ユーザ名</th>
          <th>登録日</th>
          <th>削除</th>
        </tr>
      </thead>
      <?=$view?>
    </table>
  </div>
  <!-- Main[End] -->

</body>
</html>
