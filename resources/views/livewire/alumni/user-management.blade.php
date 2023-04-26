
<div>
<div class="row mb-3">
        <div class="col-md-8  flex-start">
        <a href="{{ route('admin.alumni.verify-alumni')}}"><button type="button" class="btn btn-main" >Verify Alumni</button></a>
        </div>
        <!---search --->
        <div class="col-md-4  float-right"> 
        <form>
            <div class="mb-3 float-right">
            <input class="form-control " type="text" placeholder="Search Here...">
            </div>
        </form>
        </div>
        <!--search end-->
        </div>
       

        <!---News Table-->
                     @if(Session::get('success'))
                        <div class="alert alert-success"role="alert">
                            {{ Session::get('success')}}
                            <button style="float:right" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif (Session::get('fail'))
                        <div class="alert alert-danger"role="alert">
                            {{ Session::get('fail')}}
                        </div>
                    @elseif (Session::get('offline'))
                        <div class="alert alert-danger"role="alert">
                            {{ Session::get('offline')}}
                        </div>
                    @endif 
            
        <div class="table-responsive-sm">       
        <table class="table table-light">
            <thead>
                <tr>
                <th scope="col">Student ID</th>
                <th scope="col">Email</th> 
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            
            <tbody>
            @if($alumni->count())  
                @foreach($alumni as $an)
               <!--fetch  table database---> 
               <tr>
               <td>{{$an->astudent_id}}</td>
               <td>{{$an->email}}</td>
               @if($an->verify_status == 'unverified')
               <td ><p class="text-capitalize text-danger"><b>{{$an->verify_status}}</b><p></td>
               @else
               <td ><p class="text-capitalize text-success"><b>{{$an->verify_status}}</b><p></td>
               @endif

               <td>
               <a href="" class="btn btn-primary" type="submit"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAATVJREFUSEvtlOttAkEMhIdKgEoglQCVQCoJqSRJJaEU9IF98vnM7gmJf6x0usf6PDP2eBd68Vq8OL/eAN0K90q0krSXtJHEM9fFsnL/lnRuobQATpKOXYp3QICIn6wKAJZfkraJ6a8kLlfCHWUoZAH0ERTePmaAmJwfDpa0JQQiEPLyjUAywI8xhymBcXnJ1pmlJXfVECNmogCpBI0CLC72A2AI5IUCCHJH+a35UcG/bVYJfI9/SP5pRNxRDjYhGQG8PAN6oBgBIvNc4iZA3MxuqCyLimjNbolg5ipyH3zgdka/8n1pkMqm3ihAYNmcVHNdtOngoGoO+Bal8g7AnzU1Dhr+X6ZBGyV/BOAg9GTOUUF87sdghDmHHUy99jzHww5l5RlUDVrrOHh6r6fg6cRvBbNLdwXSz0sZvk87VQAAAABJRU5ErkJggg=='}}"/></a>
                   
               </td>
               </tr>
               @endforeach 
            @endif 
        </table>
        {{ $alumni->links()}}
        </div>
        <!--responsive table-->

 
     
</div>
