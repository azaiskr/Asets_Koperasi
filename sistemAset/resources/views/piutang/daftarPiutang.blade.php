@extends('base2')
@section('pageView')
@section('title', 'Piutang')

<div class="pageSection">
    <div class="pageTitle">
        <span>Daftar Aset Piutang</span>
        @if(session('status'))
                <div class="alert alert-success mt-2 mb-2" id="alert">
                    {{session('status')}}
                </div>
                <script>
                    setTimeout(function(){
                        document.getElementById('alert').style.display = 'none';
                    }, 3000);
                </script>
            @endif
            @if(session('danger'))
                <div class="alert alert-danger mt-2 mb-2" id="alert">
                    {{session('danger')}}
                </div>
                <script>
                    setTimeout(function(){
                        document.getElementById('alert').style.display = 'none';
                    }, 3000);
                </script>
            @endif
    </div>

    <div class="row">
        <a class="btnAdd" href="/aset_piutang/create" role="button"> 
            <i class="bi bi-plus-lg"></i>
            <span class="btnLabel">Tambah data</span>
        </a>
       
        <div class="tableContainer" >
            <table class="table-div">
                <thead class="thead-primary">
                    <tr>
                        <th class="text-center" > ID Pinjaman </th>
                        <th class="text-left"> Nama Peminjam </th>
                        <th class="text-center"> Jumlah </th>
                        <th class="text-center"> Jatuh Tempo</th>
                        <th class="text-center"> Pelunasan </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $dt)
                    <tr>
                        <td class="text-center" > {{$dt->id_pinjaman}} </td>
                        <td class="text-left" > {{$dt->nama_peminjam}} </td>
                        <td class="text-right">Rp{{ number_format($dt->jumlah_pinjaman, 0, ',', '.') }}</td>
                        <td class="text-center"> {{$dt->waktu_pinjaman}} </td>
                        <td class="text-center"> {{$dt->pelunasan}} </td>
                        <td> 
                            <a class="btnEdit" href="/aset_piutang/edit/{{$dt->id_pinjaman}}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btnRemove" href="/aset_piutang/hapus/{{$dt->id_pinjaman}}"> 
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