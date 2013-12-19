<?php
$this->menu=array(
	array('label'=>'Eucaristía', 'url'=>array('index')),
        array('label'=>'Apostolado del mes', 'url'=>array('apostolado')),
        array('label'=>'Santos Patronos', 'url'=>array('santos'),'itemOptions' => array('class' => 'active')),
);
?>

<br/>
<h3 style=""><?php echo "$model->nombre" ?> </h3>

<p style="text-align: justify;">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/santos/<?php echo $model->idpatronos ?>.jpg" style="float:right; padding: 20px;"/>
    <?php echo $model->historia ?>
</p>