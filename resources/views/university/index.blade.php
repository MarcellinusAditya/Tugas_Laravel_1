@extends('component.app')

@section('content')
    <div class="justify-content-center mt-5 mb-5 text-center">
        <h1>Informasi Universitas</h1>
        <div class="text-start mt-5 ms-5">
            <div class="row">
                <div class="col-3">
                    <h2>Nama Universitas</h2>
                    <h2>Alamat</h2>
                    <h2>Telp</h2>
                    <h2>Fax</h2>
                </div>
                <div class="col-9">
                    <h2>: {{$data['nama']}}</h2>
                    <h2>: {{$data['alamat']}}</h2>
                    <h2>: {{$data['telp']}}</h2>
                    <h2>: {{$data['fax']}}</h2>
                </div>
            </div>
            
        </div>
    </div>
    
@endsection