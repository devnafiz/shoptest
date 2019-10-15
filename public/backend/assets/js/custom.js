//$(document).ready(function(){

	$(document).on('click','.deleteRecord',function(e){
		var id = $(this).attr('rel');
		var deleteFunction =$(this).attr('rel1');
    swal({

    	title:"are you sure?",
    	text:"you will no be recovery",
    	type:"warning",
    	showCancelButton:true,
    	cancelButtonClass: 'btn btn-danger',
    	confirmButtonText:"yes delete"
    },

     function(){
     	window.location.href ="/admin/"+deleteFunction+"/"+id;
     });
		
		// alert(deleteFunction);
		// return false;https://sweetalert2.github.io/https://cdnjs.com/libraries/sweetalert/1.1.3
	});
	


//});