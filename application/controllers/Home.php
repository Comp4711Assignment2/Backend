<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Homepage
 *
 * @author Justin
 */
class Home extends Application{
    
    //put your code here
    function __construct()
	{
		parent::__construct();
	}
        
    public function index() {

        $this->data['pagebody'] = 'home';
        $supplies = $this->Supplies->all();
        $this->render();
    }
}
