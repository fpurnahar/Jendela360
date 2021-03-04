@extends('layouts.app')

@section('title', 'Add Penjualan')

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
    <form role="form" action="/create_penjualan" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label >Nama Pembeli </label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Pembeli Mobil">
            </div>
            <div class="form-group">
                <label >Email Pembeli</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email Pembeli Mobil">
            </div>
            </div>
            <div class="form-group">
                <label >No Phone Pembeli</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="No Phone pembeli Mobil">
            </div>
            <div class="form-group">
                <label >Mobil yang di Pembeli</label>
                    <input type="text" class="form-control" id="brand_mobil" name="brand_mobil" placeholder="Brand Mobil Yang di Beli">
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