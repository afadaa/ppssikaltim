@extends('layouts.app')

@section('content')

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6>Tambah Event Baru</h6>
                    <hr class="mb-2">

                    {!! Form::open(['route' => 'agendas.store', 'files' => true]) !!}

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
