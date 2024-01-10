<?php
# DB接続してデータを取得する
try {
    $db = new PDO("mysql:dbname=mydb2;host=127.0.0.1;charset=utf8", "root", "");
} catch (PDOException $e) {
    echo "DB接続エラー" . $e->getMessage();
    die();
}

# クエリを実行してデータを取得
$result = $db->query("SELECT * FROM favorites");

# 結果を取得して表示
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<p>" . $row['favorite'] . "</p>"; # カラム名を変更
}
?>
