@extends('layouts.app')

@section('content')

    <div class="container">
        <H2>Tambah Data Perusahaan</H2>

        @if ($errors->any())
        <div class="allert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}</li>                    
                @endforeach
            </ul>
        </div>
            
        @endif

        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \session::get('success') }}</p>
        </div>
        <br>
        @endif

        <form action="{{url('company')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Nama Perusahaan :</label>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="email">Email :</label>
                    <input type="text" name="email" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="logo_path">Logo :</label>
                    <input type="file" name="logo_path" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="website">Website :</label>
                    <input type="text" name="website" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-3">
                    <button class="btn btn-success" type="submit">
                        Tambah Data
                    </button>
                </div>
            
            <div class="form-group col-md-2">
                    <a href="{{URL::previous()}} " class="btn btn-primary">
                    Cancel
                    </a>
                </div>
            </div>
            </form>
    </div>
    
@endsection