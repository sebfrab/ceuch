<?php

class SFPublicidad extends CWidget{

    public function init(){
        parent::init();
        $publicidadModel = Publicidad::model()->findAll(array('order'=>'RAND()', 'limit' =>'1'));
        
        foreach($publicidadModel as $model){
            echo "<div class=\"visible-md visible-lg visible-sm\" id=\"menuSecundarioPublicidad\"><p style=\"text-align: justify;\"> $model->texto </p></div>";
        }
        
        $albumesModel = Albumes::model()->findall(array('order'=>'idalbumes DESC', 'limit' =>'1'));
        
        foreach($albumesModel as $model){
            echo "<div id=\"item\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\n";
            echo "<a href=\"". Yii::app()->createUrl("galeria/albumView/$model->idalbumes") ."\">\n";
            echo "<div class=\"thumbnail\">";
            echo "<img src=\"".Yii::app()->request->baseUrl."/images/albumes/$model->idalbumes/thumbs/$model->portada.jpg\"  alt=\"\">";
            echo "</div>\n";
            echo "<p id=\"tituloAlbum\">";
            echo "$model->titulo ($model->ano)";
            echo "</p>\n";
            echo "</a>\n";
            echo "</div>\n";  
        }

    }
    
}
?>

