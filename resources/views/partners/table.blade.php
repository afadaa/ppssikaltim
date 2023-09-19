<div class="table-responsive">
    <table class="table" id="partners-table">
        <thead>
        <tr>
            <th>#</th>
            <th>Thumbnail</th>
            <th>Tittle</th>
            <th>Link</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp 
        @foreach($partners as $partner)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $partner->thumbnail }}</td>
                <td>{{ $partner->tittle }}</td>
                <td>{{ $partner->link }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['partners.destroy', $partner->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('partners.show', [$partner->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('partners.edit', [$partner->id]) }}"
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
</div>
