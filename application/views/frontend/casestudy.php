<style>
    .ss{
        width: 100%;
        height: 300px;
        margin-bottom: 1.5rem;
    }

</style>
<!-- Main -->
<main class="main">
<div class="spacer"></div>
<div class="spacer"></div>
        <!-- casestudies 2 of 2 -->
        <section class="sec_2 section-s bod">
            <div class="container_m">
                <!-- Logo -->
                <div class="row">
                    <div class="col bod pxy1 text-center">

                        <img src="<?php echo base_url()?>upload/casestudy/<?php echo @$casedata->logo?>" alt="" class="cs_logo">
                        <div class="p1">
                            <p><span class="mtag cs_logo--hl"><?php echo @$casedata->title?></span></p>
                        </div>

                        <!-- ********************************************************* -->
                        <div class="p1">
                            <h4 class="mtag">THAT'S WHAT I LIKE</h4>
                        </div>
                        <div class="p1">
                            <p class="stag"><?php echo @$casedata->likee?></p>
                        </div>

                        <div class="p1"></div>
                        <!-- ****************************************************** -->

                        <div class="p1">
                            <h4 class=" mtag">STRATEGY USED</h4>
                        </div>
                        <div class="">
                            <p class="stag"><?php echo @$casedata->stra?></p>
                        </div>
                        <!-- ******************************************************* -->

                    </div>
                </div>
                <!-- End Logo Content -->

                <!-- Insights -->
                <div class="insight text-center">
                    <div class="p3">
                        <h3 class="cs_hl">INSIGHTS</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 bod pxy1 text-center">
                        <div class="p1">
                            <h4 class="cs_hl"><?php echo @$casedata->eng?></h4>
                        </div>
                        <p class="stag">ENGAGEMENT</p>
                    </div>
                    <div class="col-md-3 bod pxy1  text-center">
                        <div class="p1">
                            <h4 class="cs_hl"><?php echo @$casedata->pages?></h4>
                        </div>
                        <p class="stag">TOTAL PAGES</p>
                    </div>
                    <div class="col-md-3 bod pxy1  text-center">
                        <div class="p1">
                            <h4 class="cs_hl"><?php echo @$casedata->view?></h4>
                        </div>
                        <p class="stag">VIEWS</p>

                    </div>
                    <div class="col-md-3 bod pxy1  text-center">
                        <div class="p1">
                            <h4 class="cs_hl"><?php echo @$casedata->audi?></h4>
                        </div>
                        <p class="stag">AUDIANCE</p>

                    </div>
                </div>

                <div class="row">
                    <?php for($i=1; $i<7; $i++){ $idname = "ss".$i; $vasy = @$casedata->$idname; if($vasy!=''){?>
                    <div class="col-md-4">
                        <img class="ss" src="<?php echo base_url()?>upload/casestudy/<?php echo @$casedata->$idname?>" alt="">
                    </div>
                    <?php }}?>
                </div>
                <!-- End Insights -->
            </div>
        </section>
        <!-- End Of Section 2 -->
    </main>
    <!-- End Main -->


    <div class="spacer"></div>