@extends("layouts.admin")
@section('content')

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">View  Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">

                  <div class="post-item clearfix">

                    <h4><a href="#">Welcome to Kisumu Kenya</a></h4>
                    <!--<img src="{{ asset('assets/admin/img/pict1.jpg') }}" alt=""><br> -->
                    <img src="{{ asset('assets/admin/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                    <h5><strong>Name:</strong>{{ $userData->name }}</h5>
                    <h5><strong>Name:</strong>{{ $userData->email }}</h5>


                    <a href="{{ route('edit.profile') }}" class="btn btn-info rounded-pill" role="button">Edit Profile</a>


                    <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                  </div>

                  <h5 class="card-title">My Profile <span>| 2023</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>124445</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>

              </div>

            </div><!-- End Customers Card -->



          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>

@endsection



