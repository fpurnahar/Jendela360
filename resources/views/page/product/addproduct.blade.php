@extends('layouts.app')

@section('title', 'Add Product')

@section('link')
    
@endsection

@section('content')
    

<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">@yield('title')</h3>
        </div>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form role="form" action="/create_product" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label >Nama Mobil </label>
                    <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" placeholder="Enter Nama Mobil">
            </div>
            <div class="form-group">
                <label >Harga Mobil</label>
            <div class="input-group mb-3">
                <input type="number" class="form-control" id="harga_mobil" name="harga_mobil" placeholder="Harga Mobil">
                    <div class="input-group-append">
                      <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label >Stoct Mobil</label>
                    <input type="number" class="form-control" id="stock_moobil" name="stock_mobil" placeholder="Stoct Mobil">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</div>

@endsection

@section('sript')
    
@endsection