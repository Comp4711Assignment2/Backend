<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Maintenance
 *
 * @author manish
 */
require APPPATH . '/third_party/restful/libraries/Rest_controller.php';

class Maintenance extends Rest_Controller {
    //put your code here
    function index_get() {
        $key = $this->get('id');
        if (!$key) {
            $this->response($this->Supplies->all(), 200);
        } else {
            $result = $this->Supplies->get($key);
            if ($result != null) {
                $this->response($result, 200);
            } else {
                $this->response(array('error' => 'Supply not found!'), 404);
            }
        }
    }
    // Handle an incoming GET ... return 1 menu item
    function item_get() {
        $key = $this->get('id');
        $result = $this->Supplies->get($key);
        if ($result != null) {
            $this->response($result, 200);
        } else {
            $this->response(array('error' => 'Supply not found!'), 404);
        }
    }
    function index_post() {
        $key = $this->get('id');
        $record = array_merge(array('id' => $key), $_POST);
        $this->Supplies->add($record);
        $this->response(array('ok'), 200);
    }
    // Handle an incoming POST - add a new menu item
    function item_post() {
        $key = $this->get('id');
        $record = array_merge(array('id' => $key), $_POST);
        $this->Supplies->add($record);
        $this->response(array('ok'), 200);
    }

    // Handle an incoming PUT - update a menu item
    function index_put() {
        $key = $this->get('id');
        $record = array_merge(array('id' => $key), $this->_put_args);
        $this->Supplies->update($record);
        $this->response(array('ok'), 200);
    }
    function item_delete() {
        $key = $this->get('id');
        $this->Supplies->delete($key);
        $this->response(array('ok'), 200);
    }
}
