<script>
	(function() {
		var dlgtrigger = document.querySelector( '[data-dialog]' ),
			somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
			// svg..
			morphEl = somedialog.querySelector( '.morph-shape' ),
			s = Snap( morphEl.querySelector( 'svg' ) ),
			path = s.select( 'path' ),
			steps = { 
				open : morphEl.getAttribute( 'data-morph-open' ),
				close : morphEl.getAttribute( 'data-morph-close' )
			},
			dlg = new DialogFx( somedialog, {
				onOpenDialog : function( instance ) {
					// animate path
					setTimeout(function() {
						path.stop().animate( { 'path' : steps.open }, 1500, mina.elastic );
					}, 250 );
				},
				onCloseDialog : function( instance ) {
					// animate path
					path.stop().animate( { 'path' : steps.close }, 250, mina.easeout );
				}
			} );
		dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );
	})();
</script>
		
		
<script>
	// initialize the validator function
	validator.message['date'] = 'not a real date';

	// validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
	jQuery('form')
		.on('blur', 'input[required], input.optional, select.required', validator.checkField)
		.on('change', 'select.required', validator.checkField)
		.on('keypress', 'input[required][pattern]', validator.keypress);

	jQuery('.multi.required')
		.on('keyup blur', 'input', function(){
			validator.checkField.apply( $(this).siblings().last()[0] );
		});

	// bind the validation to the form submit event
	//$('#send').click('submit');//.prop('disabled', true);

	jQuery('form').submit(function(e){
		e.preventDefault();
		var submit = true;
		// evaluate the form using generic validaing
		if( !validator.checkAll( $(this) ) ){
			submit = false;
		}

		if( submit )
			this.submit();
		return false;
	});

	/* FOR DEMO ONLY */
	jQuery('#vfields').change(function(){
		jQuery('form').toggleClass('mode2');
	}).prop('checked',false);

	jQuery('#alerts').change(function(){
		validator.defaults.alerts = (this.checked) ? false : true;
		if( this.checked )
			jQuery('form .alert').remove();
	}).prop('checked',false);
	
	document.onreadystatechange = function () {
	  var state = document.readyState
	  if (state == 'complete') {
		  setTimeout(function(){
			  document.getElementById('interactive');
			 document.getElementById('load').style.visibility="hidden";
		  },1000);
	  }
	}
	
	jQuery(function () {
  jQuery('.wpsm_help_i').tooltip()
})
</script>