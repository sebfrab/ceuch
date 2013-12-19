<?php

class SFSlider extends CWidget{
    public $dataProvider;
    
    public function init(){
        parent::init();
        $this->cabecera();
        $this->cuerpo();
        $this->cierre();
    }
    
    public function run(){
        
    }
    
    public function cabecera(){
        echo "<section id=\"slider\">\n  <div id=\"container\"> \n <div id=\"row\">\n ";
        echo "<div style=\"padding-left:0px; padding-right: 0px;\" class=\"col-lg-12\">\n";
        echo "<div  id=\"owl-demo\" class=\"owl-carousel owl-theme\">";
    }
    
    public function cuerpo(){
        foreach($this->dataProvider as $model){
                $url = Yii::app()->request->baseUrl."/images/slider/".$model->idslider.".jpg";
                echo "<div class=\"item\"><a>";
                echo "<img src=\"$url\" />";
                echo "</a></div>";
        }
    }
    
    public function cierre(){
        echo "</div>\n";
        echo "</div>\n";
        echo "</div>\n";
        echo "</div>\n";
        echo "</section>\n";
    }  
}
?>
