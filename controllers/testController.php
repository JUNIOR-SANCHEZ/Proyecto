<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class testController extends Controller {

    private $_exel;
    private $_pruebas;
    private $_template="bootstrap";
    
    public function __construct() {
        parent::__construct();
        $this->getLibreria("PHPExcel/IOFactory");
        $this->_pruebas = $this->loadModel("test");
        $this->_view->setTemplate($this->_template);
        
    }
    

    public function index($pagina=false) {
        
        
        if(!$this->filterInt($pagina)){
            $pagina = false;
        } else {
            $pagina = (int)$pagina;
        }
        
        $paginador = new Paginador();
        $this->_view->assign("titulo","pruebas");
        $this->_view->assign("datos",$paginador->paginar($this->_pruebas->view(),$pagina));
        $this->_view->assign("paginacion",$paginador->getView("prueba","test/index"));
        $this->_view->renderizar("index","test");
        
        
    }
    public function paginacionAjax($pagina=false) {
              
        $paginador = new Paginador();
        
        $this->_view->setJs(array("prueba"));
        $this->_view->assign("titulo","pruebas");
        $this->_view->assign("datos",$paginador->paginar($this->_pruebas->view(),$pagina));
        $this->_view->assign("paginacion",$paginador->getView("paginacion_ajax"));
        $this->_view->renderizar("ajaxpaginacion","test");
        
        
    }
    
    public function pruebaAjax(){
        $pagina = $this->getInt('pagina');
        $paginador = new Paginador();
        
        $this->_view->setJs(array("prueba"));
        $this->_view->assign("titulo","pruebas");
        $this->_view->assign("datos",$paginador->paginar($this->_pruebas->view(),$pagina));
        $this->_view->assign("paginacion",$paginador->getView("paginacion_ajax"));
        $this->_view->renderizar("ajax/pruebas","test",true);
    }


    public function phpexcel(){
        $nombreArchivo = ROOT . 'public' . DS . 'xlsx' . DS . 'ejemplo.xlsx';

        $this->_exel = PHPEXCEL_IOFactory::load($nombreArchivo);

        $this->_exel->setActiveSheetIndex(0);

        $numRows = $this->_exel->setActiveSheetIndex(0)->getHighestRow();

        echo '<table border=1><tr><td>Producto</td><td>Precio</td><td>Existencia</td></tr>';

        for ($i = 2; $i <= $numRows; $i++) {

            $nombre = $this->_exel->getActiveSheet()->getCell('A' . $i)->getCalculatedValue();
            $precio = $this->_exel->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
            $existencia = $this->_exel->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();

            echo '<tr>';
            echo '<td>' . $nombre . '</td>';
            echo '<td>' . $precio . '</td>';
            echo '<td>' . $existencia . '</td>';
            echo '</tr>';
        }
    }
    
    public function qr(){
        
       $this->getLibreria("phpqrcode/qrlib");
        $filename = QR_CODE. 'test.png';
	
	$tamanio = 15;
	$level = 'H';
	$frameSize = 1;
	$contenido = 'hola';

	QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);
	
        $this->_view->assign("qr",$filename);
        
//        $this->_view->renderizar("index","prueva");
        
        
        
    }
    
    public function viewtemplate(){
        $this->_view->setTemplate("startBootstrap");
        $this->_view->renderizar("pruebas","pruebas");
    }
}
