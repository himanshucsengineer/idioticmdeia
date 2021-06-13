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
    input[type="text"]{
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
        <h3>Social Links</h3>
        <hr>

        <?php
        if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
        } else if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
        }


        ?>
     
        <form action="<?php echo base_url()?>admin/sociallinks/update_link" method="post">
        <?php foreach($social as $value){?>
            <label for="">Instagram</label>
            <input type="text"  name="insta" placeholder="Enter Instagram Url" value="<?php echo $value['insta']?>">
            <label for="">Facebook</label>
            <input type="text" name="facebook" placeholder="Enter Facebok Url" value="<?php echo $value['facebook']?>">
            <label for="">Twitter handle</label>
            <input type="text" name="tei" placeholder="Enter Twitter handle" value="<?php echo $value['tei']?>">
            <label for="">Youtube Url</label>
            <input type="text" name="you" placeholder="Enter Youtube Url" value="<?php echo $value['you']?>">
            <label for="">Pinterest url</label>
            <input type="text" name="print" placeholder="Enter Pinterest url" value="<?php echo $value['print']?>">
            <label for="">Linkedin Url</label>
            <input type="text" name="linkedin" placeholder="Enter Linkedin Url" value="<?php echo $value['linkedin']?>">
            <button>Update</button>
            <?php }?>
        </form>
     
    </div>
</div>






