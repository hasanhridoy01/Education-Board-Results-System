(function($){
   $(document).ready(function(){

     //Add User Modal
     $(document).on('click','a#add_user_btn', function(event){
          event.preventDefault();
          
          $('#add_user_modal').modal('show');
          return false;

     });

     //Add Student Modal
     $(document).on('click','a#add_student_btn', function(event){
          event.preventDefault();
          
          $('#add_student_modal').modal('show');
          return false;

     });

     //Add Result Modal
     $(document).on('click','a#add_result_btn', function(event){
          event.preventDefault();
          
          $('#add_result').modal('show');
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

     //Search Student for results
     $(document).on('keyup','input#search_student', function(){
         let stu_val = $(this).val();

         $.ajax({
            url : 'template/ajax/student_search.php',
            method : "POST",
            data : { stu_val : stu_val },
            success : function(data){
                $('.stu_res').html(data);
            }
         });
 
     });

     //Select Student
     $('.student-res-data').hide();
     $(document).on('click','li#student_select', function(){

           //Get All Value
           let stu_id = $(this).attr('student_id');
           let stu_name = $(this).attr('student_name');
           let stu_roll = $(this).attr('student_roll');
           let stu_reg = $(this).attr('student_reg');
           let stu_pic = $(this).attr('student_pic');
           
           //Set Value
           $('input#search_student').val(stu_id);
           $('label#idstudent').text('Student id');
           $('input#search_student').attr('disabled', '');
           $('.stu_res').hide();

           //Single Student Data
           $('.student-res-data').show();
           $('.student-res-data img').attr('src', 'students/' + stu_pic);
           $('.student-res-data h3').html(stu_name);
           $('.student-res-data h4').html("<strong>Roll :</strong>" + stu_roll + "<strong>Reg :</strong>" + stu_reg);

     });

     //close Button
     $(document).on('click','button#close', function(e){
            e.preventDefault();
            
            $('form#add_student_result')[0].reset();
            $('.student-res-data').hide();
            $('input#search_student').removeAttr('disabled');
            $('.stu_res').show();

     });

     //Msg Send Method
     function sweetMsg(msg, type = 'success'){
       return "<p class=\"alert alert-" + type + "\"> "+ msg +"  ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
     }

     //Add New Results
     $(document).on('submit','form#add_student_result', function(e){
          e.preventDefault();
          $('input#search_student').removeAttr('disabled');

          $.ajax({
             url : 'template/ajax/result_add.php',
             method : "POST",
             data : new FormData(this),
             contentType : false,
             processData : false,
             success : function(data){

                $('form#add_student_result')[0].reset(); 
                $('.student-res-data').hide();
                $('#add_result').modal('hide');
                $('.mess').html(sweetMsg('Results Added Successfull'));

             } 
          });  

     });

     //Show all function
     function allResult(){

          $.ajax({
              url : 'template/ajax/result_all.php',
              success : function(data){
                 $('tbody#all_result_data').html(data);
              }
          });
     }
     allResult()

     //Single Student Add Modal
     $(document).on('click','a#all_student', function(e){
           e.preventDefault();

           //show student modal
           $('#single_student_modal').modal('show');

           //get value
           let id = $(this).attr('student_view_id');

           //ajax requiste
           $.ajax({
              url : 'template/ajax/show_single_student.php',
              method : 'POST',
              data : { id : id },
              success : function(data){
                  let json_obj = JSON.parse(data);

                  $('img#single_student_img').attr('src', 'students/' + json_obj.photo);
                  $('h2#single_name').text(json_obj.name);
                  $('td#single_name').text(json_obj.name);
                  $('td#single_roll').text(json_obj.roll);
                  $('td#single_exam').text(json_obj.exam);
                  $('td#single_board').text(json_obj.board);

              }
           });

     });

     //edit studnet 
     $(document).on('click','#edit_student', function(event){
        event.preventDefault();

        let edit_id = $(this).attr('student_edit');

        $.ajax({
           url : 'template/ajax/student_edit.php',
           data : { id : edit_id },
           method : "POST",
           success : function(data){
               let edit_data = JSON.parse(data);
               
               $('#student_update_modal input[name="name"]').val(edit_data.name);
               $('#student_update_modal input[name="student_id"]').val(edit_data.id);
               $('#student_update_modal input[name="roll"]').val(edit_data.roll);
               $('#student_update_modal input[name="reg"]').val(edit_data.reg);
               $('#student_update_modal input[name="board"]').val(edit_data.board);
               $('#student_update_modal input[name="inst"]').val(edit_data.inst);
               $('#student_update_modal input[name="exam"]').val(edit_data.exam);
               $('#student_update_modal input[name="year"]').val(edit_data.year);
               $('#student_update_modal input[name="old_photo"]').val(edit_data.photo);
               $('#student_update_modal img').attr('src', 'students/' + edit_data.photo);

           }
        });

        //show student modal
        $('#student_update_modal').modal('show');


     });

     //Update Student form Submit
     $(document).on('submit', 'form#update_student_form', function(event){
          event.preventDefault();

          $.ajax({
              url : 'template/ajax/update_student.php',
              method : 'POST',
              data : new FormData(this),
              contentType : false,
              processData : false,
              success : function(data){
                  $('#student_update_modal').modal('hide');
                  $('.mess').html(sweetMsg('Student Updated Successfull'));
              }
          });

     });



   });
})(jQuery)