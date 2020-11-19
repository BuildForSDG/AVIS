@include('layouts.admin')

<h3 style="color: green" align="center">Administrator Dashboard </h3><br>
<h4 style="color: blue" align="center">Complaints </h4>

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
<th>NAME</th>
<th>COMPLAINT</th>
<th>EMAIL</th>
<th>PHONE NO</th>
<th>OPERATION</th>


</tr>


<tbody>

     @foreach($helps as $help)
<tr>
<td>{{$help->name}}</td>
<td>{{$help->complaint}}</td>
<td>{{$help->email}} </td>
<td>{{$help->phone_no}} </td>

<td>
<a class="btn btn-primary"> Read </a>|
<a class="btn btn-success"> Edit </a>|
<a class="btn btn-danger"> Erase </a> 
</td>
</tr>

@endforeach
</tbody>
</table>


</div>
</div>

@include ('inc.footer')