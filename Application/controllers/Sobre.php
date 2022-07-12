<?php

class Sobre extends Controller
{ 
    public function index(){
        $this->view('areas/sobre');
    }
    public function presidencia()
    {
        $this->view('areas/presidencia');
    }
    public function graduacao()
    {
        $this->view('areas/graduacao');
    }
    public function tesouraria()
    {
        $this->view('areas/tesouraria');
    }
    public function marketing()
    {
        $this->view('areas/marketing');
    }
    public function extensao()
    {
        $this->view('areas/extensao');
    }
    public function ti()
    {
        $this->view('areas/ti');
    }
    public function eventos()
    {
        $this->view('areas/eventos');
    }
}
