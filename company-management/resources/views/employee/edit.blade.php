@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Data Karyawan</h2>
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


        <form method="post" action="{{action('App\Http\Controllers\EmployeeController@update',$id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="PATCH">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Nama Karyawan :</label>
                    <input type="text" name="name" class="form-control" value="{{$employee->name}} ">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="id_company">Perusahaan :</label>
                    

                    <select name="id_company" id="id_company" class="form-control">

                        @foreach ($data_company as $items)
                            <option value="{{ $items->id_company}} " {{$items->id_company === $employee->name ? 'selected' : ''}} >
                            {{$items->name}}
                            </option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="email">Email :</label>
                    <input type="text" name="email" class="form-control" value="{{$employee->email}}">
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