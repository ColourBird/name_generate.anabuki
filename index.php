<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device - width, initial - scale = 1, shrink-to-fit = no">  
        <!-- bootstrap CSS -->  
        <link rel="stylesheet" href="css/style.css">
        <title></title>
    </head>
    <body>
        <main>

        <?php
        #DB接続
        try{
            $db = new PDO("mysql:dbname=mydb2;host=127.0.0.1;charset=utf8","root",""); 
        }catch (PDOException $e) {
            echo "DB接続エラー".$e->getMessage();
            die();
        };
        ?>
        <form>
        
        <input type="submit" value="登録" formaction="http://localhost/nameseisei/PHP_INSERT.php">

       </form>
       </main>
    </body>
</html>

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

