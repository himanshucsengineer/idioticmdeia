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
    input[type="text"],select{
        width: 100%;
        height: auto;
        padding: 1rem;
        font-size: 17px;
        border: 1px solid #cdcdcd;
        margin-bottom: 1rem;
        outline: none;
    }
    button{
        width: 10rem;
        padding: .5rem;
        background-color: green;
        color: white;
        font-size: 17px;
        outline: none;
        border: none;
    }
    .all_post{
        margin-bottom: 6rem;
    }
</style>

<div class="all_post">
    <div class="container">
        <h3>Upload Career Post</h3>
        <hr>

        <?php
        if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
        } else if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
        }


        ?>
     
        <form action="<?php echo base_url()?>admin/career/create_post" method="post">
      
          <label for="">Select Career Type</label>
          <select name="job_type" id="">
              <option value="">Select Job Type</option>
              <option value="Job">Job</option>
              <option value="intern">Internship</option>
          </select>
          <label for="">Job Name</label>
          <input type="text" name="job_name" placeholder="Enter Job name">
          <label for="">Location</label>
          <input type="text" name="location" placeholder="Enter Location">
          <label for="">Experiance</label>
          <input type="text" name="exp" placeholder="Enter Required Experiance">
          <label for="">Language</label>
          <input type="text" name="lang" placeholder="Enter Language">
          <label for="">Job Description</label>
          <input type="text" name="desc" placeholder="Enter Job Description">
          <label for="">Minimum Qualification</label>
          <input type="text" name="quali" placeholder="Enter Minimum Qualification">
          <button>Post Job</button>
        </form>
     
    </div>
</div>


<div class="all_post">
    <div class="container">
        <h3>All Listed Job</h3>
        <hr>

        
    
            
            <div class="row">
                <div class="col-md-12">

                    <div class="card-box table-responsive">

                        <table id="lowinventory" data-order='[[ 0, "desc" ]]' style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                            <thead>
                                <tr>

                                    <th>SR. NO.</th>
                                    <th>Name</th>
                                    <th>Job Type</th>
                                    <th>Location</th>
                                    <th>Experiance</th>
                                    <th>Language</th>
                                
                                  <th>Job Description</th>
                                    <th>Job Qualification</th>
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



<div id="deletePurchaseModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <?php echo form_open(base_url('admin/career/delete_listed_job'), array('method' => 'post')); ?>
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
            "ajax": "<?php echo base_url(); ?>admin/career/addinventory_api"
        });


        $(document).on('click', '.delete_sliders', function() {

            $('.deletesliderId').val($(this).attr('data-id'));
            $('#deletePurchaseModal').modal('show');

        });

    });
</script>