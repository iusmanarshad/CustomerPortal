
$(function () {
  // Data Table
  $('#productList').DataTable({
    language: {
      searchPlaceholder: 'Search here...',
      sSearch: '',
      lengthMenu: '_MENU_',
    }
  });

  //select2
  $('.select2').select2({
    placeholder: 'Choose one',
    searchInputPlaceholder: 'Search'
  });
})
