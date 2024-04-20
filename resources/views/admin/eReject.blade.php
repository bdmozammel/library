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

             <div>
             @if(session()->has('message'))
                <div class="alert alert-success">
                {{session()->get('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                </div>
           
             @endif
             </div>
            <h1 class="eRej_label">Add E-Type Reject Entry </h1>
            <form action="{{url('add_eReject')}}" method="post">
              @csrf
                <span style="padding-right:15px;">
                <label>Sub Code</label>
                <input type="text" name="sub_code" required><br/>
                
                <label>Litho</label>
                <input type="text" name="litho" required><br/>
                
                <label>Roll NO</label>
                <input type="text" name="roll_no" required>

                <label>Reg NO</label>
                <input type="text" name="reg_no" required>

                <label>Additional</label>
                <input type="text" name="addl" required>
                </span>
                <input class="btn btn-primary" type="submit" value= "Add Reject">
            </form>
        
            </div>

            </div>
        </div>
    </div>        

      @include('admin.footer') 
  </body>
</html>