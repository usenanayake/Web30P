<?php include 'include/header.php'; ?>
  <div class="content-wrapper">
    
    <section class="content">

      <div class="row">
        
      
      
        <div class="col-xs-12 col-lg-12" style="padding-top: 50px; padding-left: 300px">

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Messages</span>
                  <span class="info-box-number" id="message"><h3><?php echo $messages['id']; ?></h3></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div> 

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion ion-ios-cart-outline"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Cart Items</span>
                  <span class="info-box-number" id="item"><h3><?php echo $items['product_id']; ?></h3></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>   


            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-heart-outline"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Gallery Images</span>
                  <span class="info-box-number" id="image"><h3><?php echo $images['image_ID']; ?></h3></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div> 
          </div> 

          <div class="col-xs-12 col-lg-12" style="padding-top: 50px; padding-left: 400px">
                <div class="col-lg-8 col-sm-8 col-xs-12">
                    <iframe src="https://calendar.google.com/calendar/embed?src=en.lk%23holiday%40group.v.calendar.google.com&ctz=Asia%2FColombo" style="border: 0" width="800" height="500" frameborder="0" scrolling="no"></iframe>
                </div>
        </div>


      </div>

    </section>

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <!-- <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a> -->
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>tmp/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>tmp/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>tmp/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>tmp/js/sb-admin.min.js"></script>
  </div>
</body>

</html>
