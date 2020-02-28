$(document).ready(function(){
 

$("#scl_class").on('mousedown',function(){

var scl_class=$(this).val();
 console.log(scl_class);
$.ajax({  
  type: 'POST',  
  url: 'scl_class.php', 
  data: {scl_class:scl_class},
  success: function(response) {
    $("#subject").html(response);
    $("#topic").html('');
    $("#sub_topic").html('');
  }
});
 
 
})
 
 
$("#subject").on('mousedown',function(){
var subject=$(this).val();
var scl_class=$('#scl_class').val();
 // console.log(scl_class);
$.ajax({  
  type: 'POST',  
  url: 'subject.php', 
  data: {
    subject:subject,
    scl_class:scl_class
  },
  success: function(response) {
    $("#topic").html(response);
 
  }
});
 
 
})
 

$("#topic").on('mousedown',function(){
var topic=$(this).val();
var subject=$('#subject').val();
var scl_class=$('#scl_class').val();
 // console.log(scl_class);
$.ajax({  
  type: 'POST',  
  url: 'sub_topic.php', 
  data: {
    subject:subject,
    scl_class:scl_class,
    topic:topic
  },
  success: function(response) {
    $("#sub_topic").html(response);
 
  }
});
 
 
})

 
});