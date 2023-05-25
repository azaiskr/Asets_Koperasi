@extends('base2')
@section('pageView')
@section('title', 'Aset Tersedia')

<div class="pageSection">
    <div class="pageTitle">
        <span>Daftar Aset Tersedia</span>
    </div>

    
    <div class="row">

        <a class="btnAdd" href="/AsetTersedia/tambah" role="button"> 
            <i class="bi bi-plus-lg"></i>
            <span class="btnLabel">Tambah data</span>
        </a>

        <div class="tableContainer" >
            <table class="table-div">
                <thead class="thead-primary">
                    <tr>
						<th class="text-center">ID Aset</th>
						<th class="text-left">Nama Aset</th>
						<th class="text-center">Stok</th>
                        <th> </th>
                </thead>
                <tbody>
                @foreach($aset_tersedia as $at)
                    <tr>
						<td class="text-center" >{{ $at->id_aset }}</td>
						<td class="text-left" >{{ $at->nama_aset }}</td>
						<td class="text-center">{{ $at->stok }}</td>
						<td>
                            <a class="btnEdit" href="/AsetTersedia/edit/{{$at->id_aset}}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btnRemove" href="/AsetTersedia/hapus/{{$at->id_aset}}"> 
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