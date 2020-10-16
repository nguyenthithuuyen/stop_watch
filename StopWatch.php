<?php


class StopWatch
{
    private $startTime;
    private $endTime;

    function __construct()
    {
        $this->startTime = microtime();
    }

    public function get_startTime()
    {
        return $this->startTime;
    }

    public function get_endTime()
    {
        return $this->endTime;
    }

    public function start()
    {
        $this->startTime = microtime();
    }

    public function stop()
    {
        $this->endTime = microtime();
    }

    public function getElapsedTime()
    {
     return $this->endTime-$this->startTime;
    }

}