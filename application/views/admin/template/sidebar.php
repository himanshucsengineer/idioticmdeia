
    
    
    


<style>
     .active{
         background-color:#0073aa;
         color:white ;
     }
     .active a:hover{
        background-color:#0073aa !important;
         color:white !important;
     }
   a:hover{
       color:#0073aa !important;
   }
     
     li a{
         color:white !important;
         transition:.5s;
     }
     .fas{
        color:white !important; 
     }
     li{
         transition:.5s;
     }
     li:hover{
         background-color:black !important;
         
     }
     .side{
         background-color:#23282d !important;
         
     }
     
</style>

<?php if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'ON'){
                    $url = "https://";
                }else{
                    $url = "http://";
                }
                $url.= $_SERVER['HTTP_HOST'];
                $url.= $_SERVER['REQUEST_URI'];
                
                
            $parts = basename($url);
            
            
            
                
                ?>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
<div id="col-navigation" class="side">
  <!-- Sidebar -->
  <ul  class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar"  >

    <!-- Sidebar - Brand -->


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php echo ($parts == 'welcome')?"active":""?>">
      <a class="nav-link  " href="<?php echo base_url(); ?>welcome" >
        <i class="fas fa-fw fa-tachometer-alt" style="color:white; font-size:1.5rem;"></i>
        <span >Dashboard</span></a>
        <span class="sr-only"> 
                    (current) 
                </span>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Divider -->
  <!--    <hr class="sidebar-divider">

    <! -- Heading -->
    <div class="sidebar-heading" >
      Home Page
    </div>

    <!-- Nav Item - Charts -->
    
    


    <!-- Nav Item - Tables -->
    

    
    
    
    <li class="nav-item <?php echo ($parts == 'sociallinks')?"active":""?>">
      <a class="nav-link " href="<?php echo base_url(); ?>admin/sociallinks"><i class="fas fa-fw fa-table" ></i><span >Social Links</span></a>
    </li>
    <li class="nav-item <?php echo ($parts == 'whyus')?"active":""?>">
      <a class="nav-link " href="<?php echo base_url(); ?>admin/whyus"><i class="fas fa-fw fa-table" ></i><span >Why Us Page</span></a>
    </li>
    <li class="nav-item ">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#career" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder" ></i>
        <span >Career</span>
      </a>
      <div id="career" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="py-2 collapse-inner rounded">
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/career" style="font-size:1.3rem; ">Create Job</a>
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/interndata" style="font-size:1.3rem; ">Internship Request</a>
          <a class="collapse-item " href="<?php echo base_url(); ?>admin/jobdata" style="font-size:1.3rem; ">Job Request</a>
          <div class="collapse-divider"></div>
        </div>
      </div>
    </li>
   
    <li class="nav-item <?php echo ($parts == 'branddata')?"active":""?>">
      <a class="nav-link " href="<?php echo base_url(); ?>admin/branddata"><i class="fas fa-fw fa-table" ></i><span >Brands Data</span></a>
    </li>
    
    <li class="nav-item <?php echo ($parts == 'infulancerdata')?"active":""?>">
      <a class="nav-link " href="<?php echo base_url(); ?>admin/infulancerdata"><i class="fas fa-fw fa-table" ></i><span >Infulancer Data</span></a>
    </li>

    <li class="nav-item <?php echo ($parts == 'contactdata')?"active":""?>">
      <a class="nav-link " href="<?php echo base_url(); ?>admin/contactdata"><i class="fas fa-fw fa-table" ></i><span >Contact Data</span></a>
    </li>
   
    
  
    <!-- Divider -->
    <!--hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading" >
      User Data
    </div>
    <li class="nav-item <?php echo ($parts == 'user')?"active":""?>">
      <a class="nav-link " href="<?php echo base_url(); ?>admin/user"><i class="fas fa-fw fa-table" ></i><span >Users</span></a>
    </li>
    <li class="nav-item <?php echo ($parts == 'branddata')?"active":""?>">
      <a class="nav-link " href="<?php echo base_url(); ?>admin/branddata"><i class="fas fa-fw fa-table" ></i><span >Brand Data</span></a>
    </li>
    
    <hr class="sidebar-divider"-->

    <!-- Sidebar Toggler (Sidebar) -->
    

  </ul>
  </div>
  
  <!-- End of Sidebar -->