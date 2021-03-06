<?php

class SFGaleriaAlbumesView extends CWidget{
    public $model;
    
    public function init(){
        parent::init();
        echo "<h4 style=\"margin-left:20px;\">".$this->model->titulo." (".$this->model->ano.") </h4>";
        $this->directorio($this->model->idalbumes);
    }
    
    public function directorio($idalbumes){
        $directorio = opendir("images/albumes/$idalbumes/thumbs/");
        while( $archivo = readdir($directorio)){ 
            if(!is_dir($archivo)){ //verificamos si es o no un directorio
                if($archivo!="Thumbs.db"){
                    $files[] = $archivo; 
                }
            } 
        }
        if($files){
            natsort($files);
            foreach($files as $file)
            {
                 $this->viewArchivo($file, $idalbumes);
            } 
        }
        
        
    }
    
    public function viewArchivo($archivo, $idalbumes){
        echo "<div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-6\">\n";
        echo "<a class=\"fancybox\" rel=\"group\" href=\"".Yii::app()->request->baseUrl."/images/albumes/$idalbumes/normal/$archivo\">\n";
        echo "<img class=\"lazy thumbnail\" data-original=\"".Yii::app()->request->baseUrl."/images/albumes/$idalbumes/thumbs/$archivo \" />\n";
        echo "</a>\n";
        echo "</div>\n";
    }
}
?>
