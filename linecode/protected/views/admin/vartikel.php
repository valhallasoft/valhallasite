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
            <a href="index.php?r=admin/lartikel&fitback=3">Artikel</a>
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

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$datenow = date("h:i:s a d/m/Y");
?>
<?php 
    if($fitback == 1){ ?>                
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Oh snap!</strong> Data is not successfully added<i class="glyphicon glyphicon-trash icon-white"></i>
</div>
<?php }elseif ($fitback == 2 ) { ?>

<?php } ?>
<div> Created By <b> <?php echo $Artikel['png_artikel'] ?> </b> tanggal <b><?php echo $Artikel['tgl_artikel']; ?></b> like <b><?php echo $Artikel['like_artikel'] ?> </b>dislike <b><?php echo $Artikel['con_artikel'] ?></b></div>
<hr>
<div class="form" style="padding: 10px;">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'artikel-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($Artikel); ?>

	<div class="row">
		<?php echo $form->labelEx($Artikel,'Judul artikel'); ?>
		<?php echo $form->textField($Artikel,'jdl_artikel',array('size'=>45,'maxlength'=>45,'style'=>'width:100%')); ?>
		<?php echo $form->error($Artikel,'jdl_artikel'); ?>
	</div>

	<?php if($id == 3){ ?>
            <div class="row">
		<?php echo $form->labelEx($Artikel,'isi artikel'); ?>                
		<?php echo $form->textArea($Artikel,'isi_artikel',array('rows'=>6, 'cols'=>50,'style'=>'width:100%','height'=>200)); ?>
                <script>
                    CKEDITOR.replace( "Artikel_isi_artikel" );
                </script>
		<?php echo $form->error($Artikel,'isi_artikel'); ?>
            </div>
        <?php }else{ ?>
            <div class="row">
		<?php echo $form->labelEx($Artikel,'isi_artikel'); ?>
		<?php echo $form->textArea($Artikel,'isi_artikel',array('rows'=>2, 'cols'=>50,'style'=>'width:100%','placeholder'=>'path/url;count image Contoh penulisan " image/nama_album/;12 " ')); ?>
		<?php echo $form->error($Artikel,'isi_artikel'); ?>
            </div>
        <?php } ?>

	<div class="row">
		<?php echo $form->labelEx($Artikel,'tanggal artikel'); ?>
		<?php echo $form->textField($Artikel,'tgl_artikel',array('size'=>45,'maxlength'=>45,'readonly'=>'false','value'=>$datenow,'style'=>'width:25%')); ?>
		<?php echo $form->error($Artikel,'tgl_artikel'); ?>
	</div>
	<div class="row">
		<?php echo $form->hiddenField($Artikel,'like_artikel'); ?>
	</div>
	<div class="row">
		<?php echo $form->hiddenField($Artikel,'con_artikel'); ?>
	</div>
	<div class="row">
		<?php echo $form->hiddenField($Artikel,'png_artikel',array('size'=>45,'maxlength'=>45)); ?>
	</div>
        <div class="row">
           <label >Katagory</label>
           <div class="checkbox required">
           <?php $i=$x=0;
                 $ava=False ;
               foreach ($katagorys as $katagory){
                   $i++; 
                   foreach($KHA as $kha){
                       if($katagory['id_katagory'] == $kha['katagory_id_katagory']){ 
                           $x++;
                       }
                   }if($x >= 1 ){ ?>
                            <label class="checkbox-inline" style="margin-left:0px;">        
                              <input id="inlineCheckbox" value="<?php echo $katagory['id_katagory']; ?>" name="a[]" type="checkbox" checked><?php echo $katagory['nm_katagory']; ?>
                           </label>
                <?php  }else{ ?>
                            <label class="checkbox-inline"  style="margin-left:0px;">        
                                <input id="inlineCheckbox" value="<?php echo $katagory['id_katagory']; ?>" name="a[]" type="checkbox"><?php echo $katagory['nm_katagory']; ?>
                            </label>
              <?php    }
                   $x = 0;
               }?>
               </div>
        </div>
	<div class="row buttons">
                <button type="submit" class="btn btn-default" name="myBtn" id="myBtn" disabled>
                    <i class="glyphicon glyphicon-download-alt icon-white"></i> 
                    Save</button>
        </div> 
        <hr>
<?php $this->endWidget(); ?>
        <button onclick="myFunction()" id='bot1' type="submit" class="btn btn-success">
            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
            Edit</button>
        <button onclick="myFunction1()" id='bot2' type="submit" class="btn btn-success" style="display: none;">
            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
            batal Edit</button>
        <a class="btn btn-danger" href="index.php?r=admin/dartikel&pk=<?php echo $Artikel['id_artikel'] ?>"  onclick="return confirm('Are you sure you want to delete this item?');">
            <i class="glyphicon glyphicon-trash icon-white"></i>
             Delete </a>
        </a>
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