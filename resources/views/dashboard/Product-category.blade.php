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

                <div class="alert alert-success d-none">
                  <strong>Success!</strong> Indicates a successful or positive action.
                </div>
                  <h4 class="card-title">Category Add</h4>
                  <form class="forms-sample"  id="form" >
                  <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">


             
                  <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                    </div>
                    <button id="product" type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                  <!-- @if(Session::has('message'))
    <div class="alert alert-{{ Session::get('message-type') }} alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <i class="glyphicon glyphicon-{{ Session::get('message-type') == 'success' ? 'ok' : 'remove'}}"></i> {{ Session::get('message') }}
    </div>
@endif -->
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
  <script type="text/javascript">





    $("#form").submit(function(e) {

          e.preventDefault(); // avoid to execute the actual submit of the form.
         // btn = $('#product');
          var form = $(this);
          var url = "<?php echo route('store.category');?>";

          $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function(data)
                {
                  $('.alert').removeClass('d-none');
                  $('#form').trigger("reset"); // show response from the php script.
                }
              });


          });
      </script>

</body>


<!-- <script>
$('#product').on('submit', function(e) {
       e.preventDefault(); 
       var name = $('#name').val();
       $.ajax({
           type: "POST",
           url: '/productcategory/store',
           data: {
       
        "name": name
        }
           success: function( msg ) {
               alert( msg );
           }
       });
   });





</script> -->
                    
