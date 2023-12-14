
$(function () {
	$('#vmap').vectorMap({
		map: 'world_en',
		scaleColors: ['#e8e8e8', '#ffffff'],
		normalizeFunction: 'polynomial',
		// hoverColor: true,
		hoverColor: '#4eb6d0',
		regionStyle: {
			initial: {
				fill: '#f2f2f2'
			}
		},
		markerStyle: {
			initial: {
				r: 6,
				'fill': '#4ac9bd',
				'fill-opacity': 0.9,
				'stroke': '#fff',
				'stroke-width': 9,
				'stroke-opacity': 0.2
			},
			hover: {
				'stroke': '#fff',
				'fill-opacity': 1,
				'stroke-width': 1.5
			}
		},
		backgroundColor: 'transparent',
		markers: [{
			latLng: [-15.793889, -47.882778],
			name: 'Brazil'
		}, {
			latLng: [-35.473469, 149.012375],
			name: 'Australia'
		}, {
			latLng: [61.5240, 105.3188],
			name: 'Russia'
		},]
	});
})

$(function () {

	// Data Table
	$('#productSummary').DataTable({
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