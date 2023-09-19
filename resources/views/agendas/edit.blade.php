@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Agenda</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($agenda, ['route' => ['agendas.update', $agenda->id], 'files' => true, 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('agendas.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('agendas.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>

    <script type="text/javascript">
        $('#date_start').datetimepicker({
            format: 'YYYY-MM-DD HH:mm',
            useCurrent: true,
            sideBySide: true
        })
    </script>
    
    <script type="text/javascript">
        $('#date_end').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endsection
