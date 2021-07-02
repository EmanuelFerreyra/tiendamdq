<?php


namespace tiendamdq\database;
    /*
    * Configuracion - Base de Datos
    ** Costantes definidas.
    */


    class ConfigDataBase{

        /**
         * @var string[]
         */
        private $keys = [];

        /**
         * ConfigDataBase constructor.
         */

        public function __construct(){
            $this->keys = [
                'host' => 'localhost',
                'user' => 'root',
                'password' => '',
                'database' => 'tiendamdq'
            ];           
        }

        /**
         * @return string[]
         */
        public function keysDataBase(){
            return $this->keys;
        }



    }

