
	jQuery(function(){
		
		<!-- Start Drop down Menu-->
		jQuery('#header ul li ul').hide();
		//OnHover Show SubLevel Menus
		jQuery('#header ul li').hover(
			//OnHover
			function(){
				//Hide Other Menus
				jQuery('#header ul li').not($('ul', this)).stop();
	
				//Remove the Border
				jQuery('ul li.arrow', this).css('border-bottom', '0');
				
				jQuery('ul li:first-child', this).before(
					'<li class="arrow">arrow</li>');
				
				// Show Hoved Menu
				jQuery('ul', this).fadeIn(200);
				//Add the Arrow
			},
			//OnOut
			function(){
				// Hide Other Menus
				jQuery('ul', this).fadeOut(200);
				//Remove the Arrow
				jQuery('ul li.arrow', this).remove();
			}
		);
		<!-- End Drop down Menu-->
	});