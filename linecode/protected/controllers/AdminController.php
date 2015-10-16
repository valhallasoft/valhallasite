<?php

class AdminController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
		/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','lartikel','vartikel','dartikel'),
				'expression'=>'Yii::app()->user->name == "admin"',
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
        public function init()
        {
           //Yii::app()->user->loginUrl= array('/site/admin') ;
           Yii::app()->theme = 'admin';

           $this->layout = 'column1';
           parent::init();
        }
        
	public function actionIndex()
	{
                $Views = View::model()->findAll();
		$dataProvider=new CActiveDataProvider('Artikel');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
                        'Views'=>$Views,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Artikel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Artikel']))
			$model->attributes=$_GET['Artikel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

        public function actionLArtikel($fitback){
            $Views = View::model()->findAll();
            $Artikels = Artikel::model()->findAll();
            $this->render('lartikel',array(
			'Artikels'=>$Artikels,
                        'fitback'=>$fitback,
                        'Views'=>$Views,
		));
        }
        public function actionDArtikel($pk){
            try{
                $Artikel = Artikel::model()->deleteByPk($pk);
                if($Artikel != NULL){
                    $this->redirect(array('lartikel','fitback'=>1));
                }
            } catch (Exception $ex) {
                $this->redirect(array('lartikel','fitback'=>2));
            }
        }
        public function actionVArtikel($pk,$fitback){
            $Views = View::model()->findAll();
            $Artikel = Artikel::model()->findByPk($pk);
            $KHA = KatagoryHasArtikel::model()->findAll('artikel_id_artikel = '.$pk);
            $id= Katagory::model()->findByPk($KHA[0]->katagory_id_katagory)->view_id_view ;
            $katagorys = Katagory::model()->findAll('view_id_view ='.$id);
            if(isset($_POST['Artikel']))
            {
                $Artikel->attributes=$_POST['Artikel'];
                $Artikel->png_artikel=  Yii::app()->user->name ;
                $a = $_POST['a'];
                if(!isset($_POST['a'])){
                     $this->redirect(array('vartikel','fitback'=>1));
                }
                if($Artikel->save())
                    $hub = KatagoryHasArtikel::model()->deleteAll('artikel_id_artikel = '.$Artikel->id_artikel);
                    foreach($a as $aa){
                        $hub = new KatagoryHasArtikel ;
                        $hub->artikel_id_artikel = $Artikel->id_artikel;
                        $hub->katagory_id_katagory=(int)$aa;
                        $hub->save();
                    }
                $this->redirect(array('vartikel','pk'=>$Artikel->id_artikel,'fitback'=>2));
            } 
            $this->render('vartikel',array(
                        'id'=>$id,
			'Artikel'=>$Artikel,
                        'KHA'=>$KHA,
                        'katagorys'=>$katagorys,
                        'fitback'=>$fitback,
                        'Views'=>$Views,
		));
        }
        public function actionAArtikel($id){
            $Artikel = new Artikel;
            $Views = View::model()->findAll();
            $katagorys = Katagory::model()->findAll('view_id_view ='.$id);
            if(isset($_POST['Artikel']))
		{
			$Artikel->attributes=$_POST['Artikel'];
                        $Artikel->png_artikel=  Yii::app()->user->name ;
                        $kats = $_POST['a'];
			if($Artikel->save())
                            foreach($kats as $kat){
                                $hub = new KatagoryHasArtikel ;
                                $hub->artikel_id_artikel = $Artikel->id_artikel;
                                $hub->katagory_id_katagory=(int)$kat;
                                $hub->save();
                            }
                            $this->redirect(array('lartikel','fitback'=>4));
		}
            $this->render('aartikel',array(
                        'id'=>$id,
			'Artikel'=>$Artikel,
                        'katagorys'=>$katagorys,
                        'Views'=>$Views,
		));
        }
        public function actionLUsers($fitback){
            $Users = User::model()->findAll();
            $Jks   = Jk::model()->findAll();
            $Haks  = Hak::model()->findAll();
            $Views = View::model()->findAll();
            $this->render('lusers',array(
                'Jks'=>$Jks,
                'Haks'=>$Haks,
                'Users'=>$Users,
                'fitback'=>$fitback,
                'Views'=>$Views,
                ));
        }
         public function actionDUsers($pk){
             try{
                $User = User::model()->deleteByPk($pk);
                if($User != NULL){
                    $this->redirect(array('lusers','fitback'=>1));
                   }
             } catch (Exception $ex) {
                $this->redirect(array('lusers','fitback'=>2));
             }
         }
        public function actionAUsers(){
            $User=new User;
            $Jks   = Jk::model()->findAll();
            $Haks  = Hak::model()->findAll();
            $Views = View::model()->findAll();
            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if(isset($_POST['User']))
            {
                    $User->attributes=$_POST['User'];
                    if($User->save())
                            $this->redirect(array('lusers','fitback'=>4));
            }

            $this->render('ausers',array(
                    'User'=>$User,
                    'Jks'=>$Jks,
                    'Haks'=>$Haks,
                    'Views'=>$Views,
            ));
        }
        public function actionVusers($pk){
            $User = User::model()->findByPk($pk);
            $Jks   = Jk::model()->findAll();
            $Haks  = Hak::model()->findAll();
            $Views = View::model()->findAll();$Views = View::model()->findAll();
            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if(isset($_POST['User']))
            {
                    $User->attributes=$_POST['User'];
                    if($User->save())
                            $this->redirect(array('lusers','fitback'=>4));
            }

            $this->render('vusers',array(
                    'User'=>$User,
                    'Jks'=>$Jks,
                    'Haks'=>$Haks,
                    'Views'=>$Views,
            ));
        }
        public function actionLGenders($fitback){
            $jks = Jk::model()->findAll();
            $Views = View::model()->findAll();
            $this->render('lgenders',array(
			'jks'=>$jks,
                        'fitback'=>$fitback,
                        'Views'=>$Views,
		));
            
        }
        public function actionDGenders($pk){
            try{
                $Jk = Jk::model()->deleteByPk($pk);
                if($Jk != NULL){
                    $this->redirect(array('lgenders','fitback'=>1));
                }
            } catch (Exception $ex) { 
                $this->redirect(array('lgenders','fitback'=>2));
            }
        }
        public function actionAGenders(){
            $Jk =new Jk;
            $Views = View::model()->findAll();
            if(isset($_POST['Jk']))
            {
            	$Jk->attributes=$_POST['Jk'];
            	if($Jk->save())
                    $this->redirect(array('lgenders','fitback'=>4));
            }
            $this->render('agendes',array(
		'Jk'=>$Jk,
                'Views'=>$Views,
            ));
        }
        public function actionLPrivileges($fitback){
            $haks = Hak::model()->findAll();
            $Views = View::model()->findAll();
            $this->render('lprivileges',array(
			'haks'=>$haks,
                        'fitback'=>$fitback,
                        'Views'=>$Views,
		));
        }
        public function actionLMenus($fitback){
            $menus = Menu::model()->findAll();
            $Views = View::model()->findAll();
            $this->render('lmenus',array(
			'menus'=>$menus,
                        'fitback'=>$fitback,
                        'Views'=>$Views,
		));
        }
        public function actionDMenus($pk){
            try {
                $Menu = Menu::model()->findByPk($pk)->delete();
                if($Menu != NULL){
                    $this->redirect(array('lmenus','fitback'=>1));
                }
            } catch (Exception $ex) {
                $this->redirect(array('lmenus','fitback'=>2));
            }
        }
        public function actionAMenus(){
            $Menu=new Menu;
            $Views = View::model()->findAll();
            if(isset($_POST['Menu']))
            {
                    $Menu->attributes=$_POST['Menu'];
                    if($Menu->save())
                            $this->redirect(array('lmenus','fitback'=>4));
            }

            $this->render('amenus',array(
                    'Menu'=>$Menu,
                    'Views'=>$Views,
            ));
        }
        public function actionLViews($fitback){
            $Views = View::model()->findAll();
            $this->render('lviews',array(
                        'fitback'=>$fitback,
                        'Views'=>$Views,
		));
        }
        public function actionDViews($pk){
            try {
                $views = View::model()->findByPk($pk)->delete();
                if($views != NULL){
                    $this->redirect(array('lviews','fitback'=>1));
                }
            } catch (Exception $ex) {
                $this->redirect(array('lviews','fitback'=>2));
            }
        }
        public function actionAViews(){
            $views=new View;
            $Vs = View::model()->findAll();
            if(isset($_POST['View']))
            {
                    $views->attributes=$_POST['View'];
                    if($views->save())
                            $this->redirect(array('lviews','fitback'=>4));
            }

            $this->render('aviews',array(
                    'views'=>$views,
                    'Vs'=>$Vs,
            ));
        }
        public function actionLKatagorys($fitback){
            $katagorys = Katagory::model()->findAll();
            $Views = View::model()->findAll();
            $Menus = Menu::model()->findAll();
            $this->render('lkatagorys',array(
			'katagorys'=>$katagorys,
                        'Views'=>$Views,
                        'Menus'=>$Menus,
                        'fitback'=>$fitback,
                        'Views'=>$Views,
		));
        }
        public function actionDKatagorys($pk){
            try {
                $Katagory = Katagory::model()->deleteByPk($pk);
                if($Katagory != NULL){
                    $this->redirect(array('lkatagorys','fitback'=>1));
                }
            } catch (Exception $ex) {
                $this->redirect(array('lkatagorys','fitback'=>2));
            }
        }
        public function actionAKatagorys(){
            $Katagory=new Katagory;
            $Views = View::model()->findAll();
            $Menus = Menu::model()->findAll();
            if(isset($_POST['Katagory']))
            {
                    $Katagory->attributes=$_POST['Katagory'];
                    if($Katagory->save())
                            $this->redirect(array('lkatagorys','fitback'=>4));
            }

            $this->render('akatagorys',array(
                    'Katagory'=>$Katagory,
                    'Views'=>$Views,
                    'Menus'=>$Menus,
            ));
        }
        public function actionVKatagorys($pk){
            $Katagory=Katagory::model()->findByPk($pk);
            $Views = View::model()->findAll();
            $Menus = Menu::model()->findAll();
            if(isset($_POST['Katagory']))
            {
                    $Katagory->attributes=$_POST['Katagory'];
                    if($Katagory->save())
                            $this->redirect(array('vkatagorys','pk'=>$Katagory->id_katagory));
            }

            $this->render('vkatagorys',array(
                    'Katagory'=>$Katagory,
                    'Views'=>$Views,
                    'Menus'=>$Menus,
            ));
        }
        public function actionLogout()
	{
            Yii::app()->user->logout();
            $this->redirect(Yii::app()->homeUrl);
	}
}
