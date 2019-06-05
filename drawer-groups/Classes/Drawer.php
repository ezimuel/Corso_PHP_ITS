
<?php

class Drawer
{
    protected $listToDraw = [];


    public function __construct (array $listToDraw)
    {
        $this->listToDraw = $listToDraw;
        shuffle($this->listToDraw);
    }


    public function makeGroups ($numberOfGroupMembers) : array
    {
        if(count($this->listToDraw) % $numberOfGroupMembers == 0)
            return array_chunk($this->listToDraw, $numberOfGroupMembers);
        
        else
        {
            $list = array_chunk($this->listToDraw, $numberOfGroupMembers);
            
            for($i = 0; $i < count(end($list)); $i++)
                array_push($list[$i], end($list)[$i]);

            return $list;
        }
    }
}