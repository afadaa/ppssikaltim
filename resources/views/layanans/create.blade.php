@extends('layouts.app')

@section('content')

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6>Tambah Layanan Baru</h6>
                    <hr class="mb-2">

                    {!! Form::open(['route' => 'layanans.store', 'files' => true]) !!}

                    <div class="card-body">

                        <div class="row">
                            @include('layanans.fields')
                        </div>

                    </div>

                    <div class="card-footer">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('layanans.index') }}" class="btn btn-default">Cancel</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div> 
@endsection
