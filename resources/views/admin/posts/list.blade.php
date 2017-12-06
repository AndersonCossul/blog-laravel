@extends('admin.layout.master')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Posts</h3>
        </div>

        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>Title</th>
                <th>Content</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>

                <tbody>
                @if (count($posts) > 0)
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->content }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>
                                <a href="{{ route('admin.post.edit', ['id' => $post->id]) }}"
                                   class="btn btn-default btn-xs">Edit</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.post.delete', ['id' => $post->id]) }}"
                                   class="btn btn-danger btn-xs">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>No posts.</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection