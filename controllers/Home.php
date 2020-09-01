<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Подключения трейта работы модулей
include_once APPPATH.'controllers/modules/traitCore.php';

class Home extends CI_Controller
{

    // Местоположение контроллера
    public $folder_dir = __DIR__;

    // Наполнение текущего класса - методами ядрённого трейта
    use traitCoreModules;

    // Автозагрузка
    public function autoload()
    {


        if( !$this->user_info )
        {
            redirect('/');
        }

    }

    // Предворительная обработка системными средствами
    public function _remap($method, $params = array())
    {
        if ( method_exists($this, $method) )
        {
            return call_user_func_array(array($this, $method), $params);
        }
        else
        {
            return call_user_func_array(array($this, "index"), func_get_args());
        }
    }

    // Входной
    public function index()
    {

        echo 'Модуль не имеет системы управления';

    }



}
