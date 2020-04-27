<?php
namespace Classes;



class View {
    
    private $_view;

    public function __construct($view){
        $this->_view = $view;
    }

    public function render($post){
        ob_start();
        require VIEW . "/" . $this->_view . ".php";
        $content = ob_get_clean();
        require VIEW  . '/template.php';
    }

}