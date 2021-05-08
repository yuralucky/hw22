<?php


namespace App\Service\UserAgent;


use Jenssegers\Agent\Agent;

class JenssegersUserAgent implements UserAgent
{
    protected $data;

    public function __construct()
    {
        $this->data = new Agent();
    }

    public function browser()
    {
        return $this->data->browser();
    }

    public function system()
    {
        return $this->data->platform();
    }


}
