<?php

require_once ROOT . "libs" . DS . "smarty" . DS . "libs" . DS . "Smarty.class.php";

class View extends Smarty {

    private $_request;
    private $_js;
    private $_template;
    private $_acl;
    private $_rutas;
    private $_jsPlugin;
    private static $_item;
    private $_widget;

    public function __construct(Request $peticion, ACL $_acl) {
        parent::__construct();
        $this->_request = $peticion;
        $this->_js = array();
        $this->_template = DEFAULT_LAYOUT;
        $this->_acl = $_acl;
        $this->_rutas = array();
        $this->_jsPlugin = array();
        self::$_item = "";

        $modulo = $this->_request->getModulo();
        $controlador = $this->_request->getControlador();
        if ($modulo) {
            $this->_rutas["view"] = ROOT . "modules" . DS . $modulo . DS . "views" . DS . $controlador . DS;
            $this->_rutas["js"] = BASE_URL . "modules/" . $modulo . "/views/" . $controlador . '/js/';
        } else {
            $this->_rutas["view"] = ROOT . "views" . DS . $controlador . DS;
            $this->_rutas["js"] = BASE_URL . "/views/" . $controlador . '/js/';
        }
    }

    public function getViewId() {
        return self::$_item;
    }

    public function renderizar($vista, $item = false, $noLayout = false) {
        if ($item) {
            self::$_item = $item;
        }
        $this->template_dir = ROOT . "views" . DS . "layout" . DS . $this->_template . DS;
        $this->config_dir = ROOT . "views" . DS . "layout" . DS . $this->_template . DS . "configs" . DS;
        $this->cache_dir = ROOT . "tmp" . DS . "cahe" . DS;
        $this->compile_dir = ROOT . "tmp" . DS . "template" . DS;
        $js = array();
        if (count($this->_js)) {
            $js = $this->_js;
        }
        $params = array(
            'ruta_css' => BASE_URL . 'views/layout/' . $this->_template . '/css/',
            'ruta_img' => BASE_URL . 'views/layout/' . $this->_template . '/img/',
            'ruta_js' => BASE_URL . 'views/layout/' . $this->_template . '/js/',
            'js' => $js,
            'jsPlugin' => $this->_jsPlugin,
            'root' => BASE_URL,
            'configs' => array(
                'app_name' => APP_NAME,
                'app_slogan' => APP_SLOGAN,
                'app_company' => APP_COMPANY,
            )
        );
        if (is_readable($this->_rutas["view"] . $vista . ".tpl")) {
            if ($noLayout) {
                $this->template_dir = $this->_rutas["view"];
                $this->display($this->_rutas["view"] . $vista . ".tpl");
                exit;
            }

            $this->assign("_contenido", $this->_rutas["view"] . $vista . ".tpl");
        } else {
            throw new Exception("Error dela vista");
        }
        $this->assign("widgets", $this->getWidgets());
        $this->assign("_acl", $this->_acl);
        $this->assign("_layoutParams", $params);
        $this->display("template.tpl");
    }

    public function setJs(array $js) {

        if (is_array($js) && count($js)) {
            for ($i = 0; $i < count($js); $i++) {
                $this->_js[] = $this->_rutas["js"] . $js[$i] . '.js';
            }
        } else {
            throw new Exception("Error js");
        }
    }

    public function setTemplate($template) {

        $this->_template = (string) $template;
    }

    public function setJsPlugin(array $js) {
        if (is_array($js) && count($js)) {
            for ($i = 0; $i < count($js); $i++) {
                $this->_jsPlugin[] = BASE_URL . "public/js/" . $js[$i] . ".js";
            }
        } else {
            throw new Exception("Error de js plugin");
        }
    }

    public function widget($widget, $method, $options = array()) {
        if (!is_array($options)) {
            $options = array($options);
        }
        if (is_readable(ROOT . "widgets" . DS . $widget . ".php")) {
            include_once ROOT . "widgets" . DS . $widget . ".php";

            $widgetClass = $widget . "Widget";

            if (!class_exists($widgetClass)) {
                throw new Exception("Error clase widget");
            }

            if (is_callable($widgetClass, $method)) {
                if (count($options)) {
                    return call_user_func_array(array(new $widgetClass, $method), $options);
                } else {
                    return call_user_func(array(new $widgetClass, $method));
                }
            }
            throw new Exception("Error metodo widget");
        }

        throw new Exception("Error de widget");
    }

    public function getLayoutPosition() {
        if (is_readable(ROOT . "views" . DS . "layout" . DS . $this->_template . DS . "configs.php")) {
            include_once ROOT . "views" . DS . "layout" . DS . $this->_template . DS . "configs.php";
            return get_layout_positions();
        }
        throw new Exception("Error configuracion layout");
    }

    public function getWidgets() {
        $widgets = array(
            "menu-sidebar" => array(
                "config" => $this->widget("menu", "getConfigs",array("sidebar")),
                "content" => array("menu", "getMenu",array("sidebar","sidebar"))
            ),
            "menu-top" => array(
                "config" => $this->widget("menu", "getConfigs",array("top")),
                "content" => array("menu", "getMenu",array("top","top"))
            ),
            "menu-top-default" => array(
                "config" => $this->widget("menu", "getConfigs",array("top_default")),
                "content" => array("menu", "getMenu",array("top","top_default"))
            ),
            "footer" => array(
                "config" => $this->widget("footer", "getConfigs",array("footer")),
                "content" => array("footer", "getFooter",array(array(),"footer"))
            )
        );
        $position = $this->getLayoutPosition();
        $keys = array_keys($widgets);

        foreach ($keys as $k) {
            if (isset($position[$widgets[$k]["config"]["position"]])) {
                if (!isset($widgets[$k]["config"]["hide"]) || !in_array(self::$_item, $widgets[$k]["config"]["hide"])) {
                    if ($widgets[$k]["config"]["show"] == "all" || in_array(self::$_item, $widgets[$k]["config"]["show"])) {
                        
                        if(isset($this->_widget[$k])){
                            $widgets[$k]["content"][2]= $this->_widget[$k];
                        }
                        
                        $position[$widgets[$k]["config"]["position"]][] = $this->getWidgetConent($widgets[$k]["content"]);
                    }
                }
            }
        }
        return $position;
    }

    public function getWidgetConent(array $content) {
        if (!isset($content[0]) || !isset($content[1])) {
            throw new Exception("Error contenido widget");
            return;
        }
        if (!isset($content[2])) {
            $content[2] = array();
        }
        return $this->widget($content[0], $content[1], $content[2]);
    }
    
    public function setWidgetOptions($key,$option){
        $this->_widget[$key]=$option;
    }

}
