<?php
$this->menu=array(
	array('label'=>'Eucaristía', 'url'=>array('index')),
        array('label'=>'Apostolado del mes', 'url'=>array('apostolado')),
        array('label'=>'Santos Patronos', 'url'=>array('santos'),'itemOptions' => array('class' => 'active')),
);
?>

<br/>
<h3 style="">Santos Patronos </h3>


<?php 
    foreach($model as $data){
        echo "<div id=\"new\" class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">";
        echo "<a href=\"".Yii::app()->createUrl('eucaristia/santoView/'.$data->idpatronos.'')."\">";
        echo "<div class=\"thumbnail\">";
        echo "<img alt=\"$data->nombre\" src=\"".Yii::app()->request->baseUrl."/images/santos/$data->idpatronos.jpg\">";
        echo "</div>";
        echo "<p id=\"newsTitulo\">$data->nombre</p>";
        
        if (strlen($data->historia)>190){ 
            $data->historia = substr($data->historia, 0, 190) . " ...";
        }
        
        echo "<p id=\"newsCuerpo\">$data->historia</p>";
        echo "</a>";
        echo "</div>";
    }

?>
