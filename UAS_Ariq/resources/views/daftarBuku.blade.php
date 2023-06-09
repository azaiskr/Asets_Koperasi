<!DOCTYPE html>
<html>
<head>
	<title>Daftar Category</title>
</head>
    <body>
    <div class="pageSection">
        <div class="pageTitle">
            <span>Daftar Aset Jual Beli</span>
        </div>

        <div class="row"> 

            <div class="tableContainer" >
                <table class="table-div">
                    <thead class="thead-primary">
                        <tr>
                            <th class="text-center">ID Buku</th>
                            <th class="text-center">Judul</th>
                            <th class="text-center">Penulis</th>
                            <th class="text-center">Penerbit</th>
                            <th class="text-center">Tahun Terbit</th>
                            <th class="text-center">Jumlah Stok</th>
                            <th class="text-center">Denda Buku</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($buku as $b)
                        <tr>
                            <td class="text-center">{{ $b->IDBuku }}</td>
                            <td class="text-center">{{ $b->Judul }}</td>
                            <td class="text-center">{{ $b->Penulis }}</td>
                            <td class="text-center">{{ $b->Penerbit }}</td>
                            <td class="text-center">{{ $b->TahunTerbit }}</td>
                            <td class="text-center">{{ $b->JumlahStok }}</td>
                            <td class="text-right">Rp{{ number_format($b->DendaBuku, 0, ',', '.') }}</td>
                            <td>
                            
                            </td>   
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>