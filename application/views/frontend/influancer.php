<style>
 .infu_imag{
     width:100%;

     height: 550px;
     margin-top: 2rem;
     border-radius: 10px;
 }

 .form_bb--btn2{
     width: 100% !important;
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
                            <?php foreach($infu as $value){ if($value['sec']=="first"){?>
                            <h2><?php echo $value['head']?></h2>
                            <img class="infu_imag" src="<?php echo base_url()?>upload/whyus/<?php echo $value['file']?>" alt="">
                            <?php }}?>
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
                                   
                                        <input type="text" class="instyle inf_form" placeholder="Mobile Number" id="getmobil" name="mob" required onkeyup="checkk(); return false;" maxlength="10"><span id="messag"></span>
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
                                <label for="imageUpload"  class="instyle inf_form"> Upload Selfi</label>
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
                <?php foreach($infu as $value){ if($value['sec']=="second"){?>
                    <div class="col-md-6 bod pxy1">

                        <div class="pxy5">
                            <div class="p3">
                                <h2><?php echo $value['head']?></h2>
                            </div>
                            <div class="p2">
                                <p><?php echo $value['content']?></p>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6 bod pxy1 ">


                        <div class="text-center">
                            <img src="<?php echo base_url()?>upload/whyus/<?php echo $value['file']?>" alt="" class="w-100 topbrand_img">
                        </div>




                    </div>
                    <?php }}?>
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
                    <?php foreach($infu as $value){ if($value['sec']=="third"){?>
                        <div class="p1">
                            <h1><?php echo $value['head']?></h1>
                        </div>

                        <div class="p2">
                            <h3><?php echo $value['content']?></h3>
                        </div>
                        <?php }}?>
                        <div class="network_people flex jcc p3">
                        <?php foreach($infu as $value){ if($value['sec']=="net"){?>
                            <img src="<?php echo base_url()?>upload/whyus/<?php echo $value['file']?>" alt="" class="network_people--img">
                        <?php }}?>
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

                        <!--div class="p1 text-center">
                            <h4 class="ltag">
                                GET STARTED
                            </h4>
                        </div-->

                        <div class="row p3">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                            <?php foreach($infu as $value){ if($value['sec']=="left"){?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed ltag cs_hl" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $value['id']?>"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <?php echo $value['head']?>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse<?php echo $value['id']?>" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"><?php echo $value['content']?></div>
                                    </div>
                                </div>
                                <?php }}?>
                                
                               
                            </div>
                        </div>



                    </div>
                    <div class="col-md-6 bod pxy1">

                        <!--div class="p1 text-center">

                            <h4 class="ltag">
                                EARNING
                            </h4>
                        </div-->


                        <div class="row p3">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                            <?php foreach($infu as $value){ if($value['sec']=="right"){?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed ltag cs_hl" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $value['id']?>"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <?php echo $value['head']?>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse<?php echo $value['id']?>" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"><?php echo $value['content']?></div>
                                    </div>
                                </div>
                                <?php }}?>
                                
                                
                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </section>
        <!-- End Of Section 2 -->
        <div class="modal fade" id="infuverimodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content pxy4">
            <div class="p1 flex jce">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <?php if ($this->session->flashdata('successinfu')) {
                echo '<div class="alert alert-success">' . $this->session->flashdata('successinfu') . '</div>';
            } else if ($this->session->flashdata('errorinfuvari')) {
                echo '<div class="alert alert-danger">' . $this->session->flashdata('errorinfuvari') . '</div>';
            }


            ?>
            <div class="p1 text-center">
                <p class="ltag dim">Please enter the one time password to verify your account</p>
                <p class="ltag dim">Your Code Has Been Sent On <?php echo $_SESSION['infu_email']?></p>
            </div>
            
            
            <form action="<?php echo base_url() ?>frontend/influancer/verify_infu" method="POST" >
                

               <input type="hidden" name="name" value="<?php echo $_SESSION['infu_name']?>">
               <input type="hidden" name="email" value="<?php echo $_SESSION['infu_email']?>">
               <input type="hidden" name="mob" value="<?php echo $_SESSION['infu_mob']?>">
               <input type="hidden" name="c_name" value="<?php echo $_SESSION['infu_c_name']?>">
               <input type="hidden" name="p_link" value="<?php echo $_SESSION['infu_p_link']?>">
               <input type="hidden" name="pic" value="<?php echo $_SESSION['infu_pic']?>">
               <input type="hidden" name="ses_otp" value="<?php echo $_SESSION['infu_otp']?>">
              

                <div class="row">
                    <div class="col">
                        <div class="mb-4">
                            <div>
                            <input type="text" class="instyle inf_form" placeholder="Enter Otp" id="getmob" name="otp" required onkeyup="chec(); return false;" maxlength="6"><span id="mes"></span>
                               
                            </div>
                            <div><span></span></div>
                        </div>
                    </div>

                </div>
                <div class="mb-2 text-center">
                    <button class="btn form_bb--btn2 ltag">Verify</button>
                </div>
            </form>
        </div>
    </div>
</div>
    </main>


    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
  

    

<script type="text/javascript">
    var na = "<?php echo $_SESSION['infu_name']?>";
    if(na != ''){
        $(window).on('load', function() {
        $('#infuverimodal').modal('show');
    });
    }

   
</script>

<script>
    $("#imageUpload").change(function() {
  filename = this.files[0].name;
  document.getElementById('imagename').value = filename;
  console.log(filename);
});
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
  function checkk()
{

    var mobil = document.getElementById('getmobil');
   
    
    var messag = document.getElementById('messag');

   var goodColo = "#0C6";
    var badColo = "#FF0000";
  
    if(mobil.value.length!=10){
        messag.style.color = badColo;
        messag.innerHTML = "Please Enter Valid Mobile No."
    }
    else{
        messag.style.color = goodColo;
        messag.innerHTML = "Valid Mobile No."
    }
    
}
  
  </script>


<?php 
    $errorinveri = $this->session->flashdata('errorinfuvari');
 ?>


<script>
  
    var errrveri = "<?php echo $errorinveri ?>";

   
    if (errrveri != "") {
        $(document).ready(function() {
            $("#infuverimodal").modal('show');
        });
    }
</script>