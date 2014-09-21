<?php
namespace DefaultModule\Controller;
use \Kumbia\Component\Controller;
class DefaultController extends Controller{
    function index(){
        $this->fecha = date('d-m-y h:i:s');
    }
}
