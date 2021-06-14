<!-- Footer Section -->

<?php 
                        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
                            $url = "https://";   
                        else  
                            $url = "http://";   
                                // Append the host(domain name, ip) to the URL.   
                            $url.= $_SERVER['HTTP_HOST'];   
                            // Append the requested resource location to the URL   
                            $url.= $_SERVER['REQUEST_URI'];    
                            $_SESSION['url'] =$url;
                    ?>
<footer class="footer_1 p3">
        <div class="container">

            <!-- Footer View -->
            <div class="row jcc">
                <div class="col-md-10">
                    <div class="row jcsb">
                        <div class="col-md-6 pxy2 bod">
                            <h4 class="p1">Company Icon</h4>
                            <p class="p1">India's top influencer marketing platform for campaigns on Instagram, YouTube,
                                TikTok and
                                more.
                            </p>
                            <?php
							$socials_datas=Utility::getsocial();
							//print_r($socials_datas->insta);
            ?>  
                            <div class="flex">
                                <a href="<?php echo $socials_datas->facebook;?>" target="_blank"> <img src="<?php echo base_url()?>assest/images/icons/fb_icon.svg" alt="" class="icon_s"></a>
                                <a href="<?php echo $socials_datas->insta;?>" target="_blank"> <img src="<?php echo base_url()?>assest/images/icons/insta_icon.svg" alt="" class="icon_s"></a>
                                <a href="<?php echo $socials_datas->linkedin;?>" target="_blank"> <img src="<?php echo base_url()?>assest/images/icons/li_icon.svg" alt="" class="icon_s"></a>
                                <a href="<?php echo $socials_datas->you;?>" target="_blank"> <img src="<?php echo base_url()?>assest/images/icons/yt_icon.svg" alt="" class="icon_s"></a>
                            </div>
                        </div>
                        <div class="col-md-3 pxy2 bod">
                            <h4 class="p1">Company</h4>
                            <ul class="ullstn">
                                <li class="p1"> <a href="<?php echo base_url()?>" class="nodeco footer_1--links">Home</a>
                                <li class="p1"> <a href="<?php echo base_url()?>about-us" class="nodeco footer_1--links">About Us</a>
                                <li class="p1"> <a href="<?php echo base_url()?>career" class="nodeco footer_1--links">Career</a>
                                <li class="p1"> <a href="<?php echo base_url()?>contact-us" class="nodeco footer_1--links">Contact Us</a>

                            </ul>
                        </div>
                        <div class="col-md-3 pxy2 bod">
                            <h4 class="p1">Platform</h4>
                            <ul class="ullstn">
                                <li class="p1"> <a href="<?php echo base_url()?>brands" class="nodeco footer_1--links">Signup As Brand</a>
                                <li class="p1"> <a href="<?php echo base_url()?>influancer" class="nodeco footer_1--links">Join As Influncer</a>
                                <li class="p1"> <a href="<?php echo base_url()?>why-us" class="nodeco footer_1--links">Why Us?</a>
                               

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer View -->

            <!--  -->
            <div class="row jcc">
                <div class="col-md-11">
                    <div class="row jcse p3 footer_1--bottombar">
                        <div class="col-md-5">
                            <p class="bold6 stag">Copyright@ IdioticMedia </p>
                        </div>
                        <div class="col-md-3">
                            <p><span class="stag dim">Creacted By Codevweb</span></p>
                        </div>
                    </div>

                </div>
            </div>

            <!--  -->


        </div>
    </footer>
    <!-- Footer Section -->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Slick-Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Main Script Tag -->
    <script>
        $('.logo_slider').slick({

            slidesToShow: 4,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.logo_slider_new').slick({

slidesToShow: 10,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 2000,
responsive: [
    {
        breakpoint: 768,
        settings: {
            slidesToShow: 5,
            slidesToScroll: 1
        }
    }
]
});
    </script>
    <!-- Main Script Tag -->
  
</body>

</html>