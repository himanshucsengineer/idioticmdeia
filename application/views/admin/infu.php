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
img{
    width:100px;
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
        <h3>Section First</h3>
        <hr>
        <form action="<?php echo base_url() ?>admin/infu/first_update" method="post" enctype="multipart/form-data">
           <?php foreach($infu as $value){ if($value['sec']=="first"){?>
                    <label for="">Heading</label>
                    <input type="text" name="head" placeholder="Enter Heading" value="<?php echo $value['head'] ?>" required>
                    <label for="">Image</label>
                    <input type="file" id="fileup" name="images" required>
                    <button>Update</button>
            <?php }}?>
        </form>
    </div>
</div>

<div class="all_post">
    <div class="container">
        <h3>Section Second</h3>
        <hr>
        <form action="<?php echo base_url() ?>admin/infu/sec_update" method="post" enctype="multipart/form-data">
        <?php foreach($infu as $value){ if($value['sec']=="second"){?>
                    <label for="">Heading</label>
                    <input type="text" name="head" placeholder="Enter Heading" value="<?php echo $value['head'] ?>" required>
                    <label for="">Content</label>
                    <textarea name="content" id="" cols="30" rows="10" placeholder="Enter Content" required><?php echo $value['content'] ?></textarea>
                    <label for="">Image</label>
                    <input type="file" id="fileuplo" name="image" required>
                    <button>Update</button>
                    <?php }}?>
        </form>
    </div>
</div>



<div class="all_post">
    <div class="container">
        <h3>Third section</h3>
        <hr>
        <form action="<?php echo base_url() ?>admin/infu/third_update" method="post">
        <?php foreach($infu as $value){ if($value['sec']=="third"){?>
                    <label for="">Heading</label>
                    <input type="text" name="head" placeholder="Enter Heading" value="<?php echo $value['head'] ?>" required>
                    <label for="">Content</label>
                    <textarea name="content" id="" cols="30" rows="10" placeholder="Enter Content" required><?php echo $value['content'] ?></textarea>
  
                    <button>Update</button>
           <?php }}?>
        </form>
    </div>
</div>















<div class="all_post">
    <div class="container">
        <h3>Network</h3>
        <hr>
        <form action="<?php echo base_url() ?>admin/infu/services" method="post" enctype="multipart/form-data">
           
            <label for="">Image</label>
            <input type="file" id="fileupload" name="images" required>
            <button>Update</button>
        </form>
    </div>
</div>





<div class="all_post">
    <div class="container">
        <h3>Faqs</h3>
        <hr>
        <form action="<?php echo base_url() ?>admin/infu/faq" method="post" >
            <label>Select Position</label>
            <Select name="cate">
                <option>Select A option</option>
                <option value="left">Left</option>
                <option value="right">Right</option>
            </Select>
            <label>Question</label>
            <input type="text" placeholder="Enter Quetion" name="ques">
            <label for="">Answer</label>
            <textarea name="ans" id="" cols="30" rows="10" placeholder="Type Answer"></textarea>
            <button>Update</button>
        </form>
    </div>
</div>







<div class="all_post">
    <div class="container">
        <h3>All Network</h3>
        <hr>

        
    
            
            <div class="row">
                <div class="col-md-12">

                    <div class="card-box table-responsive">

                        <table id="lowinventory" data-order='[[ 0, "desc" ]]' style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                            <thead>
                                <tr>

                                    <th>SR. NO.</th>
                                  
                                    <th>Image</th>
                                
                                  

                                    <th>Action</th>

                                </tr>

                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
  
    </div>
</div>




<div class="all_post">
    <div class="container">
        <h3>All Faqs</h3>
        <hr>

        
    
            
            <div class="row">
                <div class="col-md-12">

                    <div class="card-box table-responsive">

                        <table id="lowinvento" data-order='[[ 0, "desc" ]]' style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                            <thead>
                                <tr>

                                    <th>SR. NO.</th>
                                  
                                    <th>Position</th>
                                    <th>Question</th>
                                    <th>Answer</th>

                                    <th>Action</th>

                                </tr>

                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
  
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

<div id="deletePurchaseModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <?php echo form_open(base_url('admin/infu/delete_service'), array('method' => 'post')); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
                <h4 class="modal-title">Delete Course</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" class="deletesliderId" name="deletesliderId" />
                        <h4><b>Do you really want to Delete this Course ?</b></h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-info" name="deleteslider" value="Delete">
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#lowinventory').DataTable({
            "ajax": "<?php echo base_url(); ?>admin/infu/addinventory_api"
        });
        $('#lowinvento').DataTable({
            "ajax": "<?php echo base_url(); ?>admin/infu/fetch_faq"
        });

        $(document).on('click', '.delete_sliders', function() {

            $('.deletesliderId').val($(this).attr('data-id'));
            $('#deletePurchaseModal').modal('show');

        });

    });
</script>