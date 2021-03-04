@extends('layouts.app')

@section('title', 'Edit penjualan')

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
    <form role="form" action="/update_penjualan{{$editpenjualan->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="card-body">
            <div class="form-group">
                <label >Nama Pembeli </label>
                    <input type="text" class="form-control" value="{{$editpenjualan->nama}}" name="nama">
            </div>
            <div class="form-group">
                <label >Email Pembeli</label>
            <div class="input-group mb-3">
                <input type="tezt" class="form-control" value="{{$editpenjualan->email}}" name="email">
                    <div class="input-group-append">
                      <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label >No Phone</label>
                    <input type="text" class="form-control"  value="{{$editpenjualan->phone}}" name="phone">
            </div>
            <div class="form-group">
                <label >Brank Mobil</label>
                    <input type="text" class="form-control"  value="{{$editpenjualan->brand_mobil}}" name="brand_mobil">
            </div>
        </div>
        <div class="card-footer">
            <a href="/detailproduct" class="btn btn-info ">Back</a>
            <button type="submit" class="btn btn-primary float-right">Edit</button>
        </div>
    </form>
    </div>
</div>

@endsection

@section('sript')
    
@endsection