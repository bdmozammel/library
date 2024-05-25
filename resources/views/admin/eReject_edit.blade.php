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
    .eRej_label{
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
                <h2 class="eRej_label">Update eType Reject Data </h2>
                <form action="{{url('update_eReject',$data->id)}}" method="post">
                @csrf
                  <span style="padding-right:15px;">
                  <label>Sub Code</label>
                  <input type="text" name="sub_code" value="{{$data->sub_code}}"><br/>
                  
                  <label>Litho</label>
                  <input type="text" name="litho" value="{{$data->litho}}"><br/>
                  
                  <label>Roll NO</label>
                  <input type="text" name="roll_no" value="{{$data->roll_no}}">

                  <label>Reg NO</label>
                  <input type="text" name="reg_no" value="{{$data->reg_no}}">

                  <label>Additional</label>
                  <input type="text" name="addl" value="{{$data->addl}}">
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