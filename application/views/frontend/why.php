
<main class="main">

<div class="spacer"></div>
<div class="spacer"></div>
        <!-- whyus 2 of 2 -->
        <section class="sec_2 section-s bod">
            <div class="container_m">

                <!-- Headings -->
                <?php foreach($whyus as $value){ if($value['sec']=="first"){?>
                <div class="row">
                    <div class="col text-center div_margin" >
                        <div class="p2">
                            <h1><?php echo $value['head']?></h2>
                        </div>
                        <div class="p2">
                            <p><?php echo $value['content']?> </p>
                        </div>
                    </div>
                </div>
                <?php }}?>
                <!-- End Headings -->

                <!-- Headings -->
                <?php foreach($whyus as $value){ if($value['sec']=="second"){?>
                <div class="row">
                    <div class="col text-center ">
                        <div class="p2">
                            <h1><?php echo $value['head']?></h2>
                        </div>
                        <div class="p2">
                            <p><?php echo $value['content']?></p>
                        </div>
                    </div>
                </div>
                <?php }}?>
                <!-- End Headings -->

                <div class="spacer"></div>


                <!-- Why Us Cards -->
                <div class="whyus_cards">
                    <div class="row">
                    <?php foreach($whyus as $value){ if($value['sec']=="third"){?>
                        <div class="col-md-6">

                            <div class="whyus_card flex">
                                <div class="whyus_card--icon pxy1 text-center bod">
                                    <img src="<?php echo base_url()?>upload/whyus/<?php echo $value['file']?>" alt="" class="whyus_card--img">
                                </div>
                                <div class="whyus_card--decs pxy1 bod">
                                    <div class="p2">
                                        <h4><?php echo $value['head']?></h4>
                                    </div>
                                    <p><?php echo $value['content']?></p>
                                </div>
                            </div>



                        </div>
                        <?php }}?>
                       
               

                </div>
                <!-- Why Us -->

            </div>
        </section>
        <!-- End Of Section 2 -->

    </main>


    <div class="spacer"></div>