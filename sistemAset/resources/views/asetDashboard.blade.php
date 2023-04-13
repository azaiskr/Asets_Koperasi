@extends('base')
@section('container')
@section('title', 'Dashboard')

<div class="container">
    <div class="row">
        <div class="col-10 mt-4 ml-2">
    @if (Route::has('login')) 
        @auth 
            <h2> Dashboard : Feature list</h2>
        @else
            <h2> Harap Login Terlebih Dahulu</h2>
        @endauth
        </div>
    @endif
    </div>

@if (Route::has('login'))     
    @auth       
        <div class="row row-cols-4">
            <a class="btn btn-outline-info mt-4 ml-4 shadow-sm p-3 mb-3 rounded" style="width:18rem" href="{{url('/admin')}}" role="button";>
                <div class="">
                    <h3 class="btn-label"> Admin </h3>
                </div>
            </a>
            <a class="btn btn-outline-info mt-4 ml-4 shadow-sm p-3 mb-3 rounded" style="width:18rem" href="{{url('/AsetTetap')}}" role="button";>
                <div class="">
                    <h3 class="card-label"> Aset Tetap </h3>
                </div>
            </a>
            
            <a class="btn btn-outline-info mt-4 ml-4 shadow-sm p-3 mb-3 rounded" style="width:18rem" href="{{url('/aset_terpinjam')}}" role="button";>
                <div class="">
                    <h3 class="card-label"> Aset Terpinjam </h3>
                </div>
            </a>
            
            <a class="btn btn-outline-info mt-4 ml-4 shadow-sm p-3 mb-3 rounded" style="width:18rem" href="{{url('/aset_tersedia')}}" role="button";>
                <div class="">
                    <h3 class="card-label"> Aset Tersedia </h3>
                </div>
            </a>

            <a class="btn btn-outline-info mt-4 ml-4 shadow-sm p-3 mb-3 rounded" style="width:18rem" href="{{url('/asetPerbaikan')}}" role="button";>
                <div class="">
                    <h3 class="btn-label"> Aset Perbaikan </h3>
                </div>
            </a>
            
            <a class="btn btn-outline-info mt-4 ml-4 shadow-sm p-3 mb-3 rounded" style="width:18rem" href="{{url('/aset_jual_beli')}}" role="button";>
                <div class="">
                    <h3 class="btn-label"> Aset Jual Beli </h3>
                </div>
            </a>
            
            <a class="btn btn-outline-info mt-4 ml-4 shadow-sm p-3 mb-3 rounded" style="width:18rem" href="{{url('/AsetPengalihan')}}" role="button";>
                <div class="">
                    <h3 class="card-label"> Aset Pengalihan </h3>
                </div>
            </a>
            <a class="btn btn-outline-info mt-4 ml-4 shadow-sm p-3 mb-3 rounded" style="width:18rem" href="{{url('/aset_piutang')}}" role="button";>
                <div class="">
                    <h3 class="card-label"> Piutang </h3>
                </div>
            </a>
            
            <a class="btn btn-outline-info mt-4 ml-4 shadow-sm p-3 mb-3 rounded" style="width:18rem" href="{{url('/rekapitulasiAset')}}" role="button";>
                <div class="">
                    <h3 class="card-label"> Rekapitulasi Aset </h3>
                </div>
            </a>
            

        </div>
    @else
        <div class="row row-cols-4">
        <a class="btn btn-outline-info mt-4 ml-4 shadow-sm p-3 mb-3 rounded" style="width:18rem" href="{{url('/login')}}" role="button";>
                <div class="">
                    <h3 class="btn-label"> Login </h3>
                </div>
            </a>
            <a class="btn btn-outline-info mt-4 ml-4 shadow-sm p-3 mb-3 rounded" style="width:18rem" href="{{url('/pendaftaran')}}" role="button";>
                <div class="">
                    <h3 class="card-label"> Register </h3>
                </div>
            </a>
        </div>
    @endauth
@endif
</div>
@endsection