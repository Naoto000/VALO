<?
    // 接続に必要なやつ
    $pdo = new PDO(
        'mysql:host=mysql57.kdseisaku.sakura.ne.jp;dbname=kdseisaku_besttouring;charser=utf8',
        'kdseisaku',
        'hP2rt8nv');
    $pdo->query('SET NAMES utf8;');

    //DB切断
    $stmt->execute();
    unset($pdo);

?>