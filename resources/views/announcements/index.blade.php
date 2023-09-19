@extends('layouts.app')

@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Pengumuman</h1>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-primary float-right"
                href="{{ route('announcements.create') }}">
                    Add New
                </a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Responsive Table</h6>
                    <div class="table-responsive">
                        @include('announcements.table')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

