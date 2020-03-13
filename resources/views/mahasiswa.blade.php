@extends('master')
@section('content')
<div class="container">
    @if ($message = Session::get('success'))
    <?php
    
    alert()->success('Data terhapus!');
    // <div class="alert alert-dark" role="alert">{{ $message }}</div>
    ?>
    @elseif($message = Session::get('error'))
    <h1 style="color: red">{{ $message }}</h1>
    @endif
        
            <div class="row">
                <div class="col-6 mt-4">
                <form action="" method="get">
                    <select name="class">
                        <option value="">Semua</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="6C">6C</option>
                        <option value="6D">6D</option>
                    </select>
                    <input type="submit" value="Cari">
                </form>
                </div>
            </div>
            
            <div class="btn btn-outline-info mb-4">
                <a href="{{ route('mahasiswa.create') }}">Tambah</a>
            </div>
            

            <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kelas</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $m)
                        <tr>
                            <td>{{$m['no']}}</td>
                            <td>{{$m['class']}}</td>
                            <td>{{$m['nama']}}</td>
                            <div class="col-12">
                            <td><a class="btn btn-outline-secondary" href="{{route('mahasiswa.show', $m['no'])}}">Lihat</a> 
                                <a class="btn btn-info" href="{{route('mahasiswa.edit',$m['no'])}}">Edit</a> <br>
                            <form action="{{route('mahasiswa.destroy', $m['no'])}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" value="{{$m['nama']}}" name="name">
                                <input class="btn btn-outline-danger" type="submit" value="Hapus" onclick="return confirm('Are you sure?')">
                                
                            </form>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endsection
            </div>
        </div>
            