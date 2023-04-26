<div>
    <div class="d-flex flex-row-reverse">
        <div class="p-2 logout">
			<a href="{{ route('alumni-tracer-study.sign-out')}}" class="btn btn-main" onClick="event.preventDefault();document.getElementById('signout-form').submit();"> Sign Out</a>
			<form action="{{route('alumni-tracer-study.sign-out')}}" id="signout-form" method="POST">
				@csrf
			</form>
		</div>
        <div class="p-2"> {{ $alumni->astudent_id }}</div>
    </div>  

</div>
