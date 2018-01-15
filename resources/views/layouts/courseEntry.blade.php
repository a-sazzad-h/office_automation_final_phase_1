@include('layouts.designAndLink.header')
@include('layouts.designAndLink.app4')


 

<!-- Existing courses entry form  -->

<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Manage</div>

                <div class="panel-body">

<form class="form-horizontal" method="POST" action="{{url('/InsertToExistingCourses')}}" >
      {{csrf_field() }}




   
   <div id="header1" class="panel-heading" ><p>Existing courses Entry</p></div>
   <br>


<div class="col-md-6 col-md-offset-2">

  <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th style="width:50px;" >session</th>
                <th  style="width:50px;">semester</th>
               
         
            </thead>
            <tbody>
                <tr>
                <td style="width:10px;">
       
        <select name="session" class="form-control">
           
                   <option selected value="1">choose</option>
                 
                   @foreach($data as $ddd)
                      <option>{{$ddd->session}}</option>         
                   @endforeach
                            </select>
                      
    </td>
           
                    
<td style="width:10px;">
        
    
 <select name="semester" class="form-control">
              <option value="1-1">1-1</option>
              <option value="1-2">1-2</option>
              <option value="2-1">2-1</option>
              <option value="2-2">2-2</option>
              <option value="3-1">3-1</option>
              <option value="3-2">3-2</option>
              <option value="4-1">4-1</option>
              <option value="4-2">4-2</option>
              <option selected value="1">choose</option>
              </select>
                         
 </td>
                    
            

                   </tr>
            </tbody>
        </table>
    </div>



</div>



<br>


<div class="col-md-10 col-md-offset-1">
  
    <div class="table-responsive" >
<table class="table table-bordered table-striped table-highlight">
            <thead>
                <th >CourseTitle(CourseCode)</th>
                   
               </thead>
            <tbody>

<tr>
             
            <td>
                   <select name="total[]" class="myselect1" style="width:800px;" multiple="multiple">

                       <option></option>
                      @foreach($coursesdata as $d)
                      <option  value="{{$d->id}}">{{$d->courseTitle}} ({{$d->courseCode}} )</option>
                            
                      @endforeach  

                    </select>

            </td>

 </tr>   

            </tbody>
</table>
    </div>
         
         <div style="margin-left: 350px;">
                                <button type="submit" class="btn btn-primary">
                                   Submit
                                </button>
          </div>
          

</div>

</form>





<!-- new courses entry form -->




<form class="form-horizontal" method="POST" action="{{url('/InsertToNewCourses')}}" >

   {{csrf_field() }}
           <fieldset>
<br>
  <div id="header2" class="panel-heading" ><p>New courses Entry</p></div>
  <hr>
   
   <br>

   </fieldset>
<div class="col-md-12 ">

    <div class="table-responsive" >
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th >CourseCode</th>
                <th style="width:50px;">CourseTitle</th>
                <th>theory-lab</th>
                <th>credit</th>
               
         
            </thead>
            <tbody>
                <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[0]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[0]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>

                <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[1]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[1]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>

                <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[2]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[2]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>



                        <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[3]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[3]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>



                        <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[4]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[4]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>


                        <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[5]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[5]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>





     <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[6]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[6]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>
                        <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[7]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[7]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>
                        <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[8]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[8]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>
                        <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[9]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[9]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>
            </tbody>
        </table>
    </div>

                            <div style="margin-left: 480px;">
                                <button type="submit" class="btn btn-primary">
                                 Submit
                                </button>
          
          </div>
          </div>
 </fieldset>
</form>
 



</div>
</div>
</div>
</div>
</div>









<script type="text/javascript">

      $(".myselect1").select2(
        {
            placeholder:"choose courses",
            allowClear:true
        });

</script>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
    









