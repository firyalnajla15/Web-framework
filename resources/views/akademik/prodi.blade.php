@extends('layouts.main')
@section('title', 'Data Prodi')

@section('container')
<h1>Daftar Prodi {{ $data[0] }} prodi {{ $data[1]}}</h1>
<div class="row">
    <div class="col-lg-4">
        <div class="card" style="width: 20rem;">
            <img src="/images/logoti.png" class="card-img-top" alt="Logo TI">
            <div class="card-body">
                <h5 class="card-title">Prodi Manajemen Infromatika</h5>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <a href="#" class="btn btn-primary">more</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card" style="width: 20rem;">
            <img src="/images/logoti.png" class="card-img-top" alt="Logo TI">
            <div class="card-body">
                <h5 class="card-title">Prodi Teknik Komputer</h5>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <a href="#" class="btn btn-primary">more</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card" style="width: 20rem;">
            <img src="/images/logoti.png" class="card-img-top" alt="Logo TI">
            <div class="card-body">
                <h5 class="card-title">Prodi Animasi</h5>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <a href="#" class="btn btn-primary">more</a>
            </div>
        </div>
    </div>
</div>
@endsection