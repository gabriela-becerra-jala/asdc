<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Club
 *
 * @author phantom
 */
class Information extends MY_Controller {

    public function __construct()
    {
        parent::__construct();

        //$this->load->model('info_model', 'infoModel');
    }
    public function index()
    {

        //$this->data   = $info;
        $this->middle = 'splash';
        $this->layout();
    }
}

