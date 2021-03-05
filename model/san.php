<?php


namespace Model;


class san
{
    public $ten;
    public $ma_san;
    public $start;
    public $end;

    public function __construct($ten, $ma_san,$start,$end)
    {
        $this->ten = $ten;
        $this->ma_san = $ma_san;
        $this->start = $start;
        $this->end = $end;
    }
}