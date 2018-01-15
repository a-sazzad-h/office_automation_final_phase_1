@include('layouts.designAndLink.link')
@extends('layouts.designAndLink.app3')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Manage</div>

                <div class="panel-body">


<!--header of page-->



<form class="form-horizontal" method="POST" action="{{url('/insertToSession')}}" >

   {{csrf_field() }}
          
                            
                              @if(count($errors)>0)
                              @foreach($errors->all() as $error)
                                  <div class="alert alert-danger">
                                  {{$error}}
                                  </div>
                              @endforeach
                              @endif



<div class="col-md-6 col-md-offset-2">

  <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th style="width:50px;" >Create-semester</th>
              
               
         
            </thead>
            <tbody>
                <tr>
                <td style="width:10px;">
                <input type="text" class="form-control" name="session">

                      
    </td>
           
                    
         
            

                   </tr>
            </tbody>
        </table>
    </div>



</div>





              <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                 Submit
                                </button>
          </div>
          </div>
        

</form>
 

<form class="form-horizontal" method="POST" action="{{url('/insertToSession')}}" >

   {{csrf_field() }}
          
                            
                              @if(count($errors)>0)
                              @foreach($errors->all() as $error)
                                  <div class="alert alert-danger">
                                  {{$error}}
                                  </div>
                              @endforeach
                              @endif


<br>
<div class="col-md-6 col-md-offset-2">

  <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
          <thead>
                <th>Existing-Semester</th>
                   <th>update</th>
                   <th>delete</th>
             </thead>
       

            <tbody>


    
                    
                            
                
 <tr>

   <td>1-1</td>
 
  
    <td><a href="" class="label label-success">Update</a> </td>

    <td><a href="" class="label label-danger">Delete</a></td>

 </tr>
 <tr>

   <td>1-2</td>
 
  
    <td><a href="" class="label label-success">Update</a> </td>

    <td><a href="" class="label label-danger">Delete</a></td>

 </tr>

 <tr>

   <td>2-1</td>
 
  
    <td><a href="" class="label label-success">Update</a> </td>

    <td><a href="" class="label label-danger">Delete</a></td>

 </tr>

 <tr>

   <td>2-2</td>
 
  
    <td><a href="" class="label label-success">Update</a> </td>

    <td><a href="" class="label label-danger">Delete</a></td>

 </tr>
 <tr>

   <td>3-1</td>
 
  
    <td><a href="" class="label label-success">Update</a> </td>

    <td><a href="" class="label label-danger">Delete</a></td>

 </tr>
 <tr>

   <td>3-2</td>
 
  
    <td><a href="" class="label label-success">Update</a> </td>

    <td><a href="" class="label label-danger">Delete</a></td>

 </tr>
 <tr>

   <td>4-1</td>
 
  
    <td><a href="" class="label label-success">Update</a> </td>

    <td><a href="" class="label label-danger">Delete</a></td>

 </tr>
 <tr>

   <td>4-2</td>
 
  
    <td><a href="" class="label label-success">Update</a> </td>

    <td><a href="" class="label label-danger">Delete</a></td>

 </tr>


            </tbody>
        </table>
    </div>



</div>






</form>
 



</div>
</div>








@endsection


<!--rest of body-->



                  
