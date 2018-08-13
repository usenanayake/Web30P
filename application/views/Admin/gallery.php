<?php include 'include/header.php'; ?>

<div class="content-wrapper">

    <section class="content-header">

    	
    </section>

    <section class="content">

    	<div class="row">
    		<div class="col-xs-12" style="padding-top: 20px; padding-right: 100px">
                <div class="col-lg-8 col-sm-8 col-xs-12">

                    <h3 class="box-title" style="padding-right: 100px">
                        <i class="fa fa-th-list"></i>
                        Gallery
                    </h3>

                </div>

                <div class="col-lg-4 col-sm-4 col-xs-12" no-padding style="padding-top:20px">


                    <div class="modal fade" id="addrow" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">


                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Update Gallery</h4>
                                </div>




                                <form method="post" action="<?php echo base_url()?>index.php/galleryController/updateGallery">

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="imageID" class="col-sm-6 control-label">ID</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="imageID" name="imageID" required readonly>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="imageCategory" class="col-sm-6 control-label">Image Category</label>
                                                <div class="col-sm-7">
                                                    <textarea type="text" class="form-control" id="imageCategory" name="imageCategory" required></textarea>
                                                </div>
                                            </div>

                                            

                                        </div>



                                        <div class="modal-footer" >
                                            <button type="submit" class="btn btn-primary btn-success" name="UpdateAchivement" value="Update" data-toggle="modal">Update</button>
                                            
                                        </div>
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

            	<div class="col-xs-8 col-xs-6" style="padding-top: 20px; padding-left: 200px">
                    <div class="box box-primary" style="height: 300px; width: 1260px">
                        <div class="box-header with-border" style="height: 50px">
                            <h3 class="box-title">Add new image</h3>
                        </div>
                       
                        <!-- form start -->
                        <form role="form" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/galleryController/addImage" method="POST">

                            <div class="box-body">

                                <div class="col-md-8">

                                    <div class="col-sm-8 col-xs-12">
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <input type="text" class="form-control" id="category" name="category" placeholder="category" required>
                                            
                                        </div>
                                    </div>

                                    <div class="col-sm-8 col-xs-12">
                                        <div class="form-group">
                                            <label for="Image">Image</label>
                                            <input type="file" id="file_name" name="file_name" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-xs-4">
                                        <div class="form-group">

                                        </div>
                                    </div>

                                </div>

                                <div class="col-xs-12 col-lg-12 col-sm-12">

                                </div>

                                <div class="col-xs-2">
                                    <button type="submit" class="btn btn-block btn-success" id="register" name="register">Submit</button>

                                </div>

                            </div>
                        </form>

                        


                    </div>
                </div>

            <form method="post" action="<?php echo base_url()?>index.php/galleryController/galleryRecordUpdate">


                <div class="col-lg-12 col-sm-12 col-xs-12"  style="padding-top:100px">

                    <div class="col-xs-10">

                        <button type="button" id="update_image" class="btn  btn-info pull-right"  data-toggle="modal" >Update</button>
                    </div>

                    <div class="col-xs-2">
                        <input type="submit" name="delete" value="Delete" class="btn btn-warning pull-left" onclick="return delete_image()">
                    </div>

                </div>


                <div class="col-xs-12 col-lg-12" style="padding-top: 50px; padding-right: 200px;padding-left: 200px">
                    <div class="box box-primary" style="padding-top: 0px">
                        <div class="box-header with-border">

                            <div class="box-tools pull-right" style="padding-top: 0px">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                        
                        <div class="box-body table-responsive" style="padding-right: 100px">
                            <table id='image_table' class="table table-striped table-bordered col-lg-12">

                                <thead >

                                <tr>
                                    <th><input name="checkbox[]" id="master" type="checkbox" ></th>

                                    <th><a href="#" data-sort="imageID">ID</a></th>
                                    <th><a href="#" data-sort="imageCategory">Image Category</a></th>
                                    <th><a href="#" data-sort="image">Image</a></th>
                                    

                                </tr>

                                </thead>

                                <?php
                                $count = 1;
                                foreach ($galleryRecord as $row){

                                    ?><tr>
                                    <td><input name="checkbox[]" class="case" type="checkbox" value=<?php echo $row->image_ID;?>></td>
                                    <td><?php echo $row->image_ID;?></td>
                                    <td><?php echo $row->image_Category;?></td>
                                    <td><img src="<?php echo base_url().'images/'.$row->image; ?>" height="500" width="500"></td>
                                    

                                    </tr>


                                    <?php

                                    $count = $count+1;

                                }
                                ?>
                            </table>
                        </div>
                    </div>

                </div>
            </form>



    	</div>
    	
    </section>


</div>





<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>template/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>template/dist/js/adminlte.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url()?>template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>



<script >

    $("#update_image").click(function(){

        var rowCount = 0;
        var array;

        $('#image_table input:checkbox:checked').each(function() {
            rowCount ++;
            array = $(this).parent().siblings().map(function() {
                return $(this).text().trim();
            }).get();

        });

        if(rowCount ==1){
            $('#imageID').val(array[0]);
            $('#imageCategory').val(array[1]);
            $('#image').val(array[2]);
            $("#addrow").modal();
        }else{

            alert("Error, Select only one row");
        }

    });

    function delete_image(){

        var rowCount = 0;
        var array;

        $('#image_table input:checkbox:checked').each(function() {
            rowCount ++;
            array = $(this).parent().siblings().map(function() {
                return $(this).text().trim();
            }).get();

        });

        if (rowCount >= 1) {

            if(confirm('Are you sure')){

                return true;
            }else{
                return false;
            }
        }
        else{
            return false;
        }
    }

</script>

<script src="<?php echo base_url()?>template/bower_components/newCss/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>template/bower_components/newCss/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>template/bower_components/newCss/js/dataTables.checkboxes.min.js"></script>


<script>

    jQuery('#master').on('click', function(e) {
        if($(this).is(':checked',true))
        {
            $(".case").prop('checked', true);
        }
        else
        {
            $(".case").prop('checked',false);
        }
    });
</script>