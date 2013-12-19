        <?php 
        $this->widget('ext.SFSlider',array(
            'dataProvider'=>$modelSlider,
        ));        
        ?>
 
        <article>
            <section style="margin-top:5px;">
                <div class="container">
                    <div id="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"> 
                            <h3 style="">Noticias: </h3>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div id="news">
                                        <?php 
                                            $this->widget('ext.SFNoticias',array(
                                                'dataProvider'=>$modelNoticia,
                                            ));        
                                        ?>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
                            <h3 style="">Compromisos: </h3>
                            
                            <div id="news">
                                    <div class="row">
                                        <?php 
                                            $this->widget('ext.SFCompromisos',array(
                                                'dataProvider'=>$modelCompromiso,
                                            ));        
                                        ?>
                                    </div>
                                </div>
                        </div>

                    </div>
                </div>
            </section>
            
            <section id="galeria">
                <div class="container">
                    <div id="row">
                        <div class="col-lg-12">
                            <h3>Ultimos albumes:</h3>
                            <div  id="owl-galeria" class="owl-carousel owl-theme">
                                
                                <?php 
                                    $this->widget('ext.SFAlbumes',array(
                                        'dataProvider'=>$modelAlbum,
                                    ));        
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>        
        
        
        <article>
            <section style="margin-top:30px;">
                <div id="legado" class="container">
                    <div id="row">
                        <div id="redes" class="col-lg-12">
                            <div>
                                <h2>Padre Luis Fernandez, un Mariano de corazón</h2>
                                <p>“¡Tú eres bendita entre todas las mujeres y bendito es el fruto de tu vientre!”
                                </p>

                                <div class="btn-group">
                                    <a type="button" class="btn btn-primary" href="<?php echo Yii::app()->createUrl('nosotros/fundador/#biografia'); ?>">Biografia</a>
                                    <a type="button" class="btn btn-primary">Legado</a>
                                    <a type="button" class="btn btn-primary">Otros</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
