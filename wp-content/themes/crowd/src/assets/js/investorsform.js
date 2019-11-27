/* investorsform */
function investorsform() {
	var $ = jQuery;

	$('body').on('click', '#submitInvestors.submit', function(event) {
		event.preventDefault();

		var defaultError = 'This is a required field.',
		generalError = 'One or More field(s) are invalid or blank.';

		// Domains
		var $domains = $("#investors_modal [name='domain']:checked");
		var domains = [];
		$.each($domains, function(){            
			domains.push($(this).val());
	    });

	    if (domains == '') {
	    	console.log('domains Error');
	    	$('.domains-label').addClass('error');
	    	$('.domains-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.domains-label').removeClass('error');
	    	$('.domains-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }

		// first_name
		var $first_name = $("#investors_modal [name='first_name']");
		var first_name = $first_name.val();

		if (first_name == '') {
	    	console.log('first_name Error');
	    	$('.first_name-label').addClass('error');
	    	$('.first_name-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.first_name-label').removeClass('error');
	    	$('.first_name-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }

		// last_name
		var $last_name = $("#investors_modal [name='last_name']");
		var last_name = $last_name.val();

		if (last_name == '') {
	    	console.log('last_name Error');
	    	$('.last_name-label').addClass('error');
	    	$('.last_name-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.first_name-label').removeClass('error');
	    	$('.first_name-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }

	    // email_address
		var email_validate = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/;
		var $email_address = $("#investors_modal [name='email_address']");
		var email_address = $email_address.val();
		
		if (email_address == '') {
	    	console.log('email_address Error');
	    	$('.email_address-label').addClass('error');
	    	$('.email_address-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else if (!email_address.match(email_validate)) {
	    	console.log('email_address Error');
	    	$('.email_address-label').addClass('error');
	    	$('.email_address-label .error-addon').text('Invalid Email Address');
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.email_address-label').removeClass('error');
	    	$('.email_address-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }

	    // mobile_number
		var mobile_validate = /^(\+\d{1,3}[- ]?)?\d{10}$/;
		var $mobile_number = $("#investors_modal [name='mobile_number']");
		var mobile_number = $mobile_number.val();
		
		if (mobile_number == '') {
	    	console.log('mobile_number Error');
	    	$('.mobile_number-label').addClass('error');
	    	$('.mobile_number-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else if (!mobile_number.match(mobile_validate)){
			console.log('mobile_number Error');
	    	$('.mobile_number-label').addClass('error');
	    	$('.mobile_number-label .error-addon').text('Invalid mobile_number Number.');
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.mobile_number-label').removeClass('error');
	    	$('.mobile_number-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }
		
		// linkedin
		var url_validate = /^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/;
		var $linkedin = $("#investors_modal [name='linkedin']");
		var linkedin = $linkedin.val();
		
		if (linkedin == '') {
	    	console.log('linkedin Error');
	    	$('.linkedin-label').addClass('error');
	    	$('.linkedin-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else if (!linkedin.match(url_validate)) {
	    	console.log('linkedin Error');
	    	$('.linkedin-label').addClass('error');
	    	$('.linkedin-label .error-addon').text('Invalid URL');
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.linkedin-label').removeClass('error');
	    	$('.linkedin-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }

	    // country
		var $country = $("#investors_modal [name='country']");
		var country = $country.val();
		
		if (country == '') {
	    	console.log('country Error');
	    	$('.country-label').addClass('error');
	    	$('.country-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.country-label').removeClass('error');
	    	$('.country-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }
		
		// has_invested
		var $has_invested = $("#investors_modal [name='has_invested']:checked");
		var has_invested = '';
		var has_invested = $has_invested.val();

		// commitment_hours
		var $commitment_hours = $("#investors_modal [name='commitment_hours']");
		var commitment_hours = $commitment_hours.val();
		
		if (commitment_hours == '') {
	    	console.log('commitment_hours Error');
	    	$('.commitment_hours-label').addClass('error');
	    	$('.commitment_hours-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.commitment_hours-label').removeClass('error');
	    	$('.commitment_hours-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }

		// minimum_investment
		var $minimum_investment = $("#investors_modal [name='minimum_investment']");
		var minimum_investment = $minimum_investment.val();
		
		if (minimum_investment == '') {
	    	console.log('minimum_investment Error');
	    	$('.minimum_investment-label').addClass('error');
	    	$('.minimum_investment-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.minimum_investment-label').removeClass('error');
	    	$('.minimum_investment-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }

		var data = {
		    action: 'investorsFormSubmit',
		    domains: domains,
		    first_name : first_name,
	    	last_name : last_name,
	    	email_address : email_address,
	    	mobile_number : mobile_number,
	    	linkedin : linkedin,
	    	country : country,
	    	has_invested : has_invested,
	    	commitment_hours : commitment_hours,
	    	minimum_investment : minimum_investment,
		};

		$.ajax({
            type: "POST",
            url: ajaxurl,
            data: data,
            beforeSend: function(){
		    	$('#submitInvestors').text('Submitting...');
		   	},
            success: function(res){
            	var res = JSON.parse(res);
                $('#InvestorSubmissionMessage').html('<span class="'+res.class+'">'+res.message+'</span>');
                
                if (res.class == 'success') {
                	$('#investors_modal .blokk-modal-success').show().html(res.html);
	                $('#investors_modal .blokk-modal-body').hide();
	                $('#submitInvestors').removeClass('submit').addClass('close-modal').text('Close');
                }
            }
        });
	});
}