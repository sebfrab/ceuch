<?php
class SFApostolado extends CWidget{
    public $dataProvider;
    
    public function init(){
        parent::init();
        $fecha = getdate();
        echo "<h4>".$this->mes($fecha["mon"])." de ". $fecha["year"]."</h4>";
        
        foreach($this->dataProvider as $model){
            
            echo "<b>".Apostolado::model()->getTipo($model->tipo)." : $model->titulo</b>";
            echo "<p style=\"text-align: justify;\">$model->texto</p>";
            
            
        }
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
