<?php

namespace Demo;

use Demo\Context;

interface State
{
    function doAction(Context $context);
}