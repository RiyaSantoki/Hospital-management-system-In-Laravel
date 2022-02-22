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

        @include('admin.navbar')

        <div class="container page-body-wrapper">
            <div style="padding-top:100px; text-align:center" >

                <h1 class="display-2" style="padding-bottom: 10px" >Show Appointment</h1>
                <hr>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>

                          <th> Patient name </th>
                          <th> Patient Email </th>
                          <th> Patient Phone </th>
                          <th> Doctor Name </th>
                          <th> Date </th>
                          <th> Message </th>
                          <th> Status </th>
                          <th>Approved</th>
                          <th>Canceled</th>
                          <th>Send Mail</th>
                        </tr>
                      </thead>
                      @foreach ($data as $appoint)
                      <tbody>
                        <tr>

                          <td>{{ $appoint->name }}</td>
                          <td> {{ $appoint->email }} </td>
                          <td> {{ $appoint->phone }} </td>
                          <td> {{ $appoint->doctor }} </td>
                          <td> {{ $appoint->date }} </td>
                          <td> {{ $appoint->message }} </td>
                          <td>{{ $appoint->status }}</td>
                          <td>
                            <div class="form-check form-check-muted m-0" >
                                <a class="badge badge-outline-success" href="{{ url('approved',$appoint->id) }}">Approved</a>
                          </td>
                          <td>
                            <div class="form-check form-check-muted m-0" >
                                <a class="badge badge-outline-danger" href="{{ url('canceled',$appoint->id) }}">Canceled</a>
                          </td>
                          <td>
                            <div class="form-check form-check-muted m-0">
                                <a class="badge badge-outline-primary" href="{{ url('emailview',$appoint->id) }}" >Send Mail</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
