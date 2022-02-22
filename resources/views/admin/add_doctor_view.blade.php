<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">

            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-black"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-black me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials -->

        @include('admin.navbar')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

            <div class="container" style="padding-top: 100px " align="center">

                @if (session()->has('message'))

                <div class="alert alert-success" role="alert">
                    {{ session()->get('message') }}
                  </div>
            @endif

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="{{ url('upload_doctor') }}" method="post" enctype="multipart/form-data" >
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Doctor Name</label>
                        <input type="text" class="form-control"
                        name="name"
                        placeholder="Write The Name"
                        required=""
                        style="color: gray"
                        id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Phone address</label>
                        <input type="number" class="form-control" style="color: gray" id="exampleInputEmail3" name="number" placeholder="Write the Number"
                        required="">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1" style="background-color: white">
                            <option style="color: gray">--Select--</option>
                            <option style="color: gray" value="Skin">Skin</option>
                            <option style="color: gray" value="Eye" >Eye</option>
                            <option style="color: gray" value="neurology">Neurology</option>
                            <option style="color: gray" value="orthopaedics">Orthopaedics</option>
                            <option style="color: gray" value="Nose" >Nose</option>
                            <option style="color: gray" value="Cardiology" >Cardiology</option>
                            <option style="color: gray" value="Heart">Heart</option>
                            <option style="color: gray" value="Dental" >Dental</option>
                            <option style="color: gray" value="General Health" >General Health</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail3"> Room No</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" type="text" name="room" required=""
                        style="color: gray"
                        placeholder="Write the Room Number">
                      </div>

                      <div style="padding: 15px;">
                        <label for="formFile" class="form-label">Doctor Image example</label>
                        <input class="form-control"
                        name="file"
                        type="file"
                        required=""
                        style="width: 250px"
                        id="formFile">

                    </div>

                      <button type="submit" class="btn btn-primary me-2">Submit</button>

                    </form>
                  </div>
                </div>
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
