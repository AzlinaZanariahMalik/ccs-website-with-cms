<div>
<div class="data">
	<div class="content-data"> 
    <div class="info justify-content-center align-items-center h-100">
    <div class="d-flex flex-column" >
        <img src="{{$admin->picture}}"
        alt="user image" class="img-fluid img-thumbnail mt-4 mb-2"
        style="width: 150px; z-index: 1">
        <input type="file" name="file" id="userChangeProfilePicture" class="d-none" onchange="this.dispatchEvent(new InputEvent('input'))">
        <button type="button" class="btn btn-main" style="z-index: 1;" onclick="event.preventDefault();document.getElementById('userChangeProfilePicture').click();">
            Edit profile
        </button>
    </div> 
    <div class="ms-3">
        <h5>{{ $admin->name }}</h5>
        <p> @ {{ $admin->username }} | {{ $admin->userType->name}} </p>
    </div>
    </div>
    </div>  
</div>    
</div>
