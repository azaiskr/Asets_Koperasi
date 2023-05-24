@extends('base2')
@section('pageView')
@section('title', 'Home')

<div class="pageSection">
    <div class="homeContent">
        <div class="desc">
            <p>SISTEM MANAJEMEN ASET</p>
            <h2>Pengelolaan Aset Secara Terpusat, Menyeluruh, Realtime</h2>
            <p> <small>Cek perkembangan aset kamu</small> </p>
            <button>
                <a href="{{url('/rekapitulasiAset')}}">Statistik </a>
                <i class="bi bi-box-arrow-up-right"></i>
            </button> 
        </div>
        <div class="imageContent">
            <img src="{{asset('elements/packageMngmt.jpg')}}" alt="packagemanager">
        </div>
    </div>

    <div class="featureList">
        <div class="title">
            <h2>Mulai Kelola Aset Kamu</h2>
            <span class="breakLine"></span>
        </div>
        {{-- <div class="features">
            <a href="">
                <button>
                    <i class="bi bi-clipboard-data"></i>
                    Rekap Aset
                </button>
            </a>
            <a href="">
                <button>
                    <i class="bi bi-clipboard-data"></i>
                    Rekap Aset
                </button>
            </a>
            <a href="">
                <button>
                    <i class="bi bi-clipboard-data"></i>
                    Rekap Aset
                </button>
            </a>
            <a href="">
                <button>
                    <i class="bi bi-clipboard-data"></i>
                    Rekap Aset
                </button>
            </a>
        </div> --}}
    </div>
</div>

@endsection