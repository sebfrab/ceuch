<?php
$this->menu=array(
	array('label'=>'Eucaristía', 'url'=>array('index')),
        array('label'=>'Apostolado del mes', 'url'=>array('apostolado'),'itemOptions' => array('class' => 'active')),
        array('label'=>'Santos Patronos', 'url'=>array('santos')),
);
?>

<br/>
<h3 style="">Apostolado</h3>

<?php 
    $this->widget('ext.SFApostolado',array(
        'dataProvider'=>$model,
    ));        
?>