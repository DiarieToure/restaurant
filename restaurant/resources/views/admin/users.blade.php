<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')

  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
        @include('admin.navbar')


        <div class="container-fluid">
            <!-- central content-->
                <table style="background-color: rgb(17, 8, 105);margin:5em;">
                    <tr >
                        <th style="padding:5em;padding-top:2em;padding-bottom:2em;">Name</th>
                        <th style="padding:5em;padding-top:2em;padding-bottom:2em;">Email</th>
                        <th style="padding:5em;padding-top:2em;padding-bottom:2em;">action</th>
                    </tr>

                    @foreach ($data as $data)
                    <tr>
                        <td style="padding:5em;padding-top:2em;padding-bottom:2em;">{{$data->name}}</td>
                        <td style="padding:5em;padding-top:2em;padding-bottom:2em;">{{$data->email}}</td>

                        @if ($data->id==!"0")
                            <td style="padding:5em;padding-top:2em;padding-bottom:2em;"> <a href="{{url('/deleteuser',$data->id)}}">Delete</a> </td>
                            
                        @else
                        <td style="padding:5em;padding-top:2em;padding-bottom:2em;"> <a href="#">Not allowed</a> </td>
                            
                        @endif

                    </tr>
                    @endforeach
                  
                </table>
            <!-- end central content-->
          </div>
    </div>

     
    <!-- page-body-wrapper ends -->
    @include('admin.adminscript')
  </body>