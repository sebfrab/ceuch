<?php
class SFNoticiaView extends CWidget{
    public $model;
    
    public function init(){
        parent::init();
        
        $this->img($this->model->img);
        $this->texto($this->model->cuerpo, $this->model->fecha );
        
    }
    
    
    public function img($img){
        echo "<img class=\"thumbnail col-lg-4 col-md-4 col-sm-4 col-xs-12\" src=\"".Yii::app()->request->baseUrl."/images/news/$img\" />";
    }
    
    public function texto($cuerpo, $fecha){
        echo "<p style=\"text-align: justify;\" class=\"col-lg-8 col-md-8 col-sm-8 col-xs-12\">";
        echo nl2br($cuerpo);
        
        $dia = date('d',strtotime($fecha));
        $mes = $this->mes(date('m',strtotime($fecha)));
        $ano = date('Y',strtotime($fecha));
        
        echo "<p id=\"dateNews\">";
        echo "$dia $mes $ano";
        echo "</p>\n";
        
        
        echo "</p>";
    }
    
    public function mes($mes){
        if ($mes=="01") $mes="Enero";
        if ($mes=="02") $mes="Febrero";
        if ($mes=="03") $mes="Marzo";
        if ($mes=="04") $mes="Abril";
        if ($mes=="05") $mes="Mayo";
        if ($mes=="06") $mes="Junio";
        if ($mes=="07") $mes="Julio";
        if ($mes=="08") $mes="Agosto";
        if ($mes=="09") $mes="Setiembre";
        if ($mes=="10") $mes="Octubre";
        if ($mes=="11") $mes="Noviembre";
        if ($mes=="12") $mes="Diciembre";
        return $mes;
    }
    
}




?>
