<table class="table" id="agendas-table">
    <thead>
    <tr>
        <th>#</th>
        <th>Thumbnail</th>
        <th>Tittle</th>
        <th>Desc</th>
        <th>Quota</th>
        <th>Slug</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp 
    @foreach($agendas as $agenda)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $agenda->thumbnail }}</td>
            <td>{!! $agenda->tittle !!}</td>
            <td>{!! Str::limit($agenda->desc, 95, '...') !!}</td>
            <td>{{ $agenda->quota }}</td>
            <td>{{ $agenda->slug }}</td>
            <td width="120">
                {!! Form::open(['route' => ['agendas.destroy', $agenda->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{{ route('agendas.show', [$agenda->id]) }}"
                       class='btn btn-default btn-xs'>
                        <i class="far fa-eye"></i>
                    </a>
                    <a href="{{ route('agendas.edit', [$agenda->id]) }}"
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