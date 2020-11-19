@extends ('layouts.admin')

@section('content')

<h2 style="color: blue" align="center">Administrator Dashboard</h2>
<hr/>
<div class="container">
<div class="row">
<div class="col-md-12">

<form class="form-horizontal" method="POST" action="{{url('insert')}}">
{{(csrf_field())}}

<fieldset>
<legend style="color: green"> Add new Surveillance </legend>
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



 <div class="form-group row">
            <label for="reason" class="col-md-4 col-form-label text-md-left">{{ __('Reason for Surveillance') }}

                                <div class="col-md-8">
                                    <select id="reason" type="text" class="form-control{{ $errors->has('reason') ? ' is-invalid' : '' }}" name="reason" value="{{ old('reason') }}" required autofocus>
                                        <option value="stolen"> STOLEN</option>
                                        <option value="robbery">ROBBERY</option>
                                        <option value="traffic_violation">TRAFFIC VIOLATION</option>
                                        <option value="incomplete_papers">INCOMPLETE PAPERS</option>
                                        
                                    </select>
                                    @if ($errors->has('reason'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('reason') }}</strong>
                                    </span>
                                    @endif
                                </div></label>
                            </div>

 <div class="form-group row">
            <label for="priority" class="col-md-4 col-form-label text-md-left">{{ __('Priority') }}

                                <div class="col-md-8">
                                    <select id="priority" type="text" class="form-control{{ $errors->has('priority') ? ' is-invalid' : '' }}" name="priority" value="{{ old('priority') }}" required autofocus>
                                        <option value="low"> LOW</option>
                                        <option value="medium">MEDIUM</option>
                                        <option value="high">HIGH</option>
                                       
                                    </select>
                                    @if ($errors->has('priority'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('priority') }}</strong>
                                    </span>
                                    @endif
                                </div></label>
                            </div>

                             <div class="form-group row">
                                <label for="passport_name"
                                       class="col-md-4 col-form-label text-md-left">{{ __('Upload captured Image') }}

                                <div class="col-md-10">
                                    <input type="file"
                                           class="form-control{{ $errors->has('passport_name') ? ' is-invalid' : '' }}"
                                           name="passport_name" value="{{ old('passport_name') }}" >
                                    @if ($errors->has('passport_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('passport_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                </label>
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
