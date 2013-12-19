<?php

class EucaristiaController extends Controller
{
        public $layout='//layouts/column2';
    
        public function accessRules()
	{
		return array(
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('index', 'apostolado', 'santos', 'santoView'),
				'users'=>array('*'),
			),
		);
	}
        
        public function actionIndex()
	{
		$this->render('index',array(
			
		));
	}
        
        public function actionApostolado()
	{
                $fecha = getdate();

                $model = Apostolado::model()->findAll(array('condition'=>'ano = '.$fecha["year"].' && mes = '.$fecha["mon"].''));
		$this->render('apostolado',array(
			'model'=>$model,
		));
	}
        
        public function actionSantos()
	{
                $modelApostolado = Patronos::model()->findAll();
		$this->render('santos',array(
			'model' => $modelApostolado,
		));
	}
        
        public function actionSantoView($id)
	{
                $this->render('santoView',array(
                            'model'=>$this->loadModelSanto($id),
                ));
        }
        
        public function loadModelSanto($id)
	{
		$model= Patronos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
?>