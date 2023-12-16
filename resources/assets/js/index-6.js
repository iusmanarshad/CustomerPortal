$(function () {
  //Bitcoin
  var ctx1 = document.getElementById('btcData').getContext('2d');
  new Chart(ctx1, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: '# of Votes',
        data: [15, 27, 20, 25, 21, 31],
        fill: false,
        pointRadius: 0,
        borderWidth: 1.5,
        borderColor: '#4eb6d0'
      }]
    },
    options: {
      legend: {
        display: false
      },
      responsive: true,
      plugins: {
        title: {
          display: false,
          text: undefined
        }
      },
      scales: {
        xAxes: [{
          display: false
        }],
        yAxes: [{
          display: false
        }]
      }
    },
  });

  //Ethereum
  var ctx2 = document.getElementById('ethData').getContext('2d');
  new Chart(ctx2, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: '# of Votes',
        data: [12, 28, 16, 22, 15, 22,],
        fill: false,
        pointRadius: 0,
        borderWidth: 1.5,
        borderColor: '#ffda82'
      }]
    },
    options: {
      legend: {
        display: false
      },
      responsive: true,
      plugins: {
        title: {
          display: false,
          text: undefined
        }
      },
      scales: {
        xAxes: [{
          display: false
        }],
        yAxes: [{
          display: false
        }]
      }
    },
  });

  //Dash
  var ctx3 = document.getElementById('dashData').getContext('2d');
  new Chart(ctx3, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: '# of Votes',
        data: [31, 22, 25, 21, 25, 21],
        fill: false,
        pointRadius: 0,
        borderWidth: 1.5,
        borderColor: '#ffbd5a'
      }]
    },
    options: {
      legend: {
        display: false
      },
      responsive: true,
      plugins: {
        title: {
          display: false,
          text: undefined
        }
      },
      scales: {
        xAxes: [{
          display: false
        }],
        yAxes: [{
          display: false
        }]
      }
    },
  });

  //Golem
  var ctx4 = document.getElementById('glmData').getContext('2d');
  new Chart(ctx4, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: '# of Votes',
        data: [15, 27, 20, 25, 21, 31],
        fill: false,
        pointRadius: 0,
        borderWidth: 1.5,
        borderColor: '#2dce89'
      }]
    },
    options: {
      legend: {
        display: false
      },
      responsive: true,
      plugins: {
        title: {
          display: false,
          text: undefined
        }
      },
      scales: {
        xAxes: [{
          display: false
        }],
        yAxes: [{
          display: false
        }]
      }
    },
  });

  // Data Table
  $('#myAssets').DataTable({
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
  $('.select2-no-search').select2({
    minimumResultsForSearch: Infinity,
    placeholder: 'Choose one'
  });
  $('.select2').on('click', () => {
    let selectField = document.querySelectorAll('.select2-search__field')
    selectField.forEach((element, index) => {
      element?.focus();
    })
  });

  //select2 style-01
  function select2Img(data) {
    if (!data.id) { return data.text; }
    var $data = $(
      '<span class="d-flex align-items-center"><img src="http://127.0.0.1:8000/build/assets/img/crypto-currencies/round-icons/' + data.element.value + '.svg" class="ht-20 wd-20 me-1" /> '
      + data.text + '</span>'
    );
    return $data;
  };

  $(".select2-img").select2({
    templateResult: select2Img,
    templateSelection: select2Img,
    escapeMarkup: function (m) { return m; }
  });
})
