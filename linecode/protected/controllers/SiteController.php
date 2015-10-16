<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
        public function init()
        {
           //Yii::app()->user->loginUrl= array('/site/admin') ;
           Yii::app()->theme = 'brian';

           $this->layout = 'column1';
           parent::init();
        }
	public function actionIndex()
	{
            $i=0;
            $Menus = Menu::model()->findAll();
            $Katagorys = Katagory::model()->findAll();
            $criteria = New CDbCriteria(array('order'=>'id_artikel DESC',));
            $As = Artikel::model()->findAll($criteria);
            $Artikels = array();
            foreach($As as $A){
                $Artikels[$i]['id_artikel'] = $A->id_artikel ;
                $Artikels[$i]['jdl_artikel'] = $A->jdl_artikel ;
                $Artikels[$i]['isi_artikel'] = $A->isi_artikel ;
                $Artikels[$i]['tgl_artikel'] = $A->tgl_artikel ;
                $Artikels[$i]['like_artikel'] = $A->like_artikel ;
                $Artikels[$i]['con_artikel'] = $A->con_artikel ;
                $Artikels[$i]['png_artikel'] = $A->png_artikel ;
                $Artikels[$i]['id'] = Katagory::model()->findByPk(KatagoryHasArtikel::model()->find('artikel_id_artikel='.$A->id_artikel)->katagory_id_katagory)->view_id_view ;
                $i++;
            }
            $criteria = New CDbCriteria(array('order'=>'like_artikel DESC','limit'=>10,));
            $hots = Artikel::model()->findAll($criteria);
            // renders the view file 'protected/views/site/index.php'
            // using the default layout 'protected/views/layouts/main.php'
            $this->render('index',array(
                "menus"=>$Menus,
                "katagorys"=>$Katagorys,
                "Artikels"=>$Artikels,
                'hots'=>$hots));
	}
        public function actionView($pk){
            $Menus = Menu::model()->findAll();
            $Katagorys = Katagory::model()->findAll();
            $Artikel = Artikel::model()->findByPk($pk);
            $id = Katagory::model()->findByPk(
                    KatagoryHasArtikel::model()->find('artikel_id_artikel ='.$Artikel->id_artikel)->katagory_id_katagory
                    )->view_id_view;
            $criteria = New CDbCriteria(array('order'=>'like_artikel DESC','limit'=>10,));
            $hots = Artikel::model()->findAll($criteria);
            $this->render('view',array(
                "id"=>$id,
                "menus"=>$Menus,
                "katagorys"=>$Katagorys,
                'Artikel'=>$Artikel,
                'hots'=>$hots));
        }
        public function actionKatview($pk){
            $i =0;
            $Menus = Menu::model()->findAll();
            $Katagorys = Katagory::model()->findAll();
            $id = Katagory::model()->findByPk($pk)->view_id_view;
            $criteria = New CDbCriteria();
            $criteria->condition = "katagory_id_katagory = :x";
            $criteria->params=(array(':x'=>(int)$pk));
            $KHA = KatagoryHasArtikel::model()->findAll($criteria);
            $Artikels = array();
            foreach ($KHA as $kha){
                $A = Artikel::model()->findByPk($kha->artikel_id_artikel);
                $Artikels[$i]['id_artikel'] = $A->id_artikel ;
                $Artikels[$i]['jdl_artikel'] = $A->jdl_artikel ;
                $Artikels[$i]['isi_artikel'] = $A->isi_artikel ;
                $Artikels[$i]['tgl_artikel'] = $A->tgl_artikel ;
                $Artikels[$i]['like_artikel'] = $A->like_artikel ;
                $Artikels[$i]['con_artikel'] = $A->con_artikel ;
                $Artikels[$i]['png_artikel'] = $A->png_artikel ;
                $i++;
                
            }
            $criteria = New CDbCriteria(array('order'=>'like_artikel DESC','limit'=>10,));
            $hots = Artikel::model()->findAll($criteria);
            $this->render('katview',array(
                'id'=>$id,
                "menus"=>$Menus,
                "katagorys"=>$Katagorys,
                'Artikels'=>$Artikels,
                'hots'=>$hots));
        }
        /**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}
        public function actionAdmin(){
                $Menus = Menu::model()->findAll();
                $Katagorys = Katagory::model()->findAll();
                $model=new AdminForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='admin-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['AdminForm']))
		{
			$model->attributes=$_POST['AdminForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect('index.php?r=admin/index');
		}
		// display the login form
		$this->render('admin',array('model'=>$model,"menus"=>$Menus,"katagorys"=>$Katagorys));
        }
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
        public function actionSearchmenu($pk){
            $Menus = Menu::model()->findAll();
            $Katagorys = Katagory::model()->findAll();
            $Artikels = Artikel::model()->findAll('Menu_id_menu ='.$pk);
            $this->render('searchmenu',array('Artikels'=>$Artikels,"menus"=>$Menus,"katagorys"=>$Katagorys));
        }
        public function actionLike($pk){
            $Menus = Menu::model()->findAll();
            $Katagorys = Katagory::model()->findAll();
            $criteria = New CDbCriteria(array('order'=>'like_artikel DESC','limit'=>10,));
            $hots = Artikel::model()->findAll($criteria);
            $Artikel = Artikel::model()->findByPk($pk);
            $jml = $Artikel->like_artikel;
            $Artikel->like_artikel = $jml + 1 ;
            $id = Katagory::model()->findByPk(
                    KatagoryHasArtikel::model()->find('artikel_id_artikel ='.$Artikel->id_artikel)->katagory_id_katagory
                    )->view_id_view;
            if($Artikel->save()){
                $this->render('view',array(
                    "id"=>$id,
                    'pk'=>$pk,
                    "menus"=>$Menus,
                    "katagorys"=>$Katagorys,
                    'Artikel'=>$Artikel,
                    'hots'=>$hots));
            }
        }
        public function actionCon($pk){
            $Menus = Menu::model()->findAll();
            $Katagorys = Katagory::model()->findAll();
            $criteria = New CDbCriteria(array('order'=>'like_artikel DESC','limit'=>10,));
            $hots = Artikel::model()->findAll($criteria);
            $Artikel = Artikel::model()->findByPk($pk);
            $jml = $Artikel->con_artikel;
            $Artikel->con_artikel = $jml + 1 ;
            $id = Katagory::model()->findByPk(
                    KatagoryHasArtikel::model()->find('artikel_id_artikel ='.$Artikel->id_artikel)->katagory_id_katagory
                    )->view_id_view;
            if($Artikel->save()){
                $this->render('view',array(
                    "id"=>$id,
                    'pk'=>$pk,
                    "menus"=>$Menus,
                    "katagorys"=>$Katagorys,
                    'Artikel'=>$Artikel,
                    'hots'=>$hots));
            }
        }
}