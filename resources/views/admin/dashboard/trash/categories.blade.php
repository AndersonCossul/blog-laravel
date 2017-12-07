<table id="categories" class="table table-hover">
    <thead>
    <th>Name</th>
    <th>Restore</th>
    <th>Delete</th>
    </thead>

    <tbody>
    @if ($categories->count() > 0)
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('admin.category.restore', ['id' => $category->id]) }}"
                       class="btn btn-success btn-xs">Restore</a>
                </td>
                <td>
                    <a href="{{ route('admin.category.permanent-delete', ['id' => $category->id]) }}"
                       class="btn btn-danger btn-xs">Trash</a>
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td><p>No Categories trashed.</p></td>
        </tr>
    @endif
    </tbody>
</table>