<main class="main">


    <!--  2 of 2 -->
    <section class="sec_2 section-s bod">
        <div class="container_m">

            <div class="row lshd">
                <div class="col-md-6 bod pxy3">
                    <?php if ($this->session->flashdata('success')) {
                        echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                    } else if ($this->session->flashdata('error')) {
                        echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                    }


                    ?>
                    <div class="p2">
                        <h2 class="bold6">Send Us a Message</h2>
                    </div>

                    <div class="p3">

                        <form action="<?php echo base_url() ?>frontend/contact/insert_data" method="post">
                            <div class="mb-5">
                                <div>
                                    <input type="text" class="instyle inf_form " placeholder="Name" name="name">
                                </div>
                                <div><span></span></div>
                            </div>
                            <div class="mb-5">
                                <div>
                                    <input type="email" class="instyle inf_form" placeholder="Email" name="email">
                                </div>
                                <div><span></span></div>
                            </div>
                            <div class="mb-5">
                                <div>
                                    <input type="number" class="instyle inf_form" placeholder="Indian (+91) Mobile Number" name="mob">
                                </div>
                                <div><span></span></div>
                            </div>
                            <div class="mb-5">
                                <div>
                                    <input type="text" class="instyle inf_form" placeholder="LinkedIn Profile" name="linkdin">
                                </div>
                                <div><span></span></div>
                            </div>
                            <div class="mb-5">
                                <div>
                                    <input type="text" class="instyle inf_form" placeholder="Profile Link" name="msg">
                                </div>
                                <div><span></span></div>
                            </div>
                            <div class="mb-2 text-center">
                                <button class="btn form_bb--btn2 ltag w-100">Send</button>
                            </div>
                        </form>
                    </div>


                </div>
                <div class="col-md-6 contact_right bod pxy3">

                    <img src="<?php echo base_url() ?>assest/images/normals/aboutimg.jpg" alt="" class="w-100 contact_right--img1 ">
                    <img src="<?php echo base_url() ?>assest/images/normals/office2.png" alt="" class="w-100 contact_right--img2">

                </div>
            </div>
        </div>
    </section>
    <!-- End Of Section 2 -->


</main>


<div class="spacer"></div>