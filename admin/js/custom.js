(function($){
   $(document).ready(function(){

     //Add User Modal
     $(document).on('click','a#add_user_btn', function(event){
          event.preventDefault();
          
          $('#add_user_modal').modal('show');
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



   });
})(jQuery)