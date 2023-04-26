
<div>
<div class="data">
	<div class="content-data"> 
    <div class="info justify-content-center align-items-center h-100">
    <img src="{{ url('storage/photos/user/'. $admin->picture)}}"alt="user image" class="img-fluid img-thumbnail mt-4 mb-2"style="width: 150px; height:150px; z-index: 1; object-fit:cover;">
    <div class="ms-3">
        <h5>{{ $admin->name }}</h5>
        <p> @ {{ $admin->username }} | {{ $admin->userType->name}} </p>
    </div>
    </div>
    </div>  
</div>    
</div>

