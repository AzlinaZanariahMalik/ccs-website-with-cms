
<div>
    <div class="card">
        <div class="justify-content-center align-items-center">
            @if (!empty($user->picture))
                <img src="{{ url('storage/photos/user/'. $user->picture)}}" alt="user image" class="img-fluid img-thumbnail mx-auto d-block"style="width: 150px; height:150px; z-index: 1; object-fit:cover; ">
            @else
                <img src="{{ url('/images/user/defaultprofileimg.jpg') }}"alt="user image" class="img-fluid img-thumbnail mx-auto d-block"style="width: 150px; height:150px; z-index: 1 ">
            @endif
            <div class="card-body">
                <h2 class="text-center text-capitalize">{{$users->name}}</h2>
                <p class="text-center text-capitalize"> {{ $users->title }} </p>
                <p class="text-center text-capitalize"> {{ $users->designation}} </p>

                <h4>Qualification</h4>
                <p  style="text-align:justify !important; text-justify: inter-word;">{!! $users->qualification !!}</p>
            </div>
       
    </div>
    </div>
</div>

     
      