@if (Session::has('success'))
  <div class="row">
    <div class="col-lg-12">
      <div class="alert alert-success fade in">
        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
        {{ Session::get('success') }}
      </div>
     </div>
   </div>
@endif

@if (Session::has('danger'))
  <div class="row">
    <div class="col-lg-12">
      <div class="alert alert-danger fade in">
        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
        {{ Session::get('danger') }}
      </div>
     </div>
   </div>
@endif

@if (Session::has('warning'))
  <div class="row">
    <div class="col-lg-12">
      <div class="alert alert-warning fade in">
        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
        {{ Session::get('warning') }}
      </div>
     </div>
   </div>
@endif

@if (Session::has('info'))
  <div class="row">
    <div class="col-lg-12">
      <div class="alert alert-info fade in">
        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
        {{ Session::get('info') }}
      </div>
     </div>
   </div>
@endif
