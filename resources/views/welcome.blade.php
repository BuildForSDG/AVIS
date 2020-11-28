@extends ('layouts.user')

<div class="col-md-6 col-lg-6">
@if (session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
@endif
</div>