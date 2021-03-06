@extends('../BackLayouts.app')

@section('content')
    

<div class="container mt-5">
    <div class="row">
        <h1 class="text-center text-secondary">create new experience</h1>
        <form action="/admin.store_experience" method="post" class="form-group col-md-6 m-auto">
            @csrf
            <label for="start_date" class="mt-2">title</label>
             <input type="text" class="form-control" name="title" placeholder="title">

             <label for="start_date" class="mt-2">company name</label>
             <input type="text" class="form-control" name="company_name" placeholder="company name">

             <label for="start_date" class="mt-2">started at</label>
             <input type="date" class="form-control" name="start_date" >

             <label for="end_date" class="mt-2">to</label>
             <input type="date" class="form-control" name="end_date" >
             <div class="form-floating">
                <textarea name="description" class="form-control mt-2" placeholder="describe your post here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">description</label>
              </div>

              <button class="mt-2 btn btn-primary form-control">save</button>
        </form>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-3">

       
        <table class="table">
            <thead class="table-dark">
              <tr>
             
                <th >title</th>
                <th >company name</th>
                <th >started at</th>
                <th >to</th>
                <th >action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($experiences as $experience)
                  
              <tr>
              
                <td>{{$experience->title}}</td>
                <td>{{$experience->company_name}}</td>
                <td>{{$experience->start_date}}</td>
                <td>{{$experience->end_date}}</td>
                <td>
                    <form action="admin.destroy_experience/{{$experience->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        <a href="/admin.show_experience/{{ $experience->id }}" class="btn btn-warning"><i
                          class="fas fa-edit"></i></a>
                    </form>
                </td>
                
              </tr>

              @empty
                  
              @endforelse

            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection