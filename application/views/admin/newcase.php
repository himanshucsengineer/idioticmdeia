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
    input[type="file"],select {
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
        <h3>Create New casestudy</h3>
        <hr>
        <form action="<?php echo base_url() ?>admin/newcase/creatcase" method="post" enctype="multipart/form-data">
            <label for="">Select Category</label>
            <select name="cate" id="">
                <option value="">Select An option</option>
                <?php foreach($category as $value){?>
                    <option value="<?php echo $value['name']?>"><?php echo $value['name']?></option>
                <?php }?>
            </select>

        
        <label for="">Case study title</label>
            <input type="text" name="title" placeholder="Enter Title">

            <label for="">What I like</label>
            <input type="text" name="like" placeholder="what i like">

            <label for="">Strategy Used</label>
            <input type="text" name="stra" placeholder="Enter Strategy Used">


            <label for="">Views</label>
            <input type="text" name="view" placeholder="Enter Views">

            <label for="">ENGAGEMENT</label>
            <input type="text" name="eng" placeholder="Enter ENGAGEMENT">

            <label for="">Total Pages</label>
            <input type="text" name="pages" placeholder="Enter Total Pages">

            <label for="">Audiance</label>
            <input type="text" name="audi" placeholder="Enter Audiance">
            
            <label for="">Fetured Image</label>
            <input type="file" id="fileupload" name="images">

            <label for="">Logo</label>
            <input type="file" id="fileuplo" name="logo">

            <label for="">Screenshot (You can Upload max 6 images)</label>
            <input type="file" multiple="multiple" name="files[]" maxlength="5" id="fileup">
            <button>Update</button>
        </form>
    </div>
</div>



<script language="javascript" type="text/javascript">
    $(function() {
        $("#fileupload").change(function() {
            $("#dvPreview").html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpeg|.jpg|.png)$/;
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
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpeg|.jpg|.png)$/;
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
        $("#fileup").change(function() {
            $("#dvPreview").html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpeg|.jpg|.png)$/;
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



