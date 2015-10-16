<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name; ?>
<nav class="navbar navbar-default" width=100% style="margin-bottom: 0px;radius:0px;background-color: black;border: 0px;color: transparent;">
 <div class="container-fluid" style="border: 1px solid ;background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/nav.png)";>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav">
          <li> <a class="hvr-underline-from-center" style="color: white;" href="index.php">Home </a> </li>
        <?php 
        $i = 1 ;
        $nm = NULL;
        foreach($menus as $menu){  
            if($nm==$menu['nm_menu']){
                break;
            }else{
                $nm=$menu['nm_menu']; ?>
                <li class="dropdown"> 
                    <a class="hvr-underline-from-center" syle="color: white;" href="index.php?r=site/searchmenu&pk=<?php echo $menu['id_menu']; ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php echo $menu['nm_menu'] ; ?>  <span class="caret"></span></a> 
                    <ul class="dropdown-menu">
         <?php foreach ($katagorys as $katagory){  ?>
          <?php      if($katagory['Menu_id_menu']==$menu['id_menu']){ ?>
                    <li><a class="hvr-overline-reveal" href="index.php?r=site/katview&pk=<?php echo $katagory['id_katagory']; ?>"> <?php echo $katagory['nm_katagory'] ?> </a></li>
               <?php }
          ?>        
          <?php }?>  </ul>
                </li> 
        <?php } } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
<div style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/b.png);color:white;padding: 0px 45px 5px 45px; height:20px;"> 
    <div align="right" style="float:right">
        <a href="http://www.facebook.com/riotdesign.eu" target="_blank" class="fa fa-facebook"> </a>&nbsp;
        <a href="http://www.facebook.com/riotdesign.eu" target="_blank" class="fa fa-github"> </a>&nbsp;
        <a href="http://www.facebook.com/riotdesign.eu" target="_blank" class="fa fa-youtube"> </a>&nbsp;
    </div>
</div>
<div style="padding: 20px;">
    <div class="row">
    </div>
    <div class="row" >
        <div class="col-sm-9">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                    <table aria-describedby="DataTables_Table_0_info" id="DataTables_Table_0" class="table bootstrap-datatable datatable dataTable" >
                    <thead>
                        <tr role="row">
                            <th aria-label="Terbaru : activate to sort column descending" aria-sort="ascending" style="background: transparent" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="sorting_asc">Latest</th>
                            </tr>
                    </thead>
                    <tbody aria-relevant="all" aria-live="polite" role="alert">
                        
                            <?php foreach($Artikels as $Artikel){ ?>
                        <tr class="odd">
                            <td class="  sorting_1"  style=" padding: 10px 40px 10px 40px;"> 
                                <div class="row">
                                    <div class="row" >
                                        <div class="col-sm-9">
                                           <a href="index.php?r=site/view&pk=<?php echo $Artikel['id_artikel']?>">
                                                 <b style="font-size:20px;"><?php echo $Artikel['jdl_artikel'];?> </b>
                                             </a>
                                        </div>
                                        <div class="col-sm-3" style="padding:5px">
                                            <?php echo $Artikel['tgl_artikel'];?>
                                        </div>
                                    </div>
                                    <hr style="margin:0px;">
                                    <div class="row">
                                       created by <?php echo $Artikel['png_artikel']; ?> 
                                       <span class="glyphicon glyphicon-thumbs-up" ></span> <?php echo $Artikel['like_artikel']; ?> 
                                       <span class="glyphicon glyphicon-thumbs-down" ></span> <?php echo $Artikel['con_artikel']; ?>
                                    </div>
                                    <div class="row" >
                                            <hr style="margin:0px;">
                                <?php if($Artikel['id'] == 3){ ?>
                                        <?php echo $Artikel['isi_artikel'];?>
                                <?php }else{ 
                                    $isi = explode(';',$Artikel['isi_artikel']);
                                    ?>
                                        <div class="col-sm-5">
                                            <img width="150px" height="250px" src="<?php echo Yii::app()->request->baseUrl."/".$isi[0]; ?>/01.jpg">
                                            <img width="150px" height="250px" src="<?php echo Yii::app()->request->baseUrl."/".$isi[0]; ?>/02.jpg">
                                        </div>
                                        <div class="col-sm-7" style="padding:10px 20px 10px 20px;"> 
                                            <table style="font-size:12px;margin:0px;" >
                                                <tr > <td colspan="3"><h3><?php echo $Artikel['jdl_artikel'];?></h3></td></tr>
                                                <tr> <td width="20%" s>Series</td> <td>:</td> <td></td> </tr>
                                                <tr> <td>Artist</td> <td>:</td> <td></td> </tr>
                                                <tr> <td>Translator</td> <td>:</td> <td></td> </tr>
                                                <tr> <td>Language</td> <td>:</td> <td></td> </tr>
                                                <tr> <td>Description</td> <td>:</td> <td></td> </tr>
                                            </table>

                                        </div>
                                <?php } ?>
                                        <hr style="margin:0px;">
                                    </div>
                                    <div class="row" style=";padding-right: 30px;float: right">
                                            <a href="index.php?r=site/view&pk=<?php echo $Artikel['id_artikel']?>">Read More</a>
                                    </div>
                                </div>  
                            </td>
                        </tr>
                            <?php } ?>
                        
                    </tbody>
                    </table>
                </div>
        </div>
        <div class="col-sm-3">
            <div class="box-inner">
                <div class="box-header well" >
                    <h2><i class="glyphicon glyphicon-star-empty"></i> The most favorite</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div style="display: block;" class="box-content" >
                    <?php 
                        $i = 1 ;
                        foreach($hots as $hot){ ?>
                            <a href="index.php?r=site/view&pk=<?php echo $hot['id_artikel']?>"><?php echo $i; ?>. <b><?php echo $hot['jdl_artikel']; ?></b> </a> <br>
                  <?php $i++; }
                    ?>
                </div>
            </div>
            <div class="box-inner" style="margin-top:10px;">
                <div class="box-header well" >
                    <h2><i class="glyphicon glyphicon-star-empty"></i> Katagory</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div id="cal" class="box-content" >
                    <?php 
                        $i = 1 ;
                        foreach($katagorys as $katagory){ ?>
                            <a href="index.php?r=site/katview&pk=<?php echo $katagory['id_katagory']?>"><?php echo $i; ?>. <b><?php echo $katagory['nm_katagory']; ?></b> </a> <br>
                    <?php $i++; }
                    ?>
                </div>
            </div>
            <div class="box-inner" style="margin-top:10px;">
                <div class="box-header well" >
                    <h2><i class="glyphicon glyphicon-star-empty"></i> Katagory</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div id="cal" class="box-content" >
                    <div class="yacal" data-date="2020/10/26" data-near-months="1" data-min-date="2020/4/17" data-max-date="2021/8/24"></div>
                </div>
            </div>
        </div>
    </div>
</div>