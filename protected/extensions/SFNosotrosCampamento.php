<?php

class SFNosotrosCampamento extends CWidget{
    public $dataProvider;
    
    public function init(){
        parent::init();
        foreach($this->dataProvider as $model){
            $this->cabecera();
            $this->dateEvents($model->fecha);
            $this->titulo($model->titulo);
            $this->cuerpo($model->cuerpo, $model->img);
            $this->cierre();
        }
    }
    
    public function cabecera(){
        echo "<div id=\"events\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">\n";
    }
    
    public function dateEvents($fecha){
        $date = new DateTime($fecha);       
        echo "<p id=\"dateEvents\">";
        echo $date->format('H:i')." hrs.";
        echo "</p>\n";
    }
    
    public function titulo($titulo){
        echo "<p style=\"color: #296fa3; font-weight: bold; margin:0px; padding:0px;\">";
        echo "$titulo";
        echo "</p>\n";
    }
    
    public function cuerpo($cuerpo, $img){
        echo "<div class=\"row\">\n";
        
        echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">\n";
        echo "<p style='text-align: justify;'>$cuerpo</p>";
        echo "</div>\n";
        
        echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">\n";

        if(file_exists("../".Yii::app()->request->baseUrl."/images/campamento/$img") && $img != ''){
            echo "<a class=\"fancybox\" href=\"".Yii::app()->request->baseUrl."/images/campamento/$img\"><img class=\"thumbnail col-xs-12 col-sm-12 col-md-3 col-lg-2\" src=\"".Yii::app()->request->baseUrl."/images/campamento/$img\" /></a>\n";
        }
        echo "</div>\n";

        echo "</div>\n";
    }
    
    public function cierre(){
        echo "</div>\n";
    }
 
}
?>
