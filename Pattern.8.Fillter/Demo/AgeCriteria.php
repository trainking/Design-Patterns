<?php

namespace Demo;

use Demo\Criteria;

class AgeCriteria implements Criteria
{
    public function filtterPersion(array $persionList)
    {
        $result = [];
        foreach($persionList as $p)
        {
            if ($p->age < 18 || $p->occupation == "Student")
            {
                array_push($result, $p);
            }
        }
        return $result;
    }
}