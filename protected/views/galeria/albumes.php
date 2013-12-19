<?php
$this->menu=array(
	array('label'=>'Galería', 'url'=>array('index')),
        array('label'=>'Albumes', 'url'=>array('albumes'),'itemOptions' => array('class' => 'active')),
        array('label'=>'Videos', 'url'=>array('videos')),
);
?>

<br/>
<h3 style="">Albumes</h3>

<?php
    echo "<div style=\"padding-bottom: 20px; border-bottom: 1px solid #BDBDBD;\" class=\"input-group\">";
    echo "<span class=\"input-group-addon\">Año</span>";
    echo CHtml::dropDownList('listAnos', 'ano', $anosArray, 
            array(
                'class'=>'form-control',
                'empty'=>'Seleccione un año',
                'ajax'=>array(
                        'type'=>'POST',
                        'url'=>CController::createUrl('galeria/ajaxAlbumes'), 
                        'data'=>array('ano'=>'js:this.value'),  
                        'success'=>'function(data) {
                            $("#albumes").html(data);
                         }',
                    ),
                ));
    echo "</div>";
?>

<div class="row" style="margin-top: 20px;">
    <div id="albumes">
    <?php 
        $this->widget('ext.SFGaleriaAlbumes',array(
           'dataProvider'=>$modelAlbum,
       ));        
    ?>
    </div>
</div>