@extends('base2')
@section('pageView')
@section('title', 'Rekapitulasi Aset')

<div class="pageSection">
    <div class="pageTitle">
        <span>Rekapitulasi Aset</span>
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
        <a class="btnAdd" href="{{url('/rekapitulasiAset/create')}}" role="button"> 
            <i class="bi bi-plus-lg"></i>
            <span class="btnLabel">Tambah data</span>
        </a>

        <div>
            <table class="table-div">
                <thead>
                    <tr>
                        <th class="text-center"> ID Aset </th>
                        <th class="col-5"> Jenis Aset </th>
                        <th class="text-center"> Kuantitas </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rekap as $rp)
                    <tr>
                        <td class="text-center"> {{$rp->id}} </td>
                        <td> {{$rp->jenis_aset}} </td>
                        <td class="text-center"> {{$aset_pengalihan}} </td>
                        <td> 

                            <a class="btnEdit" href="/rekapitulasiAset/edit/{{$rp->id}}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btnRemove" href="/rekapitulasiAset/hapus/{{$rp->id}}"> 
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

<script>
    const rows = document.querySelectorAll(".table tbody tr");
    function activeRow(){
      rows.forEach((row) => {
        row.classList.remove("active-row");
      });
      this.classList.add("active-row");
    }
    rows.forEach((row) => row.addEventListener("mouseover", activeRow));
  </script>
  
@endsection