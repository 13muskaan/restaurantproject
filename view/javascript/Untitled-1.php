<?php

		function validateForm() {
				var x = document.forms[ "register_form" ][ "first_name" ].value;
				if ( x == "" ) {
					alert( "First name must be filled out" );
					return false;
				}
			}
		var x = document.forms[ "register_form" ][ "last_name" ].value;
				if ( x == "" ) {
					alert( "Last name must be filled out" );
					return false;
				}
			}
			var x = document.forms[ "register_form" ][ "user_password" ].value;
				if ( x == "" ) {
					alert( "Password must be filled out" );
					return false;
				}
			}
			var x = document.forms[ "register_form" ][ "email" ].value;
				if ( x == "" ) {
					alert( "Email must be filled out" );
					return false;
				}
			}