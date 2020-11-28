@extends ('layouts.admin')

@section('content')

<hr/>
<div class="container">
<div class="row">
<div class="col-md-6">

<form class="form-horizontal" method="POST" action="{{url('edit_update', array($vehicles->id))}}">
{{(csrf_field())}}

<fieldset>
<legend style="color: green">Edit / Update Vehicle details</legend>
<!-- displayig the error for the validated fields of the form defined in the controller-->
@if(count($errors) > 0)
@foreach($errors->all() as $error)

<div class="alert alert-danger">
{{$error}}
</div>
@endforeach
@endif
 

 
<div class="form-group">
<div class="col-lg-10">
<input type="text" id="name_of_vehicle" name="name_of_vehicle" value="<?php echo $vehicles->name_of_vehicle; ?>" placeholder="Name of Vehicle" required class="form-control" size="70">
</div>
</div>

<div class="form-group">
<div class="col-md-8">
<input type="text" id="chasis_no" name="chasis_no" value="<?php echo $vehicles->chasis_no; ?>" placeholder="Chasis Number" class="form-control" size="70" required>
</div>
</div>

<div class="form-group">
<div class="col-md-8">
<input type="text" id="engine_no" name="engine_no" value="<?php echo $vehicles->engine_no; ?>" placeholder="Engine Number" class="form-control" size="70" required>
</div>
</div>
<div class="form-group">
<div class="col-md-8">
<input type="text" id="model" name="model" value="<?php echo $vehicles->model; ?>" placeholder="Model" class="form-control" size="70" required>
</div>
</div>

<div class="form-group">
<div class="col-md-8">
<input type="text" id="color" name="color" value="<?php echo $vehicles->color; ?>"  placeholder="Color" class="form-control" size="70" required>
</div>
</div>

<div class="form-group">
<div class="col-md-8">
<input type="text" id="owner" name="owner" value="<?php echo $vehicles->owner; ?>" placeholder="Owner" class="form-control" size="70" required>
</div>
</div>

<div class="form-group">
<div class="col-md-8">
<input type="text" id="phone_no" name="phone_no" value="<?php echo $vehicles->phone_no; ?>" placeholder="Phone Number" class="form-control" size="70" required>
</div>
</div>

<div class="form-group">
<div class="col-md-8">
<input type="text" id="address" name="address" value="<?php echo $vehicles->address; ?>" placeholder="Address" class="form-control" size="70" required>
</div>
</div>


<div class="form-group">
<div class="col-md-8">
<input type="text" id="gender" name="gender" value="<?php echo $vehicles->gender; ?>" placeholder="Gender" class="form-control" size="70" required>
</div>
</div>

                            <div class="form-group row">
                            <label for="id_means" class="col-md-4 col-form-label text-md-right">{{ __('id_means') }}</label>

                                <div class="col-md-6">
                                    <select id="gender" type="text" value="<?php echo $vehicles->id_means; ?>" class="form-control{{ $errors->has('id_means') ? ' is-invalid' : '' }}" name="id_means" value="{{ old('id_means') }}" required autofocus>
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
                                </div>
                            </div>

<div class="form-group">
<div class="col-md-8">
<input type="text" id="id_means_no"  value="<?php echo $vehicles->id_means_no; ?>"name="id_means_no" placeholder="ID Number" class="form-control" size="70" required>
</div>
</div>

<div class="form-group">
<div class="col-lg-10 col-lg-offset-2">

<button class="btn btn-primary"><a href="{{( 'admin' )}}" style="color: white"> Back </a> </button>
<button type="reset" class="btn btn-danger"> Cancel </button>
<button type="submit" class="btn btn-success"> Update </button>
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