<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<style>
    .form_bb--btn2 {
        width: 100%;
    }

    .hero_withbg--title {
        font-size: 7rem !important;
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
    .wordblock__heading {
        font-weight: 400 !important;
    }

    .slider_flex {
        width: 100%;
        height: auto;
        display: flex;
    }

    .slider_flex .slider_flex_card {
        width: 25%;
        height: auto;
        padding: .5rem;
    }

    .slider_flex .slider_flex_card .inner_card {
        width: 100%;
        height: auto;

    }

    .slider_flex .slider_flex_card .inner_card img {
        width: 100%;
        height: 350px;
    }

    @media only screen and (max-width: 600px) {
        .hero_withbg--title {
            font-size: 4rem !important;
        }

        .slider_flex .slider_flex_card {
            width: 100%;
            height: auto;
            padding: .5rem;
        }
        .container{
            max-width: 90% !important;
        }
    }
</style>
<main>


    <!-- Hero -->
    <section class="hero_withbg">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <!-- Jumbo Wordblock heading h1 Jumbo-->
                    <div class="wordblock p4">
                        <div class="wordblock__hero">

                            <div class="p5">
                                <h1 class="wordblock__heading hero_withbg--title">Lets TechnoForm
                                </h1>
                            </div>
                            <div class="p4">
                                <p class="wordblock__para hero_withbg--para">Lets Achive more Through <span id="txteffect"></span>
                                </p>
                            </div>
                            <div class="p5">
                                <button class="wordblock__btn mbtn hero_withbg--btn" data-bs-toggle="modal" data-bs-target="#infumodal">I am an Influnecer</button>
                                <button class="wordblock__btn mbtn hero_withbg--btn2" data-bs-toggle="modal" data-bs-target="#brandmodal">I am Brand</button>
                            </div>
                        </div>
                    </div>
                    <!-- Wordblock end -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- About Us -->
    <section class="sec_2 section-xs bod">
        <div class="container">
            <div class="row jcc aic">
                <div class="col-md-5">
                    <!-- h2 Wordblock heading  -->
                    <div class="wordblock pxy4 bod">
                        <div class="wordblock__hero text-center">
                            <div class="p1"><span class="wordblock__tag mtag">About Us</span>
                            </div>
                            <div class="p2 ">
                                <?php foreach ($home as $val) {
                                    if ($val['sec'] == "about") { ?>
                                        <h2 class="wordblock__heading"><?php echo $val['head'] ?>
                                        </h2>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                    <!-- Wordblock end -->
                </div>
                <div class="col-md-5">
                    <!-- h2 Wordblock heading  -->
                    <div class="wordblock pxy4 bod">
                        <div class="wordblock__hero text-center">

                            <div class="p1">
                                <?php foreach ($home as $val) {
                                    if ($val['sec'] == "about") { ?>
                                        <p class="wordblock__para"><?php echo $val['content'] ?>
                                        </p>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                    <!-- Wordblock end -->

                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <div class="spacer"></div>

    <!-- Brand Bar -->
    <section class="sec_2 p1 bod w-100">
        <div class="slider">
            <div class="slide-track">
                <?php foreach ($brands as $value) { ?>
                    <div class="slide">
                        <img src="<?php echo base_url() ?>upload/brands/<?php echo $value['file'] ?>" class="brand_img" alt="" />
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- End Brand Bar -->


    <!--Case Studies Slider -->
    <section class="sec_2 section-xs bod">
        <div class="container">
            <!-- h1 Wordblock heading  -->
            <div class="wordblock bod">
                <div class="wordblock__hero text-center">


                    <div class="p1 ">

                        <h1 class="">CASE STUDIES
                        </h1>

                    </div>

                    <div class="p1">
                        <p class="wordblock__para">Just change the Way
                        </p>
                    </div>
                </div>
            </div>
            <!-- Wordblock end -->
            <div class="row jcc">
                <div class="col-md-10 bod">
                    <div class="logo_slider slider_flex">
                        <?php foreach ($casestudy as $value) { ?>
                            <div class="slider_flex_card">
                                <a href="<?php echo base_url() ?>casestudy/<?php echo $value['link'] ?>">
                                    <div class="inner_card">
                                        <img src="<?php echo base_url() ?>upload/casestudy/<?php echo $value['fetured'] ?>" alt="">
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
            <div class="spacer"></div>
            <div class="row jcc">
                <div class="col-md-10 bod text-center">
                    <a href="<?php echo base_url() ?>brands"><button class="btn cs_btn">See All Case Studies </button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Case Studies -->

    <!-- Services -->
    <section class="sec_2 section-xs bod">
        <div class="container">
            <!-- h1 Wordblock heading  -->
            <div class="wordblock bod">
                <div class="wordblock__hero text-center">
                    <!-- <div class="p1"><span class="wordblock__tag mtag">About Us</span>
            </div> -->
                    <div class="p1 ">

                        <h1 class="">How We Get Things Done </h1>

                    </div>

                    <div class="p1">
                        <p class="wordblock__para">Just change the Way
                        </p>
                    </div>
                </div>
            </div>
            <!-- Wordblock end -->


            <!-- Row 1 -->
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row jcc aic">
                        <?php foreach ($home as $val) {
                            if ($val['sec'] == "service") { ?>
                                <div class="col-md-4 p-0">
                                    <!-- Service Card -->
                                    <div class="svc_card text-center">
                                        <img src="<?php echo base_url() ?>upload/home/<?php echo $val['file'] ?>" class="svc_card--icon sv_img" alt="">
                                        <h3 class="svc_card--title p1"><?php echo $val['head'] ?></h3>
                                        <p class="p1"><?php echo $val['content'] ?></p>
                                    </div>
                                    <!-- Service Card -->

                                </div>

                        <?php }
                        } ?>


                    </div>

                </div>
            </div>




        </div>
    </section>
    <!-- End Services -->

    <!-- WhyUs section -->
    <section class="sec_2 section bod">
        <div class="container">
            <!-- h1 Wordblock heading  -->
            <div class="wordblock bod">
                <div class="wordblock__hero text-center">
                    <div class="p1 ">
                        <h1 class="">Why Us ? </h1>
                    </div>
                    <div class="p1">
                        <p class="wordblock__para">What we do to change The world
                        </p>
                    </div>
                </div>
            </div>
            <!-- Wordblock end -->


            <!-- Why US -->

            <div class="row jcc">
                <div class="col-md-10">

                    <!--  Single Row 1 -->
                    <?php foreach ($home as $val) {
                        if ($val['sec'] == "first") { ?>
                            <div class="row bod aic">
                                <div class="col-md-3 bod pxy1 text-center">
                                    <img src="<?php echo base_url() ?>upload/home/<?php echo $val['file'] ?>" alt="" class="img100 wyu_img">
                                </div>
                                <div class="col-md-6 bod text-center bod pxy2">
                                    <h4 class="p2"><?php echo $val['head'] ?></h4>
                                    <p><?php echo $val['content'] ?></p>
                                </div>
                            </div>
                    <?php }
                    } ?>
                    <!-- end Single Row 1 -->

                    <!-- Single Row 2 -->
                    <?php foreach ($home as $val) {
                        if ($val['sec'] == "second") { ?>
                            <div class="row bod jce aic testwu neg_mt">
                                <div class="col-md-6 bod text-center bod pxy2">
                                    <h4 class="p2"><?php echo $val['head'] ?></h4>
                                    <p><?php echo $val['content'] ?></p>
                                </div>
                                <div class="col-md-3 bod pxy1 text-center">
                                    <img src="<?php echo base_url() ?>upload/home/<?php echo $val['file'] ?>" alt="" class="img100 wyu_img">
                                </div>

                            </div>
                    <?php }
                    } ?>
                    <!-- end Single Row 2 -->

                    <!--  Single Row 1 -->
                    <?php foreach ($home as $val) {
                        if ($val['sec'] == "third") { ?>
                            <div class="row bod aic neg_mt">
                                <div class="col-md-3 bod pxy1 text-center">
                                    <img src="<?php echo base_url() ?>upload/home/<?php echo $val['file'] ?>" alt="" class="img100 wyu_img">
                                </div>
                                <div class="col-md-6 bod text-center bod pxy2">
                                    <h4 class="p2"><?php echo $val['head'] ?></h4>
                                    <p><?php echo $val['content'] ?></p>
                                </div>
                            </div>
                    <?php }
                    } ?>
                    <!-- end Single Row 1 -->

                    <!-- Single Row 2 -->
                    <?php foreach ($home as $val) {
                        if ($val['sec'] == "fourth") { ?>
                            <div class="row bod jce aic testwu neg_mt">
                                <div class="col-md-6 bod text-center bod pxy2">
                                    <h4 class="p2"><?php echo $val['head'] ?></h4>
                                    <p><?php echo $val['content'] ?>.</p>
                                </div>
                                <div class="col-md-3 bod pxy1 text-center">
                                    <img src="<?php echo base_url() ?>upload/home/<?php echo $val['file'] ?>" alt="" class="img100 wyu_img">
                                </div>

                            </div>
                    <?php }
                    } ?>
                    <!-- end Single Row 2 -->

                </div>
            </div>

        </div>
    </section>
    <!-- WhyUs section -->


</main>
<div class="modal fade" id="brandmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content pxy4">
            <div class="p1 flex jce">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="p1 text-center">
                <h4 class="">Great! We are almost set to kickoff a campaign</h4>
            </div>
            <div class="p1 text-center">
                <p class="ltag dim">Please fill with your details</p>
            </div>
            <?php
            if ($this->session->flashdata('successinfu')) {
                echo '<div class="alert alert-success">' . $this->session->flashdata('successinfu') . '</div>';
            } else if ($this->session->flashdata('errorinfu')) {
                echo '<div class="alert alert-danger">' . $this->session->flashdata('errorinfu') . '</div>';
            }


            ?>
            <form action="<?php echo base_url() ?>home/insert_brand" method="POST">

                <!-- Fullname and email -->
                <div class="row p2">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <div>
                                <input type="text" name="name" class="instyle inf_form " placeholder="Full name" name="fullname">
                            </div>
                            <div><span></span></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <div>
                                <input type="email" name="email" class="instyle inf_form" placeholder="Email" name="email">
                            </div>
                            <div><span></span></div>
                        </div>

                    </div>
                </div>
                <!-- Fullname and email -->


                <!-- number & Select Option -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <div>
                                <input type="number" name="mob" class="instyle inf_form" placeholder="Mobile Number" name="phone">
                            </div>
                            <div><span></span></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <div>
                                <select name="marketing" id="" class="instyle inf_form">
                                    <option value="">Choose Option</option>
                                    <option value="Influencer Marketing">Influencer Marketing</option>
                                    <option value="Meme Marketing">Meme Marketing</option>
                                    <option value="Content Amplification">Content Amplification</option>
                                    <option value="Social Media Account Management">Social Media Account Management</option>
                                    <option value="Others">Others</option>
                                </select>

                            </div>
                            <div><span></span></div>
                        </div>

                    </div>
                </div>
                <!-- End Email & Select Option -->

                <!-- TextArea  -->
                <div class="row">
                    <div class="col">
                        <div class="mb-4">
                            <div>
                                <textarea name="msg" id="" cols="30" rows="4" class="instyle inf_form" placeholder="Message"></textarea>
                            </div>
                            <div><span></span></div>
                        </div>
                    </div>

                </div>

                <div class="mb-2 text-center">
                    <button class="btn form_bb--btn2 ltag">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>





<div class="modal fade" id="infumodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content pxy4">
            <div class="p1 flex jce">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="p1 text-center">
                <h4 class="">Join our growing network of Top Influencers</h4>
            </div>
            <div class="p1 text-center">
                <p class="ltag dim">Please fill with your details</p>
            </div>
            <?php if ($this->session->flashdata('successbrand')) {
                echo '<div class="alert alert-success">' . $this->session->flashdata('successbrand') . '</div>';
            } else if ($this->session->flashdata('errorbrand')) {
                echo '<div class="alert alert-danger">' . $this->session->flashdata('errorbrand') . '</div>';
            }


            ?>
            <form action="<?php echo base_url() ?>home/insert_infu" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="mb-4">
                            <div>
                                <input type="text" name="name" placeholder="Enter Name" class="instyle inf_form">

                            </div>
                            <div><span></span></div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-4">
                            <div>
                                <input type="email" name="email" placeholder="Email" class="instyle inf_form">

                            </div>
                            <div><span></span></div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-4">
                            <div>
                                <input type="number" name="mob" placeholder="Mobile Number" class="instyle inf_form">

                            </div>
                            <div><span></span></div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-4">
                            <div>
                                <input type="text" name="c_name" placeholder="User / Channel Name" class="instyle inf_form">

                            </div>
                            <div><span></span></div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-4">
                            <div>
                                <input type="text" name="p_link" placeholder="Profile Link" class="instyle inf_form">

                            </div>
                            <div><span></span></div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-4">
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
                    </div>

                </div>





                <div class="mb-2 text-center">
                    <button class="btn form_bb--btn2 ltag">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>



<?php $errorid = $this->session->flashdata('errorinfu');
$succid = $this->session->flashdata('successinfu'); ?>
<?php $errorbrnd = $this->session->flashdata('errorbrand');
$succbrnd = $this->session->flashdata('successbrand'); ?>
<script>
    var errr = "<?php echo $errorid ?>";
    var succ = "<?php echo $succid ?>";
    if (errr != "" || succ != "") {
        $(document).ready(function() {
            $("#brandmodal").modal('show');
        });
    }
</script>


<script>
    var errorbrnd = "<?php echo $errorbrnd ?>";
    var succbrnd = "<?php echo $succbrnd ?>";
    if (errorbrnd != "" || succbrnd != "") {
        $(document).ready(function() {
            $("#infumodal").modal('show');
        });
    }
</script>

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


<script>
    // text Effect
    var app = document.getElementById('txteffect');

    var typewriter = new Typewriter(app, {
        loop: true
    });

    typewriter.typeString('Youtube')
        .pauseFor(2500)
        .deleteAll()
        .typeString('Instagram')
        .pauseFor(2500)
        .deleteAll()
        .typeString('Facebook')
        .start();

    // Texteffect end
</script>


<script>
    $("#imageUpload").change(function() {
  filename = this.files[0].name;
  document.getElementById('imagename').value = filename;
  console.log(filename);
});
</script>