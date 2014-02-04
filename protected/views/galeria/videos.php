<?php
$this->menu=array(
	array('label'=>'Galería', 'url'=>array('index')),
        array('label'=>'Albumes', 'url'=>array('albumes')),
        array('label'=>'Videos', 'url'=>array('videos'),'itemOptions' => array('class' => 'active')),
);
?>

<br/>
<h3 style="">Videos</h3>

<div class="row" style="margin-top: 20px;">
    <div id="albumes">
    <?php 
        $this->widget('ext.SFGaleriaVideos',array(
           'dataProvider'=>$dataProvider,
       ));        
    ?>
    </div>
</div>

