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
    .mRej_label{
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

    .answer{
      width: 340px;
     
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
              <h1 class="mRej_label">Add E-Type Reject Entry </h1> 
              <a class="btn btn-info" href="{{url('mReject_print')}}">Print</a> 
              <form action="{{url('add_eReject')}}" method="post">
                @csrf
                  <span style="padding-right:15px;">
                  <input type="text" autofocus name="answer" id="txtanswer" class= "answer" onkeypress="mcqinput()"   required><br/>
                  
                  
                  
                  <label>Answer</label>
                  <input type ="text" autofocus name="answer" id="txtanswer" required >  <br/>
                  <p>This is a paragraph</p>
                  <script>
                  var count=0;
                  document.queryselector("txtanswer").addEventListener("keypress",function (event){
                  count++;
                  var text = event.key;
                  document.querySelector("p").innerHTML=count;});
                   /*    
                  if(answer==1){
                  document.queryselector("txtanswer").innerHTML="A";
 	                                       
                  }
                  
                  if(text==2){
                    document.queryselector("txtanswer").innerHTML="B";
                        
                  }
                  if(tex==3){
                    document.queryselector("txtanswer").innerHTML="C";
                        
                  }
                  if(x==5){
                    document.queryselector("txtanswer").innerHTML="D";
                       
                  }
                  if(x==" "){
                    document.queryselector("txtanswer").innerHTML=" ";
                     
                  }
                   
                  if(x=="*"){
 	                 document.queryselector("txtanswer").innerHTML="*";
                        
                  }
                  -------------------------------------------old code
                   function mcqinput(){
                      let count=0;
                   
                   let x = document.getElementById("txtanswer").value;
                  if(x==1){
 	                document.getElementById("txtanswer").value="A";
                  count=count+1;       
                  }
                  
                  if(x==2){
 	                document.getElementById("txtanswer").value="B";
                  count=count+1;       
                  }
                  if(x==3){
 	                document.getElementById("txtanswer").value="C";
                  count=count+1;       
                  }
                  if(x==5){
 	                document.getElementById("txtanswer").value="D";
                  count=count+1;       
                  }
                  if(x==" "){
 	                document.getElementById("txtanswer").value=" ";
                  count=count+1;       
                  }
                   
                  if(x=="*"){
 	                document.getElementById("txtanswer").value="*";
                  count=count+1;       
                  }
                    } 
                  */ 
                   
                   
                  </script>
                  
                  <label>Roll NO</label>
                  <input type="text" name="roll_no" required>

                  <label>Reg NO</label>
                  <input type="text" name="reg_no" required>

                  <label>Set Code</label>
                  <input type="text" name="set_code" required><br/>
                  
                  <label>Sub Code</label>
                  <input type="text" name="sub_code" required><br/>
                  </span>
                  <input class="btn btn-primary" type="submit" value= "Add Reject">
              </form>
            <div>
              
            <table class="center">
              <tr>
                <th>Answer</th><th>Count</th>
                <th>Roll NO</th>
                <th>Reg No</th>
                <th>set Code</th>
                <th>Sub Code</th>
                <th>Action</th>
              </tr>
            @foreach($data as $data)  
              <tr>
                  
                  <td>{{$data->answer}}</td><td>{{$count}}</td>
                  <td>{{$data->roll_no}}</td>
                  <td>{{$data->reg_no}}</td>
                  <td>{{$data->set_code}}</td>
                  <td>{{$data->sub_code}}</td>
                  <td>
                  <a class="btn btn-info" href="{{url('mReject_edit',$data->id)}}">Update</a> 
                  <a onclick="confirmation(event)" class="btn btn-danger" href="{{url('mReject_delete',$data->id)}}">Delete</a>
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