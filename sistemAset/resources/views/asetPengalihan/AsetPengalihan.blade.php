@extends('base2')
@section('pageView')
@section('title', 'Daftar Aset')

<div class="pageSection">
    <div class="pageTitle">
        <span>Daftar Aset Dialihkan</span>
    </div>

    
    <div class="row">

        <a class="btnAdd" href="/AsetPengalihan/tambah" role="button"> 
            <i class="bi bi-plus-lg"></i>
            <span class="btnLabel">Tambah data</span>
        </a>

        <div>
            <table class="table-div">
                <thead class="thead-primary">
                    <tr>
						<th class="text-center">ID Aset</th>
						<!--<th class="text-center">Nama Aset</th>-->
						<th class="text-center">Jenis Pengalihan</th>
						<th class="text-center">Jumlah</th>
						<th class="text-center">Lokasi Pengalihan</th>
						<th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($aset_pengalihan as $ap)
                    <tr>
						<td class="text-center">{{ $ap->id_Aset }}</td>
						<td class="text-center">{{ $ap->jenis_Pengalihan }}</td>
						<td class="text-center">{{ $ap->jumlah }}</td>
						<td class="text-center">{{ $ap->lokasi_Pengalihan }}</td>
						<td>
                            <a class="btnEdit" href="/AsetPengalihan/edit/{{$ap->id_Aset}}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btnRemove" href="/AsetPengalihan/hapus/{{$ap->id_Aset}}"> 
                                <i class="bi bi-trash"></i>
                            </a>
						</td>   
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</div>
@endsection