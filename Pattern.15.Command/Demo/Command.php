<?php

namespace Demo;

interface Command
{
    // 预处理，获取资源
    function try();

    // 执行
    function do();

    // 取消
    function cancel();

    // 提交确认
    function commit();
}