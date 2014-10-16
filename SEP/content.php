<?php
    require_once('header.php');
?>
<div class="main">
    <div class="banner-bg menu"></div>
    <div class="middle">
        <?php
            require_once('nav.php');
        ?>
        
        <?php
            $file = dirname(__FILE__).'/'.'content/'.$_GET['file'];
            $dirPath = substr($file, 0, strlen($file) - 5) . '.dir.html';

            if(!empty($_GET['file']) && file_exists($dirPath)){
                echo '<div id="nav" class="nav">' . file_get_contents($dirPath) . '</div>';
            }
        ?>
        
        <div class="content">
            <?php
                if(empty($_GET['file'])){
                    echo '请检查文件路径的参数';
                }else{
                    if(file_exists($file)){
                        echo file_get_contents($file);
                        echo '<a class="edit_btn" target="_blank" href="editor.php?file='.$_GET['file'].'">编辑</a>';
                    }else{
                        echo '<a class="create_btn" target="_blank" href="editor.php?file='.$_GET['file'].'">创建文档</a>';
                    }
                }
            ?>
        </div>
    </div>
</div>
<script>
    var addStyleSheets = function(className, style){
        var tmp = document.styleSheets;
        var c = tmp[tmp.length - 1];
        c.insertRule(className + " { "+style+" }", c.cssRules.length);
    };
    // 页面网上滚动时，让目录固定在顶部
    var $nav = $('.nav');
    var left = $('.middle').offset().left - 110;
    addStyleSheets('.nav-fixTop', 'position:fixed;top:10px;left:' + left + 'px;')
    $(window).scroll(function(e) {
        if($('.content').offset().top < (document.body.scrollTop||document.documentElement.scrollTop)){
            $nav.addClass('nav-fixTop');
        } else {
            $nav.removeClass('nav-fixTop');
        }
    });
</script>
<?php
    require_once('footer.php');
?>