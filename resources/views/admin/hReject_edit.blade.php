<!DOCTYPE html>
<html>
  <head> 
  <base href='/public'>
  @include('admin.css')

  <style type="text/css">
    .div_center{
        text-align:center;
        margin:auto;
    }
    .hRej_label{
      font-size: 30px;
      font-weight: bold;
      padding: 30px;
      color:white;
    }
        
  </style>
  </head>
  <body>
  @include('admin.header')


    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <div class="div_center">
                <h2 class="hRej_label">Update hType Reject Data </h2>
                <form action="{{url('update_hReject',$data->id)}}" method="post">
                @csrf
                  <span style="padding-right:15px;">
                                   
                  <label>Litho</label>
                  <input type="text" name="litho" value="{{$data->litho}}"><br/>
                  
                  <label>EB NO</label>
                  <input type="text" name="eb_no" value="{{$data->eb_no}}">

                  <label>SL NO</label>
                  <input type="text" name="sl_no" value="{{$data->sl_no}}">

                  <label>Additional Khata</label>
                  <input type="text" name="addl" value="{{$data->addl}}">
                  
                  <label>Marks</label>
                  <input type="text" name="marks" value="{{$data->marks}}">

                  <label>Sub Code</label>
                  <input type="text" name="chng_marks" value="{{$data->chng_marks}}"><br/>
                  </span>
                  <input class="btn btn-info" type="submit" value= "Update Reject">
              </form>
            <div>
            </div>
         </div>
        </div>
      </div>


      @include('admin.footer') 
  </body>
</html>