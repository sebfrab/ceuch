<?php

class GaleriaController extends Controller
{
        public $layout='//layouts/column2';
    
        public function accessRules()
	{
		return array(
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('index', 'albumes', 'videos', 'ajaxAlbumes', 'albumView'),
				'users'=>array('*'),
			),
		);
	}
        
        public function actionIndex()
	{
		$this->render('index',array(
			
		));
	}
        
        public function actionAlbumes(){
            
                $anosArray =  CHtml::listData(Albumes::model()->findAll(array('select'=>'ano','distinct'=>true,)),'ano','ano');
                
                $albumesModel = Albumes::model()->findall(array('order'=>'idalbumes DESC', 'limit' =>'12'));
                
                $this->render('albumes',array(
                        'anosArray'=>$anosArray,
                        'modelAlbum'=>$albumesModel,
		));
        }
        
        public function actionVideos(){
            
                $model = Videos::model()->findAll(array('order'=>'idvideos desc',));
            
                $this->render('videos',array(
			'dataProvider'=>$model,
		));
        }
        
        public function actionAjaxAlbumes(){
            $model = Albumes::model()->findAll(array('condition'=>' t.ano='.$_POST['ano'].' ', 'order'=>'idalbumes desc',));
            
            
            $this->widget('ext.SFGaleriaAlbumes',array(
                'dataProvider'=>$model,
            )); 
        }
        
        public function actionAlbumView($id){
                $anosArray =  CHtml::listData(Albumes::model()->findAll(array('select'=>'ano','distinct'=>true,)),'ano','ano');
                
                $this->render('albumView',array(
			'modelAlbum'=>$this->loadModelAlbum($id),
                        'anosArray'=>$anosArray,
		));
        }
        
        public function loadModelAlbum($id)
	{
		$model= Albumes::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
        
        
}
?>
