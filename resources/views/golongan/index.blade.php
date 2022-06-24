@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> Daftar Golongan</h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>KODE</th>
            <th>NAMA</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->gol_id }}</td>
        <td>{{ $row->gol_kode }}</td>
        <td>{{ $row->gol_nama }}</td>
            <td></td>
            <td></td>
        </tr>
        @endforeach

    </table>


</div>
@endsection