@extends('component.app')

@section('content')
    <div class="justify-content-center mt-5 mb-5 text-center">
        <h1>Profile</h1>
        <div class="text-start mt-5 ms-5">
            <div class="row">
                <div class="col-3">
                    <h2>Nama</h2>
                    <h2>Hobi</h2>
                    <h2>Universitas</h2>
                </div>
                <div class="col-9">
                    <h2>: {{$data['nama']}}</h2>
                    <h2>: {{$data['hobi']}}</h2>
                    <h2>: {{$data['univ']}}</h2>
                </div>
            </div>
            
        </div>
    </div>
    
@endsection