@extends ('layouts.user')

@section('content')

<hr/>
<div class="container">
<div class="row">
<div class="col-md-6">

<form class="form-horizontal" method="POST" action="{{url('sendhelp')}}">
{{(csrf_field())}}

<fieldset>
<legend style="color: green">Complaint form </legend>
<p style="color: black">Do you have a complaint?  fill the form below </p>
<!-- displayig the error for the validated fields of the form defined in the controller-->
@if(count($errors) > 0)
@foreach($errors->all() as $error)

<div class="alert alert-danger">
{{$error}}
</div>
@endforeach
@endif

<div class="form-group">
<div class="col-lg-6">
<input type="text" id="name" name="name" placeholder="Name" class="form-control" size="20">
</div>
</div>

<div class="form-group">
<div class="col-md-6">
<textarea id="complaint" name="complaint" placeholder="Complaint" class="form-control" rows="4" cols="20">
</textarea>
</div>
</div>

<div class="form-group">
<div class="col-md-6">
<input type="text" id="email" name="email" placeholder="Email" class="form-control" rows="4" cols="20">
</div>
</div>

<div class="form-group">
<div class="col-lg-6">
<input type="text" id="phone_no" name="phone_no" placeholder="Phone Number" class="form-control" size="20">
</div>
</div>


<div class="form-group">
<div class="col-lg-10 col-lg-offset-2">

<button class="btn btn-primary"><a href="{{( 'welcome' )}}"> Back </a></button>
<button type="reset" class="btn btn-danger"> Cancel </button>
<button type="submit" class="btn btn-success"> Submit </button>
</div>
</div>
</fieldset>
</form>

</div>
</div>
</div>
<hr/>

@include('inc.footer')
@endsection

    