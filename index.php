$servername = "localhost"; // データベースのホスト名
$username = "ユーザー名"; // データベースのユーザー名
$password = "パスワード"; // データベースのパスワード
$dbname = "データベース名"; // 使用するデータベース名

/ データベースに接続する
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続エラーのチェック
if ($conn->connect_error) {
    die("接続エラー: " . $conn->connect_error);
}

// ペットの名前を取得するSQLクエリ
$sql = "SELECT * FROM pets";

// クエリを実行して結果を取得
$result = $conn->query($sql);

// 結果を処理する（例：取得したペット名の表示）
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ペット名: " . $row["pet_name"] . "<br>";
    }
} else {
    echo "データがありません";
}
