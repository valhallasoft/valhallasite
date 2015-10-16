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
                  <a class="hvr-underline-from-center" style="color: white;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php echo $menu['nm_menu'] ; ?>  <span class="caret"></span></a> 
         <?php foreach ($katagorys as $katagory){ 
                if($katagory['id_katagory']==$menu['id_menu']){ ?>
                 <ul class="dropdown-menu">
                    <li><a class="hvr-overline-reveal" href="#"> <?php echo $katagory['nm_katagory'] ?> </a></li>
                 </ul>
          <?php }
?>
          <?php }?>
                </li> 
        <?php } } ?>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
        </div>
      </form>
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
<div class="ch-container">
    <center>
    <div class="row" style="margin: 0px 0px 0px 0px ;padding: 0px 20px 0px 20px;">
        <div class="well center login-box" style="margin-top: 20px;width: 50%;">
            <!-- <div class="alert alert-info"> -->
                <!-- Please login with your Username and Password. -->
            <!-- </div> -->
            <div>
            SearchKatagory
            </div>
        </div>
        <!--/span-->
    </div><!--/row-->
    </center>
</div><!--/fluid-row-->
