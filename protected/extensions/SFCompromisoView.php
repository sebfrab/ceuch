<?php
class SFCompromisoView extends CWidget{
    public $model;
    
    public function init(){
        parent::init();
        $this->cuerpo($this->model->cuerpo, $this->model->fecha);
        
        
    }
    
    public function cuerpo($cuerpo, $fecha){
        echo "<p style=\"text-align: justify;\">".nl2br($cuerpo)."</p>";
        $dia = date('d',strtotime($fecha));
        $mes = $this->mes(date('m',strtotime($fecha)));
        $ano = date('Y',strtotime($fecha));
        
        echo "<p id=\"dateNews\">";
        echo "$dia $mes $ano";
        echo "</p>\n";
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
