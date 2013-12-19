<?php
$this->menu=array(
	array('label'=>'Nosotros', 'url'=>array('index')),
        array('label'=>'Fundador', 'url'=>array('fundador')),
        array('label'=>'Historia Mediaeval', 'url'=>array('historiaMedieval')),
        array('label'=>'Historia de 1900', 'url'=>array('historia1900')),
        array('label'=>'Actualidad', 'url'=>array('actualidad')),
        array('label'=>'Leyes', 'url'=>array('leyes')),
        array('label'=>'Noticias', 'url'=>array('noticias'),'itemOptions' => array('class' => 'active')),
        array('label'=>'Compromisos', 'url'=>array('compromisos')),
);
?>

<br/>
<h3 style=""><?php echo $model->titulo; ?></h3>

<?php 
    $this->widget('ext.SFNoticiaView',array(
        'model'=>$model,
    ));        
?>

