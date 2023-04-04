<div>
    <nav class="header">
		<img class="toggle-sidebar" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAF9JREFUSEvtk8sJACAMQ9PR3NzN9CxIS7BBKnqO5vPQID4mfh/fIFz4ykQjjOULltC7BnKDwwLr9SsM5A1YBu4KGZBpA/lE9Q08yA1AZyqykFMMmICh9s2fHNZmBPUnmrebCBlsxQ0oAAAAAElFTkSuQmCC'}}"/>
		<form action="#">
			<div class="form-group">
				
			</div>
		</form>

			<li>{{ $admin->username }}</li>
			
		<div class="logout">
			<li><a href="{{ route('admin.logout')}}" onClick="event.preventDefault();document.getElementById('logout-form').submit();"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAL5JREFUSEvVld0NwjAMhL9uApuUTWAS6CQdBTahm4AOJShFKrGrWGrzkofYd/b5Jx3BpwvGZzMEPXAFdNfOAxgA3eYMnsChhly8C/zkIXglZ4ukM1uLg7D3STAClyRN0wxUTIGrY6wSlvX/WwOB3gvrpgTnFLmjGz+mv0EsZnBLwxRGIGDpL4nyUDWVKEdekoQQ5ExUE8m230Fb7O1KF2xzF3nX9QQcPetaE671YfkTVn043uH72q/pcxdZOMEbtkwoGfvrEpUAAAAASUVORK5CYII='}}"/> Logout</a></li>
			<form action="{{route('admin.logout')}}" id="logout-form" method="POST">
				@csrf
			</form>
		</div>
	</nav>
</div>
