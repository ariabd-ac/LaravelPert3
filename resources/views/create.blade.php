@extends('master')
@section('content')
<div class="container">
    {{-- <div class="row"> --}}
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                <form action="{{route('mahasiswa.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="nama" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="class" name="class">
                    </div>
                    <div class="form-group">  
                        <input type="submit" value="Tambahkan">
                    </div>
                </form>
                </div>
            </div>
        </div>
    {{-- </div> --}}
</div>
@endsection