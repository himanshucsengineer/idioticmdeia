<style>
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
                                        <input type="number" class="instyle form_bb" placeholder="Phone Number"
                                            name="mob">
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






    </main>
