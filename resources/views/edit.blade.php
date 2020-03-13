@extends('master')
@section('content')
<div class="col-md-12 mt-2">
     <div class="card">
         <div class="card-body">
            @foreach ($mahasiswas as $m)
            <form action="{{route('mahasiswa.update', $m['no'])}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="_method" value="PUT">
                </div>
                <div class="form-group">
                    <input type="hidden" placeholder="nama" name="old_name" value="{{ $m['nama'] }}">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="nama" name="name" value="{{ $m['nama'] }}">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="class" name="class" value="{{$m['class']}}">  
                </div>
                <small><small style="color: red;">Nama wajib diganti</small><br></small>
                <input type="submit" value="Tambahkan">
            </form>
            @endforeach
        @endsection
            </div>
        </div>
    </div>