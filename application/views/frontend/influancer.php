<style>
 .infu_imag{
     width:100%;

     height: 550px;
     margin-top: 2rem;
     border-radius: 10px;
 }
 .accordion-button:not(.collapsed){
    background-color: transparent !important;
    color: #337ab7 !important;
    
 }
 .member_flexx{
    width: 100%;
    height: auto;
    display: flex;
}
.member_flexx .left{
    width: 30%;
    font-size: 14px;
    cursor: pointer;
    
}
.member_flexx .left label{
    background-color: #e4e1e19c;
    cursor: pointer;
    border-radius:4px 0px 0px 4px ;
}
.member_flexx .right{
    width: 70%;
}
 .accordion-button:focus{
     border-color: white !important;
     box-shadow: none !important;
 }
 @media only screen and (max-width: 600px) {
    .infu_imag{
     width:100%;

     height: 400px;
     margin-top: 2rem;
     border-radius: 10px;
 }
 .form_bb--btn2{
     width: 100% !important;
 }
}
</style>
<main class="main">
<div class="spacer"></div>
<div class="spacer"></div>
<div class="spacer"></div>
    <div class="spacer"></div>
        <!-- Influencer 2 of 2 -->
        <section class="sec_2 section-xs bod w-100">
            <div class="container_s">

                <div class="row">
                    <div class="col-md-6 bod pxy1">


                        <div class="spacer"></div>

                        <div class="p3 text-center">
                            <h2>Earn money for your
                                social content</h2>
                            <img class="infu_imag" src="<?php echo base_url()?>assest/images/infu_top_sec.jpg" alt="">
                        </div>




                    </div>
                    <div class="col-md-6 bod pxy1">
                    <?php  if ($this->session->flashdata('success')) {
                                echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                            } else if ($this->session->flashdata('error')) {
                                echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                            }


                            ?>
                        <div class="influencer_form lshd pxy4">

                            <div class="p2">
                                <h2 class="bold6">Join our growing network of Top Influencers</h2>
                            </div>

                            <div class="p3">

                        <form action="<?php echo base_url()?>frontend/influancer/insert_infu" method="post" enctype="multipart/form-data">
                            <div class="mb-5">
                                <div>
                                    <input type="text" class="instyle inf_form " placeholder="Name" name="name">
                                </div>
                                <div><span></span></div>
                            </div>
                            <div class="mb-5">
                                <div>
                                    <input type="email" class="instyle inf_form" placeholder="Email"
                                        name="email">
                                </div>
                                <div><span></span></div>
                            </div>
                            <div class="mb-5">
                                <div>
                                    <input type="number" class="instyle inf_form"
                                        placeholder="Mobile Number" name="mob">
                                </div>
                                <div><span></span></div>
                            </div>
                            <div class="mb-5">
                                <div>
                                    <input type="text" class="instyle inf_form" placeholder="User Channel Name"
                                        name="c_name">
                                </div>
                                <div><span></span></div>
                            </div>
                            <div class="mb-5">
                                <div>
                                    <input type="text" class="instyle inf_form" placeholder="Profile Link"
                                        name="p_link">
                                </div>
                                <div><span></span></div>
                            </div>
                            <div class="mb-5">
                                <div>
                                <div class="member_flexx">
                            <div class="left">
                                <label for="imageUpload"  class="instyle inf_form"> Upload Photo</label>
                                <input id="imageUpload" name="images" style="display:none;" type="file">
                            </div>
                            <div class="right">
                            
                            <input type="text" class="instyle inf_form" id="imagename"  value="" placeholder="Upload Your Photo" readonly>
                            </div>
                        </div>
                                </div>
                                <div><span></span></div>
                            </div>
                            <div class="mb-2 text-center">
                                <button class="btn form_bb--btn2 ltag">Join The NetWork</button>
                            </div>
                        </form>
                    </div>

                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- End Of Section 2 -->
      
   
        <!-- Top Brand 2 of 2 -->
        <section class="sec_2 section-xs bod w-100">
            <div class="container_xs ">

                <div class="row">
                    <div class="col-md-6 bod pxy1">

                        <div class="pxy5">
                            <div class="p3">
                                <h2>Top Brand</h2>
                            </div>
                            <div class="p2">
                                <p>Get access to domain experts in build.</p>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6 bod pxy1 ">


                        <div class="text-center">
                            <img src="<?php echo base_url()?>assest/images/normals/Phone.png" alt="" class="w-100 topbrand_img">
                        </div>




                    </div>
                </div>
            </div>
        </section>
        <!-- End Of Section 2 -->
        <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
        <!-- Network Part 2 of 2 -->
        <section class="sec_2 section-xs bod w-100">
            <div class="container_xs">

                <div class="row aic">
                    <div class="col bod pxy1 text-center">

                        <div class="p1">
                            <h1>Network</h1>
                        </div>

                        <div class="p2">
                            <h3>We Work with the A-Listers of Social Media</h3>
                        </div>

                        <div class="network_people flex jcc p3">
                            <img src="<?php echo base_url()?>assest/images/normals/circle1.jpeg" alt="" class="network_people--img">
                            <img src="<?php echo base_url()?>assest/images/normals/circle4.jpeg" alt="" class="network_people--img neg_mt--left">
                            <img src="<?php echo base_url()?>assest/images/normals/circle2.jpeg" alt="" class="network_people--img neg_mt--left">
                            <img src="<?php echo base_url()?>assest/images/normals/circle3.jpeg" alt="" class="network_people--img neg_mt--left">
                            <img src="<?php echo base_url()?>assest/images/normals/circle1.jpeg" alt="" class="network_people--img neg_mt--left">
                        </div>


                    </div>

                </div>
            </div>
        </section>
        <!-- End Of Section 2 -->

        <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>



        <!-- FAQ 2 of 2 -->
        <section class="sec_2 section-xs bod w-100">
            <div class="container_m">

                <div class="p1 text-center bod">

                    <h2>
                        Frequently Ask Question
                    </h2>
                </div>

                <div class="row p3">
                    <div class="col-md-6 bod pxy1">

                        <div class="p1 text-center">
                            <h4 class="ltag">
                                GET STARTED
                            </h4>
                        </div>

                        <div class="row p3">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed ltag cs_hl" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Who can be an influencer?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            first item's accordion body.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed ltag cs_hl" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            second item's accordion body. Let's imagine this being filled with some
                                            actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed ltag cs_hl" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            third item's accordion body. Nothing more exciting happening here in terms
                                            of content, but just filling up the space to make it look, at least at first
                                            glance, a bit more representative of how this would look in a real-world
                                            application.</div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="col-md-6 bod pxy1">

                        <div class="p1 text-center">

                            <h4 class="ltag">
                                EARNING
                            </h4>
                        </div>


                        <div class="row p3">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed ltag cs_hl" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse4"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Who can be an influencer?
                                        </button>
                                    </h2>
                                    <div id="flush-collapse4" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is
                                            the
                                            first item's accordion body.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed ltag cs_hl" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse5"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="flush-collapse5" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is
                                            the
                                            second item's accordion body. Let's imagine this being filled with some
                                            actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed ltag cs_hl" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse6"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="flush-collapse6" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is
                                            the
                                            third item's accordion body. Nothing more exciting happening here in
                                            terms
                                            of content, but just filling up the space to make it look, at least at
                                            first
                                            glance, a bit more representative of how this would look in a real-world
                                            application.</div>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </section>
        <!-- End Of Section 2 -->

    </main>


    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
  












<script language="javascript" type="text/javascript">
    $(function() {
        $("#fileupload").change(function() {
            $("#dvPreview").html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.png)$/;
            if (regex.test($(this).val().toLowerCase())) {
                if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                    $("#dvPreview").show();
                    $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
                } else {
                    if (typeof(FileReader) != "undefined") {
                        $("#dvPreview").show();
                        $("#dvPreview").append("<img class='thunbnail_image images_preview'/>");
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $("#dvPreview img").attr("src", e.target.result);
                        }
                        reader.readAsDataURL($(this)[0].files[0]);
                    } else {
                        alert("This browser does not support FileReader.");
                    }
                }
            } else {
                alert("Please upload a valid file.");
            }
        });
    });
</script>