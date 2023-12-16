
$(function () {

	// Data Table
	$('#example1').DataTable({
		language: {
			searchPlaceholder: 'Search here...',
			sSearch: '',
			lengthMenu: '_MENU_',
		}
	});

	//______Select2 
	$('.select2').select2({
		minimumResultsForSearch: Infinity,
		width: "auto"
	});

});
