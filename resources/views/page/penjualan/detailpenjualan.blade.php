@extends('layouts.app')

@section('title', 'Detail penjualan')

@section('link')
    
@endsection

@section('content')
    
    <!-- Main content -->
    <div class="col-12">
        <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with default features</h3>
                </div>
                @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead class="text-center">
                      <tr>
                        <th>No</th>
                        <th>Nama Pembeli</th>
                        <th>Email</th>
                        <th>No Phone</th>
                        <th>Action</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $no=1;?>
                      @foreach ($viewpenjualan as $item)
                        <tr>
                          <td><?= $no++;?></td>
                          <td><?= $item['nama']?></td>
                          <td><?= $item['email']?></td>
                          <td><?= $item['phone']?></td>
                          <td><?= $item['brand_mobil']?></td>
                          <td class="project-actions">
                            <form action="/destroy_penjualan/<?= $item['id']?>" method="POST">
                              @method('DELETE')
                              @csrf
                              <a class="btn btn-info btn-sm" href="/edit_penjualan{{$item->id}}"><i class="fas fa-pencil-alt"></i>  Edit</a>
                              <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i>  Delete</button>
                              </form>
                          </td>
                          
                        </tr>
                      @endforeach 
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
        </div>
    </div>
<!-- /.content -->

@endsection

@section('sript')
    
@endsection