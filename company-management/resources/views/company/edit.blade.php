@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Data Perusahaan</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        </div>
            
        @endif

        @if (\Session::has('success'))
            <div class="alert-alert-success">
                <p>{{\Session::get('success')}} </p>
            </div>
            <br/>
            
        @endif

        <form method="post" action="{{action('App\Http\Controllers\CompanyController@update',$id)}}">
            
            {{ csrf_field() }}
 
            <input name="_method" type="hidden" value="PATCH">

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Nama Perusahaan :</label>
                    <input type="text" name="name" class="form-control" value="{{$company->name}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="email">Email :</label>
                    <input type="text" name="email" class="form-control"value="{{$company->email}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="logo_path">Logo :</label>
                    <input type="text" name="logo_path" class="form-control"value="{{$company->logo_path}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="website">Website :</label>
                    <input type="text" name="website" class="form-control"value="{{$company->website}}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-3">
                    <button class="btn btn-success" type="submit">
                        Simpan
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