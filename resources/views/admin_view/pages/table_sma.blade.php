@extends('admin_view.layouts.app')

@section('title')
Table Data SMAIT
@endsection

@section('content')
<div class="container-fluid">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
      function exportF(elem) {
          var table = document.getElementById("dataTable");
          var html = table.outerHTML;
          var url = 'data:application/vnd.ms-excel,' + escape(html); // Set your html table into url
          elem.setAttribute("href", url);
          elem.setAttribute("download", "Data Peserta.xls"); // Choose the file name
          return false;
      }
  </script>
  <h5 class="alert alert-info">Mohon Tunggu Hingga Data Muncul di Semua Field, Kemudian Klik Export to Excel</h5>

  <!-- Page Heading -->
  <div class="row justify-content-between mx-0 mb-4">
    <h1 class="h3 text-gray-800">Data Peserta PPDB SMAIT</h1>
    <a id="downloadLink" class="btn btn-success text-decoration-none" onclick="exportF(this)">Export to excel</a>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        Pendaftaran SMAIT Nurul 'Ilmi
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table
          class="table table-bordered"
          id="dataTable"
          width="100%"
          border="1"
          align="center"
          cellspacing="0"
          cellpadding="5"
        >
          <thead class="text-center">
            <tr>
              <th rowspan="2">Nama Siswa</th>
              <th rowspan="2">TTL</th>
              <th colspan="3">No Induk</th>
              <th rowspan="2">Asal Sekolah</th>
              <th rowspan="2">Alamat</th>
              <th colspan="3">Identitas Ayah</th>
              <th colspan="3">Identitas Ibu</th>
              <th colspan="2">No HP</th>
              <th colspan="3">Program</th>
              <th rowspan="2">File</th>
              <th rowspan="2">Status</th>
            </tr>
            <tr>
              <th>NIK</th>
              <th>NISN</th>
              <th>KK</th>
              <th>Nama</th>
              <th>NIK</th>
              <th>Pekerjaan</th>
              <th>Nama</th>
              <th>NIK</th>
              <th>Pekerjaan</th>
              <th>Siswa</th>
              <th>Ortu</th>
              <th>Jurusan</th>
              <th>Tinggal</th>
              <th>Program</th>
            </tr>
          </thead>
          <tbody>

            @forelse ($ppdb as $pp)
            <tr>
              <td>{{ $pp->nama }}</td>
              <td>{{ $pp->ttl }}</td>
              <td>{{ $pp->nik }}</td>
              <td>{{ $pp->nisn }}</td>
              <td>{{ $pp->kartu_keluarga }}</td>
              <td>{{ $pp->asal_sekolah }}</td>
              <td>{{ $pp->alamat }}</td>
              <td>{{ $pp->nama_ayah }}</td>
              <td>{{ $pp->nik_ayah }}</td>
              <td>{{ $pp->pekerjaan_ayah }}</td>
              <td>{{ $pp->nama_ibu }}</td>
              <td>{{ $pp->nik_ibu }}</td>
              <td>{{ $pp->pekerjaan_ibu }}</td>
              <td>{{ $pp->hp_siswa }}</td>
              <td>{{ $pp->hp_ortu }}</td>
              <td>{{ $pp->pilihan_jurusan }}</td>
              <td>{{ $pp->pilihan_tinggal }}</td>
              <td>{{ $pp->pilihan_program }}</td>
              <td>
                <img src="{{ asset('storage/'.$pp->image) }}" alt="" style="width: 150px" class="img-thumbnail">
              </td>
              <td></td>
            </tr>
            @empty

            @endforelse

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
