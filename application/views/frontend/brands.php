<style>
    .brand_flecc{
        width: 100%;
        height: auto;
        display: flex;
        flex-wrap: wrap;
    }
    .brand_flecc .brand_card{
        width: 20%;
        height: auto;
        padding: 1rem;
    }
    .brand_flecc .brand_card .inner_card{
        width: 100%;
        height: auto;
    }
    .brand_flecc .brand_card .inner_card img{
        width: 100%;
        height: 250px;
        border-radius: 6px;
        box-shadow: 0 0 22px rgb(125 115 115 / 60%);
    }
    .brand_flecc .brand_card .inner_card button{
        width: 100%;
        height: auto;
        padding: .8rem 0rem;
        border: 2px solid #337ab7;
        background-color: #337ab7;
        outline: none;
        color: #fff;
        font-size: 14px;
        margin-top: 1.5rem;
        border-radius: 6px;
        font-weight: 600;
    }
    @media only screen and (max-width: 600px) {
        .brand_flecc .brand_card{
        width: 50%;
        
    }
    .container_xs{
        max-width: 85% !important;
    }
}
</style>
    <!-- Main -->

    <main class="main">
    <div class="spacer"></div>
<div class="spacer"></div>
<div class="spacer"></div>
    <div class="spacer"></div>
        <!-- Brands -->
        <section class="sec_2 section-xs bod">
            <div class="container_xs">
                <!-- h2 Wordblock heading  -->
                <div class="wordblock p4">
                    <div class="wordblock__hero">
                        <!-- <div class="p1"><span class="wordblock__tag stag dim">Best of it</span>
                        </div> -->
                        <div class="p2">
                            <!-- Heading -->
                            <h1 class="">Our Brands
                            </h1>
                        </div>
                    </div>
                </div>
                <!-- h2 Wordblock end -->

                <!-- row-->
                
                <div class="row jcc">
                    <div class="col-md-12 bod">
                        <div class="logo_slider_new flex">
                            <?php foreach($brands as $value){?>
                            <div class="item">
                                <img src="<?php echo base_url()?>upload/brands/<?php echo $value['file']?>" alt="" class="img100">
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>




            </div>
        </section>


        <!-- Tell us Section -->
        <section class="section-s bod">
            <div class="container_xs">
                <!-- h2 Wordblock heading  -->
                <div class="wordblock p4">
                    <div class="wordblock__hero">
                        <div class="p1"><span class="wordblock__tag stag dim">Step 1 Of 2</span>
                        </div>
                        <div class="p2">
                            <!-- Heading -->
                            <h1 class="">Tell Us What You Need
                            </h1>
                        </div>
                    </div>
                </div>
                <!-- h2 Wordblock end -->

                <!-- row-->

                <!-- tellus Row 1 -->
                <div class="brand_flecc">
                <?php foreach($category as $value){?>
                    <div class="brand_card">
                        <div class="inner_card">
                        <a href="<?php echo base_url()?>brand/query/<?php echo $value['id']?>"><img src="<?php echo base_url()?>upload/casecate/<?php echo $value['file']?>" alt=""></a>
                            <a href="<?php echo base_url()?>brand/query/<?php echo $value['id']?>"><button ><?php echo $value['name']?></button></a>
                        </div>
                    </div>
                    <?php }?>
                </div>

           




            </div>
        </section>




    </main>


    <div class="spacer"></div>
    <div class="spacer"></div>

  


