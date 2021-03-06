<div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="index.php?r=admin/index"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-file"></i><span> Artikel</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="index.php?r=admin/lartikel&fitback=3"><i class="glyphicon glyphicon-th-list"></i> List Artikel</a></li>
                                <?php 
                                foreach ($Views as $View){ ?>
                                    <li><a href="index.php?r=admin/aartikel&id=<?php echo $View['id_view'];?>">
                                            <i class="glyphicon glyphicon-plus"></i> Artikel <?php echo $View['nm_view']; ?></a>
                                    </li>  
                          <?php }
                                ?>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-user"></i><span> Users</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="index.php?r=admin/lusers&fitback=3"><i class="glyphicon glyphicon-th-list"></i> List Users</a></li>
                                <li><a href="index.php?r=admin/ausers"><i class="glyphicon glyphicon-plus"></i> Add Users</a></li>
                            </ul>
                        </li>
                        <li class="nav-header">Support</li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-off"></i><span> Gender</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="index.php?r=admin/lgenders&fitback=3"><i class="glyphicon glyphicon-th-list"></i> List Gender</a></li>
                                <li><a href="index.php?r=admin/agenders"><i class="glyphicon glyphicon-plus"></i> Add Gender</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon  glyphicon-lock"></i><span> Privileges</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="index.php?r=admin/lprivileges&fitback=3"><i class="glyphicon glyphicon-th-list"></i> List Privileges</a></li>

                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-th-large"></i><span> Menu</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="index.php?r=admin/lmenus&fitback=3"><i class="glyphicon glyphicon-th-list"></i> List Menus</a></li>
                                <li><a href="index.php?r=admin/amenus"><i class="glyphicon glyphicon-plus"></i> Add Menus</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i><span> Katagory</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="index.php?r=admin/lkatagorys&fitback=3"><i class="glyphicon glyphicon-th-list"></i> List Katagory</a></li>
                                <li><a href="index.php?r=admin/akatagorys"><i class="glyphicon glyphicon-plus"></i> Add Katagory</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class=" glyphicon glyphicon-eye-open"></i><span> View</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="index.php?r=admin/lviews&fitback=3"><i class="glyphicon glyphicon-th-list"></i> List View</a></li>
                                
                            </ul>
                        </li>
                        <div>&nbsp;</div>
                    </ul>
                </div>
            </div>
	</div>
<div class="box col-sm-10 col-sm-10">
<div class="box col-md-12">
<div>
    <ul class="breadcrumb" style="margin: 0px 0px 15px 0px ;">
        <li>
            <a href="index.php?r=admin/index">Home</a>
        </li>
        <li>
            <a href="index.php?r=admin/lusers&fitback=3">User</a>
        </li>
    </ul>
</div>
<div class="box-inner">
<div class="box-header well" >
    <h2><i class="glyphicon glyphicon-tasks"></i> Dashboard </h2>

    <div class="box-icon">
        <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
        <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
        <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
    </div>
</div>
<div style="display: block;" class="box-content" >
<!--- Hello -->
<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form" style="padding: 10px;">
<?php if($User['id_user']==Yii::app()->user->id){ ?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($User); ?>

	<div class="row">
		<?php echo $form->labelEx($User,'Nama User'); ?>
		<?php echo $form->textField($User,'nm_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($User,'nm_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($User,'User Name'); ?>
		<?php echo $form->textField($User,'us_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($User,'us_user'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($User,'Password'); ?>
		<?php echo $form->textField($User,'ps_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($User,'ps_user'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($User,'Alamat'); ?>
		<?php echo $form->textField($User,'alt_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($User,'alt_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($User,'Kontak'); ?>
		<?php echo $form->textField($User,'ktk_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($User,'ktk_user'); ?>
	</div>

	<div class="row">
            <?php echo $form->labelEx($User,'Hak Akses'); ?>
                <select name="User[hak_id_hak]" class="form-control" style="width:25%;">
                <?php foreach($Haks as $Hak ){
                    if($Hak['id_hak'] == $User['hak_id_hak']){ ?>
                        <option value=<?php echo $Hak['id_hak'] ;?>> <?php echo $Hak['nm_hak'];  ?> </option>
                        
                    <?php break; } 
                    ?>
                 <?php }?>
                <?php foreach($Haks as $Hak){ ?>
                    <option value=<?php echo $Hak['id_hak'] ;?>> <?php echo $Hak['nm_hak']; ?> </option>
                 <?php }?>
                </select>
		<?php echo $form->error($User,'hak_id_hak'); ?>
	</div>

	<div class="row">
            <?php echo $form->labelEx($User,'Jenis Kelamin'); ?>
                <select name="User[jk_id_jk]" class="form-control" style="width:25%;">
                <?php foreach($Jks as $Jk ){
                    if($Jk['id_jk'] == $User['jk_id_jk']){ ?>
                        <option value=<?php echo $Jk['id_jk'] ;?>> <?php echo $Jk['nm_jk'];  ?> </option>
                        
                    <?php break; } 
                    ?>
                 <?php }?>
                <?php foreach($Jks as $Jk){ ?>
                    <option value=<?php echo $Jk['id_jk'] ;?>> <?php echo $Jk['nm_jk']; ?> </option>
                 <?php }?>
                </select>
		<?php echo $form->error($User,'jk_id_jk'); ?>
	</div>

	<div class="row buttons">
                <button type="submit" class="btn btn-default" name="myBtn" id="myBtn" disabled>
                    <i class="glyphicon glyphicon-download-alt icon-white"></i> 
                    Save</button>
        </div> 

<?php $this->endWidget(); ?>
        <?php } else { ?>
<?php $form=$this->beginWidget('CActiveForm', array(
'id'=>'user-form',
// Please note: When you enable ajax validation, make sure the corresponding
// controller action is handling ajax validation correctly.
// There is a call to performAjaxValidation() commented in generated controller code.
// See class documentation of CActiveForm for details on this.
'enableAjaxValidation'=>false,
)); ?>
            <div class="row">
		<?php echo $form->labelEx($User,'Nama User'); ?>
		<?php echo $form->textField($User,'nm_user',array('size'=>45,'maxlength'=>45,'readonly'=>TRUE)); ?>
		<?php echo $form->error($User,'nm_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($User,'User Name'); ?>
		<?php echo $form->textField($User,'us_user',array('size'=>45,'maxlength'=>45,'readonly'=>TRUE)); ?>
		<?php echo $form->error($User,'us_user'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($User,'Password'); ?>
		<?php echo $form->textField($User,'ps_user',array('size'=>45,'maxlength'=>45,'readonly'=>TRUE)); ?>
		<?php echo $form->error($User,'ps_user'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($User,'Alamat'); ?>
		<?php echo $form->textField($User,'alt_user',array('size'=>45,'maxlength'=>45,'readonly'=>TRUE)); ?>
		<?php echo $form->error($User,'alt_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($User,'Kontak'); ?>
		<?php echo $form->textField($User,'ktk_user',array('size'=>45,'maxlength'=>45,'readonly'=>TRUE)); ?>
		<?php echo $form->error($User,'ktk_user'); ?>
	</div>

	<div class="row">
            <?php echo $form->labelEx($User,'Hak Akses'); ?>
                <select name="User[hak_id_hak]" class="form-control" style="width:25%;">
                <?php foreach($Haks as $Hak ){
                    if($Hak['id_hak'] == $User['hak_id_hak']){ ?>
                        <option value=<?php echo $Hak['id_hak'] ;?>> <?php echo $Hak['nm_hak'];  ?> </option>
                        
                    <?php break; } 
                    ?>
                 <?php }?>
                </select>
		<?php echo $form->error($User,'hak_id_hak'); ?>
	</div>

	<div class="row">
            <?php echo $form->labelEx($User,'Jenis Kelamin'); ?>
                <select name="User[jk_id_jk]" class="form-control" style="width:25%;">
                <?php foreach($Jks as $Jk ){
                    if($Jk['id_jk'] == $User['jk_id_jk']){ ?>
                        <option value=<?php echo $Jk['id_jk'] ;?>> <?php echo $Jk['nm_jk'];  ?> </option>
                        
                    <?php break; } 
                    ?>
                 <?php }?>
                </select>
		<?php echo $form->error($User,'jk_id_jk'); ?>
	</div>
        <?php $this->endWidget(); ?>
        <?php } ?>
        <?php if($User['id_user']==Yii::app()->user->id){ ?>
        <button onclick="myFunction()" id='bot1' type="submit" class="btn btn-success">
            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
            Edit</button>
        <button onclick="myFunction1()" id='bot2' type="submit" class="btn btn-success" style="display: none;">
            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
            batal Edit</button>
        <?php } else { ?>
        
        <a class="btn btn-danger" href="index.php?r=admin/dusers&pk=<?php echo $User['id_user'] ?>"  onclick="return confirm('Are you sure you want to delete this item?');">
            <i class="glyphicon glyphicon-trash icon-white"></i>
             Delete </a>
        </a>
        <?php } ?>
</div><!-- form -->
</div>
    </div>
    </div>
    </div>
<script>
function myFunction() {
    document.getElementById("myBtn").disabled = false;
    document.getElementById("bot2").style.display = 'inline' ;
    document.getElementById("bot1").style.display = 'none' ;
}
function myFunction1() {
    document.getElementById("myBtn").disabled = true;
    document.getElementById("bot1").style.display = 'inline' ;
    document.getElementById("bot2").style.display = 'none' ;
}
</script>
