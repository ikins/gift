<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url(); ?>" class="navbar-brand"><b>Sintra Giat</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-list"></i> Pages <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url(); ?>cood-admin/pages">Pages</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-road"></i> Profiles <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url(); ?>cood-admin/contact-us">Contact Us</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-road"></i> Settings <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url(); ?>cood-admin/setting">Profiles Setting</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <?php if (!isset($nama)) { ?>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="<?php if(($this->uri->segment(1)=="register") || ($this->uri->segment(1)=="login")){echo "active";}?>">
              <a href="<?php echo base_url(); ?>login"><i class="fa fa-user"></i> Login</a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
        <?php } else { ?>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu <?php if($this->uri->segment(1)=="users"){echo "active";}?>">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <i class="fa fa-user"></i>
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Hi, <?php echo $nama; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <p>
                    <?php echo $nama; ?>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo base_url(); ?>cood-admin/dashboard" class="btn btn-default btn-flat">Dashboard Portal</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url(); ?>cood-admin/logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>

          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
        <?php } ?>
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>