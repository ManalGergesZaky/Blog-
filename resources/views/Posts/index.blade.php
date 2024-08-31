@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                {{-- <div class="card col-12"> --}}
                    <div class="card-header d-flex">
                        {{ __('Posts') }}
                       
                        {{-- <form action="{{ route('users.export') }}" method="post" class="ml-auto">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary">Export</button>
                            <a href="{{ route('products.import') }}" class="btn btn-sm btn-success">Import</a>
                        </form> --}}

                    </div>

                    <div class="card-body">
            
                    
                        <div class="col-md-12 text-center">
                            <a class="btn btn-success mr-auto ml-auto mb-3" href="{{route('posts.create')}}">create new post</a> 
                        </div>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Posted By</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($allposts as $post)
                            <tr>
                                <td scope="row">{{ $post['id'] }}</td>
                                <td>{{ $post->title }}</td> 
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->user ? $post->user->name :'User not found' }}</td>
                                <td>{{ $post->created_at}}</td>
                                
                                                            
                                <td>
                                    <a href="{{route('posts.show',['post'=>$post->id])}}" class="btn btn-info">View</a>
                                    <a href=" {{route('posts.edit',['post'=>$post->id])}}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('posts.destroy',['post'=>$post->id]) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No products found</td>
                                </tr>
                            @endforelse
                            </tbody>
                            <tfoot>
                            {{-- <tr>
                                <td colspan="5">{{ $products->links() }}</td>
                            </tr> --}}
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

