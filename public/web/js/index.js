 $(document).ready(function() {
	 $('[data-toggle="tooltip"]').tooltip();   
		wow = new WOW(
			  {
				animateClass: 'animated',
				offset:       100
			  }
			);
			wow.init();
	          $('.carousel-slider').owlCarousel({
                               margin:0,
                                nav:true,
                                dots:true,
								loop:true,
                                navText : ['',  ''],
								animateOut:'owl-fadeUp-out',
                                autoplay:true,
                                autoplayTimeout:5000,
                                autoplayHoverPause:true,
                                responsive:{
                                    0:{
                                        items:1
                                    },
                                    600:{
                                        items:1
                                    },
                                    1000:{
                                        items:1
                                    }
                                }
                            })
				
			
	   $(".briefmore").hide();
	   $(".moredetails").click(function() {
		   $(this).nextAll().each( function() {
			   if ($(this).filter('.moredetails').length) {
				  return false;
			   }
			   $(this).filter('.briefmore ').fadeToggle('slow');
			   
		   });
		 
		  
	   });
	   							
							$('.fancybox').fancybox();
 });




 $('.dropdown-toggle').dropdown();
 $('#divNewNotifications li').on('click', function() {
     $('#dropdown_title').html($(this).find('label').html());
 });



 $('.dropdown-toggle').dropdown();
 $('#divNewNotifications2 li').on('click', function() {
     $('#dropdown_title2').html($(this).find('a').html());
 }); $('.dropdown-toggle').dropdown();
 $('#divNewNotifications3 li').on('click', function() {
     $('#dropdown_title3').html($(this).find('a').html());
 });






 $.fileup({
     url: 'example.com/your/path?file_upload=1',
     inputID: 'upload-1',
     queueID: 'upload-1-queue',
     onSuccess: function(response, file_number, file) {
         $.growl.notice({ title: "تم بنجاح !", message: file.name });
     },
     onError: function(event, file, file_number) {
         $.growl.error({ message: "فشل الحفظ  !" });
     }
 });
 $.fileup({
     url: 'example.com/your/path?file_upload=1',
     inputID: 'upload-2',
     dropzoneID: 'upload-2-dropzone',
     queueID: 'upload-2-queue',
     onSelect: function(file) {
         $('#multiple .control-button').show();
     },
     onRemove: function(file, total) {
         if (file === '*' || total === 1) {
             $('#multiple .control-button').hide();
         }
     },
     onSuccess: function(response, file_number, file) {
         $.growl.notice({ title: "تم بنجاح !", message: file.name });
     },
     onError: function(event, file, file_number) {
         $.growl.error({ message: "فشل الحفظ ! " });
     }
 });
 $.fileup({
     url: 'https://github.com?file_upload=1',
     inputID: 'upload-3',
     queueID: 'upload-3-queue',
     autostart: true,
     onSelect: function(file) {
         $('#types .control-button').show();
     },
     onRemove: function(file, total) {
         if (file === '*' || total === 1) {
             $('#types .control-button').hide();
         }
     },
     onSuccess: function(response, file_number, file) {
         $.growl.notice({ title: "تم بنجاح ! ", message: file.name });
     },
     onError: function(event, file, file_number) {
         $.growl.error({ message: "فشل الحفظ ! " });
     }
 });
 $.fileup({
     url: 'https://github.com?file_upload=1',
     inputID: 'upload-4',
     queueID: 'upload-4-queue',
     dropzoneID: 'upload-4-dropzone'
 })
     .select(function(file) {
         $('#dropzone .control-button').show();
     })
     .remove(function(file, total) {
         if (file === '*' || total === 1) {
             $('#dropzone .control-button').hide();
         }
     })
     .success(function(response, file_number, file) {
         $.growl.notice({ title: "Upload success!", message: file.name });
     })
     .error(function(event, file, file_number) {
         $.growl.error({ message: "Upload error!" });
     })
     .dragEnter(function(event) {
         $(event.target).addClass('over');
     })
     .dragLeave(function(event) {
         $(event.target).removeClass('over');
     })
     .dragEnd(function(event) {
         $(event.target).removeClass('over');
     });
