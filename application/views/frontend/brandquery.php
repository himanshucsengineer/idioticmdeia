<style>
    .form_bb--btn2{
        width: 100% !important;
    }
    .goot_at_flex{
        width: 100%;
        height: 300px;
        display: flex;
        flex-wrap: wrap;
        overflow-x: auto;
    }
    .goot_at_flex .goot_at_card{
        width: 33%;
        height: auto;
        padding: .5rem;
    
    }
    .goot_at_flex .goot_at_card .good_at_inner_card{
        width: 100%;
        height: auto;
    }
    .goot_at_flex .goot_at_card .good_at_inner_card img{
        width: 100%;
        height: 150px;
        border-radius: 10px;
    }

</style>
 
    

<?php 
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
  $url = "https://";   
else  
  $url = "http://";   
      // Append the host(domain name, ip) to the URL.   
  $url.= $_SERVER['HTTP_HOST'];   
  // Append the requested resource location to the URL   
  $url.= $_SERVER['REQUEST_URI'];    

    
    $cateid= basename($url);
foreach($category as $value){
    if($cateid==$value['id']){
        $catename= $value['name'];
    }
}


?>
<main class="main">
<div class="spacer"></div>
<div class="spacer"></div>
<div class="spacer"></div>
    <div class="spacer"></div>
        <!-- Form brandquery 2 of 2 -->
        <section class="sec_2 section-xs bod">
            <div class="container_m">

                <div class="row jcse">
                    <div class="col-md-6 bod pxy3">
                    <?php
            if ($this->session->flashdata('success')) {
                echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
            } else if ($this->session->flashdata('error')) {
                echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
            }


            ?>
                        <!-- h2 Wordblock heading  -->
                        <div class="wordblock p4">
                            <div class="wordblock__hero">
                                <!-- <div class="p1"><span class="wordblock__tag stag dim">Best of it</span>
                                </div> -->
                                <div class="p1">
                                    <!-- Heading -->
                                    <h1 class="">Great! We are almost set to kickoff a campaign
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <!-- h2 Wordblock end -->


                        <div class="p2">
                            <form action="<?php echo base_url() ?>frontend/brandquery/insert_brand" method="POST">
                                <div class="mb-5">
                                    <div>
                                        <input type="text" class="instyle form_bb" placeholder="Name" name="name">
                                    </div>
                                    <div><span></span></div>
                                </div>
                                <div class="mb-5">
                                    <div>
                                        <input type="email" class="instyle form_bb" placeholder="Email" name="email">
                                    </div>
                                    <div><span></span></div>
                                </div>
                                <div class="mb-5">
                                    <div>
                                    <input type="text" class="instyle form_bb" placeholder="Mobile Number" id="getmobile" name="mob" required onkeyup="checkkk(); return false;" maxlength="10"><span id="messa"></span>
                                      
                                    </div>
                                    <div><span></span></div>
                                </div>
                                <div class="mb-5">
                                    <div>
                                        <input type="text" class="instyle form_bb" placeholder="message" name="msg">
                                    </div>
                                    <div><span></span></div>
                                </div>
                                <div class="mb-2">
                                    <button class="btn form_bb--btn ltag">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-md-5 bod pxy3">

                        <!-- h2 Wordblock heading  -->
                        <div class="wordblock p4">
                            <div class="wordblock__hero">
                                <!-- <div class="p1"><span class="wordblock__tag stag dim">Best of it</span>
                                </div> -->
                                <div class="p1">
                                    <!-- Heading -->
                                    <h1 class="">We're Kinda Good At What We Do!
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <!-- h2 Wordblock end -->
                        <div class="goot_at_flex">
                            <?php foreach($casedata as $val){if($catename == $val['cate']){?>
                            <div class="goot_at_card">
                                <a href="<?php echo base_url()?>casestudy/<?php echo $val['link']?>"><div class="good_at_inner_card">
                                    <img src="<?php echo base_url()?>upload/casestudy/<?php echo $val['fetured']?>" alt="">
                                </div></a>
                            </div>
                            <?php }}?>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Of Section 2 -->



        <div class="modal fade" id="brandverimodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content pxy4">
            <div class="p1 flex jce">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <?php if ($this->session->flashdata('successinfu')) {
                echo '<div class="alert alert-success">' . $this->session->flashdata('successinfu') . '</div>';
            } else if ($this->session->flashdata('errorbrandari')) {
                echo '<div class="alert alert-danger">' . $this->session->flashdata('errorbrandari') . '</div>';
            }


            ?>
            <div class="p1 text-center">
                <p class="ltag dim">Please enter the one time password to verify your account</p>
                <p class="ltag dim">Your Code Has Been Sent On <?php echo $_SESSION['brand_email']?></p>
            </div>
            
            
            <form action="<?php echo base_url() ?>frontend/brandquery/verify_brand" method="POST" >
                

               <input type="hidden" name="brand_name" value="<?php echo $_SESSION['brand_name']?>">
               <input type="hidden" name="brand_email" value="<?php echo $_SESSION['brand_email']?>">
               <input type="hidden" name="brand_mob" value="<?php echo $_SESSION['brand_mob']?>">
               
               <input type="hidden" name="brand_msg" value="<?php echo $_SESSION['brand_msg']?>">
             
               <input type="hidden" name="ses_otp" value="<?php echo $_SESSION['brand_otp']?>">
              

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









    <script type="text/javascript">
    var na = "<?php echo $_SESSION['brand_name']?>";
    if(na != ''){
        $(window).on('load', function() {
        $('#brandverimodal').modal('show');
    });
    }

   
</script>

    <script>
  function checkkk()
{

    var mobi = document.getElementById('getmobile');
   
    
    var messa = document.getElementById('messa');

   var goodColor = "#0C6";
    var badColor = "#FF0000";
  
    if(mobi.value.length!=10){
        messa.style.color = badColor;
        messa.innerHTML = "Please Enter Valid Mobile No."
    }
    else{
        messa.style.color = goodColor;
        messa.innerHTML = "Valid Mobile No."
    }
    
}
  
  </script>




<?php
   
    $errorbrandvari = $this->session->flashdata('errorbrandvari');
 ?>

<script>
      var errorbrandvari = "<?php echo $errorbrandvari ?>";

      if (errorbrandvari != "") {
        $(document).ready(function() {
            $("#brandverimodal").modal('show');
        });
    }
</script>