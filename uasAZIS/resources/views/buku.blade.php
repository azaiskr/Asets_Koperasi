@extends('welcome')
@section('pageView')
@section('title', 'Daftar Buku')

<div class="pageSection">
    <div class="pageTitle">
        <span>Daftar Buku</span>
    </div>

    
    <div class="row">

        <a class="btnAdd" href="/buku/tambah" role="button"> 
            <i class="bi bi-plus-lg"></i>
            <span class="btnLabel">Tambah data</span>
        </a>

        <div class="tableContainer" >
            <table class="table-div">
                <thead class="thead-primary">
                    <tr>
                        <th class="text-center" >ID Buku</th>
                        <th>Judul</th>
                        <th>Kategori</th>
						<th>Penulis</th>
                        <th>Penerbit</th>
                        <th class="text-center">Tahun Terbit</th>
                        <th class="text-center" >Stok</th>
                        <th class="text-right">Denda Buku</th>
                        <th> </th>
                </thead>
                <tbody>
                @foreach ($dataBuku as $item)
                    <tr>
                        <td class="text-center" >{{$item->idBuku}}</td>
                        <td>{{$item->judul}}</td>
                        @foreach($dataKategori as $kategori)
                            @if($item->kategori == $kategori->idKategori)
                                <td class="text-left">{{$kategori->namaKategori}}</td>
                            @endif
                        @endforeach
                        @foreach($dataPenulis as $penulis)
                            @if($item->penulis == $penulis->idPenulis)
                                <td class="text-left">{{$penulis->namaPenulis}}</td>
                            @endif
                        @endforeach
                        <td>{{$item->penerbitBuku}}</td>
                        <td class="text-center" >{{$item->tahunTerbit}}</td>
                        <td class="text-center" >{{$item->jumlahStok}}</td>
                        <td class="text-right" >{{$item->dendaBuku}}</td>
						<td>
                            <a class="btnEdit" href="/buku/edit/{{$item->idBuku}}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btnRemove" href="/buku/hapus/{{$item->idBuku}}"> 
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