@extends('back.layouts.pages-layout')
@section('title') {{'Pythons'}} @endsection

@section('content')


<!-- sidebar menu admin -->
<section id="sidebar">
		<a href="{{ route('admin.home')}}" class="logo-sidebar"> <img src="{{ url('/images/CCS_logo.png') }}" width="53" height="53" class="d-inline-block align-top" alt=""> &nbsp&nbsp Content Management</a>
		<ul class="side-menu">
			<li><a href="{{ route('admin.home')}}"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAHlJREFUSEtjZKAxYKSx+Qx0t2A/AwODAw5fPWBgYFCEyhGrDsMH/wkEGczHxKobtQBngMITD3oqIjZsiVVH/ziYz8DAkIDD4wcYGBgcoXLEqqN/RqN6yYEeycTmUGLV0T+SiU1+xKob9cEgLCqIzaHEqhuGOZnqRQUAZX0oGXY3cFsAAAAASUVORK5CYII='}}"/>&nbsp Dashboard</a></li>
			@if(auth()->user()->user_type == 1)
			<li><a href="{{ route('admin.user-manage')}}" class=""><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAASFJREFUSEvtldERAUEQRPsyIRJEgkgQCSIhE0RCvapttcfO7d1VXZUP+4fZeTPdM6vRxKeZOL9+GnCUdJB071Kh1sFG0lrSLCU5S9pLWkq6pOSrLkgXgES7QnWnVDkAwHRBbPFEAC7egjtIsk1VO2YedREBkAaNowOATugCufz5Kz4CWOO+AHy4loLHSEQeS/JMSQdLxL3IZJvq3/EEwCCTHUySRdKZRB7T3CO+B4onvT2ovSB4xKQxxt6R4rhGHuSV5zCqxcxHNvvEehm/IJ8AqmE8qbB2gHmLc79ahn8CPNe15P6dboBwKAxvWl3kgNpy1XbC93No67l2BX2rL3XhvXgXnnfAu+KJGALpvQemD0nu2PBVrv0fjIG17vwBVQlfq+FBGdSNTXQAAAAASUVORK5CYII='}}"/>&nbsp Users</a></li>
			<li class="divider" data-text="Content Manage">Content Manage</li>
			<li>
				<a href="" ><img class="icon" src="{{ 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAARBJREFUSEvFlYsNwjAMRK+bwCTAJjAJMAkwCTAJMAnoVUmUhDQfNQhLVaqm8fl8tjPoxzb82L9qANaSeFZmfUq6SXqZlfdJywEsJJ2M05wPADeSWL9sCuAgad+QPpxfJHEusBRAq3Pf4TEGiQFIy6Mh8vhXmOyMNuNeDHAt5Nz+/84EAcjS7vsAWyNqTVHkADiP6GN1+QBzch8H5bTwAShJWPQwoodFwABxEblHipwOPoOeAC54H6BUQT7jkshnU67NIteUKYEkRWagwaKHBjQbLAIGNcOthoGroFQnzx0VQZOlAPhW09FTaSwOOw7CApCWcR0I66P/7cKxQcDGPvbKZI9Ovc+9MnvMpKpLfxbQBxqfOBnrSWS3AAAAAElFTkSuQmCC' }}"/>&nbsp About College 
                <img class="icon-right" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAJJJREFUSEvt1MEJgDAQRNFvJ9qJdmIn2ol2YiuWIgMRxEOyExAUzMVLmGdmow0Pr+bhfH6g2PCrKpqBFdiLr33ZED2BwqcUPjhIFGiBDdBTJwgjUUCHrkIcoApxARupBRagT/PocrfKBTSHcLhgB7DDHaAq3AHGVI2+gWzn93k4FQnRr8JaDmAFn5t/oFjb9ys6AAkuHBlC5x93AAAAAElFTkSuQmCC'}}"/></a>
				<ul class="side-dropdown">
                    <li><a href="{{ route('admin.about')}}">About</a></li>
					<li><a href="{{ route('admin.vision-mission')}}">Vision Mission</a></li>
                    <li><a href="{{ route('admin.goal')}}">College Goal</a></li>
					<li><a href="{{ route('admin.college-history')}}">History</a></li>
					<li><a href="{{ route('admin.department')}}">Department</a></li>
					<li><a href="{{ route('admin.faculty-and-staff')}}">Faculty and Staff</a></li>
					
				</ul>
			</li>
			
            
			<li><a href="{{ route('admin.academic-program')}}"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAASZJREFUSEvtlDFuAjEQRR9dcoigcIIUXCCUdKQKHeQkcAzSJVUuAYQITgEFHIGC1KCPbGkwXmxW2gpGsrSrHb/nGdtbo+KoVcznNgQvwBvQAR6BiRnbVIuLWmShei6KOTAFxsAilmQFudAimaqx1S2VaAX7VLlXfj+yraAJvLtRvxJm03+AT+AvFNiktpE9ZMj+gZEDr2x+6h4I7quSNAzBtFrBJTmLmGANfAMzN/ykJ6DrhDsHVjt8DIEe0EhVYDdbC9DEUOYZz0AfGBjoyaJjFYQC/74xlek5BHtHaUHGXh9TkoJf4NXRvtxKc+FZAsElKROt4GAU/q5jm3dJqD35COGXLpo9JapIx08hsYaACp0u3Vi1Mhqpi1amTSdz7oJkCytv0QEWKjcZl6jltgAAAABJRU5ErkJggg=='}}"/>&nbsp Academic</a></li>
			<li><a href="{{ route('admin.banner')}}"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAN1JREFUSEvdldsNwjAMRU83gU1gE5gEmAQ2ASaBTUAXNZUVFSfN46f+qhrVx76+cQc6x9A5P+sC7IArsKmU7Q0cgYfyWInugCAtQpBtDPi0yGxy/Iq3HVjADbgAB+BUCHYBAax5vHoAVL26UPXqoiTcDlIJ5RI5zotiwH60oDrzINkA+fk5yqVnAUKcHRNkAUJCDVvzkDQ29F5dzN2fJGC6LAmtBdEljTdAEhC0Tg1c53N2dgFLkocC4qEnO8ipfJFNWy67yW12F8kJckrtRv27rmslmf1+Xb/MLhJ9AaOeKxkN8OojAAAAAElFTkSuQmCC'}}"/>&nbsp Banner</a></li>
			@endif
			@if(auth()->user()->rank == 1)
			<li><a href="{{ route('admin.deans-corner')}}"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAASZJREFUSEvtlDFuAjEQRR9dcoigcIIUXCCUdKQKHeQkcAzSJVUuAYQITgEFHIGC1KCPbGkwXmxW2gpGsrSrHb/nGdtbo+KoVcznNgQvwBvQAR6BiRnbVIuLWmShei6KOTAFxsAilmQFudAimaqx1S2VaAX7VLlXfj+yraAJvLtRvxJm03+AT+AvFNiktpE9ZMj+gZEDr2x+6h4I7quSNAzBtFrBJTmLmGANfAMzN/ykJ6DrhDsHVjt8DIEe0EhVYDdbC9DEUOYZz0AfGBjoyaJjFYQC/74xlek5BHtHaUHGXh9TkoJf4NXRvtxKc+FZAsElKROt4GAU/q5jm3dJqD35COGXLpo9JapIx08hsYaACp0u3Vi1Mhqpi1amTSdz7oJkCytv0QEWKjcZl6jltgAAAABJRU5ErkJggg=='}}"/>&nbsp Dean's Corner</a></li>
			@endif
			<li><a href=""><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKJJREFUSEvdVNsNgCAMPEZxE1dxEnUUJ3EVN9HUpEklkEKxauST0Hs1XIDzCc74+BfBCqA3RrYB6FKzMqLdCM5jybhfI0ipYYc5UXx/eac9lqk9RpBb1W0O3Am0WL+xA8uXqNqBO0FpCcrfX+XAncAS0QCASo9Kk84pUiptadNY0AxgigmoqseGyiY8crAweExgiUWdKV2mCqT1hxlAG3R3cAB7QSwZWH7E+QAAAABJRU5ErkJggg=='}}"/></i>&nbsp News
			<img class="icon-right" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAJJJREFUSEvt1MEJgDAQRNFvJ9qJdmIn2ol2YiuWIgMRxEOyExAUzMVLmGdmow0Pr+bhfH6g2PCrKpqBFdiLr33ZED2BwqcUPjhIFGiBDdBTJwgjUUCHrkIcoApxARupBRagT/PocrfKBTSHcLhgB7DDHaAq3AHGVI2+gWzn93k4FQnRr8JaDmAFn5t/oFjb9ys6AAkuHBlC5x93AAAAAElFTkSuQmCC'}}"/></a>
				<ul class="side-dropdown">
                    <li><a href="{{ route('admin.news.add-news')}}">Add News</a></li>
					<li><a href="{{ route('admin.news.news-management')}}">News Management</a></li>
				</ul>
				</a>
			</li>
			@if(auth()->user()->user_type == 1)
            <li><a href="{{ route('admin.pythons')}}"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAJFJREFUSEvtldENgCAMRI/NXMXN3MTRNBhpsJb0AkEx0b/Gcs87KgR0fkJnfViArRF60XwFEA0kF2yExf6SwOMADfRq2UbWgSc4fkTe5FIOVgCTUkoRshGl5QuAORb5Hlg/WC1AtFkAG1Hed2gPBdARUh9HNZ2+f4CcoN7EsO+pKWLFrL4boEWsuJa9UKrh3wfstfctGfek13QAAAAASUVORK5CYII='}}"/>&nbsp Pythons</a></li>
            <li><a href=""><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAT1JREFUSEu1ldFxAjEMRJdOSCVAJUkqASpJqISkkqSTMI9hb3SOZXuYO/14uDtp17uS2Gjl2KxcX6MAW0lHSfsHoV9J75I4mzECQPGfpMpLD2QE4EPSWwJwlnRqXWEE4K9RAIm4RRojAMiDTLVYBAAJMLgWi0gE+2vlFrA/LGGymUezu8yd1POA7vkM2tjwmMdsfGUuZwDWvTSxBsAzvrvUWrYEKPUudS4B+B7p4oTPfIkAcWIzA2s3QJ0INMuNADYRPWFRiwzAILQzvk01IoAHqrVfvJOy6bUKk3cRgF5HS9hnXWGtW++pQ9xrRwB3Dm3JKn4mTHKqUZrsifW+T/u7QB8y2UbFteD+NhCnFx8nkr2GZ/+WX23QSKQTYmJPruFBi4XMcBcYwth/k5zfj99xnczI9HZRj3n3/eoAN151TxleC8PLAAAAAElFTkSuQmCC'}}"/>&nbsp Alumni</a></li>
			<li><a href="{{ route('admin.contact')}}"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOpJREFUSEvNldENwjAMRF83gU1gEzYBJgEmgU3KJqCrEoio08SESFjqV2u/5O6SDnSuofN8LMAGOAGrBvgdWKvfAlwBQVprmm0BHq2TQ/9XgCNwCPLtgP3CYtyAODydKYj8smoGKEkj02ReWgrC2BOg2bmF/UQi+ZHzwQ2QPBfgHCRxm1zywJtet8kRoJ3oKR1Gl0QaqJhGeQSLV4liasGqAVb+P+WyzK6S6AZsK8XXTmR8rCqAdbhyPMmkizILiC/SNHn/F7Pev7tNK+2YPsumqPsPR2bpfikdpKXdvNLnNdEj0Vsnd5ej4Qkpxi8Z57r2UwAAAABJRU5ErkJggg=='}}"/>&nbsp Contact</a></li>
			<li><a href="{{ route('admin.certifications')}}"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAARJJREFUSEu1lWEWwTAQhKcnwU04CU6Ck+Ak3AQn4X1k+yJtmjRp88/TzGRnZncbzXyamfGVQ7CWdJZ0lXRxD9pJ2kraS7oPPTKH4CYJEs5T0tID5PdqLAEAvHDhwAw8hmNV8f/JPaL9tq8C5ICg5EBw9C9OTUA1+DJYga/52CowfBMjsLT4Jo4lsCBAQgD+YvouQYvcadPle1BjbsjTeuETIM1joirojY5EYE8hE8C9HswuEfLUJsgU7jUZcHqglgTwdgiGnQw4UqXmTywLg41ml2q8yBoVDKtDYVyzCPxxDU9qsiILur/cQvrm305q4YSehAuno3lYeYqA7y1drEzkswqRkYaqXpmFdvyu5VRQRfABK+41GdfnGXkAAAAASUVORK5CYII='}}"/>&nbsp Certification</a></li>
			<li class="divider" data-text="Maintenance">Maintenance</li>
			
            <li><a href="{{ route('admin.settings')}}" class="active"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAATJJREFUSEu1lYsNwjAMRI9JgE1gE5gEmAQ2gU2ASUCvIpHrOp9K1FKlSnV89t05XWnhWC1cX70Ad0k718xN0rHVYC/Ap1Coeb6UsJH0+hXl/VkA2Jo8Uuy54UgEkOiAgrekU4MG8igMhRPaPMBB0rXFa+M7ugAUTlDieg4m1O4TdXaCc4UODl0kPYwuTAo1UZBLvZEGkRXJoThiRoH4EUjWwmtAV4hlD404dSjR1COhIxf5rmpe9xaeTNsD4L1uh5gNAEVY1UaNosjWCAxNw6LaCaLiSeRsO4Nc2/BQ5JZNmYSueOicDZ9lU5or2W7uomVbe5FrU/SC5CUrXXZpinSf+L3wQBRc/2hj09ErR891DQBbHoW18OSqLk0QFfr7D8eDROJP6Ig6a/7yepUt5S0O8AXl20QZZ6tj+AAAAABJRU5ErkJggg=='}}"/></i>&nbsp Settings</a></li>
            @endif
			<li><a href="{{ route('admin.profile')}}" ><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOFJREFUSEvtld0NwjAMhL9uApvAJjAJMAkwCd0ENgEdSiQrzY8Dylv9VKmpz/7u2k4Mrmlwf1aBJuESog1wAg7AC5iBS7huNrUHSgIPYJd0ktC2qztkTdbU10KjfdhGt98Nse/wuQ3OAU/ueWHS/b8EhEaIcnUEbj2YchvIYCFKPZDRQtRVtRTJCyUppkjTp1XzoehBz4Q/CQiNJreI4hZ3kyLXICmiWkRjQ5ukpogVqKUnbeR5HxYeKDnawFM2USUfFgJPQBH1lPuzYRG1Xv1U2PUvcR3yrFQ6swo06Q1H9AEfrCQZ0jfjVQAAAABJRU5ErkJggg=='}}"/>&nbsp Profile</a></li>
			
		</ul>
		
	</section>
	<!-- end of sidebar menu -->
	<!-- page body content -->
	<section id="content">
		<!-- header-->
		@livewire('nav-header')
		<!-- end of header of main content -->

		<!-- main content -->
		<main>
			<h1 class="title">Pythons</h1>
			<ul class="breadcrumbs">
				<li><a href="{{ route('admin.home')}}">Home</a></li> / 
				<li><a href="#" class="active">Organization</a></li>
			</ul>
		

        <!---About-->

        @livewire('organization.organization-management')

        <!--end of About--->

			
		</main>
		<!-- end of main content -->
		<!--footer section-->
		<div class="footer text-center">
			<span >© 2023 Constellation WebTech </span>
		</div>
	</section>
	<!-- end of body of page content -->

@endsection