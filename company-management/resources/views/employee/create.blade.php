@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Data Karyawan</h2>

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

        <form action="{{url('employee')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Nama Karyawan :</label>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="id_company">Perusahaan :</label>
                    
                    <select name="id_company" id="id_company" class="form-control input-sm">
                        @foreach ($data_company as $items)
                            <option value="{{$items->id_company}} ">{{$items->name}} </option>
                        @endforeach
                
                    </select>

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