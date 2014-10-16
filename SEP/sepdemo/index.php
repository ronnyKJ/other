<?php
/**
 * @name index
 * @desc 入口文件
 * @author 潘世铭(panshiming@baidu.com)
 */
$objApplication = Bd_Init::init();
$objResponse = $objApplication->bootstrap()->run();
