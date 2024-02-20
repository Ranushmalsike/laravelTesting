@extends('includef.headerAndFooter')
@section('content')
<link href="{{ asset('css/product.css')}}" rel="stylesheet">
<br>
<br>
<br>
 <div class="container-fluid">
  <div class="col-md-6">
    <form class="row g-3" method="post" action="{{ route('register.store') }}">
  @csrf
    <div class="col-md-6">
    <label class="form-label">Name</label>
    <input type="text" name="inputEmail4" class="form-control" id="inputEmail4">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" name="inputAddress2" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-12">
    <center>
    <button type="submit" class="btn btn-primary">Sign in</button>
    </center>
  </div>
</form>
</div>
 </div>

@endsection('content')