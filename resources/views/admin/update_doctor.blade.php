<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">

            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container page-body-wrapper">
        <!-- partial:partials -->

        @include('admin.navbar')

        <div class="container page-body-wrapper">
            <!-- partial:partials -->

            <div class="container" align="center" style="padding: 100px">
                @if (session()->has('message'))

                <div class="alert alert-success" role="alert">
                    {{ session()->get('message') }}
                  </div>
            @endif

                <form action="{{ url('editdoctor',$data->id) }}" method="POST" enctype="multipart/form-data" >

                    @csrf

                    <div style="padding: 15px;">
                        <label class="form-label" >Doctor Name</label>
                        <input type="text" name="name"
                        required=""
                        value="{{ $data->name }}"
                        class="form-control"
                        style="color: gray;">
                    </div>

                    <div style="padding: 15px;">
                        <label class="form-label" >Doctor Phone</label>
                        <input type="number" name="phone"
                        required=""
                        value="{{ $data->phone }}"
                        class="form-control"
                        style="color: gray;">
                    </div>

                    <div style="padding: 15px;">
                        <label class="form-label" >Speciality</label>
                        <input type="text" name="speciality"
                        required=""
                        value=" {{ $data->speciality  }}"
                        class="form-control"
                        style="color: gray;">
                    </div>

                    <div style="padding: 15px;">
                        <label class="form-label">Room No</label>
                        <input type="text" name="room" required=""
                        value="{{ $data->room }}"
                        class="form-control"
                        style="color: gray;">

                    </div>

                    <div style="padding: 15px;">
                        <label for="formFile" class="form-label">Old Image</label>
                        <img height="100" width="100" src="doctorimage/{{ $data->image }}" alt="">
                    </div>
                    <div style="padding: 15px;">
                        <label for="formFile" class="form-label">Change Image</label>
                        <input class="form-control"
                        name="file"
                        type="file"
                        style="width: 250px"
                        id="formFile">

                    </div>

                    <div style="padding: 15px;">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
            </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
