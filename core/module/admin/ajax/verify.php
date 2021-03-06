<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if(!defined("IN_BAIGO")) {
    exit("Access Denied");
}

include_once(BG_PATH_FUNC . "init.func.php"); //管理员通用
fn_init(true, true, "Content-type: application/json", true, "ajax", true);

include_once(BG_PATH_CONTROL . "admin/ajax/verify.class.php"); //载入日志 ajax 控制器

$ajax_verify = new AJAX_VERIFY(); //初始化日志对象

switch ($GLOBALS["act_post"]) {
    case "enable":
    case "disable":
        $ajax_verify->ajax_status(); //状态
    break;

    case "del":
        $ajax_verify->ajax_del();  //删除
    break;
}
