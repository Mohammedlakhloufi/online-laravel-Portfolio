@extends('../BackLayouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <h1 class="text-center text-secondary">Update your interests<i class="fas fa-magic"></i></h1>
        <form action="/admin.update_interest/{{$interest->id}}" method="post" class="form-group col-md-6 m-auto">
            @csrf
            @method('PUT')
            <label for="textarea" class="mt-2">Content</label>
            <textarea name="content" id="textarea" class=" form-control mt-2 @error('content') is-invalid @enderror">{{$interest->content}}</textarea>
            @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button class="mt-2 btn btn-warning form-control">save</button>
        </form>
    </div>
</div>

@endsection