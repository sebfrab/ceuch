<?php
$this->menu=array(
	array('label'=>'Nosotros', 'url'=>array('index')),
        array('label'=>'Fundador', 'url'=>array('fundador')),
        array('label'=>'Historia Mediaeval', 'url'=>array('historiaMedieval')),
        array('label'=>'Historia de 1900', 'url'=>array('historia1900')),
        array('label'=>'Actualidad', 'url'=>array('actualidad')),
        array('label'=>'Leyes', 'url'=>array('leyes')),
        array('label'=>'Noticias', 'url'=>array('noticias')),
        array('label'=>'Compromisos', 'url'=>array('compromisos')),
        array('label'=>'Campamento', 'url'=>array('campamento'),'itemOptions' => array('class' => 'active')),
);
?>

<br/>
<h3 style="">Campamento 2014</h3>

<?php
    echo "<div style=\"padding-bottom: 20px; border-bottom: 1px solid #BDBDBD;\" class=\"input-group\">";
    echo "<span class=\"input-group-addon\">Fechas</span>";
    echo CHtml::dropDownList('listDias', 'fecha', $diasCampamento, 
            array(
                'class'=>'form-control',
                'empty'=>'Seleccione una fecha',
                'ajax'=>array(
                        'type'=>'POST',
                        'url'=>CController::createUrl('nosotros/ajaxCampamento'), 
                        'data'=>array('fecha'=>'js:this.value'),  
                        'success'=>'function(data) {
                            $("#eventos").html(data);
                         }',
                    ),
                ));
    echo "</div>";
?>

<div class="row" style="margin-top: 20px;">
    <div id="eventos">
    <?php 
        $this->widget('ext.SFNosotrosCampamento',array(
           'dataProvider'=>$model,
       ));        
    ?>
    </div>
</div>