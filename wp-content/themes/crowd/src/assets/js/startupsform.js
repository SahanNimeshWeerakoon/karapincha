/* startupsform */
function startupsform() {
	var $ = jQuery;

	$('body').on('click', '#submitStartups.submit', function(event) {
		event.preventDefault();

		var defaultError = 'This is a required field.',
		generalError = 'One or More field(s) are invalid or blank.';

		// Domains
		var $domains = $("#raiseInvestment [name='domain']:checked");
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

		// startupname
		var $startupname = $("#raiseInvestment [name='startupname']");
		var startupname = $startupname.val();

		if (startupname == '') {
	    	console.log('startupname Error');
	    	$('.startupname-label').addClass('error');
	    	$('.startupname-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.startupname-label').removeClass('error');
	    	$('.startupname-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }
		
		// webaddress
		var url_validate = /^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/;
		var $webaddress = $("#raiseInvestment [name='webaddress']");
		var webaddress = $webaddress.val();
		
		if (webaddress == '') {
	    	console.log('webaddress Error');
	    	$('.webaddress-label').addClass('error');
	    	$('.webaddress-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else if (!webaddress.match(url_validate)) {
	    	console.log('webaddress Error');
	    	$('.webaddress-label').addClass('error');
	    	$('.webaddress-label .error-addon').text('Invalid URL');
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.webaddress-label').removeClass('error');
	    	$('.webaddress-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }
		
		// is_registered
		var $is_registered = $("#raiseInvestment [name='is_registered']:checked");
		var is_registered = '';
		var is_registered = $is_registered.val();

		// team
		var $team = $("#raiseInvestment [name='is_registered']:checked");
		var team = [];
		$.each($("#raiseInvestment [name='founder_name']"), function(){
			team.push($(this).val());
	    });

	    if (team[0] == '') {
	    	console.log('team Error');
	    	$('.team-label').addClass('error');
	    	$('.team-label .error-addon').text('First founder name is required.');
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.team-label').removeClass('error');
	    	$('.team-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }

		// founder_availability
		var $founder_availability = $("#raiseInvestment [name='is_registered']:checked");
		var founder_availability = [];
		$.each($("#raiseInvestment [name='founder_availability']:checked"), function(){
			founder_availability.push($(this).val());
	    });
		
		// primary_contact_name
		var $primary_contact_name = $("#raiseInvestment [name='primary_contact_name']");
		var primary_contact_name = $primary_contact_name.val();
		
		if (primary_contact_name == '') {
	    	console.log('primary_contact_name Error');
	    	$('.primary_contact_name-label').addClass('error');
	    	$('.primary_contact_name-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.primary_contact_name-label').removeClass('error');
	    	$('.primary_contact_name-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }
		
		// primary_contact_email
		var email_validate = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/;
		var $primary_contact_email = $("#raiseInvestment [name='primary_contact_email']");
		var primary_contact_email = $primary_contact_email.val();
		
		if (primary_contact_email == '') {
	    	console.log('primary_contact_email Error');
	    	$('.primary_contact_email-label').addClass('error');
	    	$('.primary_contact_email-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else if (!primary_contact_email.match(email_validate)) {
	    	console.log('primary_contact_email Error');
	    	$('.primary_contact_email-label').addClass('error');
	    	$('.primary_contact_email-label .error-addon').text('Invalid Email Address');
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.primary_contact_email-label').removeClass('error');
	    	$('.primary_contact_email-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }
		
		// primary_contact_mobile
		var mobile_validate = /^(\+\d{1,3}[- ]?)?\d{10}$/;
		var $primary_contact_mobile = $("#raiseInvestment [name='primary_contact_mobile']");
		var primary_contact_mobile = $primary_contact_mobile.val();
		
		if (primary_contact_mobile == '') {
	    	console.log('primary_contact_mobile Error');
	    	$('.primary_contact_mobile-label').addClass('error');
	    	$('.primary_contact_mobile-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else if (!primary_contact_mobile.match(mobile_validate)){
			console.log('primary_contact_mobile Error');
	    	$('.primary_contact_mobile-label').addClass('error');
	    	$('.primary_contact_mobile-label .error-addon').text('Invalid Mobile Number.');
	    	$('.submission-message').text(generalError);
	    	return;
	    }else {
	    	$('.primary_contact_mobile-label').removeClass('error');
	    	$('.primary_contact_mobile-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }
		
		// problem_trying_to_solve
		var $problem_trying_to_solve = $("#raiseInvestment [name='problem_trying_to_solve']");
		var problem_trying_to_solve = $problem_trying_to_solve.val();
		
		if (problem_trying_to_solve == '') {
	    	console.log('problem_trying_to_solve Error');
	    	$('.problem_trying_to_solve-label').addClass('error');
	    	$('.problem_trying_to_solve-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.problem_trying_to_solve-label').removeClass('error');
	    	$('.problem_trying_to_solve-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }
		
		// why_you
		var $why_you = $("#raiseInvestment [name='why_you']");
		var why_you = $why_you.val();
		
		if (why_you == '') {
	    	console.log('why_you Error');
	    	$('.why_you-label').addClass('error');
	    	$('.why_you-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.why_you-label').removeClass('error');
	    	$('.why_you-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }
		
		// is_launched
		var $is_launched = $("#raiseInvestment [name='is_launched']:checked");
		var is_launched = $is_launched.val();

		if (is_launched == '') {
	    	console.log('is_launched Error');
	    	$('.is_launched-label').addClass('error');
	    	$('.is_launched-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.is_launched-label').removeClass('error');
	    	$('.is_launched-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }

		// month_revenue
	    var $month_revenue_1 = $("#raiseInvestment [name='month_revenue_1']");
		var month_revenue_1 = $month_revenue_1.val();

	    if (month_revenue_1 == '') {
	    	console.log('month_revenue_1 Error');
	    	$('.month_revenue_1-label').addClass('error');
	    	$('.submission-message').text(generalError);
	    	//$('.month_revenue_1-label .error-addon').text(defaultError);
	    	return;
	    } else {
	    	$('.month_revenue_1-label').removeClass('error');
	    	$('.submission-message').text('');
	    	//$('.month_revenue-label .error-addon').text('');
	    }

	    var $month_revenue_2 = $("#raiseInvestment [name='month_revenue_2']");
		var month_revenue_2 = $month_revenue_2.val();

	    if (month_revenue_2 == '') {
	    	console.log('month_revenue_1 Error');
	    	$('.month_revenue_2-label').addClass('error');
	    	$('.submission-message').text(generalError);
	    	//$('.month_revenue_1-label .error-addon').text(defaultError);
	    	return;
	    } else {
	    	$('.month_revenue_2-label').removeClass('error');
	    	$('.submission-message').text('');
	    	//$('.month_revenue-label .error-addon').text('');
	    }

	    var $month_revenue_3 = $("#raiseInvestment [name='month_revenue_3']");
		var month_revenue_3 = $month_revenue_3.val();

	    if (month_revenue_3 == '') {
	    	console.log('month_revenue_3 Error');
	    	$('.month_revenue_3-label').addClass('error');
	    	$('.submission-message').text(generalError);
	    	//$('.month_revenue_1-label .error-addon').text(defaultError);
	    	return;
	    } else {
	    	$('.month_revenue_3-label').removeClass('error');
	    	$('.submission-message').text('');
	    	//$('.month_revenue-label .error-addon').text('');
	    }
		
		// financial_recs
		var $financial_recs = $("#raiseInvestment [name='financial_recs']:checked");
		var financial_recs = $financial_recs.val();

		if (financial_recs == '') {
	    	console.log('financial_recs Error');
	    	$('.financial_recs-label').addClass('error');
	    	$('.financial_recs-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.financial_recs-label').removeClass('error');
	    	$('.financial_recs-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }

		// monthly_burn_rate
		var $monthly_burn_rate = $("#raiseInvestment [name='monthly_burn_rate']");
		var monthly_burn_rate = $monthly_burn_rate.val();
		
		if (monthly_burn_rate == '') {
	    	console.log('monthly_burn_rate Error');
	    	$('.monthly_burn_rate-label').addClass('error');
	    	$('.monthly_burn_rate-label .error-addon').text(defaultError);
	    	$('.submission-message').text(generalError);
	    	return;
	    } else {
	    	$('.monthly_burn_rate-label').removeClass('error');
	    	$('.monthly_burn_rate-label .error-addon').text('');
	    	$('.submission-message').text('');
	    }

		// more_comments
		var more_comments = '';
		var more_comments = $("#raiseInvestment [name='more_comments']").val();

		var data = {
		    action: 'startupsFormSubmit',
		    domains: domains,
		    startupname : startupname,
	    	webaddress : webaddress,
	    	is_registered : is_registered,
		    team: team,
	    	founder_availability : founder_availability,
	    	primary_contact_name : primary_contact_name,
	    	primary_contact_email : primary_contact_email,
	    	primary_contact_mobile : primary_contact_mobile,
	    	problem_trying_to_solve : problem_trying_to_solve,
	    	why_you : why_you,
	    	is_launched : is_launched,
	    	month_revenue_1 : month_revenue_1,
	    	month_revenue_2 : month_revenue_2,
	    	month_revenue_3 : month_revenue_3,
	    	financial_recs : financial_recs,
	    	monthly_burn_rate : monthly_burn_rate,
	    	more_comments : more_comments,
		};

		$.ajax({
            type: "POST",
            url: ajaxurl,
            data: data,
            beforeSend: function(){
		    	$('#submitStartups').text('Submitting...');
		   	},
            success: function(res){
            	console.log(res);
            	var res = JSON.parse(res);
                $('#SubmissionMessage').html('<span class="'+res.class+'">'+res.message+'</span>');
                
                if (res.class == 'success') {
                	$('#raiseModal .blokk-modal-success').show().html(res.html);
	                $('#raiseModal .blokk-modal-body').hide();
	                $('#submitStartups').removeClass('submit').addClass('close-modal').text('Close');
                }
            }
        });
	});
}