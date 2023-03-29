@extends('base')
@section('container')
@section('title', 'Dashboard')

<div class="container">
    <div class="row">
        <div class="col-10 mt-4 ml-2">
            <h2> Dashboard : Feature list</h2>
        </div>
    </div>
    <div class="row row-cols-4">
        <div class="card mt-4 ml-4 shadow-sm p-3 mb-5 bg-gray rounded" style="width:20rem;">
            <div class="card-body">
                <h3 class="card-label"> Aset Perbaikan </h3>
                <p class="card-desc"> Manajemen aset yang diperbaiki </p>
            </div>
        </div>
        
    </div>
</div>
@endsection