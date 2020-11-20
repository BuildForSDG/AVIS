@extends ('layouts.user')
@section('content')


<div align="center"> 
<hr/>
<h2> User (Request) Area </h2>
<form action="ownerprofile" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="text" class="col-md-2 col-form-label" name="license_plate" required="required"  placeholder="Enter License Plate">
                    <br><br>
                   <div class="form-group">
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Enter') }}
                                </button>
                            
                                <button type="reset" class="btn btn-danger">
                                    {{ __('Reset') }}
                                </button>
                            </div>
                        </div>
                        
         </form>
</div>
</div>
<hr/>
<div class="container">
    @if(isset($details))
        <p> Dear User,  <b>  </b>  this is the status of the Vehicle :</p>
    <h2>Vehicle Registration Details </h2>
    
    <table class="table table-striped">
        <thead>
            <tr>
                            
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
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
            <td>{{$user->name_of_vehicle}}</td>
            <td>{{$user->license_plate}}</td>
            <td>{{$user->chasis_no}}</td>
            <td>{{$user->engine_no}}</td>
            <td>{{$user->model}} </td>
            <td>{{$user->color}} </td>
            <td>{{$user->owner}} </td>
            <td>{{$user->phone_no}} </td>
            <td>{{$user->address}} </td>
            <td>{{$user->email}} </td>
            <td> {{$user->gender}}</td>
            <td> {{$user->id_means}}</td>
            <td> {{$user->id_means_no}}</td>

       <div class="card-body">  
    <!-- <img src="STUDENT_DATA/STUDENT_PHOTO/{{ $user->student_photo }}" class="img-circle" width="90" /> -->
       </div>
            </tr>
            @endforeach
        </tbody>
    </table>
    @elseif(isset($message))
    <p>{{$message}}</p>
    @endif
</div>


</body>
</html>
@include('inc.footer')
@endsection
