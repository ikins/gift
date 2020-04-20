<div class="top-cood">
    <div class="container">
      <div class="row">
        <div class="col-md-3 text-center">
          <a href="<?php echo base_url() ?>" title="Webcood Web Development"><img class="logo" src="<?php echo base_url("assets/images/"); ?>webcood-logo-l.png"/>
          </a>
        </div>
        <div class="col-md-6 col-sm-4 text-center">
          <div class="nav-service">
            <ul>
                <li class="web-development"><a href="<?php echo base_url() ?>web-development"> <i class="fa fa-globe"></i> Web Development</a></li>
                <li class="mobile-app-development"><a href="<?php echo base_url() ?>mobile-app-development"> <i class="fa fa-mobile"></i> Mobile App Development</a></li>
              </ul>   
          </div>
        </div>
        <div class="col-md-3 live-chat">
          <button type="button" class="btn bg-orange btn-flat margin"> <i class="fa fa-comment"></i> Chat with us </button>
        </div>
      </div>
    </div>
</div>

<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url(); ?>portal" class="navbar-brand"><b>Webcood Portal</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Layanan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url(); ?>portal/my-services">My Services</a></li>
                <li><a href="<?php echo base_url(); ?>portal/order">Order New Service</a></li>
                <li><a href="<?php echo base_url(); ?>portal/order-add-on">Add On Service</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-calculator"></i> Billing <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url(); ?>portal/my-invoices">My Invoice</a></li>
                <li><a href="<?php echo base_url(); ?>portal/request-invoice">Request Invoice</a></li>
                <li><a href="<?php echo base_url(); ?>portal/add-fund">Add Funds</a></li>
                <li><a href="<?php echo base_url(); ?>portal/refund">Refund</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i> Support <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url(); ?>portal/submit-ticket">Submit Ticket</a></li>
                <li><a href="<?php echo base_url(); ?>portal/tickets">Tickets</a></li>
                <li><a href="<?php echo base_url(); ?>portal/downloads">Downloads</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url() ?>portal/affiliates"> <i class="fa fa-users"></i> Affiliates </a></li>
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
            <li>
              <a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a>
            </li>
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
                    <a href="<?php echo base_url(); ?>portal" class="btn btn-default btn-flat">Dashboard Portal</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url(); ?>portal/logout" class="btn btn-default btn-flat">Sign out</a>
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