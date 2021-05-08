<?php


namespace App\Service\UserAgent;


interface UserAgent
{
    public function browser();

    public function system();
}
