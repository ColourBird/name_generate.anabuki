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
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['name'])) {
            $category = $_GET['name'];

            try {
                $db = new PDO("mysql:dbname=mydb2;host=127.0.0.1;charset=utf8", "root", ""); 
            } catch (PDOException $e) {
                echo "DB接続エラー".$e->getMessage();
                die();
            };

            switch ($category) {
                case 'pet':
                    $sql = "SELECT name FROM pets ORDER BY RAND() LIMIT 1";
                    break;
                case 'people':
                    $sql = "SELECT family, last FROM people ORDER BY RAND() LIMIT 1";
                    break;
                case 'car':
                    $sql = "SELECT company, car FROM cars ORDER BY RAND() LIMIT 1";
                    break;
                default:
                    echo "無効なカテゴリ";
                    break;
            }

            if (isset($sql)) {
                $stmt = $db->query($sql);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
                if ($row) {
                    echo "<p>カテゴリ: $category</p>";
                    echo "<p>データ: ";
                    foreach ($row as $key => $value) {
                        echo "$key: $value, ";
                    }
                    echo "</p>";
                } else {
                    echo "データが見つかりません";
                }
            }
        }
        ?>
        <form>
        
        <input type="submit" value="登録" formaction="http://localhost/nameseisei/PHP_INSERT.php">

       </form>
       </main>
    </body>
</html>



