<?php
    require_once('header.php');
?>

<?php $folder = "";?>
<div class="main">
    <div class="banner-bg"></div>
    <div class="middle">
        <div class="banner">
            <h1 class="txt">立足CBG，服务全公司</h2>
            <ul class="products">
                <li>
                    <div class="icon"><img src="img/<?php echo $folder;?>tieba.png" /></div>
                    <span class="name">贴吧</span>
                </li>
                <li>
                    <div class="icon"><img src="img/<?php echo $folder;?>wenku.png" /></div>
                    <span class="name">文库</span>
                </li>
                <li>
                    <div class="icon"><img src="img/<?php echo $folder;?>yuedu.png" /></div>
                    <span class="name">阅读</span>
                </li>
                <li>
                    <div class="icon"><img src="img/<?php echo $folder;?>zhidao.png" /></div>
                    <span class="name">知道</span>
                </li>
                <li>
                    <div class="icon"><img src="img/<?php echo $folder;?>baike.png" /></div>
                    <span class="name">百科</span>
                </li>
                <li>
                    <div class="icon"><img src="img/<?php echo $folder;?>xiaofeijuece.png" /></div>
                    <span class="name">消费决策</span>
                </li>
                <li>
                    <div class="icon"><img src="img/<?php echo $folder;?>pass.png" /></div>
                    <span class="name">PASS</span>
                </li>
                <li>
                    <div class="icon"><img src="img/<?php echo $folder;?>xiangce.png" /></div>
                    <span class="name">相册</span>
                </li>
                <li>
                    <div class="icon"><img src="img/<?php echo $folder;?>sousuo.png" /></div>
                    <span class="name">大搜索</span>
                </li>
                <li>
                    <div class="icon"><img src="img/<?php echo $folder;?>wise.png" /></div>
                    <span class="name">WISE</span>
                </li>
                <li>
                    <div class="icon"><img src="img/<?php echo $folder;?>more.png" /></div>
                    <span class="name">敬请期待...</span>
                </li>
            </ul>
        </div>
        <div class="category">
            <?php $i = 0;?>
            <?php foreach ($category as $key => $type) { ?>
            <?php $i++;?>
            <div class="entry">
                <div class="icon"><img src="img/icon-<?=$i?>.png" /></div>
		<div class="type type-<?=$i?>"><?=$key?></div>
                <ul>
		    <?php foreach ($type as $item => $file) { ?>
		    <?php if($i==3){ ?>
			<li><a href="/sepdemo/<?=$file?>"><?=$item?></a></li>
		    <?php } else { ?>
		    <li><a href="content.php?file=<?=$file?>"><?=$item?></a></li>
		    <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php
    require_once('footer.php');
?>
