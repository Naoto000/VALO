<!DOCTYPE html>

<?php
     //ランク
     $rank = $_POST['rank'];
     //レベル
     $revel = $_POST['revel'];
     //プレイヤー名
     $platyer1 = $_POST['player_ID'];
     $platyer2 = $_POST['player_tag'];
     //日時
     $month = $_POST['month'];
     $day = $_POST['day'];
     $hour = $_POST['hour'];
     $time = $_POST['time'];
     //内容
     $contents = $_POST['contents'];
     //コメント
     $koment = $_POST['komento'];
?>

<?php
    if($rank == '' || $revel == ''){
        $error = 'ランク';
        include_once("error.php");
        exit;
    }
    if($player1 == '' || $player2 == ''){
        $error = 'プレイヤー名';
        include_once("error.php");
        exit;
    }
    if($month == '' || $day == '' || $hour == '' || $time == ''){
        $error = '日付';
        include_once("error.php");
        exit;
    }
    if($cntents == ''){
        $error = '内容';
        include_once("error.php");
        exit;
    }
?>