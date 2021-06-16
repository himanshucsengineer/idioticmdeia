<style>
 .content {
  position: relative;


  overflow: hidden;
}

.content .content-overlay {
  background: rgba(0,0,0,0.7);
  position: absolute;
  height: 99%;
  width: 100%;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  opacity: 0;
  -webkit-transition: all 0.4s ease-in-out 0s;
  -moz-transition: all 0.4s ease-in-out 0s;
  transition: all 0.4s ease-in-out 0s;
}

.content:hover .content-overlay{
  opacity: 1;
}



.content-details {
  position: absolute;
  text-align: center;
  padding-left: 1em;
  padding-right: 1em;
  width: 100%;
  top: 50%;
  left: 50%;
  opacity: 0;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.content:hover .content-details{
  top: 50%;
  left: 50%;
  opacity: 1;
}

.content-details h3{
  color: #fff;
  font-weight: 500;
  letter-spacing: 0.15em;
  margin-bottom: 0.5em;
  text-transform: uppercase;
}

.content-details p{
  color: #fff;
  font-size: 0.8em;
}

.fadeIn-bottom{
  top: 80%;
}



</style>
<main class="main">
<div class="spacer"></div>
<div class="spacer"></div>
<div class="spacer"></div>
    <div class="spacer"></div>
        <!-- whyus 2 of 2 -->
        <section class="sec_2 section-s bod">
            <div class="container_m">

                <!-- About Headings -->
                <div class="row">
                    <div class="col text-center">
                        <div class="p2">
                            <h1>About Us</h2>
                        </div>
                        <div class="p2">
                            <?php foreach($about as $value){ if($value['sec']=="about"){?>
                            <p><?php echo $value['content']?></p>
                            <?php }}?>
                        </div>
                    </div>
                </div>
                <!-- End About Headings -->

                <div class="spacer"></div>

                <!-- Our Vision Headings -->
                <div class="aboutblock">

                    <div class="row">
                        <div class="col pxy2">
                            <div class="p2">
                                <h1 class="cs_hl">Our Vision</h2>
                            </div>
                            <div class="">
                            <?php foreach($about as $value){ if($value['sec']=="vision"){?>
                                <h4 class="thin_s"><?php echo $value['head']?>
                                </h4>
                                <?php }}?>
                            </div>
                        </div>
                    </div>
                    <!-- End Headings -->

                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="pxy2 bod">
                            <?php foreach($about as $value){ if($value['sec']=="vision"){?>
                                <p><?php echo $value['content']?></p>
                            <?php }}?>
                            </div>
                        </div>
                       
                    </div>

                </div>



                <!-- Core Team Block Vision Headings -->
                <div class="aboutblock">

                    <div class="row">
                        <div class="col pxy2">
                            <div class="p2">
                                <h1 class="cs_hl ">Core Team</h2>
                            </div>
                            <div class="">
                            <?php foreach($about as $value){ if($value['sec']=="core"){?>
                                <h4 class="thin_s"><?php echo $value['head']?>
                                </h4>
                            <?php }}?>
                            </div>
                        </div>
                    </div>
                    <!-- End Headings -->

                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="pxy2 bod">
                            <?php foreach($about as $value){ if($value['sec']=="core"){?>
                                <p><?php echo $value['content']?></p>
                                <?php }}?>
                            </div>
                        </div>
                        
                    </div>

                </div>



                <!-- ABout Image Block -->
                <div class="row jcse ">
                <?php foreach($about as $value){ if($value['sec']=="team"){?>
                    <div class="col-md-3 pxy3 col-6">
                       
                            <div class="content lshd tellus_card">
                                <div class="content-overlay"></div>
                                <img class="content-image img100 h-100" src="<?php echo base_url()?>upload/aboutus/<?php echo $value['file']?>">
                                <div class="content-details fadeIn-bottom">
                                    <h3 class="content-title"><?php echo $value['name']?></h3>
                                    
                                </div>
                            </div>
                    
                   
                        

                    </div>
                <?php }}?>
                  
                    

                </div>

                <!-- End Image Block -->


                <div class="aboutblock">

                    <div class="row">
                        <div class="col-md-6 pxy3">
                            <div class="p2">
                                <h1 class="cs_hl">Idiotic Media HQ</h2>
                            </div>
                            <div class="p2">
                            <?php foreach($about as $value){ if($value['sec']=="hq"){?>
                                <h4 class="thin_s"><?php echo $value['head']?></h4>
                            <?php }}?>
                            </div>
                            <?php foreach($about as $value){ if($value['sec']=="hq"){?>
                            <div class="p1">
                               <?php echo $value['address']?>
                            </div>
                            <?php }}?>

                        </div>
                        <div class="col-md-6 pxy3">

                            <img src="<?php echo base_url()?>assest/images/normals/aboutimg.jpg" alt="" class="w-100">
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Of Section 2 -->

    </main>


    <div class="spacer"></div>