<!DOCTYPE html>

<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/search.css">
        <title>検索画面</title>
    </head>
    
    <body>
        <br>
        <form method="POST" action="ressearch.php">
            <center>
                <input type="search" id="searchbox" name="searchbox" placeholder="検索ワード" class="searchbox">
                　　
                <button type="submit" name="button" class="button"> 検索 </button> 
            </center>
        </form>

        <?php $number = 4; ?>
        <?php if($number == 0): ?>
            <p>該当する検索は存在しません。</p>
        <?php
            else:
                for($i=1; $i <= $number; $i++)
        ?>
        <?php endif; ?>
    </body>
        
</html>