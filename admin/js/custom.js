(function($){
   $(document).ready(function(){

     //Add User Modal
     $(document).on('click','a#add_user_btn', function(event){
          event.preventDefault();
          
          $('#add_user_modal').modal('show');
          return false;

     });



   });
})(jQuery)