@extends('base2')
@section('pageView')
@section('title', 'Update Data Rekap Aset')


<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Edit Data Rekapitulasi </h3>

            <form action="/rekapitulasiAset/update/" method="post">
                {{csrf_field()}}
                @foreach($rekap as $rp)
                <div class="form">
                    <label for="id"> <h5> ID aset </h5> </label>
                    <input class="form-control" type="show" name="id" value="{{$rp->id}}" required="required">
                    @if ($errors->has('id'))
                        <div class="text-danger">
                            {{$errors->first('id')}}
                        </div>
                    @endif 
                </div>
                <div class="form">
                    <label for="jenis"> <h5> Jenis aset </h5> </label>
                    <input class="form-control" type="text" name="jenis" value="{{$rp->jenis_aset}}" required="required">
                    @if ($errors->has('jenis'))
                        <div class="text-danger">
                            {{$errors->first('jenis')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="jumlah"> <h5> Kuantitas </h5> </label>
                    <input class="form-control" type="number" name="jumlah" value="{{$rp->kuantitas}}" required="required">
                    @if ($errors->has('jumlah'))
                        <div class="text-danger">
                            {{$errors->first('jumlah')}}
                        </div>
                    @endif
                </div>
                @endforeach
                <div class="form-group float-right">
                    <button class="btn-danger" type="reset"> Reset</button>
                    <button class="btn-success" type="sumbit"> OK </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection