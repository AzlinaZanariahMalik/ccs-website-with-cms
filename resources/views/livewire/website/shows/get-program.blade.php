<div>
    <h1 class="text-start text-capitalize">{{$prog->program_name}}</h1>
    <p  style="text-align:justify !important; text-justify: inter-word;">{!! $prog->program_desc !!}</p>

    <a href="{{route('enroll',[$prog->id,preg_replace('/\+/','-',urlencode($prog->program_name))])}}" class="btn btn-success" type="submit">Enroll</a>
</div>
 