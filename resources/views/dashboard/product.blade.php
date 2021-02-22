@include('adminlayout.head')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('adminlayout.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('adminlayout.side-bar')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
           
           
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Product Add</h4>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Title</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="exampleSelectGender">Category</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                   
                      <div>Image</div>
                  <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customInput" required>
                    <label class="custom-file-label" for="customInput">Choose file...</label>
                       </div>
                  
                    <div class="form-group">
                      <label for="exampleInputCity1">Price</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Price">
                    </div>
                    
                   <div class="form-group">
                        <label for="ckeditor">Example textarea</label>
                      <textarea class="form-control" id="ckeditor" name="description" rows="4"></textarea>
                       </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        @include('adminlayout.footer')

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('adminlayout.script')

  <!-- End custom js for this page-->

  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script>
  CKEDITOR.replace( 'description' );
     </script>
</body>







</script>
                    
