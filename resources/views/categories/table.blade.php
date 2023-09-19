<table class="table" id="categories-table">
    <thead>
    <tr>
        <th>#</th>
        <th>Tittle</th>
        <th>Slug</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
    @foreach($categories as $item)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $item->tittle }}</td>
            <td>{{ $item->slug }}</td>
            <td>{{ $item->status }}</td>
            <td width="120">
                {!! Form::open(['route' => ['categories.destroy', $item->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{{ route('categories.show', [$item->id]) }}"
                       class='btn btn-default btn-xs'>
                        <i class="far fa-eye"></i>
                    </a>
                    <a href="{{ route('categories.edit', [$item->id]) }}"
                       class='btn btn-default btn-xs'>
                        <i class="far fa-edit"></i>
                    </a>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>