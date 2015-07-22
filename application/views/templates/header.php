<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo BASE_URL ?>">Voluntord</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href='<?php echo BASE_URL ?>account/'>Account</a></li>
        <li><a href='<?php echo BASE_URL ?>volunteer/'>Volunteer Hours</a></li>
        <?php if ($admin): ?><li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administrator<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
    	<?php endif; ?>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <?php if ($logged_in): ?><li><a href='<?php echo BASE_URL ?>logout/'>Logout</a></li><?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<div class='container'>