@extends('layouts.app')

@section('content')
    <div class = "container">
        <h2>Data Perusahaan</h2>

        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \session::get('success') }}</p>
        </div>
        @endif

        <div class="row">
            <div class="col-sm">
                <a href="{{ action('App\Http\Controllers\CompanyController@create') }}" class="btn btn-primary">
                    Tambah Data
                </a>
            </div>
            <div class="col-sm">
                <a href="#" class="">
                    Perusahaan
                </a>
            </div>
            <div class="col-sm">
                    {{ $data_company -> links()}}
            </div>

        </div>
        <br>

        <table class="table striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Logo</th>
                    <th>Website</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_company as $item)
                    <tr>
                        <td> {{ $item['id_company'] }}</td>
                        <td> {{ $item['name'] }}</td>
                        <td> {{ $item['email'] }}</td>
                        <td> {{ $item['logo_path'] }}</td>
                        <td> {{ $item['website'] }}</td>
                        <td>
                            <a href="{{action('App\Http\Controllers\CompanyController@edit',$item['id_company'])}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="{{action('App\Http\Controllers\CompanyController@destroy',$item['id_company'])}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection