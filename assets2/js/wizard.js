searchVisible = 0;
transparent = true;

$(document).ready(function(){
    /*  Activate the tooltips      */
    $('[rel="tooltip"]').tooltip();
      
    $('.wizard-card').bootstrapWizard({
        'tabClass': 'nav nav-pills',
        'nextSelector': '.btn-next',
        'previousSelector': '.btn-previous',
         
         onInit : function(tab, navigation, index){
            
           //check number of tabs and fill the entire row
           var $total = navigation.find('li').length;
           $width = 100/$total;
           
           $display_width = $(document).width();
           
           if($display_width < 600 && $total > 3){
               $width = 50;
           }
           
           navigation.find('li').css('width',$width + '%');
           
        },
        onNext: function(tab, navigation, index){
            if(index == 1){
                return validateFirstStep();
            } else if(index == 2){
                return validateSecondStep();
            } else if(index == 3){
                return validateThirdStep();
            } //etc. 
              
        },
        onTabClick : function(tab, navigation, index){
            // Disable the posibility to click on tabs
            return false;
        }, 
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            
            var wizard = navigation.closest('.wizard-card');
            
            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $(wizard).find('.btn-next').hide();
                $(wizard).find('.btn-finish').show();
            } else {
                $(wizard).find('.btn-next').show();
                $(wizard).find('.btn-finish').hide();
            }
        }
    });

    // Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
    
    $('[data-toggle="wizard-radio"]').click(function(){
        wizard = $(this).closest('.wizard-card');
        wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
        $(this).addClass('active');
        $(wizard).find('[type="radio"]').removeAttr('checked');
        $(this).find('[type="radio"]').attr('checked','true');
    });
    
    $('[data-toggle="wizard-checkbox"]').click(function(){
        if( $(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).find('[type="checkbox"]').removeAttr('checked');
        } else {
            $(this).addClass('active');
            $(this).find('[type="checkbox"]').attr('checked','true');
        }
    });
    
    $height = $(document).height();
    $('.set-full-height').css('height',$height);
    
    
});

function validateFirstStep(){
    
    $(".wizard-card form").validate({
		rules: {
			firstname: "required",
			lastname: "required",
			username: "required",
			email: {
				required: true,
				email: true
			},
			password: {
				required: true,
				minlength: 8
			},
			confirm_password: {
				required: true,
				minlength: 8,
				equalTo: "#password"
			},
			via: {
				required: true,
				lettersonly: true
			},
			numero: {
				required: true,
				maxlength: 4
			},
			città: {
				required: true,
				number: false
			},
			paese: "required"
			
			
/*  other possible input validations
			,username: {
				required: true,
				minlength: 2
			},
			password: {
				required: true,
				minlength: 5
			},
			confirm_password: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
		
			topic: {
				required: "#newsletter:checked",
				minlength: 2
			},
			agree: "required"
*/			

		},
		messages: {
			firstname: "Inserisci il tuo nome",
			lastname: "Inserisci il tuo cognome",
			username: "Inserisci il tuo nome utente",
			email: "Inserisci un indirizzo email valido",
		    password: {
				required: "Inserisci una password",
				minlength: "Almeno 8 caratteri!"
			},
			confirm_password: {
				required: "Inserisci una password",
				minlength: "Almeno 8 caratteri!",
				equalTo: "Le due password devono essere uguali!"
			},
			via: {
				required: "Inserisci una via/piazza",
				onlyletters: "Solo lettere!"
			},
			numero: {
				required: "Inserisci un numero civico",
				maxlength: "Inserisci numero civico valido"
			},
			città: {
				required: "Inserisci una città",
				number: "Inserisci solo lettere!"
			},
			paese: "Seleziona un paese"

/*   other posible validation messages
			username: {
				required: "Please enter a username",
				minlength: "Your username must consist of at least 2 characters"
			},
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			confirm_password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				equalTo: "Please enter the same password as above"
			},
			email: "Please enter a valid email address",
			agree: "Please accept our policy",
			topic: "Please select at least 2 topics"
*/
				
		}
	}); 
	
	if(!$(".wizard-card form").valid()){
    	//form is invalid
    	return false;
	}
	
	return true;
}

function validateSecondStep(){
   
        $(".wizard-card form").validate({
		rules: {
			via: {
				required: true,
				lettersonly: true
			},
			numero: {
				required: true,
				maxlength: 4
			},
			città: {
				required: true,
				number: true
			},
			paese: "required"
			
			
			

		},
		messages: {
			via: {
				required: "Inserisci una via/piazza",
				onlyletters: "Solo lettere!"
			},
			numero: {
				required: "Inserisci un numero civico",
				maxlength: "Inserisci numero civico valido"
			},
			città: {
				required: "Inserisci una città",
				number: "Inserisci solo lettere!"
			},
			paese: "Seleziona un paese"


				
		}
	}); 
	
	if(!$(".wizard-card form").valid()){
    	//form is invalid
    	return false;
	}
	
	return true;
    
}

function validateThirdStep(){
        $(".wizard-card form").validate({
		rules: {
			via: {
				required: true,
				lettersonly: true
			},
			numero: {
				required: true,
				maxlength: 4
			},
			città: {
				required: true,
				number: true
			},
			paese: "required"
			
			
			

		},
		messages: {
			via: {
				required: "Inserisci una via/piazza",
				onlyletters: "Solo lettere!"
			},
			numero: {
				required: "Inserisci un numero civico",
				maxlength: "Inserisci numero civico valido"
			},
			città: {
				required: "Inserisci una città",
				number: "Inserisci solo lettere!"
			},
			paese: "Seleziona un paese"


				
		}
	}); 
	
	if(!$(".wizard-card form").valid()){
    	//form is invalid
    	return false;
	}
	
	return true;
    
    
}

 //Function to show image before upload

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
    












