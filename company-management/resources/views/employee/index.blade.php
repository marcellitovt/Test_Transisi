@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Data Karyawan</h2>  

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

        <div class="row">
            <div class="col-sm">
                <a href="{{ action('App\Http\Controllers\EmployeeController@create') }}" class="btn btn-primary">
                    Tambah Data
                </a>
            </div>
            <div class="col-sm">
                <a href="{{ action('App\Http\Controllers\CompanyController@index') }}" class="">
                    Data Perusahaan
                </a>
            </div>
            <div class="col-sm">
                    {{ $data_employee -> links()}}
            </div>

        </div>
        <br>

        <table class="table striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Perusahaan</th>
                    <th>Email</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_employee as $item)
                    <tr>
                        <td> {{ $item['id_employee'] }}</td>
                        <td> {{ $item['name'] }}</td>
                        <td> {{ $item->Company->name}}</td>
                        <td> {{ $item['email'] }}</td>
                        <td>
                            <a href="{{action('App\Http\Controllers\EmployeeController@edit',$item['id_employee'])}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="{{action('App\Http\Controllers\EmployeeController@destroy',$item['id_employee'])}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
        </table>
    </div>
    
@endsection