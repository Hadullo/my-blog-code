@extends("layouts.admin")
@section('content')

@section('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@endsection


    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Edit Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">


        <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">General Form Elements</h5>

                <!-- General Form Elements -->
                <form  method = "POST" action = "{{ route('store.profile', $newsitem) }}"   enctype="multipart/form-data" >
                  @method('put')
                  @csrf

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text"  name = "name"  id = "name" class="form-control" value = "{{ $editData->name }}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email"  name = "email"  id = "email" class="form-control" value = "{{ $editData->email}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Profile Image</label>
                    <div class="col-sm-10">
                      <input type="file"  name = "image"  id = "image" class="form-control">
                    </div>
                  </div>



                  <div class="row mb-3">

                  <div class="holder">
                    <img id="imgPreview" src="{{ asset('assets/admin/img/profile-img.jpg') }}" alt="pic" class="rounded-circle"/>
                </div>
                <input type="file" name="photograph"
                       id="photo" required="true" />
                  </div>









                  <div class="row mb-3">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                  </div>



                </form><!-- End General Form Elements -->

              </div>
            </div>

          </div>






      </div>
    </section>


    <script type="text/javascript">
        $(document).ready(()=>{
      $('#photo').change(function(){
        const file = this.files[0];
        console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#imgPreview').attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
      });
    });


        </script>

@endsection



