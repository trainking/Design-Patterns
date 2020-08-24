<?php

namespace Demo;
use Demo\Command;

class OrderCommand implements Command
{
    // 预处理，获取资源
    public function try()
    {
        echo "执行 try...\n";
    }

    // 执行
    public function do()
    {
        echo "执行 do...\n";
    }

    // 取消
    public function cancel()
    {
        echo "执行 cancel...\n";
    }

    // 提交确认
    public function commit()
    {
        echo "执行 commit...\n";
    }
}