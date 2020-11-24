@include('layouts.admin')

<h3 style="color: green" align="center">Administrator Dashboard </h3><br>
<h4 style="color: blue" align="center">Vehicles </h4>

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
<th>ID</th>
<th>NAME OF VEHICLE</th>
<th>LICENSE PLATE</th>
<th>CHASIS NO</th>
<th>ENGINE NO</th>
<th>MODEL</th>
<th>COLOR</th>
<th>OWNER</th>
<th>PHONE NO</th>
<th>ADDRESS</th>
<th>EMAIL</th>
<th>GENDER</th>
<th>IDENTITY TYPE</th>
<th>ID NO</th>
<th>OPERATION</th>

</tr>


<tbody>

     @foreach($vehicles as $vehicle)

<tr>
<td>{{ $vehicle->id }}</td>
<td>{{$vehicle->name_of_vehicle}}</td>
<td>{{$vehicle->license_plate}}</td>
<td>{{$vehicle->chasis_no}}</td>
<td>{{$vehicle->engine_no}}</td>
<td>{{$vehicle->model}} </td>
<td>{{$vehicle->color}} </td>
<td>{{$vehicle->owner}} </td>
<td>{{$vehicle->phone_no}} </td>
<td>{{$vehicle->address}} </td>
<td>{{$vehicle->email}} </td>
<td> {{$vehicle->gender}}</td>
<td> {{$vehicle->id_means}}</td>
<td> {{$vehicle->id_means_no}}</td>


<td>
<a href= '{{ url ("vehicle_read/$vehicle->id") }}' class="btn btn-primary"> Read </a> <br><br> 
<a href= '{{ url ("vehicle_update/$vehicle->id") }}' class="btn btn-success"> Update </a> <br><br>
<a href= '{{ url ("vehicle_delete/$vehicle->id") }}' class="btn btn-danger"> Delete </a> 
</td>
</tr>

@endforeach
</tbody>
</table>


</div>
</div>

@include ('inc.footer')