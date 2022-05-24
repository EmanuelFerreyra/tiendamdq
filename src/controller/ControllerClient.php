<?php

namespace tiendamdq\controller;


class controllerClient extends Controller
{
    public $client;

    public function __construct()
    {
        $this->client = 'test';
    }

}