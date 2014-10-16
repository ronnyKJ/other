<?php
    //获取数据
    error_reporting(E_ERROR|E_WARNING);
    // $content =  htmlspecialchars(stripslashes($_POST['content']));

    if(!array_key_exists('content', $_POST) || !array_key_exists('file', $_POST)){
        die('{"state" : 0}');
    }

    $base = dirname(__FILE__).'/'.'content/';
    $file = $_POST['file'];
    $path = $base . $file;

    if(!file_exists($path)){
        $arr = explode('/', $file);
        $i = 0;
        $l = count($arr) - 1;
        $dir = $base;
        while($i < $l){
            $dir .= $arr[$i].'/';
            if(!is_dir($dir)){
                mkdir($dir);
                // chmod($dir, 0777);
            }
            $i++;
        }
    }

    file_put_contents($path, $_POST['content']);
    if(!empty($_POST['directory'])){
        $dirPath = substr($path, 0, strlen($path) - 5) . '.dir.html';
        file_put_contents($dirPath, $_POST['directory']);
    }

    echo '{"state" : 1}';
?>
