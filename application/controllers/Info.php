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
class Info extends MY_Controller {

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

    public function main()
    {
        $this->middle = 'info/main';
        $this->layout();
    }

    public function fonoaudio()
    {
        $this->middle = 'info/terapias/fonoaudio';
        $this->layout();
    }

    public function fisioterapia()
    {
        $this->middle = 'info/terapias/fisioterapia';
        $this->layout();
    }

    public function visual()
    {
        $this->middle = 'info/terapias/visual';
        $this->layout();
    }

    public function hogar()
    {
        $this->middle = 'info/terapias/hogar';
        $this->layout();
    }

    public function direccion()
    {
        $this->middle = 'info/contactos/direccion';
        $this->layout();
    }

    public function mesa()
    {
        $this->middle = 'info/contactos/mesa';
        $this->layout();
    }

    public function terapeutas()
    {
        $this->middle = 'info/contactos/terapeutas';
        $this->layout();
    }

    public function antecedentes()
    {
        $this->middle = 'info/historia/antecedentes';
        $this->layout();
    }

    public function mision()
    {
        $this->middle = 'info/historia/mision';
        $this->layout();
    }

    public function vision()
    {
        $this->middle = 'info/historia/vision';
        $this->layout();
    }

    public function objectivo()
    {
        $this->middle = 'info/historia/objetivo';
        $this->layout();
    }
}

