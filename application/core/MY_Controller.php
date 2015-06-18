<?php
if ( ! defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/*
*/
class MY_Controller extends CI_Controller
{
    /**
    * This varible handles all the GET and POST data.
    * @var array
    */
    public $request = array();

    //set the class variable.
    var $template = array();
    var $data     = array();

    public function __construct()
    {

        parent::__construct();

        $this->load->helper(array('html','url','form','login'));

        $this->processRequest();
    }

    /**
    * Method that build the layout
    *
    */
    public function layout()
    {
        // making temlate and send data to view.
        $this->template['header'] = $this->load->view('layout/header', $this->data, true);
        $this->template['left']   = $this->load->view('layout/left', $this->data, true);
        $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
        $this->template['footer'] = $this->load->view('layout/footer', $this->data, true);

        $this->load->view('layout/index', $this->template);
    }//end layout()

    /*
     * This function will put all post and get data into a unique variable
     * called $request
     */
    private function processRequest()
    {
        if (isset($_GET['data'])) {
            $this->request = $this->input->get('data');
        } elseif (isset($_POST['data'])) {
            $this->request = $this->input->post('data');
        }
        if (TRUE) {
            $post = $this->input->post() ? $this->input->post() : array();
            $get = $this->input->get() ? $this->input->get() : array();
            $this->request += $post + $get;
            unset($this->request['data']);
        }

        if (isset($_GET['layout']) || isset($_POST['layout'])) {
            $this->layout->shouldUseLayout(FALSE);
        }

        if (isset($_GET['aIndex'])) {
            $this->layout->setAIndex((int) $_GET['aIndex']);
            $this->accordionIndex = (int) $_GET['aIndex'];
        }
    }

}
