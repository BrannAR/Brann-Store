<nav class="navbar navbar-default fixed-top bg-info">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand text-white" href="#"><img src="<?php echo $logo; ?>" height="50" alt="">  &nbsp;&nbsp;<?php echo $nombreapp; ?></div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php echo $active_home; ?>"><a href="index.php"><b>Página principal</b></a></li>
        <li class=""><a href="login.php"><b><i class="fa fa-user"></i> Ingresar</b></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
