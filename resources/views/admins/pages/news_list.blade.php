@include('templates.admin')
        <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">添加新闻</h1>
      </div>

      <ul>
        <li>标题:</li>
        <li> 
          <input type="text" name="title">
        </li>

        <li>关键字：</li>
        <li>
          <input type="text" name="keywords">
        </li>

        <li>内容：</li>
        <li>
          <input type="text" name="content">
        </li>

        <li>小图（featured image）:</li>
        <li>
          <input type="file" name="featured_img" accept="image/*">
        </li>
        <li>大图：</li>
        <li>
          <input type="file" name="img_large" accept="image/*">
        </li>
        
      </ul>
    </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; <a href="lightcube.ca">Lightcube Design Studio</a> 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  <script src="js/jquery.js"></script>
  <script src="js/admins/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="js/admins/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/admins/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

  <!-- Page level custom scripts -->
<!--   <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script> -->

</body>

</html>
