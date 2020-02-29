<?php include('header.php');
      require_once('inc/action.php');
 ?>
<div class="container">

<div>
<table >
    <div class="card-form">
    <div class="card-box">
    <h1 class="heading">Select Class, Subject, Topic, Sub Topic</h1>
       <div class="tbl" >
          <div class="form-group">
              <label for="scl_class">Select Class</label>
              <select name="scl_class" id="scl_class" class="form-control" >
              <?php 
              $query=mysqli_query($obj->con,"select class from education group by class having count(class)");
              while ($row=mysqli_fetch_array($query)) {
             
             ?>
             <option value="<?php echo $row['class'] ?>"><?php echo $row['class'] ?></option>
           <?php } ?>


           
           </select>
          </div>
   
   
          <div class="form-group">
              <label for="scl_class">Select Subject</label>
               <select name="subject" id="subject" class="form-control" >
                <option value=""> </option>
               </select>
          </div>
   
          <div class="form-group">
              <label for="scl_class">Select Topic</label>
               <select name="topic" id="topic" class="form-control" >
                <option value=""> </option>
               </select>
          </div>
          
          <div class="form-group">
              <label for="scl_class">Select Sub Topic</label>
               <select name="sub_topic" id="sub_topic" class="form-control" >
                <option value=""> </option>
               </select>
          </div>
   
       </div>
      </div> 
    </div>
</table>
</div>
 
</div>

<?php include('footer.php');?>