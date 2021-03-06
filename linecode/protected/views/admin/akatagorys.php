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
            <a href="index.php?r=admin/lkatagorys&fitback=3">Katagory</a>
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
/* @var $this KatagoryController */
/* @var $model Katagory */
/* @var $form CActiveForm */
?>

<div class="form" style="padding: 10px;">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'katagory-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($Katagory); ?>

	<div class="row">
		<?php echo $form->labelEx($Katagory,'nm_katagory'); ?>
		<?php echo $form->textField($Katagory,'nm_katagory',array('size'=>45,'maxlength'=>45,'style'=>"width:50%")); ?>
		<?php echo $form->error($Katagory,'nm_katagory'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($Katagory,'View'); ?>
		<select name="Katagory[view_id_view]" class="form-control" style="width:25%;">
                <?php foreach($Views as $View ){ ?>
                    <option value=<?php echo $View['id_view'] ;?>> <?php echo $View['nm_view']; ?> </option>
                 <?php }?>
                </select>
		<?php echo $form->error($Katagory,'view_id_view'); ?>
	</div>
	<div class="row">
            <?php echo $form->labelEx($Katagory,'menu'); ?>
                <select name="Katagory[Menu_id_menu]" class="form-control" style="width:25%;">
                <?php foreach($Menus as $Menu ){ ?>
                    <option value=<?php echo $Menu['id_menu'] ;?>> <?php echo $Menu['nm_menu']; ?> </option>
                 <?php }?>
                </select>
		<?php echo $form->error($Katagory,'Menu_id_menu'); ?>
	</div>
        <div class="row buttons">
                <button type="submit" class="btn btn-default" >
                    <i class="glyphicon glyphicon-download-alt icon-white"></i> 
                    Save</button>
        </div> 

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>
</div>
</div>
</div>