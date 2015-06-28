<?php

/**
 * Created by PhpStorm.
 * User: Ronald B. Falcão
 * Date: 27/06/2015
 * Time: 21:44
 */

    require_once 'Model.php';
    require_once 'View.php';

    class Controller
    {
        public function index()
        {
            $model = new Model;
            $view = new View;
            $view->renderizaTitulo($model->getTitulo());
        }

    }