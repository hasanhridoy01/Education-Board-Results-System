(function($){
   $(document).ready(function(){

     //Add User Modal
     $(document).on('click','a#add_user_btn', function(event){
          event.preventDefault();
          
          $('#add_user_modal').modal('show');
          return false;

     });

     //Add User Modal
     $(document).on('click','a#add_student_btn', function(event){
          event.preventDefault();
          
          $('#add_student_modal').modal('show');
          return false;

     });
     
    //all USer Data 
    function allUsers(){
    	$.ajax({
    		url : 'template/ajax/user_all.php',
    		success : function(data){
                $('tbody#all_users_tbody').html(data);
    		}
    	});
    }
    allUsers()

     //add add_user_form
     $(document).on('submit','form#add_user_form', function(event){
          event.preventDefault();

          $.ajax({
          	 url : 'template/ajax/user_add.php',
          	 method : "POST",
      			 data : new FormData(this),
      			 contentType: false,
      			 processData : false,
                	 success : function(data){
                      
                      $('form#add_user_form')[0].reset();
                	 	$('#add_user_modal').modal('hide');
                      $('.mess').html(data);
                      allUsers()

                	 }
          });

     });

     //Delete User Method
     $(document).on('click','a#delete_user', function(event){
          event.preventDefault();

          let del = confirm('Are you sure');
          let id = $(this).attr('user_id');
          
          if ( del == true ) 
          {
             
             $.ajax({
                url : 'template/ajax/user_delete.php',
                method : "POST",
                data : { id : id },
                success : function(data){
                    $('.mess').html(data);
                    allUsers()
                }
             });

          }else{
             return false;
          }

     });

     //Add Students Form
     $(document).on('submit','form#add_student_form', function(event){
             event.preventDefault();
             
             //Get value
             let name = $('form#add_student_form input[name="name"]').val();
             let roll = $('form#add_student_form input[name="roll"]').val();
             let reg = $('form#add_student_form input[name="reg"]').val();

             //form validation
             if ( name == '' || roll == '' || reg == '' ) {
                 
                 $('.student-mess').html( "<p class=\"alert alert-danger\">Name Roll And Reg fileds are require! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>");

             }else{
                
                $.ajax({
                    url : 'template/ajax/student_add.php',
                    method : "POST",
                    data : new FormData(this),
                    contentType : false,
                    processData : false,
                    success : function(data){
                        $('form#add_student_form')[0].reset();
                        $('#add_student_modal').modal('hide');
                        $('.mess').html("<p class=\"alert alert-success\">Students Added Successfull ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>");
                         allStudent()
                    }
                 });

             }


     });
     
     //Show all Student Method
     function allStudent(){

          $.ajax({
             url : 'template/ajax/student_all.php',
             success : function(data){
                $('tbody#all_student_tbody').html(data);
             }
          });

     }
     allStudent();

     //Students Deleted Section
     $(document).on('click','a#student_delete', function(event){
          event.preventDefault();
          
          let del = confirm('Are you sure');
          let id = $(this).attr('student_id');

          if ( del == true )
          {
             
            $.ajax({
               url : 'template/ajax/student_delete.php',
               method : "POST",
               data : { id : id },
               success : function(data){
                  $('.mess').html(data);
                  allStudent();
               }
            });

          }else{
             return false;
          }

     });


   });
})(jQuery)