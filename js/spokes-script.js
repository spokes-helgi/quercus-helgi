(function($){
	$(document).on('carbonFields.apiLoaded', function(e, api) {
    	console.log("api loaded");
	});
	$(document).ready(function(){
		$("#fullpage").fullpage({
				anchors: ['home', 'about', 'case', 'goal', 'team', 'news', 'footer'],
				menu: '#main-menu',
				scrollingSpeed: 1200,
				paddingTop: '3em',
				scrollOverflow: true
		})
		$('#qr-video').get(0).play();
		function sliderResponsive(window_width = $(window).width()){
			if(window_width < 768){
				window.scrollTo(0,1);
				$('#section4').addClass('fp-auto-height');
			}else{
			}
		}
		$(window).resize(function(){
			sliderResponsive();
		});
		sliderResponsive();
		const case_modal = $(".case-modal-window");
		const employee_modal = $('.employee-modal-window');
		const case_section = $('#case-section');
		const cases = $('.case-link');
		const employees = $('.employee-link');
		$(cases).each(function(){
			$(this).on('click', function(){
				const case_title_placeholder = $('.case-title');
				const case_content_placeholder = $(".modal-text");
				const case_image_placeholder = $(".modal-left");
				const case_person_placeholder = $(".modal-credit");
				const casenum = $(this).attr("data-case");
				const currentCase = php_vars.cases[casenum];
				const currentCaseContent = php_vars.cases_content[casenum];
				const { qr_case_image, qr_case_title, qr_case_person } = currentCase;
				$(case_title_placeholder).html(qr_case_title);
				$(case_content_placeholder).html("<p>" + currentCaseContent + "</p>");
				$(case_image_placeholder).css('background-image', 'url(' +qr_case_image+ ')');
				$(case_person_placeholder).html('<a href="https://www.engadget.com/">'+qr_case_person+'<a>');
				$(case_modal).css('opacity', 1);
				$(case_modal).css('z-index', 10);
				$.fn.fullpage.setAllowScrolling(false);
				$('.navbar').css('display', 'none');
			})
		});
		$(employees).each(function(){
			$(this).on('click', function(){
				const employee_name_placeholder = $('.employee-name');
				const employee_title_placeholder = $(".employee-title");
				const employee_image_placeholder = $(".employee-image");
				const employee_email_placeholder = $(".employee-email");
				const employee_phone_placeholder = $(".employee-phone");
				const employeenum = $(this).attr("data-employee");
				const currentEmployee = php_vars.employees[employeenum];
				const { qr_employee_image, qr_employee_name, qr_employee_title, qr_employee_phone, qr_employee_email } = currentEmployee;
				$(employee_name_placeholder).html(qr_employee_name);
				$(employee_title_placeholder).html("<p>" + qr_employee_title + "</p>");
				$(employee_email_placeholder).html(qr_employee_email);
				$(employee_phone_placeholder).html(qr_employee_phone);
				$(employee_image_placeholder).attr('src', qr_employee_image);
				$(employee_modal).css('opacity', 1);
				$(employee_modal).css('z-index', 10);
				$.fn.fullpage.setAllowScrolling(false);
				$('.navbar').css('display', 'none');			
			})
		});
		$(".modal-close, .modal-employee-close").click(function(){
			$(case_modal).css('opacity', 0);
			$(case_modal).css('z-index', -1);
			$(employee_modal).css('opacity', 0);
			$(employee_modal).css('z-index', -1);
			$.fn.fullpage.setAllowScrolling(true);
			if($(window).width() < 768 ){
				$('.navbar').css('display', 'flex');
			}
		})
	});
})(jQuery)