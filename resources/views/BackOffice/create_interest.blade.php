@extends('../BackLayouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <h1 class="text-center text-secondary">Create new interest</h1>
        <form action="/admin.store_interest" method="post" class="form-group col-md-6 m-auto">
            @csrf
            <label for="textarea" class="mt-2">Content</label>
            <textarea name="content" id="textarea" class=" form-control mt-2 @error('content') is-invalid @enderror"></textarea>
            @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button class="mt-2 btn btn-primary form-control">save</button>
        </form>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 m-auto text-center">

            @foreach ($interests as $interest)
            <div class="border py-2">
                <p class="text-secondary " >{{$interest->content}}</p>   
                <form action="admin.destroy_interest/{{$interest->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    <a href="/admin.show_interest/{{ $interest->id }}" class="btn btn-warning"><i
                          class="fas fa-edit"></i></a>
                </form>
            </div>
            @endforeach 
        </div>
    </div>
</div>
@endsection