<link href="<?php echo base_url(); ?>admin/assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>admin/assets/css/core.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url(); ?>admin/assets/js/jquery.dataTables.min.js"></script>


<style type="text/css">
    a.edit {
        display: none;
    }


    .btn-group,
    .btn-group-vertical {
        float: right;
    }

    .btn {
        color: #4e73df;
    }

    #lowinventory_filter label {
        color: grey;
        font-size: 15px;
    }

    #lowinventory_filter input[type=search] {
        border: 1px solid grey;
        outline: none;
        padding: 5px;
        font-size: 15px;
        margin-right: 5px;
    }

    .buu {
        width: 15rem;
        color: white !important;
        background-color: rgb(239, 69, 84);
        border: none;
        outline: none !important;
        padding-top: 1rem;
        padding-bottom: 1rem;
        font-size: 14px;
        margin-bottom: 1rem;
    }

    input[type="text"],
    textarea,
    input[type="file"] {
        width: 100%;
        height: auto;
        padding: 1rem;
        font-size: 17px;
        border: 1px solid #cdcdcd;
        margin-bottom: 1rem;
        outline: none;
    }

    button {
        width: 10rem;
        padding: .5rem;
        background-color: green;
        color: white;
        font-size: 17px;
        outline: none;
        border: none;
    }

    .all_post {
        margin-bottom: 6rem;
    }
    .all_post img{
        margin-bottom: 1rem;
        width: 100px;
    }
</style>
<?php
if ($this->session->flashdata('success')) {
    echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
} else if ($this->session->flashdata('error')) {
    echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
}


?>
<div class="all_post">
    <div class="container">
        <h3>Logo</h3>
        <hr>
        <form action="<?php echo base_url() ?>admin/sitesetting/logo_update" method="post" enctype="multipart/form-data">
            <?php foreach($setting as $value){ if($value['id']==1){?>
                    <label for="">Logo</label></br>
                    <img src="<?php echo base_url()?>upload/sitesetting/<?php echo $value['logo']?>" alt="logo"></br>
                    <label for="">Update Logo</label>
                   <input type="file" name="images" id="fileupload">
                    <button>Update</button>
          <?php }}?>
        </form>
    </div>
</div>

<div class="all_post">
    <div class="container">
        <h3>Footer About Company</h3>
        <hr>
        <form action="<?php echo base_url() ?>admin/sitesetting/about_update" method="post">
        <?php foreach($setting as $value){if($value['id']==2){?>
                    
                    <label for="">About Us</label>
                    <textarea name="content" id="" cols="30" rows="10" placeholder="Enter Content" required><?php echo $value['content'] ?></textarea>
                    <button>Update</button>
                    <?php }}?>
        </form>
    </div>
</div>









<script language="javascript" type="text/javascript">
    $(function() {
        $("#fileupload").change(function() {
            $("#dvPreview").html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpeg|.jpg|.png|.svg)$/;
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




