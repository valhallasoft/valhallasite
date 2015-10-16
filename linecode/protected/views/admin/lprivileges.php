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
                                <!-- 
                                <li><a href="index.php?r=admin/aviews"><i class="glyphicon glyphicon-plus"></i> Add View</a></li>
                                -->
                                
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
            <a href="index.php?r=admin/lprivileges&fitback=3">Privileges</a>
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
<div class="row">
    <div class="box col-sm-12 col-sm-12">
        <div class="box-inner">
            <div style="display: block;" class="box-content">
                <?php 
                    if($fitback == 1){ ?>                
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Well done!</strong> Data has been deleted <i class="glyphicon glyphicon-trash icon-white"></i>    
                </div>
                <?php }elseif ($fitback == 2 ) { ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Oh snap!</strong> Data not deleted <i class="glyphicon glyphicon-trash icon-white"></i>
                </div>
                <?php }elseif ($fitback == 3 ){ ?>
                        
                <?php }elseif($fitback == 4){ ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Well done!</strong> Data successfully added <i class="glyphicon glyphicon-plus-sign icon-white"></i>    
                </div>    
                <?php }else{
                    
                }
                ?>
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                    <table aria-describedby="DataTables_Table_0_info" id="DataTables_Table_0" class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable">
                    <thead>
                        <tr role="row">
                            <th aria-label="Hak : activate to sort column descending" aria-sort="ascending" style="background: transparent" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="sorting_asc">Hak</th>
                            
                            </tr>
                    </thead>
                    <tbody aria-relevant="all" aria-live="polite" role="alert">
                        
                            <?php foreach($haks as $hak){ ?>
                        <tr class="odd">
                            <td class="  sorting_1"> <?php echo $hak['nm_hak']; ?> </td>
                        </tr>
                            <?php } ?>
                        
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
</div>
    </div>
    </div>