@include('layouts.admin')

<h3 style="color: green" align="center">Administrator Dashboard </h3><br>
<h4 style="color: blue" align="center">List of captured images by uploaded by image capture photo management </h4>

<div class="container">
<div class="row">

<!-- flashing / displaying the session success message declared in the controller  -->
<div class="col-md-6 col-lg-6">
@if (session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
@endif
</div>

<table class="table table-striped table-hover">

<tr>
<form action="ownerprofile" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="text" class="col-md-12 col-form-label" name="license_plate" required="required"  placeholder="Enter License Plate">
                    <br>
                   <div class="form-group">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Enter') }}
                                </button>
                            
                                <button type="reset" class="btn btn-danger">
                                    {{ __('Reset') }}
                                </button>
                        </div>
                        
         </form>
<th>VEHICLE</th>

</tr>


<tbody>

<tr>
<td><img src="{{ 'storage/plate1.JPG'}}" height="30" width="90" /> <br><br>
<img src="{{ 'storage/plate2.JPG'}}" height="30" width="90" /> </td>

<!-- <td>
<a class="btn btn-primary"> Read </a> <br><br> 
<a class="btn btn-success"> Update </a> <br><br>
<a class="btn btn-danger"> Delete </a> 
</td> -->
</tr>

</tbody>
</table>


</div>
</div>

@include ('inc.footer')