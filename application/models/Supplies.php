<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of supplies
 *
 * @author Justin
 */

//6 recipes
//12 pantry items
class Supplies extends MY_Model {
    // Constructor
    public function __construct()
    {
	parent::__construct();
    }
    function rules() 
    {
        $config = [
            ['field'=>'code', 'label'=>'name', 'rules'=> 'required|max_length[256]'],
            ['field'=>'description', 'label'=>'description', 'rules'=> 'required|max_length[256]'],
            ['field'=>'receivingUnit', 'label'=>'receiving unit', 'rules'=> 'required|integer'],
            ['field'=>'receivingCost', 'label'=>'receiving cost', 'rules'=> 'required|decimal'],
            ['field'=>'stockingUnit', 'label'=>'stocking unit', 'rules'=> 'required|integer'],
            ['field'=>'quantity', 'label'=>'quantity', 'rules'=> 'required|integer']
        ];
        return $config;
    }
}
