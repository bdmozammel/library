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
              <h1 class="eRej_label">Add H-Type Reject Entry </h1> 
              <a class="btn btn-info" href="{{url('hReject_print')}}">Print</a> 
              <form action="{{url('add_hReject')}}" method="post">
                @csrf
                  <span style="padding-right:15px;">
                                    
                  <label>Litho</label>
                  <input type="text" name="litho" required><br/>
                  
                  <label>Sub Code</label>
                  <input type="text" name="sub_code" required><br/>

                  <label>EB NO</label>
                  <input type="text" name="eb_no" required>

                  <label>Script SL NO</label>
                  <input type="text" name="sl_no" required>

                  <label>Marks</label>
                  <input type="text" name="marks" required>
                  </span>
                  <label>Change Marks</label>
                  <input type="text" name="Chng_marks" required>
                  </span>
                  <input class="btn btn-primary" type="submit" value= "Add Reject">
              </form>
            <div>
              
            <table class="center">
              <tr>
                
                <th>Litho</th>
                <th>Sub Code</th>
                <th>EB NO</th>
                <th>SL No</th>
                <th>Marks</th>
                <th>Change Marks</th>
                <th>Action</th>
              </tr>
            @foreach($data as $data)  
              <tr>
                  
                  <td>{{$data->litho}}</td>
                  <td>{{$data->sub_code}}</td>
                  <td>{{$data->eb_no}}</td>
                  <td>{{$data->sl_no}}</td>
                  <td>{{$data->marks}}</td>
                  <td>{{$data->chng_marks}}</td>
                  <td>
                  <a class="btn btn-info" href="{{url('hReject_edit',$data->id)}}">Update</a> 
                  <a onclick="confirmation(event)" class="btn btn-danger" href="{{url('hReject_delete',$data->id)}}">Delete</a>
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