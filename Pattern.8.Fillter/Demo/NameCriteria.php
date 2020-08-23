<?php

namespace Demo;

use Demo\Criteria;

class NameCriteria implements Criteria
{
    public function filtterPersion(array $persionList)
    {
        $result = [];
        foreach($persionList as $p)
        {
            if ($p->name == "Dalao")
            {
                array_push($result, $p);
            }
        }
        return $result;
    }
}