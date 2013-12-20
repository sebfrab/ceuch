<?php

class SFNoticias extends CWidget{
    
    public $dataProvider;
    
    public function init(){
        parent::init();
        $i = 1;
        foreach($this->dataProvider as $model){
            if($i==1){
                $this->row();
                $i++;
            }else{
                $i++;
            }
            
            
            $this->cabecera($model->idnoticias);
            $this->thumbnail($model->img, $model->titulo);
            $this->newsTitulo($model->titulo);
            $this->newsCuerpo($model->cuerpo);
            $this->dateNews($model->fecha);
            $this->cierre();
            
            if($i==4){
                $this->rowClose();
                $i=1;
            }
        }
    }
    
    public function row(){
        echo "<div class=\"row\">\n";
    }
    
    public function rowClose(){
        echo "</div>\n";
    }
    
    public function cabecera($idnoticias){
        echo "<div id=\"new\"  class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\" >";
        echo "<a href=\"".Yii::app()->request->baseUrl."/nosotros/noticiaView/$idnoticias\">";                                             
    }
    
    public function thumbnail($img, $titulo){
        echo "<div class=\"thumbnail\">";
        echo "<img src=\"".Yii::app()->request->baseUrl."/images/news/$img\"  alt=\"$titulo\">";
        echo "</div>\n";
    }
    
    public function newsTitulo($titulo){
        echo "<p id=\"newsTitulo\" >";
        echo "$titulo";
        echo "</p>\n";                                                        
    }
    
    public function newsCuerpo($cuerpo){
        if (strlen($cuerpo)>190){ 
            $cuerpo = substr($cuerpo, 0, 190) . " ...";
        }
        echo "<p id=\"newsCuerpo\">";
        echo "$cuerpo";
        echo "</p>\n";
    }
    
    public function dateNews($date){
        $dia = date('d',strtotime($date));
        $mes = $this->mes(date('m',strtotime($date)));
        $ano = date('Y',strtotime($date));
        
        echo "<p id=\"dateNews\">";
        echo "$dia $mes $ano";
        echo "</p>\n";
    }
    
    public function cierre(){
        echo "</a>";
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
