<!DOCTYPE html>

<html>
    <head><title> Print All Rejects</title>
	
	@include('admin.css')
        <!-- head definitions go here -->
		
    </head>
    
	@include('admin.header')
	
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <div class="div_center">
					@extends('layouts.my')	
					<h1>Reject Sheet Information List</h1>
					<table class="table">
					<tr><th>Id</th><th>Litho</th><th>Roll No</th><th>Reg NO</th><th>Additional</th></tr>
					
					@foreach($erejects as $ereject)
					<tr><td>{{$ereject->id}}</td>
					<td>{{$ereject->litho}}</td>
					<td>{{$ereject->roll_no}}</td>
					<td>{{ereject->reg_no}}</td>
					<td>{{ereject->addl}}</td>		
					</tr>
					@endforeach
       			<div>
            </div>
         </div>
        </div>
      </div>


      @include('admin.footer') 
      </body>

</html>

