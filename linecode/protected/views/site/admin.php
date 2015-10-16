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
            <form class="form-horizontal" action="" method="post" id="admin-form">
                <div style="font-family:Helvetica,Arial,sans-serif;line-height: 1.1;color: #317EAC;font-size: 30px;margin-bottom: 5px;"> <b>Login Admin</b> </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" name="AdminForm[username]" class="form-control" placeholder="Username">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" name="AdminForm[password]" class="form-control" placeholder="Password">
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-prepend">
                        <label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
                    </div>
                    <div class="clearfix"></div>

                    <p class="center ">
                        <button type="submit"  style="width:30%;" class="btn btn-primary">Login</button>
                    </p>
            </form>
            </div>
        </div>
        <!--/span-->
    </div><!--/row-->
    </center>
</div><!--/fluid-row-->
