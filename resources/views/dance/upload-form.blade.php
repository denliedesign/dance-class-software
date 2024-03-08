@extends('layouts.app')
@section('content')

    <div class="container py-5">
        <h1 class="text-center fw-bold">Upload & Import Excel</h1>
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm">
                <form action="{{ route('importDanceClasses') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input class="form-control" type="file" name="your_file" accept=".xlsx, .xls">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-danger my-3">Upload and Import</button>
                    </div>
                </form>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            <div class="col-sm"></div>
        </div>
    </div>

@endsection
