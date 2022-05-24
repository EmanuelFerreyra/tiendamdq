<?php

namespace tiendamdq\controller;

use MongoDB\Driver\Server;

class controller
{
    public $view;
    public $dir;

    public function dir( $dir ){
        $this->dir = $dir;
        return $this;
    }

    public function view( $nameFile ){
        $this->view = $this->dir.$nameFile.'.php';
        if (!isset($this->view)) {
            print 'Error: ControllerView';
        }
        return include $this->view;
    }

    public function redirect( $url ){
        header('Location: '.$url);
        exit;
    }

}