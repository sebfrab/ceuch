<?php

class NosotrosController extends Controller
{
        public $layout='//layouts/column2';
    
        public function accessRules()
	{
		return array(
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('index', 'historiaMedieval', 'historia1900', 'actualidad', 'leyes', 'fundador', 'noticias', 'noticiaView', 'compromisos', 'compromisoView'),
				'users'=>array('*'),
			),
		);
	}
        
        public function actionIndex()
	{
		$this->render('index',array(
			
		));
	}
    
        public function actionHistoriaMedieval()
	{
		$this->render('historiaMediaeval',array(
			
		));
	}
        
        public function actionHistoria1900()
	{
		$this->render('historia1900',array(
			
		));
	}
        
        public function actionActualidad()
	{
		$this->render('actualidad',array(
			
		));
	}
        
        public function actionLeyes()
	{
		$this->render('leyes',array(
			
		));
	}
        
        public function actionFundador()
	{
		$this->render('fundador',array(
			
		));
	}
        
        public function actionNoticias()
	{
                $noticiasModel = Noticias::model()->findAll(array('order'=>'idnoticias DESC', 'limit' =>'10'));
            
		$this->render('noticias',array(
			'model'=>$noticiasModel,
		));
	}
        
        public function actionNoticiaView($id){
            
            $this->render('noticiaView',array(
			'model'=>$this->loadModelNoticias($id),
            ));
        }
        
        
        public function loadModelNoticias($id)
	{
		$model=  Noticias::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
        
        public function actionCompromisos()
	{
                $compromisosModel = Compromisos::model()->findAll(array('order'=>'idcompromisos DESC', 'limit' =>'10'));
            
		$this->render('compromisos',array(
			'model'=>$compromisosModel,
		));
	}
        
        public function actionCompromisoView($id)
        { 
                $this->render('compromisoView',array(
                            'model'=>$this->loadModelCompromisos($id),
                ));
        }
        
        public function loadModelCompromisos($id)
	{
		$model= Compromisos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

}

?>
