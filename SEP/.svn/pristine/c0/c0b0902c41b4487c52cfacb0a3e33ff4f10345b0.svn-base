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
            <h1>色情文本打分DEMO</h1>
            <h2>输入:</h2>

            <form target="outscore" class="form" action="" method="get">
                <div class="item"><label>content:</label><input type="text" name="sqcontent" /></div>
                <input onclick=iframeDisplay(0) type="reset" value="重置" class="reset" />
                <input onclick=iframeDisplay(1) type="submit" value="计算打分" class="submit" />
            </form>

            <h2>打分结果:</h2>
            <div id="output" class="output">
                <div class="item">是色情得分: <span class="score">0.5</span>分</div>
                <div class="item">非色情得分: <span class="score">0.5</span>分</div>
            </div>
            <iframe id="result" frameborder="0" style="display:none;" name="outscore"></iframe>
        </div>
    </div>
</div>
<?php
    require_once('footer.php');
?>