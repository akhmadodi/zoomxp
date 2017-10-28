<div class="navbar">
    <!-- Open side - Naviation on mobile -->
    <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up">
      <i class="material-icons">&#xe5d2;</i>
    </a>
    <!-- / -->

    <!-- Page title - Bind to $state's title -->
    <div class="navbar-item pull-left h5" id="pageTitle"></div>

    <!-- navbar right -->
    <ul class="nav navbar-nav pull-right">
      <li class="nav-item dropdown pos-stc-xs">
        <a class="nav-link" href data-toggle="dropdown">
          <i class="material-icons">&#xe7f5;</i>
          <span class="label label-sm up warn">3</span>
        </a>
        <?php $this->load->view('includes/admin/dropdown_notif'); ?>
      </li>
      <li class="nav-item hidden-md-up">
        <a class="nav-link" data-toggle="collapse" data-target="#collapse">
          <i class="material-icons">&#xe5d4;</i>
        </a>
      </li>
    </ul>
    <!-- / navbar right -->
    <?php
    // if ( isset($link_add) ) {
      // $this->load->view('includes/admin/link_add');
    //} ?>
</div>