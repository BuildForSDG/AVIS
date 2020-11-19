@include('layouts.admin')

<h3 style="color: green" align="center">Administrator Dashboard </h3><br>
<h4 style="color: blue" align="center">Surveillance </h4>

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
<th>MODEL</th>
<th>COLOR</th>
<th>OWNER</th>
<th>PHONE NO</th>
<th>REASON</th>
<th>PRIORITY</th>
<th>OPERATION</th>

</tr>

<tbody>
     @foreach($surveillances as $surveillance)
<tr>
<td>{{ $surveillance->id }}</td>
<td>{{$surveillance->name_of_vehicle}}</td>
<td>{{$surveillance->license_plate}}</td>
<td>{{$surveillance->model}} </td>
<td>{{$surveillance->color}} </td>
<td>{{$surveillance->owner}} </td>
<td>{{$surveillance->phone_no}} </td>
<td>{{$surveillance->reason}} </td>
<td>{{$surveillance->priority}} </td>


<td>
<a href= '{{ url ("surveillance_read/$surveillance->id") }}' class="btn btn-primary"> Read </a> <br><br> 
<a href= '{{ url ("surveillance_update/$surveillance->id") }}' class="btn btn-success"> Update </a> <br><br>
<a href= '{{ url ("surveillance_delete/$surveillance->id") }}' class="btn btn-danger"> Delete </a> 
</td>
</tr>

@endforeach
</tbody>
</table>


</div>
</div>

@include ('inc.footer')