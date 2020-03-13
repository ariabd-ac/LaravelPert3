@extends('master')
@section('content')
<div class="container">
    <div class="row mt-2 mb-3">
            {{-- <div class="col-md-12"> --}}
                @foreach ($mahasiswas as $m)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">ID : {{$m['no']}}</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">Nama : {{$m['nama']}}</div>
                    </div>
                </div>  
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">Kelas : {{$m['class']}}</div>
                    </div>
                </div>
                @endforeach
            {{-- </div> --}}
        
    </div>
    
    {{-- <div class="mb-2"> --}}
        <div class="btn btn-outline-danger">
            <a href="{{route('mahasiswa.index')}}">< Kembali</a>
        </div>
    {{-- </div> --}}
</div>
@endsection
    