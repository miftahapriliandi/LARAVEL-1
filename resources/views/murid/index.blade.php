@extends('layout/main')

@section('title', 'Daftar Murid')

    
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
               <h1 class="mt-2">Daftar Murid</h1>
               <table class="table">
                   <thead class="thead-dark">
                       <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">NISN</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                        </tr>
                   </thead>
                   <tbody>
                       @foreach ( $murid as $mrd )
                        <tr>
                            <th scope="row">{{$loop -> iteration}}</th>
                            <td>{{ $mrd -> nama }}</td>
                            <td>{{ $mrd -> nisn}}</td>
                            <td>{{ $mrd -> email}}</td>
                            <td>{{ $mrd -> phone}}</td>
                            <td>
                                <a href="" class="badge badge-success">Edit</a>
                                <a href="" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                   </tbody>
               </table> 
            </div>
        </div>
    </div>
@endsection