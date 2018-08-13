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
                        Contact
                    </h3>

                </div>

                <div class="col-lg-4 col-sm-4 col-xs-12" no-padding style="padding-top:20px">


                    <div class="modal fade" id="addrow" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">


                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Update Contact</h4>
                                </div>




                                <form method="post" action="<?php echo base_url()?>index.php/contactController/updateContact">

                                    <div class="modal-body">
                                        <div class="row">

                                            <div class="col-sm-8 col-xs-12">
                                                <div class="form-group">
                                                    <label for="customerid">Customer ID</label>
                                                    <input type="text" class="form-control" id="customerid" name="customerid" readonly>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-sm-8 col-xs-12">
                                                <div class="form-group">
                                                    <label for="cname">Customer Name</label>
                                                    <input type="text" class="form-control" id="cname" name="cname" readonly>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-sm-8 col-xs-12">
                                                <div class="form-group">
                                                    <label for="email">Customer Email</label>
                                                    <input type="text" class="form-control" id="email" name="email" readonly>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-sm-8 col-xs-12">
                                                <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <input type="text" class="form-control" id="message" name="message" readonly>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-sm-8 col-xs-12">
                                                <div class="form-group">
                                                    <label for="reply">Reply</label>
                                                    <input type="text" class="form-control" id="reply" name="reply">
                                                    
                                                </div>
                                            </div>

                                        </div>



                                        <div class="modal-footer" >
                                            <button type="submit" class="btn btn-primary btn-success" name="UpdateContact" value="Update" data-toggle="modal">Update</button>
                                            
                                        </div>
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

            	

            <form method="post" action="<?php echo base_url()?>index.php/contactController/contactRecordUpdate">


                <div class="col-lg-12 col-sm-12 col-xs-12"  style="padding-top:100px">

                    <div class="col-xs-10">

                        <button type="button" id="update_contact" class="btn  btn-info pull-right"  data-toggle="modal" >Update</button>
                    </div>

                    <div class="col-xs-2">
                        <input type="submit" name="delete" value="Delete" class="btn btn-warning pull-left" onclick="return delete_contact()">
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
                            <table id='contact_table' class="table table-striped table-bordered col-lg-12">

                                <thead >

                                <tr>
                                    <th><input name="checkbox[]" id="master" type="checkbox" ></th>

                                    <th><a href="#" data-sort="customerid">Customer ID</a></th>
                                    <th><a href="#" data-sort="cname">Customer Name</a></th>
                                    <th><a href="#" data-sort="email">Customer Email</a></th>
                                    <th><a href="#" data-sort="message">Message</a></th>
                                    <th><a href="#" data-sort="reply">Reply</a></th>
                                    

                                </tr>

                                </thead>

                                <?php
                                $count = 1;
                                foreach ($contactRecord as $row){

                                    ?><tr>
                                    <td><input name="checkbox[]" class="case" type="checkbox" value=<?php echo $row->id;?>></td>
                                    <td><?php echo $row->id;?></td>
                                    <td><?php echo $row->name;?></td>
                                    <td><?php echo $row->email;?></td>
                                    <td><?php echo $row->message;?></td>
                                    <td><?php echo $row->reply;?></td>
                                    

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

    $("#update_contact").click(function(){

        var rowCount = 0;
        var array;

        $('#contact_table input:checkbox:checked').each(function() {
            rowCount ++;
            array = $(this).parent().siblings().map(function() {
                return $(this).text().trim();
            }).get();

        });

        if(rowCount ==1){
            $('#customerid').val(array[0]);
            $('#cname').val(array[1]);
            $('#email').val(array[2]);
            $('#message').val(array[3]);
            $('#reply').val(array[4]);
            $("#addrow").modal();
        }else{

            alert("Error, Select only one row");
        }

    });

    function delete_contact(){

        var rowCount = 0;
        var array;

        $('#contact_table input:checkbox:checked').each(function() {
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