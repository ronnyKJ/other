<ul class="menu">
    <li class="pro"><a href="<?=dirname($_SERVER["PHP_SELF"]);?>">首页</a></li>
    <?php foreach ($category as $key => $type) { ?>
    <li class="pro">
        <a href="javascript:;"><?=$key?></a>
        <ul class="sub">
            <?php foreach ($type as $item => $file) { ?>
            <li><a href="content.php?file=<?=$file?>"><?=$item?></a></li>
            <?php } ?>
        </ul>
    </li>
    <?php } ?>
</ul>