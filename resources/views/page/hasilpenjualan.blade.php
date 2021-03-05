@extends('layouts.app')

@section('title','Hasil Penjualan')

@section('content')
    
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable @yield('title')</h3>
            </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Hari</th>
                        <th>Munggu</th>
                        <th>Buluan</th>
                        <th>Tahun</th>
                        <th>All Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                      @foreach ($hasilpenjualan as $item)
                        <tr>
                         <td><?= $no++?></td>
                         <td>Rp 
                          <?= number_format ($item->harga_mobil, 0, ',', '.')?></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
        </div>
    </div>
    
@endsection