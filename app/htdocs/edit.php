<?php
declare(strict_types=1);

require_once(dirname(__DIR__) . "/library/database_access.php");

if(mb_strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    if (isset($_POST['detail'])) {
        $data = json_decode($_POST['detail'], true);
        // DateTimeオブジェクトを作成し、指定された日時文字列を解析する
        $dateTime = new DateTime($data['created']);
        // date()関数を使用して、datetime-local形式の文字列に変換する
        $formattedDateTime = $dateTime->format('Y-m-d\TH:i');
        require_once(dirname(__DIR__) . "/template/edit.php");
    } else {
        $id = empty($_POST['id']) ? '1' : $_POST['id'];
        $title = empty($_POST['title']) ? 'no title' : $_POST['title'];
        $isbn = empty($_POST['isbn']) ? '123-4-567890-12-1': $_POST['isbn'];
        $price = empty($_POST['price']) ? 1000: (int)$_POST['price'];
        $author = empty($_POST['author']) ? 'Mike' : $_POST['author'];
        $publisher_name = empty($_POST['publisher_name']) ? '岩波書店' : $_POST['publisher_name'];
        $created = empty($_POST['created']) ? '2024-05-10T16:10' : $_POST['created'];
        DatabaseAccess::update($id, $title, $isbn, $price, $author, $publisher_name, $created);
        require_once(dirname(__DIR__) . "/htdocs/book.php");
    }
}
?>