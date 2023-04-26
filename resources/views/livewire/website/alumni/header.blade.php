<div>
<nav class="navbar-expand-lg bg-light">
  <div class="container-fluid">
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
			<div class="p-2 text-uppercase"> {{ $alumni->astudent_id }}</div>
        </li>
      </ul>
	    <div class="p-2 logout">
			<a href="{{ route('alumni-tracer-study.sign-out')}}" class="btn btn-outline-success" onClick="event.preventDefault();document.getElementById('signout-form').submit();"> Sign Out</a>
			<form action="{{route('alumni-tracer-study.sign-out')}}" id="signout-form" method="POST">
				@csrf
			</form>
		</div>
    </div>
  </div>
</nav>
    <div class="d-flex flex-row-reverse">
       
		
       
	  
	
        
    </div>  

</div>
