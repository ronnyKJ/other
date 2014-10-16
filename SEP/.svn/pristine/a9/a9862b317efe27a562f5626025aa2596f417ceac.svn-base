<?php
    require_once('header.php');
?>

<div class="main">
    <div class="banner-bg menu"></div>
    <div class="middle">
        <?php
            require_once('nav.php');
        ?>
        <div class="content show">
            <h1>trate反作弊文本打分</h1>
            <h2>输入:</h2>
            <form target="outscore" action="" method="post" class="form">
                <div class="item"><label>产品线:</label><input type="text" name="pid" /></div>
                <div class="item"><label>type:</label><input type="text" name="type" /></div>
                <div class="item"><label>title:</label><input type="text" name="title" /></div>
                <div class="item"><label>content:</label><input type="text" name="content" /></div>
                <input type="submit" value="计算打分" class="submit sys1" />
            </form>

            <h2>打分结果:</h2>
            <div id="output" class="output">
                <div class="item">作弊得分: <span class="score">8</span>分</div>
                <div class="item">非作弊得分: <span class="score">2</span>分</div>
            </div>
        </div>
    </div>
</div>
<?php
    require_once('footer.php');
?>