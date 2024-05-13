<?php declare(strict_types=1); ?>
<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title>書籍登録</title>
    </head>
    <body>
        <div id="header">
            <h1>
                <div class="clearfix">
                    <div class="fl">書籍管理システム</div>
                </div>
            </h1>
        </div>
        <div id="main">
            <h3 id="title">更新画面</h3>
            <form action="edit.php" method="post">
                <div>
                    タイトル: <input type="text" name="title" value=<?php echo $data['title']; ?>>
                </div>
                <div>
                    ISBN: <input type="text" name="isbn" value=<?php echo $data['isbn']; ?>>
                </div>
                <div>
                    著者: <input type="text" name="author" value=<?php echo $data['author']; ?>>
                </div>
                <div>
                    価格: <input type="text" name="price" value=<?php echo $data['price']; ?>>
                </div>
                <div>
                    出版社: <input type="text" name="publisher_name" value=<?php echo $data['publisher_name']; ?>>
                </div>
                <div>
                    発行日: <input type="datetime-local" name="created" value=<?php echo $formattedDateTime; ?>>
                </div>
                <div>
                    <input type="hidden" name="id" value=<?php echo $data['id']; ?>>
                    <input type="submit" name="update" value="更新">
                </div>
            </form>
            <div>
                <button onClick="goBack()">戻る</button>
            </div>
        </div>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </body>
</html>