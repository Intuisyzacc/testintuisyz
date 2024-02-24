<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.php">INTUISYZ</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Account <b class="caret"></b></a>
             <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul> 
          </li> -->
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <!-- <li><a href="javascript:;">Profile</a></li> -->
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
       
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class=<?php echo (basename($_SERVER['PHP_SELF']) == "index.php")?"active":"";?> ><a href="index.php"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li class=<?php echo (basename($_SERVER['PHP_SELF']) == "list_apps.php")?"active":"";?> ><a href="list_apps.php"><i class="icon-list-alt"></i><span>Applications</span> </a> </li>
        <li class=<?php echo (basename($_SERVER['PHP_SELF']) == "add_vac.php")?"active":"";?> ><a href="add_vac.php"><i class="icon-list-alt"></i><span>Add Vacancy</span> </a> </li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == "list_enq.php")?"active":"";?> ><a href="list_enq.php"><i class="icon-facetime-video"></i><span>Enquiries</span> </a></li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == "exp-data.php")?"active":"";?> ><a href="exp-data.php"><i class="icon-file"></i><span>Export Data</span> </a></li>
        
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<script type="text/javascript">
  window._mfq = window._mfq || [];
  (function() {
    var mf = document.createElement("script");
    mf.type = "text/javascript"; mf.defer = true;
    mf.src = "//cdn.mouseflow.com/projects/eec0f1fc-c67c-4e49-b980-3506992571cd.js";
    document.getElementsByTagName("head")[0].appendChild(mf);
  })();
</script>
