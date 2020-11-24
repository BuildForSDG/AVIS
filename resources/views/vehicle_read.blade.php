@include('layouts.admin_back')

<div class="container">
<div>
<h3 style="color: purple">List of Registered Vehicles  </h3>

<p>{{$vehicles->id}}</p>
<p>{{$vehicles->name_of_vehicle}}</p>
<p align="justify">{{$vehicles->license_plate}}</p>
<p align="justify">{{$vehicles->chasis_no}}</p>
<p align="justify">{{$vehicles->engine_no}}</p>
<p align="justify">{{$vehicles->model}}</p>
<p align="justify">{{$vehicles->color}}</p>
<p align="justify">{{$vehicles->owner}}</p>
<p align="justify">{{$vehicles->phone_no}}</p>
<p align="justify">{{$vehicles->address}}</p>
<p align="justify">{{$vehicles->gender}}</p>
<p align="justify">{{$vehicles->id_means}}</p>
<p align="justify">{{$vehicles->id_means_no}}</p>

</div>
</div>
@include ('inc.footer')