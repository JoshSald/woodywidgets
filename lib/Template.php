<?php

class Template {
    //path to template
    protected $template;
    //Variables passed in
    protected $vars = array();

    /*
    * CLASS CONSTRUCTOR
    */

    public function __construct($template){
        $this->template = $template;
    }

    /*
    * Get Template VARS
    */

    public function __get($key){
        return $this->vars[$key];
    }

    /*
    * Set Template VARS
    */

    public function __set($key, $value){
        return $this->vars[$key] = $value;
    }

    /* 
    * Convert OBJ to STR
    */

    public function __toString(){
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();

        include basename($this->template);

        return ob_get_clean();
    }
}