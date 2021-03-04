@extends('layouts.app')

@section('title', 'Dashboard')

@section('link')
    
@endsection

@section('content')
    
    <div class="col">
        <!-- Profile Image -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <div class="card-body box-profile">
              <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                </div>
                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                    <p class="text-muted text-center">Backend Developer</p>
                <a href="https://www.instagram.com/fpurnahar" target="_blank" class="btn btn-primary btn-block"><b>Follow Instagram</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </div> 

    <div class="col">
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                 Polytechnic State Lhokseumawe
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Lhokseumawe, Aceh</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design,</span>
                  <span class="tag tag-success">Html, Css , Sass</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">,PHP</span>
                  <span class="tag tag-primary">,CodeIgniter</span>
                  <span class="tag tag-primary">,Laravek</span>
                  <span class="tag tag-primary">,Node.js</span>
                  <span class="tag tag-primary">,React.js</span>
                </p>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </div>

@endsection

@section('sript')
    
@endsection