<?php

class SFAlbumes extends CWidget{
    public $dataProvider;
    
    public function init(){
        parent::init();
        foreach($this->dataProvider as $model){
            $this->cabecera($model->idalbumes);
            $this->thumbnail($model->idalbumes, $model->portada);
            $this->tituloAlbum($model->titulo, $model->ano);
            $this->cierre();
        }
    }
    
    public function cabecera($idalbumes){
        echo "<div id=\"item\" class=\"item\">\n";
        echo "<a href=\"". Yii::app()->createUrl("galeria/albumView/$idalbumes") ."\">\n";
    }
    
    public function thumbnail($idalbumes, $portada){
        echo "<div class=\"thumbnail\">";
        echo "<img src=\"".Yii::app()->request->baseUrl."/images/albumes/$idalbumes/thumbs/$portada\"  alt=\"\">";
        echo "</div>\n";
    }
    
    public function tituloAlbum($titulo, $ano){
        echo "<p id=\"tituloAlbum\">";
        echo "$titulo ($ano)";
        echo "</p>\n";
    }
    
    public function cierre(){
        echo "</a>\n";
        echo "</div>\n";
    }
    
}
?>
