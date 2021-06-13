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






