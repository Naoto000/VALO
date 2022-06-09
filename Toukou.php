<!DOCTYPE html>

<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/Toukou.css">
        <title>検索画面</title>
    </head>

    <body>
        <form method="POST" action="Toukou_kakunin.php">
            <p>ランク</p>
            <select name="rank">
                <option value="">-------</option>
                <option value="アイアン">アイアン</option>
                <option value="ブロンズ">ブロンズ</option>
                <option value="シルバー">シルバー</option>
                <option value="ゴールド">ゴールド</option>
                <option value="プラチナ">プラチナ</option>
                <option value="ダイアモンド">ダイアモンド</option>
                <option value="イモータル">イモータル</option>
                <option value="レディアント">レディアント</option>
            </select>
            <select name="revel">
                <option value="0">---</option>
                <option value="Ⅰ">Ⅰ</option>
                <option value="Ⅱ">Ⅱ</option>
                <option value="Ⅲ">Ⅲ</option>
            </select>

            <br><br>

            <p>プレイヤー名</p>
            <input type="text" name="player_ID" class="text1">
            #
            <input type="text" name="player_tag" class="text2">
            <br><br>

            <p>日時</p>
            2022年
            <select name="month">
                <option value="m_error">---</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            月
            <select name="day">
                <option value="d_error">---</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            日
            <select name="hour">
                <option value="h_error">---</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
            </select>
            時
            <select name="time">
                <option value="error">---</option>
                <option value="00">00</option>
                <option value="05">05</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40">40</option>
                <option value="45">45</option>
                <option value="50">50</option>
                <option value="55">55</option>
            </select>
            分頃

            <br><br>

            <p>内容</p>
            <input type="radio" name="contents" value="暴言（チャット）" checked>暴言（チャット）　　　
            <input type="radio" name="contents" value="暴言（音声）"> 暴言（音声）　　　　　
            <input type="radio" name="contents" value="チート利用"> チート利用　　　　　
            <input type="radio" name="contents" value="ゲームの放棄 / AFK"> ゲームの放棄 / AFK
            <br>
            <input type="radio" name="contents" value="不快・不適切な名前">不快・不適切な名前　　
            <input type="radio" name="contents" value="チームに対する妨害"> チームに対する妨害　　
            <input type="radio" name="contents" value="不適切な振る舞い"> 不適切な振る舞い　　
            <input type="radio" name="contents" value="脅迫"> 脅迫

            <br><br>

            <p>コメント</p>
            <textarea type="textarea" name="koment" class="textarea"> </textarea>

            <br><br>

            <p>証拠動画</p>
            <p><input type="file" name="move"></p>
        </form>
    </body>
    
</html>


