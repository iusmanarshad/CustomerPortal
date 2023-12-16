import ApexCharts from 'apexcharts'

//Sales Chart

var salesChartoptions = {
	chart: {
		height: 308,
    width: '100%',
		type: "line",
		stacked: false,
        fontFamily: 'poppins, sans-serif',
	},
	dataLabels: {
		enabled: false
	},
	colors: ['000','000', '#F9F871'],
	series: [{
		name: 'Active Orders',
		type: 'column',
		data: [104, 102, 117, 146, 118, 115, 220, 103, 83, 114, 265, 174],
	}, {
		name: "Completed Orders",
		type: "column",
		data: [92, 75, 123, 111, 196, 122, 159, 102, 138, 136, 62, 240]
	}, {
		name: 'Sales Revenue',
		type: 'line',
		data: [35, 52, 86, 65, 102, 70, 152, 87, 55, 92, 170, 80],
	}],
	stroke: {
		width: [0, 0, 2]
	},
	plotOptions: {
		bar: {
			columnWidth: '25%',
		}
	},
	markers: {
		size: [0, 0, 3],
		colors: undefined,
		strokeColors: "#000",
		strokeOpacity: 0.6,
		strokeDashArray: 0,
		fillOpacity: 1,
		discrete: [],
		shape: "circle",
		radius: [0, 0, 2],
		offsetX: 0,
		offsetY: 0,
		onClick: undefined,
		onDblClick: undefined,
		showNullDataPoints: true,
		hover: {
			size: undefined,
			sizeOffset: 3
		}
	},
	fill: {
		opacity: [1, 1, 1]
	},
	grid: {
		borderColor: '#f2f6f7',
	},
	legend: {
		show: true,
		position: 'bottom',
		fontWeight: 500,
		markers: {
			width: 7,
			height: 7,
			shape: 'square',
			radius: 0,
		}
	},
	yaxis: {
		min: 0,
		forceNiceScale: true,
		title: {
			style: {
				color: '#adb5be',
				fontSize: '14px',
				fontFamily: 'poppins, sans-serif',
				fontWeight: 600,
				cssClass: 'apexcharts-yaxis-label',
			},
		},
		labels: {
			formatter: function (y) {
				return y.toFixed(0) + "";
			}
		}
	},
	xaxis: {
		type: 'month',
		categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		axisBorder: {
			show: true,
			color: 'rgba(119, 119, 142, 0.05)',
			offsetX: 0,
			offsetY: 0,
		},
		axisTicks: {
			show: true,
			borderType: 'solid',
			color: 'rgba(119, 119, 142, 0.05)',
			width: 6,
			offsetX: 0,
			offsetY: 0
		},
		labels: {
			rotate: -90
		}
	},
	tooltip: {
		enabled: true,
		shared: false,
		intersect: true,
		x: {
			show: false
		}
	},
};
var chart1 = new ApexCharts(document.querySelector("#salesChart"), salesChartoptions);
if(document.querySelector("#salesChart")){
chart1.render();
}
export function salesChart(myVarVal) {
	chart1.updateOptions({
		colors: [`rgb(${myVarVal})`,`rgba(${myVarVal}, 0.4)`, '#F9F871'],
	})
}

// total investment
var totalInvestmentoptions = {
	series: [{
		name: 'Male',
		data: [80, 50, 57, 98, 66, 56, 75]
	}],
	chart: {
		toolbar: {
			show: false,
		},
		type: 'bar',
		height: 50,
		width: 95,
        fontFamily: 'poppins, sans-serif',
		sparkline: {
			enabled: true
		},
		dropShadow: {
			enabled: true,
			top: 0,
			left: 0,
			blur: 2,
			color: ['#fff'],
			opacity: 0.5
		}
	},
	colors: ['000'],
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: '40%',
		},
	},
	grid: {
		show: false,
		borderColor: 'rgba(119, 119, 142, 0.07)',
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		show: true,
		width: 1,
		colors: ['transparent']
	},
	xaxis: {
		labels: {
			show: false,
		},
		categories: ['Mon', 'Tue', 'Web', 'Thu', 'Fri', 'Sat', 'Sun'],
		axisBorder: {
			show: false,
			color: 'rgba(119, 119, 142, 0.08)',
			offsetX: 0,
			offsetY: 0,
		},

		axisTicks: {
			show: false,
			borderType: 'solid',
			color: 'rgba(119, 119, 142, 0.08)',
			width: 6,
			offsetX: 0,
			offsetY: 0,
		},
	},
	yaxis: {
		title: {
			style: {
				color: '	#adb5be',
				fontSize: '14px',
				fontFamily: 'poppins, sans-serif',
				fontWeight: 600,
				cssClass: 'apexcharts-yaxis-label',
			},
		},
		labels: {
			show: false,
			formatter: function (y) {
				return y.toFixed(0) + "";
			}
		}
	},
	fill: {
		opacity: 1
	},
	legend: {
		show: false,
		position: "top"
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return "$ " + val + " thousands"
			}
		}
	}
};
var chart2 = new ApexCharts(document.querySelector("#total-investment"), totalInvestmentoptions);
if(document.querySelector("#total-investment")){
chart2.render();
}
export function totalInvestment(myVarVal) {
	chart2.updateOptions({
		colors: [`rgb(${myVarVal})`],
	})
}

// Visitors Report Chart
var visitorsoptions = {
    series: [{
      name: 'New Visitors',
      data: [76, 85, 101, 98, 87, 105, 91]
    }, {
      name: 'Repeated Visitors',
      data: [44, 55, 57, 56, 61, 58, 63]
    },],
    chart: {
      toolbar: {
        show: false
      },
      type: 'bar',
      fontFamily: 'poppins, sans-serif',
      height: 320
    },
    grid: {
      borderColor: '#f2f6f7',
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '55%',
        endingShape: 'rounded'
      },
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      show: true,
      width: 2,
      colors: ['transparent']
    },
    xaxis: {
      categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    },
    yaxis: {
      title: {
        text: undefined
      }
    },
    xaxis: {
      axisBorder: {
        show: true,
        color: 'rgba(119, 119, 142, 0.05)',
        offsetX: 0,
        offsetY: 0,
      },
      axisTicks: {
        show: true,
        borderType: 'solid',
        color: 'rgba(119, 119, 142, 0.05)',
        width: 6,
        offsetX: 0,
        offsetY: 0
      }
    },
    fill: {
      opacity: 1
    },
    colors: ['#000', "#ededed"],
    legend: {
      show: false,
      position: 'top'
    },
    plotOptions: {
      bar: {
        columnWidth: "30%",
        borderRadius: 3
      }
    },
  };
var chart3 = new ApexCharts(document.querySelector("#visitorsGrowth"), visitorsoptions);
if(document.querySelector("#visitorsGrowth")){
chart3.render();
}
export  function visitorsGrowth(myVarVal) {
    chart3.updateOptions({
      colors: [`rgb(${myVarVal})`, `rgba(${myVarVal}, 0.4)`],
    })
}

// // Visitors Report chartA  
  var chartAoptions = {
	series: [{
		name: 'Orders',
		type: 'column',
		data: [1.8, 2.5, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6]
	}, {
		name: 'Sales',
		type: 'column',
		data: [1.1, 2.2, 3.1, 4, 4.1, 4.9, 6.5, 8.5]
	}, {
		name: 'Profit',
		type: 'line',
		data: [20, 29, 37, 35, 44, 43, 50, 58],
	},
	],
	chart: {
		height: 350,
		type: 'line',
        fontFamily: 'poppins, sans-serif',
		stacked: false
	},
	grid: {
		borderColor: '#f2f6f7',
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		width: [1, 1, 4],
	},
	title: {
		text: undefined,
		align: 'left',
		offsetX: 110
	},
	xaxis: {
		categories: [2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022],
		axisBorder: {
			color: 'rgba(119, 119, 142, 0.05)',
			offsetX: 0,
			offsetY: 0,
		},
		axisTicks: {
			color: 'rgba(119, 119, 142, 0.05)',
			width: 6,
			offsetX: 0,
			offsetY: 0
		},
	},
	yaxis: [
		{
			show: true,
			axisTicks: {
				show: true,
			},
			axisBorder: {
				show: false,
				color: '#4eb6d0'
			},
			labels: {
				style: {
					colors: '#4eb6d0',
				}
			},
			title: {
				text: undefined,
				style: {
					color: '#4eb6d0',
				}
			},
			tooltip: {
				enabled: true
			}
		},
		{
			seriesName: 'Orders',
			opposite: true,
			axisTicks: {
				show: true,
			},
			axisBorder: {
				show: false,
				color: '#00E396'
			},
			labels: {
				style: {
					colors: '#00E396',
				}
			},
			title: {
				text: undefined,
				style: {
					color: '#00E396',
				}
			},
		},
		{
			seriesName: 'Profit',
			opposite: true,
			axisTicks: {
				show: true,
			},
			axisBorder: {
				show: false,
				color: '#000000'
			},
			labels: {
				show: false,
				style: {
					colors: '#FEB019',
				},
			},
			title: {
				text: undefined,
				style: {
					color: '#FEB019',
				}
			}
		},
	],
	tooltip: {
		enabled: true,
	},
	colors: ['000', "#ededed", "#fd7e14"],
	legend: {
		position: 'top',
		offsetX: 40
	}, stroke: {
		width: [0, 0, 1.5],
		curve: 'smooth',
		dashArray: [0, 0, 2],
	},
	plotOptions: {
		bar: {
			columnWidth: "35%",
			borderRadius: 3
		}
	},
};
var chart4 = new ApexCharts(document.querySelector("#chartA"), chartAoptions);
if(document.querySelector("#chartA")){
chart4.render();
}
export function chartA(myVarVal) {
	chart4.updateOptions({
		colors: [`rgb(${myVarVal})`, `rgba(${myVarVal}, 0.4)`, "#fd7e14"],
	})
}

//Project Chart
var projectReportoptions = {
    series: [{
      name: 'Active Projects',
      type: 'column',
      data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
    }, {
      name: 'Tasks',
      type: 'line',
      data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
    }],
    chart: {
      height: 350,
      type: 'line',
      fontFamily: 'poppins, sans-serif',
    },
    grid: {
      borderColor: '#f2f6f7',
    },
    title: {
      text: undefined,
    },
    legend: {
      position: 'top',
    },
    dataLabels: {
      enabled: false,
      enabledOnSeries: [1]
    },
    stroke: {
      width: [1, 1.5],
      curve: 'smooth',
      lineCap: 'butt',
      dashArray: [0, 2]
    },
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    yaxis: [{
      show: false,
      color: '#4eb6d0',
      title: {
        text: undefined,
      },
  
    }, {
      opposite: true,
      title: {
        text: undefined,
      }
    }],
    xaxis: {
      axisBorder: {
        color: 'rgba(119, 119, 142, 0.05)',
        offsetX: 0,
        offsetY: 0,
      },
      axisTicks: {
        color: 'rgba(119, 119, 142, 0.05)',
        width: 6,
        offsetX: 0,
        offsetY: 0
      },
    },
    colors: ['000', "#fd7e14"],
    plotOptions: {
      bar: {
        columnWidth: "20%",
        borderRadius: 3
      }
    },
};
var chart5 = new ApexCharts(document.querySelector("#projectReport"), projectReportoptions);
if(document.querySelector("#projectReport")){
  chart5.render();
}
export function projectReport(myVarVal) {
    chart5.updateOptions({
      colors: [`rgb(${myVarVal})`, "#fd7e14"],
    })
}

// //Total Revenue Chart
var totalRevenueoptions = {
    series: [{
      name: 'Last Year',
      data: [30, 25, 46, 28, 21, 45, 35, 64, 52, 59, 36, 39]
    }, {
      name: 'Present Year',
      data: [23, 11, 22, 35, 17, 28, 22, 37, 21, 44, 22, 30]
    }],
    chart: {
      height: 320,
      fontFamily: 'poppins, sans-serif',
      type: 'area'
    },
    grid: {
      borderColor: '#f2f6f7',
    },
    dataLabels: {
      enabled: false
    },
    xaxis: {
      axisBorder: {
        color: 'rgba(119, 119, 142, 0.05)',
        offsetX: 0,
        offsetY: 0,
      },
      axisTicks: {
        color: 'rgba(119, 119, 142, 0.05)',
        width: 6,
        offsetX: 0,
        offsetY: 0
      },
    },
    legend: {
      position: 'top'
    },
    colors: ["#eaebeb", '#000000'],
    stroke: {
      width: [0, 0],
      curve: 'smooth',
    },
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
};
var chart6 = new ApexCharts(document.querySelector("#totalRevenue"), totalRevenueoptions);
if(document.querySelector("#totalRevenue")){
  chart6.render();
}
export function totalRevenue(myVarVal) {
    chart6.updateOptions({
      colors: [`rgba(${myVarVal}, 0.4)`, `rgb(${myVarVal})`],
    })
}

// Audience Report Chart
var audienceReportoptions = {
    series: [
      {
        name: '2020',
        data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 45, 35]
      },
      {
        name: '2021',
        data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43, 27]
      },
      {
        name: '2022',
        data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39, 33]
      }
    ],
    chart: {
      toolbar: {
        show: false
      },
      type: 'area',
      height: 350,
      stacked: true,
      fontFamily: 'poppins, sans-serif',
    },
    grid: {
      borderColor: '#f2f6f7',
    },
    colors: ['#000', '#000', '#000'],
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: [0, 0, 0],
      curve: 'straight',
    },
    xaxis: {
      axisBorder: {
        color: 'rgba(119, 119, 142, 0.05)',
        offsetX: 0,
        offsetY: 0,
      },
      axisTicks: {
        color: 'rgba(119, 119, 142, 0.05)',
        width: 6,
        offsetX: 0,
        offsetY: 0
      },
    },
    fill: {
      type: 'gradient',
      gradient: {
        opacityFrom: 0.6,
        opacityTo: 0.8,
      }
    },
    legend: {
      show: false,
    },
  
};
var chart7 = new ApexCharts(document.querySelector("#audienceReport"), audienceReportoptions);
if(document.querySelector("#audienceReport")){
  chart7.render();
}
export function audienceReport(myVarVal) {
    chart7.updateOptions({
      colors: [`rgb(${myVarVal})`, `rgba(${myVarVal}, 0.2)`, `rgba(${myVarVal}, 0.5)`],
    })
}

//Sessions By Device Chart
var sessionsDeviceoptions = {
  plotOptions: {
    pie: {
      size: 10,
      donut: {
        size: '70%'
      }
    }
  },
  dataLabels: {
    enabled: false,
  },
  series: [55, 34, 51],
  labels: ['Mobile', 'Tablet', 'Desktop'],
  chart: {
    type: 'donut',
    fontFamily: 'poppins, sans-serif',
    height: 220
  },
  legend: {
    show: false
  },
  colors: ['#000', '#2dce89', '#ffda82'],
  responsive: [{
    breakpoint: 0,
    options: {
      chart: {
        width: 100,
      },
      legend: {
        show: false,
        position: 'bottom'
      }
    },
  }]
};
var chart8 = new ApexCharts(document.querySelector("#sessionsDevice"), sessionsDeviceoptions);
if(document.querySelector("#sessionsDevice")){
  chart8.render();
}
export function sessionsDevice(myVarVal) {
    chart8.updateOptions({
      colors: [`rgb(${myVarVal})`, '#2dce89', '#ffda82'],
    })
}

// // Sessions By Country Chart
var sessionsCountryoptions = {
    series: [{
      name: 'Sessions',
      data: [400, 430, 470, 540, 1100, 1200, 1380]
    }],
    chart: {
      toolbar: {
        show: false
      },
      type: 'bar',
      fontFamily: 'poppins, sans-serif',
      height: 330
    },
    grid: {
      borderColor: '#f2f6f7',
    },
    plotOptions: {
      bar: {
        borderRadius: 4,
        horizontal: true,
        barHeight: "30%",
        borderRadius: 3,
      }
    },
    colors: ['#000'],
    dataLabels: {
      enabled: false
    },
    xaxis: {
      categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'United States', 'China', 'Germany'],
    }
};
var chart = new ApexCharts(document.querySelector("#sessionsCountry"), sessionsCountryoptions);
if(document.querySelector("#sessionsCountry")){
  chart.render();
}
export function sessionsCountry(myVarVal) {
    chart.updateOptions({
      colors: [`rgb(${myVarVal})`],
    })
}

// Crypto Report Chart
var cryptoReportoptions = {
    series: [{
      name: 'candle',
      data: [
        {
          x: new Date(1538778600000),
          y: [6629.81, 6650.5, 6623.04, 6633.33]
        },
        {
          x: new Date(1538780400000),
          y: [6632.01, 6643.59, 6620, 6630.11]
        },
        {
          x: new Date(1538782200000),
          y: [6630.71, 6648.95, 6623.34, 6635.65]
        },
        {
          x: new Date(1538784000000),
          y: [6635.65, 6651, 6629.67, 6638.24]
        },
        {
          x: new Date(1538785800000),
          y: [6638.24, 6640, 6620, 6624.47]
        },
        {
          x: new Date(1538787600000),
          y: [6624.53, 6636.03, 6621.68, 6624.31]
        },
        {
          x: new Date(1538789400000),
          y: [6624.61, 6632.2, 6617, 6626.02]
        },
        {
          x: new Date(1538791200000),
          y: [6627, 6627.62, 6584.22, 6603.02]
        },
        {
          x: new Date(1538793000000),
          y: [6605, 6608.03, 6598.95, 6604.01]
        },
        {
          x: new Date(1538794800000),
          y: [6604.5, 6614.4, 6602.26, 6608.02]
        },
        {
          x: new Date(1538796600000),
          y: [6608.02, 6610.68, 6601.99, 6608.91]
        },
        {
          x: new Date(1538798400000),
          y: [6608.91, 6618.99, 6608.01, 6612]
        },
        {
          x: new Date(1538800200000),
          y: [6612, 6615.13, 6605.09, 6612]
        },
        {
          x: new Date(1538802000000),
          y: [6612, 6624.12, 6608.43, 6622.95]
        },
        {
          x: new Date(1538803800000),
          y: [6623.91, 6623.91, 6615, 6615.67]
        },
        {
          x: new Date(1538805600000),
          y: [6618.69, 6618.74, 6610, 6610.4]
        },
        {
          x: new Date(1538807400000),
          y: [6611, 6622.78, 6610.4, 6614.9]
        },
        {
          x: new Date(1538809200000),
          y: [6614.9, 6626.2, 6613.33, 6623.45]
        },
        {
          x: new Date(1538811000000),
          y: [6623.48, 6627, 6618.38, 6620.35]
        },
        {
          x: new Date(1538812800000),
          y: [6619.43, 6620.35, 6610.05, 6615.53]
        },
        {
          x: new Date(1538814600000),
          y: [6615.53, 6617.93, 6610, 6615.19]
        },
        {
          x: new Date(1538816400000),
          y: [6615.19, 6621.6, 6608.2, 6620]
        },
        {
          x: new Date(1538818200000),
          y: [6619.54, 6625.17, 6614.15, 6620]
        },
        {
          x: new Date(1538820000000),
          y: [6620.33, 6634.15, 6617.24, 6624.61]
        },
        {
          x: new Date(1538821800000),
          y: [6625.95, 6626, 6611.66, 6617.58]
        },
        {
          x: new Date(1538823600000),
          y: [6619, 6625.97, 6595.27, 6598.86]
        },
        {
          x: new Date(1538825400000),
          y: [6598.86, 6598.88, 6570, 6587.16]
        },
        {
          x: new Date(1538827200000),
          y: [6588.86, 6600, 6580, 6593.4]
        },
        {
          x: new Date(1538829000000),
          y: [6593.99, 6598.89, 6585, 6587.81]
        },
        {
          x: new Date(1538830800000),
          y: [6587.81, 6592.73, 6567.14, 6578]
        },
        {
          x: new Date(1538832600000),
          y: [6578.35, 6581.72, 6567.39, 6579]
        },
        {
          x: new Date(1538834400000),
          y: [6579.38, 6580.92, 6566.77, 6575.96]
        },
        {
          x: new Date(1538836200000),
          y: [6575.96, 6589, 6571.77, 6588.92]
        },
        {
          x: new Date(1538838000000),
          y: [6588.92, 6594, 6577.55, 6589.22]
        },
        {
          x: new Date(1538839800000),
          y: [6589.3, 6598.89, 6589.1, 6596.08]
        },
        {
          x: new Date(1538841600000),
          y: [6597.5, 6600, 6588.39, 6596.25]
        },
        {
          x: new Date(1538843400000),
          y: [6598.03, 6600, 6588.73, 6595.97]
        },
        {
          x: new Date(1538845200000),
          y: [6595.97, 6602.01, 6588.17, 6602]
        },
        {
          x: new Date(1538847000000),
          y: [6602, 6607, 6596.51, 6599.95]
        },
        {
          x: new Date(1538848800000),
          y: [6600.63, 6601.21, 6590.39, 6591.02]
        },
        {
          x: new Date(1538850600000),
          y: [6591.02, 6603.08, 6591, 6591]
        },
        {
          x: new Date(1538852400000),
          y: [6591, 6601.32, 6585, 6592]
        },
        {
          x: new Date(1538854200000),
          y: [6593.13, 6596.01, 6590, 6593.34]
        },
        {
          x: new Date(1538856000000),
          y: [6593.34, 6604.76, 6582.63, 6593.86]
        },
        {
          x: new Date(1538857800000),
          y: [6593.86, 6604.28, 6586.57, 6600.01]
        },
        {
          x: new Date(1538859600000),
          y: [6601.81, 6603.21, 6592.78, 6596.25]
        },
        {
          x: new Date(1538861400000),
          y: [6596.25, 6604.2, 6590, 6602.99]
        },
        {
          x: new Date(1538863200000),
          y: [6602.99, 6606, 6584.99, 6587.81]
        },
        {
          x: new Date(1538865000000),
          y: [6587.81, 6595, 6583.27, 6591.96]
        },
        {
          x: new Date(1538866800000),
          y: [6591.97, 6596.07, 6585, 6588.39]
        },
        {
          x: new Date(1538868600000),
          y: [6587.6, 6598.21, 6587.6, 6594.27]
        },
        {
          x: new Date(1538870400000),
          y: [6596.44, 6601, 6590, 6596.55]
        },
        {
          x: new Date(1538872200000),
          y: [6598.91, 6605, 6596.61, 6600.02]
        },
        {
          x: new Date(1538874000000),
          y: [6600.55, 6605, 6589.14, 6593.01]
        },
        {
          x: new Date(1538875800000),
          y: [6593.15, 6605, 6592, 6603.06]
        },
        {
          x: new Date(1538877600000),
          y: [6603.07, 6604.5, 6599.09, 6603.89]
        },
        {
          x: new Date(1538879400000),
          y: [6604.44, 6604.44, 6600, 6603.5]
        },
        {
          x: new Date(1538881200000),
          y: [6603.5, 6603.99, 6597.5, 6603.86]
        },
        {
          x: new Date(1538883000000),
          y: [6603.85, 6605, 6600, 6604.07]
        },
        {
          x: new Date(1538884800000),
          y: [6604.98, 6606, 6604.07, 6606]
        },
      ]
    }],
    chart: {
      toolbar: {
        show: false
      },
      height: 315,
      type: 'candlestick',
      fontFamily: 'poppins, sans-serif',
    },
    grid: {
      borderColor: '#f2f6f7',
    },
    title: {
      text: undefined,
      align: 'left'
    },
    tooltip: {
      enabled: true,
    },
    xaxis: {
      type: 'datetime',
      axisBorder: {
        color: 'rgba(119, 119, 142, 0.05)',
        offsetX: 0,
        offsetY: 0,
      },
      axisTicks: {
        color: 'rgba(119, 119, 142, 0.05)',
        width: 6,
        offsetX: 0,
        offsetY: 0
      },
    },
    yaxis: {
      tooltip: {
        enabled: true
      }
    },
    plotOptions: {
      candlestick: {
        colors: {
          upward: '#ffda82',
          downward: '#000'
        },
      }
    },
};
var chart9 = new ApexCharts(document.querySelector("#cryptoReport"), cryptoReportoptions);
if(document.querySelector("#cryptoReport")){
  chart9.render();
}
export function cryptoReport(myVarVal) {
    chart9.updateOptions({
      plotOptions: {
        candlestick: {
          colors: {
            upward: '#ffda82',
            downward: `rgb(${myVarVal})`
          },
        }
      },
    })
}

//Sales Chart
var salesReportoptions = {
    series: [{
      name: "Sales",
      data: [75, 78, 38, 39, 38, 73, 73, 73, 16, 16, 17, 17]
    },
    {
      name: "Marketing",
      data: [35, 35, 62, 63, 13, 13, 14, 51, 51, 51, 32, 32]
    },
    {
      name: 'Profit',
      data: [87, 57, 74, 99, 75, 38, 110, 85, 57, 95, 65, 81]
    }
    ],
    chart: {
      toolbar: {
        show: false
      },
      height: 360,
      type: 'line',
      fontFamily: 'poppins, sans-serif',
      zoom: {
        enabled: false
      },
    },
    grid: {
      borderColor: '#f2f6f7',
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: [1.5, 1.5, 1.2],
      curve: ['straight', 'straight', 'smooth'],
      lineCap: 'butt',
      dashArray: [0, 0, 2]
    },
    title: {
      text: undefined,
    },
    legend: {
      position: 'top',
      tooltipHoverFormatter: function (val, opts) {
        return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
      }
    },
    markers: {
      size: 0,
      hover: {
        sizeOffset: 6
      }
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      axisBorder: {
        color: 'rgba(119, 119, 142, 0.05)',
        offsetX: 0,
        offsetY: 0,
      },
      axisTicks: {
        color: 'rgba(119, 119, 142, 0.05)',
        width: 6,
        offsetX: 0,
        offsetY: 0
      },
    },
    tooltip: {
      y: [
        {
          title: {
            formatter: function (val) {
              return val
            }
          }
        },
        {
          title: {
            formatter: function (val) {
              return val
            }
          }
        },
        {
          title: {
            formatter: function (val) {
              return val;
            }
          }
        }
      ]
    },
    colors: ['#000', '#ededed', "#fd7e14"],
};
var chart10 = new ApexCharts(document.querySelector("#salesReport"), salesReportoptions);
if(document.querySelector("#salesReport")){
  chart10.render();
}
export function salesReport(myVarVal) {
    chart10.updateOptions({
      colors: [`rgb(${myVarVal})`, `rgba(${myVarVal}, 0.4)`, "#fd7e14"],
    })
}

// Revenue Report
var revenueReportoptions = {
    series: [{
      name: 'progress',
      type: 'line',
      data: [-15, 32, -11, 63, 16, 82, 292, 107, -18, 56, 200, 80],
    }, {
      name: 'active',
      type: 'column',
      data: [104, 102, 117, 146, 118, 115, 220, 103, 83, 114, 265, 174],
    }, {
      name: 'inactive',
      type: 'column',
      data: [-34, -42, -97, -56, -71, -175, -60, -34, -56, -78, -119, -53]
    }],
    chart: {
      height: 395,
      fontFamily: 'poppins, sans-serif',
    },
    stroke: {
      curve: 'smooth', 
      dashArray: [2, 0, 0],
      width: [2, 0, 0]
    },
    fill: {
      opacity: [1, 1, 1]
    },
    grid: {
      borderColor: '#f2f6f7',
    },
    colors: ["#ffda82", '#000' , "#edf1f7"],
    plotOptions: {
      bar: {
        columnWidth: '30%',
      }
    },
    dataLabels: {
      enabled: false,
    },
    legend: {
      show: true,
      position: 'top',
    },
    yaxis: {
      title: {
        style: {
          color: '	#adb5be',
          fontSize: '14px',
          fontWeight: 600,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      labels: {
        formatter: function (y) {
          return y.toFixed(0) + "";
        }
      }
    },
    xaxis: {
      type: 'month',
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'sep', 'oct', 'nov', 'dec'],
      axisBorder: {
        show: true,
        color: 'rgba(119, 119, 142, 0.05)',
        offsetX: 0,
        offsetY: 0,
      },
      axisTicks: {
        show: true,
        borderType: 'solid',
        color: 'rgba(119, 119, 142, 0.05)',
        width: 6,
        offsetX: 0,
        offsetY: 0
      },
      labels: {
        rotate: -90
      }
    }
  
};
var chart11 = new ApexCharts(document.querySelector("#revenueReport"), revenueReportoptions);
if(document.querySelector("#revenueReport")){
  chart11.render();
}
  
export function revenueReport(myVarVal) {
    chart11.updateOptions({
      colors: ["#ffda82", `rgb(${myVarVal})`, `rgba(${myVarVal}, 0.5)`],
    })
}