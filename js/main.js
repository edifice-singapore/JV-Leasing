
function createBroker(){

	$('input,textarea','#add-broker-form').removeClass('errorField');
	$('#add-broker-form .inline-error').remove();
	// client validation
	error = false;
	$('input,textarea','#add-broker-form').each(function(){
		var rules = $(this).attr('data-rules');
		var label = $(this).attr('data-label');
		var field =  this;
		var val = $.trim($(this).val());

		if (typeof rules !== typeof undefined && rules !== false) {
			_rules = rules.split('|');
			_errors = [];
			$.each(_rules, function(i,v){
				if( v == 'required' && val == ''){
					_errors.push(label+ " cannot be blank");
				}
			});
			if( _errors.length > 0 ){
				error = true;
				$( field).addClass('errorField');
				$('<span class="inline-error">'+ _errors.join('<br/>') +'</span>').insertAfter(field);
			}

		}
	})

	if( error == false ){
		$.ajax({
			url: app.baseUrl+'/index.php/broker/create',
			data: $('input,textarea','#add-broker-form').serialize(),
			type:'post',
			dataType:'json',
			success: function(json){
				if( json.success ){
					alert('Successfully created');
					window.location.href =  app.baseUrl + '/index.php/broker/list';
				}else if( typeof json.validation_errors != 'undefined' ){
					$.each( json.validation_errors, function(i,e){
						$('#'+i ).addClass('errorField');
						$('<span class="inline-error">'+ e.join('<br/>') +'</span>').insertAfter('#'+i);
					})
				}
			}
		});
	}

	return false
}


function updateBroker (broker_id) {

	$('input,textarea','#edit-broker-form').removeClass('errorField');
	$('#edit-broker-form .inline-error').remove();
	// client validation
	error = false;
	$('input,textarea','#edit-broker-form').each(function(){

		var rules = $(this).attr('data-rules');
		var label = $(this).attr('data-label');
		var field =  this;
		var val = $.trim($(this).val());

		if (typeof rules !== typeof undefined && rules !== false) {
			_rules = rules.split('|');
			_errors = [];
			$.each(_rules, function(i,v){
				if( v == 'required' && val == ''){
					_errors.push(label+ " cannot be blank");
				}
			});
			if( _errors.length > 0 ){
				error = true;
				$(field).addClass('errorField');
				$('<span class="inline-error">'+ _errors.join('<br/>') +'</span>').insertAfter(field);
			}

		}
	})

	if( error == false ){
		$.ajax({
			url: app.baseUrl+'/index.php/broker/update?broker_id='+ broker_id ,
			data: $('input,textarea','#edit-broker-form').serialize(),
			type:'post',
			dataType:'json',
			success: function(json){
				if( json.success ){

					alert('Successfully updated')
					window.location.href =  app.baseUrl + '/index.php/broker/list';

				}else if( typeof json.validation_errors != 'undefined' ){
					$.each( json.validation_errors, function(i,e){
						$('#'+i ).addClass('errorField');
						$('<span class="inline-error">'+ e.join('<br/>') +'</span>').insertAfter('#'+i);
					})
				}
			}
		});
	}
	return false
}