		$('[data-role="collapsible"]').bind('expand collapse', function (event) {
			$(this).find('p').slideToggle(500);
			return false;
		});?