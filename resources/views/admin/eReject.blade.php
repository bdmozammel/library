<!DOCTYPE html>
<html>
  <head> 
  <base href='/public'>
  @include('admin.css')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <style type="text/css">
    .div_center{
        text-align:center;
        margin:auto;
    }
    .div_right{
        text-align:center;
        margin-left: 120px;
        padding: 50px;
        color:white;
    }
    .eRej_label{
      font-size: 30px;
      font-weight: bold;
      padding: 30px;
      color:white;
    }
    .center{
      margin:auto;
      width:50%;
      text-align: center;
      margin-top:50px;
      border:1px solid white;
    }

    th{
      background-color:skyblue;
      padding: 10px;
    }
    tr{
      border:1px solid white;
      padding: 10px;
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
              <a class="btn btn-info" href="{{url('eReject_print')}}">Print</a> 
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
            <div>
              
            <table class="center">
              <tr>
                <th>Sub Code</th>
                <th>Litho</th>
                <th>Roll NO</th>
                <th>Reg No</th>
                <th>Additional</th>
                <th>Action</th>
              </tr>
            @foreach($data as $data)  
              <tr>
                  <td>{{$data->sub_code}}</td>
                  <td>{{$data->litho}}</td>
                  <td>{{$data->roll_no}}</td>
                  <td>{{$data->reg_no}}</td>
                  <td>{{$data->addl}}</td>
                  <td>
                  <a class="btn btn-info" href="{{url('eReject_edit',$data->id)}}">Update</a> 
                  <a onclick="confirmation(event)" class="btn btn-danger" href="{{url('eReject_delete',$data->id)}}">Delete</a>
                </td>
              </tr>
            @endforeach
            </table>
            </div>
            </div>

            </div>
        </div>
    </div>        

      @include('admin.footer') 
      <script type="text/javascript">
        
        function confirmation(ev) { 
          ev.preventDefault(); 
          var urlToRedirect = ev.currentTarget.getAttribute('href'); 
          consoLe.Log(urlToRedirect); 
        swal({ 
        title: "Are you sure to Delete this", 
        text: "You will not be able to revert this!", 
        icon: "warning",
        buttons: true, 
        dangerMode: true, 
        })
      .then((willCancel) => { 
        if (willCancel) { 
          window.location.href= urlToRedirect; 
        }
      });
        }
      </script>
  </body>
</html>