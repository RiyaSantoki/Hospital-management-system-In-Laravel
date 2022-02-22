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

            <h1 class="display-2" style="padding-bottom: 10px"  >Show Doctors</h1>
        <hr>
          <div class="table-responsive container">
            <table class="table">
              <thead>
                <tr>

                  <th> Doctor name </th>
                  <th> Doctor Phone </th>
                  <th> Doctor Speciality </th>
                  <th> Room </th>
                  <th> image </th>
                  <th>Update</th>
                  <th> Delete </th>
                </tr>
              </thead>
              @foreach ($data as $doctor)
              <tbody>
                <tr>

                  <td>{{ $doctor->name }}</td>
                  <td> {{ $doctor->phone }} </td>
                  <td> {{ $doctor->speciality }} </td>
                  <td> {{ $doctor->room }} </td>
                  <td><img height="100" width="100" src="doctorimage/{{ $doctor->image }}" ></td>
                  <td><a class="btn btn-primary" href="{{ url('updatedoctor',$doctor->id) }}">Update</a></td>
                  <td><a class="btn btn-danger" onclick="return confirm('Are You sure to delete this')" href="{{ url('deletedoctor',$doctor->id) }}">Delete</a></td>

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
