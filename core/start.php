<?php
/**
 * @copyright (C)2016-2099 Hnaoyun Inc.
 * @license This is not a freeware, use is subject to license terms
 * @author XingMeng
 * @email hnxsh@foxmail.com
 * @date 2016年11月5日
 *  内核启动文件，请使用入口文件对本文件进行引用即可
 */

// 引入初始化文件
require dirname(__FILE__) . '/init.php';

// 启动内核
core\basic\Kernel::run();

 




