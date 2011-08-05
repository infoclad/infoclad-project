<?php

include_once('private/smarty/Smarty.class.php');

class Template {

    var $debug = true;
    var $cache = false;
    var $cacheTime = 100;
    var $dir = "content/template";
    var $cachedir = "content/temp";

    public $data = array('Title' => '', 'Name' => '', 'Page' => 'default.tpl');
    private $smarty;
    private static $instance;

    public function __construct() {

        $this->smarty = new Smarty();
        $this->config();

        return true;
    }

    static public function singleton() {
        if (!isset(self::$instance)) {
            $class = __CLASS__;
            self::$instance = new $class;
        }

        return self::$instance;
    }

    public function config() {

        /* Smarty Configs */
        $this->smarty->template_dir = $this->dir;
        $this->smarty->cache_dir = $this->cachedir. '/cache';
        $this->smarty->compile_dir = $this->cachedir. '/compiled';

        $this->smarty->debugging = $this->debug;
        $this->smarty->caching = $this->cache;
        $this->smarty->cache_lifetime = $this->cacheTime;

        return true;
    }

    public function setTitle($txt='Untitled') {
        $this->data['Title'] = $txt;

        return $this->loadData();
    }
    public function setPage($page='default',$name='') {
        $this->data['Name'] = $name;
        $this->data['Page'] = $page;

        return $this->loadData();
    }

    public function loadData() {
        $this->assign('Site', $this->data);
        return true;
    }

    public function assign($var, $value) {
        $this->smarty->assign($var, $value);
        return true;
    }

    public function show($file='page.tpl.html') {        
        if(file_exists("{$this->dir}/{$file}") == true) {

            $this->smarty->display($file, $this->data['Page']);
            return true;
        }
        throw new Exception('Não foi possivel exibir o arquivo de template');
        return false;
    }

}

?>