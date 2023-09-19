<table class="table" id="beritas-table">
    <thead>
    <tr>
        <th>#</th>
        <th>Thumbnail</th>
        <th>Tittle</th>
        <th>Desc</th>
        <th>Slug</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
    @foreach($beritas as $berita)
        <tr>
            <td>{{ $i++ }}</td>
            <td><img src="{{ $berita->thumbnail }}" alt="Thumbnail" width="20%"></td>
            <td>{{ $berita->tittle }}</td>
            <td>{!! Str::limit($berita->desc, 50, '...')  !!}</td>
            <td>{{ $berita->slug }}</td>
            <td width="120">
                {!! Form::open(['route' => ['beritas.destroy', $berita->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{{ route('beritas.show', [$berita->id]) }}"
                       class='btn btn-default btn-xs'>
                        <i class="far fa-eye"></i>
                    </a>
                    <a href="{{ route('beritas.edit', [$berita->id]) }}"
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
