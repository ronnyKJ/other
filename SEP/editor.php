<!DOCTYPE HTML>
<html>
<head>
    <title>SEP - 提供最好的策略服务</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <link href='http://fonts.googleapis.com/css?family=Monoton|Allerta+Stencil' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/editor.css">
    <script type="text/javascript" charset="utf-8" src="ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" charset="utf-8" src="ueditor/third-party/jquery-1.10.2.min.js"></script>
</head> 
<body>
<?php
    if(empty($_GET['file'])){
        die('请检查文件路径的参数 <a href="/">返回首页</a>');
    }
?>
<div id="directionWrapper" class="fixTop">
    <div class="directionTitle">目录：</div>
    <div id="directionContainer"></div>
</div>
<div>
    <script id="editor" type="text/plain" style="width:800px;height:500px;margin-left:270px;">
        <?php
            $file = dirname(__FILE__).'/'.'content/'.$_GET['file'];
            echo file_exists($file)? file_get_contents($file) : '';
        ?>
    </script>
</div>
<div class="op">
    <a class="updateDir_btn" href="javascript:;" onclick="updateSections()">更新目录</a>
    <a class="updateDir_btn" href="content.php?file=<?=$_GET["file"]?>" target="_blank">查看</a>
    <a class="publish_btn" href="javascript:;" onclick="save()">发布</a>
</div>
</body>
<script type="text/javascript">
    var editor = UE.getEditor('editor');

    function save() {
        var content = editor.getContent();
        if(!content){
            alert('不能为空');
            return;
        }
        $.ajax({
            url : 'save.php',
            data : {
                'file' : '<?=$_GET["file"]?>',
                'content' : content,
                'directory' : $('#directionContainer').html()
            },
            type : 'POST',
            dataType : 'json',
            success : function(json){
                if(json.state == 1){
                    alert('发布成功!');
                }else{
                    alert('发布失败');
                }
            }
        });
    }

    //实例化编辑器
    var ue = editor;
    ue.ready(function(){
        ue.addListener('updateSections', resetHandler);
    });

    var resetHandler = function(){
        var dirmap = {}, dir = ue.execCommand('getsections');
        var k = 0;
        // 更新目录树
        $('#directionContainer').html(traversal(dir) || null);
        
        function traversal(section) {
            var $list, $item, $itemContent, child, childList;
            if(section.children.length) {
                $list = $('<ul>');

                for(var i = 0; i< section.children.length; i++) {
                    child = section.children[i];
                    var anchor = "s_" + (k++);
                    child.dom.id = anchor;
                    //设置目录节点内容标签
                    var title = getSubStr(child['title'], 18);
                    $itemContent = $('<div class="sectionItem"></div>').html($('<a href="#' + anchor + '" class="itemTitle">' + title + '</a>'));
                    $itemContent.attr('data-address', child['startAddress'].join(','));

                    dirmap[child['startAddress'].join(',')] = child;
                    //设置目录节点容器标签
                    $item = $('<li>');
                    $item.append($itemContent);
                    //继续遍历子节点
                    if($item.children.length) {
                        childList = traversal(child);
                        childList && $item.append(childList);
                    }
                    $list.append($item);
                }
            }
            return $list;
        }
    }

    function getSubStr(s,l){
        var i=0,len=0;
        for(i;i<s.length;i++){
            if(s.charAt(i).match(/[^\x00-\xff]/g)!=null){
                len+=2;
            }else{
                len++;
            }
            if(len>l){ break; }
        }return s.substr(0,i);
    };

    var updateSections = function(){
        ue.fireEvent("updateSections");
    }
</script>
</html>