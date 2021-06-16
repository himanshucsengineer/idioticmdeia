<style>
  .form_bb--btn2{
      width: 100%;
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
@media only screen and (max-width: 600px) {
        .member_flexx .left{
    width: 50%;
    
    
}
.member_flexx .right{
    width: 50%;
}
}
</style>

<main class="main">
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <!-- Carrer 2 of 2 -->
    <?php if ($this->session->flashdata('success')) {
        echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
    } else if ($this->session->flashdata('error')) {
        echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
    }


    ?>
    <section class="sec_2 section-s bod w-100">
        <div class="container_xs">

            <div class="row">
                <div class="col-md-3 bod pxy1">

                    <ul class="lstn">
                        <li id="jobactive" onclick="job();" class="carrer_link   lshd">
                            <h4>Jobs</h4>
                        </li>
                        <li id="internactive" onclick="intern();" class="carrer_link lshd">
                            <h4>Internship</h4>
                        </li>
                    </ul>



                </div>
                <div class="col-md-9 bod pxy1">
               
                    <div id="job">
                        <?php foreach ($career as $value) {
                            if ($value['job_type'] == "Job") { ?>
                                <div class="carrer_desc flex fdc">

                                    <div class="carrer_desc--title carrer_link--active">
                                        <h4><?php echo $value['job_name'] ?></h3>
                                    </div>

                                    <div class="carrer_desc--content lshd">

                                        <table class="table table-borderless pxy2">

                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="carrer_table-head">Location</th>
                                                    <td class="carrer_table-content"><?php echo $value['location'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="carrer_table-head">Experience</th>
                                                    <td class="carrer_table-content"><?php echo $value['exp'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="carrer_table-head">Language</th>
                                                    <td class="carrer_table-content"><?php echo $value['lang'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="carrer_table-head">Job Description</th>
                                                    <td class="carrer_table-content"><?php echo $value['descc'] ?>i</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="carrer_table-head">Job Qualification</th>
                                                    <td class="carrer_table-content"><?php echo $value['quali'] ?></td>
                                                </tr>

                                                <tr>
                                                    <th scope="row" class="carrer_table-head"></th>
                                                    <td class="carrer_table-content carrer_btn">
                                                        <button class="newviesrc btn form_bb--btn ltag" data-bs-toggle="modal" data-bs-target="#jobmodal" data-id="<?php echo $value['job_name'] ?>">Apply</button>
                                                    </td>
                                                </tr>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>





                                </div>
                        <?php }
                        } ?>
                    </div>




                    <div id="intern" style="display: none;">
                        <?php foreach ($career as $value) {
                            if ($value['job_type'] == "intern") { ?>
                                <div class="carrer_desc flex fdc">

                                    <div class="carrer_desc--title carrer_link--active">
                                        <h4><?php echo $value['job_name'] ?></h3>
                                    </div>

                                    <div class="carrer_desc--content lshd">

                                        <table class="table table-borderless pxy2">

                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="carrer_table-head">Location</th>
                                                    <td class="carrer_table-content"><?php echo $value['location'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="carrer_table-head">Experience</th>
                                                    <td class="carrer_table-content"><?php echo $value['exp'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="carrer_table-head">Language</th>
                                                    <td class="carrer_table-content"><?php echo $value['lang'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="carrer_table-head">Job Description</th>
                                                    <td class="carrer_table-content"><?php echo $value['descc'] ?>i</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="carrer_table-head">Job Qualification</th>
                                                    <td class="carrer_table-content"><?php echo $value['quali'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="carrer_table-head"></th>
                                                    <td class="carrer_table-content carrer_btn">
                                                        <button class="internjob btn form_bb--btn ltag" data-bs-toggle="modal" data-bs-target="#internmodal" data-id="<?php echo $value['job_name'] ?>">Apply</button>
                                                    </td>
                                                </tr>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>





                                </div>
                        <?php }
                        } ?>
                    </div>




                </div>
            </div>
        </div>
    </section>
    <!-- End Of Section 2 -->




</main>




<div class="modal fade" id="internmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content pxy4">
            <div class="p1 flex jce">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="p1 text-center">
                <h4 class="">Apply For The Profile</h4>
            </div>
            <div class="p1 text-center">
                <p class="ltag dim">Please fill with your details</p>
            </div>

            <form action="<?php echo base_url() ?>frontend/career/intern_req" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="" name="job_name" id="internname">
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

                            <div class="member_flexx">
                            <div class="left">
                                <label for="imageUpload"  class="instyle inf_form"> Upload CV</label>
                                <input id="imageUpload" name="images" style="display:none;" type="file">
                            </div>
                            <div class="right">
                            
                            <input type="text" class="instyle inf_form" id="imagename"  value="" placeholder="Upload Your Resume" readonly>
                            </div>
                        </div>
                                

                            </div>
                            <div><span></span></div>
                        </div>
                    </div>

                </div>


                <div class="mb-2 text-center">
                    <button name="formSubmit" class="btn form_bb--btn2 ltag">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="jobmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content pxy4">
            <div class="p1 flex jce">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="p1 text-center">
                <h4 class="">Apply For The Profile</h4>
            </div>
            <div class="p1 text-center">
                <p class="ltag dim">Please fill with your details</p>
            </div>

            <form action="<?php echo base_url() ?>frontend/career/job_req" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="job_name" value="" id="jobname">
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
                            <div class="member_flexx">
                            <div class="left">
                                <label for="imageUploa"  class="instyle inf_form"> Upload CV</label>
                                <input id="imageUploa" name="images" style="display:none;" type="file">
                            </div>
                            <div class="right">
                            
                            <input type="text" class="instyle inf_form" id="imagenam"  value="" placeholder="Upload Your Resume" readonly>
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








<script>
    $(document).ready(function() {
        $(document).on('click', '.newviesrc', function() {

            var head = $(this).attr('data-id');


            document.getElementById('jobname').value = head;

        });

    });
</script>



<script>
    $(document).ready(function() {
        $(document).on('click', '.internjob', function() {

            var hea = $(this).attr('data-id');


            document.getElementById('internname').value = hea;

        });

    });
</script>








<script>
    $(document).ready(function() {
        document.getElementById('jobactive').style.background = "#003c6e";
        document.getElementById('jobactive').style.color = "#fff";
    });


    function job() {
        document.getElementById("intern").style.display = "none";
        document.getElementById("job").style.display = "block";
        document.getElementById('jobactive').style.background = "#003c6e";
        document.getElementById('jobactive').style.color = "#fff";
        document.getElementById('internactive').style.background = "#fff";
        document.getElementById('internactive').style.color = "#464646";
    }

    function intern() {
        document.getElementById("intern").style.display = "block";
        document.getElementById("job").style.display = "none";
        document.getElementById('internactive').style.background = "#003c6e";
        document.getElementById('internactive').style.color = "#fff";
        document.getElementById('jobactive').style.background = "#fff";
        document.getElementById('jobactive').style.color = "#464646";
    }
</script>




<script language="javascript" type="text/javascript">
    $(function() {
        $("#fileupload").change(function() {
            $("#dvPreview").html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.pdf|.doc|.docx)$/;
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




<script language="javascript" type="text/javascript">
    $(function() {
        $("#fileuplo").change(function() {
            $("#dvPreview").html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.pdf|.doc|.docx)$/;
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
    $("#imageUploa").change(function() {
  filename = this.files[0].name;
  document.getElementById('imagenam').value = filename;
  console.log(filename);
});
</script>

<script>
    $("#imageUpload").change(function() {
  filename = this.files[0].name;
  document.getElementById('imagename').value = filename;
  console.log(filename);
});
</script>