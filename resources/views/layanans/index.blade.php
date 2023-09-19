@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profil</h1>
            </div>
            <div class="col-sm-12">
                <a class="btn btn-primary float-right"
                href="{{ route('layanans.create') }}">
                <i class="fa-solid fa-plus"></i> Tambah
                </a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Responsive Table</h6>
                    <div class="table-responsive">
                        @include('layanans.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

