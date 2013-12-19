<?php
$this->menu=array(
	array('label'=>'Nosotros', 'url'=>array('index')),
        array('label'=>'Fundador', 'url'=>array('fundador')),
        array('label'=>'Historia Mediaeval', 'url'=>array('historiaMedieval')),
        array('label'=>'Historia de 1900', 'url'=>array('historia1900')),
        array('label'=>'Actualidad', 'url'=>array('actualidad')),
        array('label'=>'Leyes', 'url'=>array('leyes')),
        array('label'=>'Noticias', 'url'=>array('noticias')),
        array('label'=>'Compromisos', 'url'=>array('compromisos'),'itemOptions' => array('class' => 'active')),
);
?>

<br/>
<h3 style="">Compromisos</h3>


<?php 
    $this->widget('ext.SFCompromisos',array(
        'dataProvider'=>$model,
    ));        
?>