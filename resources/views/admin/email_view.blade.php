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

            <h1 class="display-2" style="padding-bottom: 10px" >Add Doctor</h1>
            <hr>

                <form action="{{ url('sendemail', $data->id) }}" method="post">

                    @csrf

                    <div style="padding: 15px;">
                        <label class="form-label" >Greeting</label>
                        <input type="text" name="greeting"
                        required=""
                        class="form-control"
                        style="color: gray;">
                    </div>

                    <div style="padding: 15px;">
                        <label class="form-label" >Body</label>
                        <input type="text" name="body"
                        required=""
                        class="form-control"
                        style="color: gray;">
                    </div>


                    <div style="padding: 15px;">
                        <label class="form-label">Action Text</label>
                        <input type="text" name="actiontext" required=""
                        class="form-control"
                        style="color: gray;">

                    </div>

                    <div style="padding: 15px;">
                        <label class="form-label">Action Url</label>
                        <input type="text" name="actionurl" required=""
                        class="form-control"
                        style="color: gray;">

                    </div>

                    <div style="padding: 15px;">
                        <label class="form-label">End Part</label>
                        <input type="text" name="endpart" required=""
                        class="form-control"
                        style="color: gray;">

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
