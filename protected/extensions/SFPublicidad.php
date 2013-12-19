<?php

class SFPublicidad extends CWidget{

    public function init(){
        parent::init();
        $publicidadModel = Publicidad::model()->findAll(array('order'=>'RAND()', 'limit' =>'1'));
        
        foreach($publicidadModel as $model){
            echo "<div class=\"visible-md visible-lg visible-sm\" id=\"menuSecundarioPublicidad\"><p style=\"text-align: justify;\"> $model->texto </p></div>";
        }
        

    }
    
}
?>

