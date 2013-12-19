<?php

class SFCompromisos extends CWidget{
    public $dataProvider;
    
    public function init(){
        parent::init();
        foreach($this->dataProvider as $model){
            $this->cabecera($model->idcompromisos);
            $this->dateEvents($model->fecha);
            $this->titulo($model->titulo);
            $this->cierre();
        }
    }
    
    public function cabecera($idcompromisos){
        echo "<div id=\"events\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">\n";
        echo "<a href=\"".Yii::app()->request->baseUrl."/nosotros/compromisoView/$idcompromisos\" >";
    }
    
    public function dateEvents($date){
        $dia = date('d',strtotime($date));
        $mes = $this->mes(date('m',strtotime($date)));
        $ano = date('Y',strtotime($date));
        
        echo "<p id=\"dateEvents\">";
        echo "$dia $mes $ano";
        echo "</p>\n";
    }
    
    public function titulo($titulo){
        echo "<p style=\"color: #296fa3; font-weight: bold; margin:0px; padding:0px;\">";
        echo "$titulo";
        echo "</p>\n";
    }
    
    public function cierre(){
        echo "</a>\n";
        echo "</div>\n";
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
