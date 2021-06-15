<style>
    .sidebar_mob{
        width: 80% !important;
        top: 0px;
    }
    .logo{
        margin-left: 2rem;
        width: 150px;
    }
</style>

<header class="site_header p1 lshd">
        <div class="container">
            <div class="row bod justify-content-between align-items-center">
                <div class="col-2  bod text-center ">
                    <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assest/images/logo.svg" alt="Logo" class="logo"></a>
                </div>
                <div class="col-6 bod">
                    <nav class="nav mhide nav_mob">
                        <ul class="ullstn flex">
                          
                            <a href="<?php echo base_url()?>" class="nodeco">
                                <li class="nav_links bold6">Home</li>
                            </a>
                            <a href="<?php echo base_url()?>brands" class="nodeco">
                                <li class="nav_links">Brand</li>
                            </a>
                            <a href="<?php echo base_url()?>influancer" class="nodeco">
                                <li class="nav_links">Influnecer</li>
                            </a>
                            <a href="<?php echo base_url()?>career" class="nodeco">
                                <li class="nav_links">Career</li>
                            </a>
                            <a href="<?php echo base_url()?>why-us" class="nodeco">
                                <li class="nav_links">Why Us?</li>
                            </a>
                        </ul>

                    </nav>
                </div>
                <div class="col-3 dhide mblock bod text-center">
                <span class="" onclick="w3_open()"><i class="fas fa-bars nav_hb"></i></span>
                </div>
            </div>
        </div>
    </header>

    <div class="sidebar_mob fxd lshd dhide mblock" id="sidemob">
        <ul class="lstn">
            <li class="sidebar_mob-link txtr" onclick="w3_close()"><i class="fas fa-times"></i></li>
            <a href="<?php echo base_url()?>" class="nodeco">
                <li class="sidebar_mob-link">Home</li>
            </a>
            <a href="<?php echo base_url()?>brands" class="nodeco">
                <li class="sidebar_mob-link">Brand</li>
            </a>
            <a href="<?php echo base_url()?>influancer" class="nodeco">
                <li class="sidebar_mob-link">Influencer</li>
            </a>
            <a href="<?php echo base_url()?>career" class="nodeco">
                <li class="sidebar_mob-link">Carrer</li>
            </a>
            <a href="<?php echo base_url()?>why-us" class="nodeco">
                <li class="sidebar_mob-link">Why Us</li>
            </a>

        </ul>
    </div>


    <script>
        // W3 Open
        function w3_open() {
            document.getElementById("sidemob").style.display = "block";
        }

        // W3 Close
        function w3_close() {
            document.getElementById("sidemob").style.display = "none";
        }
    </script>