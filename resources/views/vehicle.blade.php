@extends ('layouts.admin')

@section('content')

<h2 style="color: blue" align="center">Administrator Dashboard</h2>
<hr/>
<div class="container">
<div class="row">
<div class="col-md-12">

<form class="form-horizontal" method="POST" action="{{url('insert_vehicle')}}">
{{(csrf_field())}}

<fieldset>
<legend style="color: green"> Add new Vehicle details </legend>
<!-- displayig the error for the validated fields of the form defined in the controller-->
@if(count($errors) > 0)
@foreach($errors->all() as $error)

<div class="alert alert-danger">
{{$error}}
</div>
@endforeach
@endif

<div class="form-group">
<div class="col-lg-4">
<input type="text" id="name_of_vehicle" name="name_of_vehicle" placeholder="Name of Vehicle" required class="form-control" size="70">
</div>
</div>

<div class="form-group">
<div class="col-md-4">
<input type="text" id="license_plate" name="license_plate" placeholder="License Plate" class="form-control" size="70" required>
</div>
</div>

<div class="form-group">
<div class="col-md-4">
<input type="text" id="chasis_no" name="chasis_no" placeholder="Chasis Number" class="form-control" size="70" required>
</div>
</div>

<div class="form-group">
<div class="col-md-4">
<input type="text" id="engine_no" name="engine_no" placeholder="Engine Number" class="form-control" size="70" required>
</div>
</div>

<div class="form-group">
<div class="col-md-4">
<input type="text" id="model" name="model" placeholder="Model" class="form-control" size="70" required>
</div>
</div>

<div class="form-group">
<div class="col-md-4">
<input type="text" id="color" name="color" placeholder="Color" class="form-control" size="70" required>
</div>
</div>

<div class="form-group">
<div class="col-md-4">
<input type="text" id="owner" name="owner" placeholder="Owner" class="form-control" size="70" required>
</div>
</div>

<div class="form-group">
<div class="col-md-4">
<input type="text" id="phone_no" name="phone_no" placeholder="Phone Number" class="form-control" size="70" required>
</div>
</div>

<div class="form-group">
<div class="col-md-4">
<input type="text" id="address" name="address" placeholder="Address" class="form-control" size="70" required>
</div>
</div>

<div class="form-group">
<div class="col-md-4">
<input type="text" id="email" name="email" placeholder="Email" class="form-control" size="70" required>
</div>
</div>

<div class="form-group">
<div class="col-md-4">
<input type="text" id="gender" name="gender" placeholder="Gender" class="form-control" size="70" required>
</div>
</div>

 <div class="form-group row">
            <label for="id_means" class="col-md-4 col-form-label text-md-left">{{ __('Identity Type') }}

                                <div class="col-md-8">
                                    <select id="id_means" type="text" class="form-control{{ $errors->has('id_means') ? ' is-invalid' : '' }}" name="id_means" value="{{ old('id_means') }}" required autofocus>
                                        <option value="pvc"> PVC</option>
                                        <option value="nimc">NIMC</option>
                                        <option value="drivers_license">Driver's License</option>
                                        <option value="intl_passport">International Passport</option>
                                        
                                    </select>
                                    @if ($errors->has('id_means'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id_means') }}</strong>
                                    </span>
                                    @endif
                                </div></label>
                            </div>

<div class="form-group">
<div class="col-md-4">
<input type="text" id="id_means_no" name="id_means_no" placeholder="ID Number" class="form-control" size="70" required>
</div>
</div>

<div class="form-group">
<div class="col-lg-4 col-lg-offset-2">

<button class="btn btn-primary"><a href="{{( 'admin' )}}" style="color: white"> Back </a> </button>
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
