(function($) {
	'use strict';
	$(function() {
		   //Revenue Chart
		if ($("#revenue-chart").length) {
			var revenueChartCanvas = $("#revenue-chart").get(0).getContext("2d");

			var revenueChart = new Chart(revenueChartCanvas, {
					type: 'bar',
					data: {
					labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
					datasets: [{
							data: [105, 195, 290, 320, 400, 100, 290],
							backgroundColor: ["rgba(255, 86, 48, 0.3)", "rgba(255, 86, 48, 0.3)", "rgba(255, 86, 48, 0.3)", "rgb(255, 86, 48)", "rgba(255, 86, 48, 0.3)", "rgba(255, 86, 48, 0.3)", "rgba(255, 86, 48, 0.3)"],
							}
					]
					},
					options: {
					responsive: true,
					maintainAspectRatio: false,
					scales: {
							yAxes: [{
							gridLines: {
									drawBorder: false,
									zeroLineColor: "rgba(0, 0, 0, 0.09)",
									color: "rgba(0, 0, 0, 0.09)"
							},
							ticks: {
									fontColor: '#bababa',
									min:0,
									stepSize: 100,
							}
							}],
							xAxes: [{
							ticks: {
									fontColor: '#bababa',
									beginAtZero: true
							},
							gridLines: {
									display: false,
									drawBorder: false
							},
							barPercentage: 0.4
							}]
					},
					legend: {
							display: false
					}
					}
			});
    }
        //Sales Chart
		if ($("#chart-sales").length) {
			var salesChartCanvas = $("#chart-sales").get(0).getContext("2d");
			var gradient1 = salesChartCanvas.createLinearGradient(0, 0, 0, 230);
			gradient1.addColorStop(0, '#55d1e8');
			gradient1.addColorStop(1, 'rgba(255, 255, 255, 0)');

			var gradient2 = salesChartCanvas.createLinearGradient(0, 0, 0, 160);
			gradient2.addColorStop(0, '#1bbd88');
			gradient2.addColorStop(1, 'rgba(255, 255, 255, 0)');

			var salesChart = new Chart(salesChartCanvas, {
				type: 'line',
				data: {
					labels: ["2am", "4am", "6am", "8am", "10am", "12am"],
					datasets: [{
							data: [80, 115, 115, 150, 130, 160],
							backgroundColor: gradient1,
							borderColor: [
								'#08bdde'
							],
							borderWidth: 2,
							pointBorderColor: "#08bdde",
							pointBorderWidth: 4,
							pointRadius: 1,
							fill: 'origin',
						},
						{
							data: [250, 310, 270, 330, 270, 380],
							backgroundColor: gradient2,
							borderColor: [
								'#00b67a'
							],
							borderWidth: 2,
							pointBorderColor: "#00b67a",
							pointBorderWidth: 4,
							pointRadius: 1,
							fill: 'origin',
						}
					]
				},
				options: {
					responsive: true,
					maintainAspectRatio: true,
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							ticks: {
								fontColor: "#bababa"
							},
							gridLines: {
								display: false,
								drawBorder: false
							}
						}],
						yAxes: [{
							ticks: {
								fontColor: "#bababa",
								stepSize: 100,
								min: 0,
								max: 500
							},
							gridLines: {
								drawBorder: false,
								color: "rgba(101, 103, 119, 0.21)",
								zeroLineColor: "rgba(101, 103, 119, 0.21)"
							}
						}]
					},
					legend: {
						display: false
					},
					tooltips: {
						enabled: true
					},
					elements: {
							line: {
									tension: 0
							}
					},
					legendCallback : function(chart) {
						var text = [];
						text.push('<div>');
						text.push('<div class="d-flex align-items-center">');
						text.push('<span class="bullet-rounded" style="border-color: ' + chart.data.datasets[1].borderColor[0] +' "></span>');
						text.push('<p class="text-small text-muted mb-0 ml-2">Gross volume</p>');
						text.push('</div>');
						text.push('<div class="d-flex align-items-center">');
						text.push('<span class="bullet-rounded" style="border-color: ' + chart.data.datasets[0].borderColor[0] +' "></span>');
						text.push('<p class="text-small text-muted mb-0 ml-2">New Cusromers</p>');
						text.push('</div>');
						text.push('</div>');
						return text.join('');
					},
				}
			});
		document.getElementById('sales-legend').innerHTML = salesChart.generateLegend();
	}
	    //Impressions Chart 
			if ($("#impressions-chart").length) {
        var impressionsChartCanvas = $("#impressions-chart").get(0).getContext("2d");
        var impressionChart = new Chart(impressionsChartCanvas, {
          type: 'line',
          data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept",],
            datasets: [{
                data: [47, 33, 33, 24, 40, 30, 26, 30, 39],
                fill: false,
                borderColor: [
                  '#ffffff'
                ],
                borderWidth: 1,
                pointBorderColor: "#ffffff",
                pointBorderWidth: 5,
                pointRadius: [1, 0, 0, 0, 0, 0, 0, 0, 1],
                label: "online"
              }
            ]
          },
          options: {
            responsive: true,
            maintainAspectRatio: true,
            layout: {
              padding: {
                left: 0,
                right: 10,
                top: 0,
                bottom: 0
              }
            },
            plugins: {
              filler: {
                propagate: false
              }
            },
            scales: {
              xAxes: [{
                ticks: {
                  display: false,
                  fontColor: "#6c7293"
                },
                gridLines: {
                display: false,
                drawBorder: false,
                  color: "rgba(101, 103, 119, 0.21)"
                }
              }],
              yAxes: [{
                ticks: {
                  display: false,
                  fontColor: "#6c7293",
                },
                gridLines: {
                  display: false,
                  drawBorder: false,
                  color: "rgba(101, 103, 119, 0.21)"
                }
              }]
            },
            legend: {
              display: false
            },
            tooltips: {
              enabled: true
            },
            elements: {
                line: {
                    tension: 0
                }
            }
          }
        });
		}
		  //Traffic Chart
			if ($("#traffic-chart").length) {
				var trafficChartCanvas = $("#traffic-chart").get(0).getContext("2d");
				var trafficChart = new Chart(trafficChartCanvas, {
					type: 'line',
					data: {
						labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept",],
						datasets: [{
								data: [47, 33, 33, 24, 40, 30, 26, 30, 39],
								fill: false,
								borderColor: [
									'#ffffff'
								],
								borderWidth: 1,
								pointBorderColor: "#ffffff",
								pointBorderWidth: 5,
								pointRadius: [1, 0, 0, 0, 0, 0, 0, 0, 1],
								label: "online"
							}
						]
					},
					options: {
						responsive: true,
						maintainAspectRatio: true,
						layout: {
							padding: {
								left: 0,
								right: 10,
								top: 0,
								bottom: 0
							}
						},
						plugins: {
							filler: {
								propagate: false
							}
						},
						scales: {
							xAxes: [{
								ticks: {
									display: false,
									fontColor: "#6c7293"
								},
								gridLines: {
								display: false,
								drawBorder: false,
									color: "rgba(101, 103, 119, 0.21)"
								}
							}],
							yAxes: [{
								ticks: {
									display: false,
									fontColor: "#6c7293",
								},
								gridLines: {
									display: false,
									drawBorder: false,
									color: "rgba(101, 103, 119, 0.21)"
								}
							}]
						},
						legend: {
							display: false
						},
						tooltips: {
							enabled: true
						},
						elements: {
								line: {
										tension: 0
								}
						}
					}
				});
			}
			$('#example-css').barrating({
				theme: 'css-stars',
				initialRating: 4,
				showSelectedRating: false
			});
			$('#example-css-2').barrating({
				theme: 'css-stars',
				initialRating: 4,
				showSelectedRating: false
			});
			$('#example-css-3').barrating({
				theme: 'css-stars',
				initialRating: 4,
				showSelectedRating: false
			});

			if($('#revenue-map').length) {
				$('#revenue-map').vectorMap({
					map: 'world_mill_en',
					backgroundColor: 'transparent',
					zoomButtons : false,
					panOnDrag: true,
					focusOn: {
						x: 0.5,
						y: 0.5,
						scale: 1,
						animate: true
					},
					regionStyle: {
						initial: {
							fill: '#00bbdd'
						},
						hover: {
								fill: "#006c80"
							}
					}
				});
			}
			//Earning Chart
			var d1 = [
				[0, 0],
				[1, 6],
				[2, 12],
				[3, 18],
				[4, 16],
				[5, 14],
				[6, 12],
				[7, 20],
				[8, 24],
				[9, 30],
				[10, 20],
				[11, 30],
				[12, 20],
				[13, 30],
				[14, 36],
				[15, 42],
				[16, 60],
				[17, 60],
				[18, 42],
				[19, 42],
				[20, 32],
				[21, 22],
				[22, 36],
				[23, 36],
				[24, 50],
				[25, 51],
				[26, 58],
				[27, 51],
				[28, 58],
				[29, 51],
				[30, 92],
				[31, 92],
				[32, 105],
				[33, 110],
				[34, 115],
				[35, 215],
				[36, 190],
				[37, 190],
				[38, 210],
				[39, 215],
				[40, 205],
				[41, 205],
				[42, 260],
				[43, 250],
				[44, 220],
				[45, 190],
				[46, 170],
				[47, 185],
				[48, 170],
				[49, 202],
				[50, 188],
				[51, 188],
				[52, 160],
				[53, 140],
				[54, 160],
				[55, 150],
				[56, 190],
				[57, 190],
				[58, 220],
				[59, 180],
				[60, 190],
				[60, 165],
				[61, 150],
				[62, 135],
				[63, 120],
				[64, 110],
				[65, 100]
			];
		
			var options = {
					series: {
							shadowSize: 0,
							lines: {
									show: true,
									fill: true,
									fillColor: { colors: [ { opacity: 0 }, { opacity: 0.8 } ] }
							},
					},
					grid: {
							borderWidth: 0,
							labelMargin: 15,
							mouseActiveRadius: 6,
							borderColor: '#eeeeee',
							show: true
					},
					xaxis: {
							tickLength:0,
							font: {
									lineHeight: 5,
									style: "normal",
									color: "#bababa"
							},
							shadowSize: 0,
							ticks: [
									[0, "Sun"],
									[10, "Mon"],
									[20, "Tue"],
									[30, "Wed"],
									[40, "Thu"],
									[50, "Fri"],
									[60, "Sat"]
							]
					},
	
					yaxis: {
							tickColor: '#eee',
							tickDecimals: 0,
							tickSize: 100,
							font: {
									lineHeight: 5,
									style: "normal",
									color: "#bababa",
							},
							shadowSize: 0
					},
	
					legend: {
							container: '.flc-line',
							backgroundOpacity: 0.5,
							noColumns: 0,
							backgroundColor: "white",
							lineWidth: 0
					},
			};
			if ($("#earning-chart").length) {
        $.plot($("#earning-chart"), [{
                data: d1,
                lines: {
                    show: true
                },
                label: 'Earning',
                color: '#fc424a',
            }
        ], options);
		}

    //Datepicker
    $('#datepicker').datepicker({
      enableOnReadonly: true,
      todayHighlight: true,
    });
		
    
	});
})(jQuery);