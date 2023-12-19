<template>
  <div class="card card_shadow">
    <div class="card-body">
      <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                <div class="ml-xl-4 mt-3">
                  <p class="card-title">Detailed Reports</p>
                  <h1 class="text-primary">$34040</h1>
                  <h3 class="font-weight-500 mb-xl-4 text-primary">North America
                  </h3>
                  <p class="mb-2 mb-xl-0">The total number of sessions within the
                    date range. It is the period time a user is actively engaged
                    with your website, page or app, etc</p>
                </div>
              </div>
              <div class="col-md-12 col-xl-9">
                <div class="row">
                  <div class="col-md-6 border-right">
                    <div class="table-responsive mb-3 mb-md-0 mt-3">
                      <table class="table table-borderless report-table">
                        <tr>
                          <td class="text-muted">Illinois</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <h5 class="font-weight-bold mb-0">713</h5>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-muted">Washington</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"
                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <h5 class="font-weight-bold mb-0">583</h5>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-muted">Mississippi</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <h5 class="font-weight-bold mb-0">924</h5>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-muted">California</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <h5 class="font-weight-bold mb-0">664</h5>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-muted">Maryland</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 40%"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <h5 class="font-weight-bold mb-0">560</h5>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-muted">Alaska</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <h5 class="font-weight-bold mb-0">793</h5>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-6 mt-3">
                    <canvas id="north-america-chart"></canvas>
                    <div id="north-america-legend"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                <div class="ml-xl-4 mt-3">
                  <p class="card-title">Detailed Reports</p>
                  <h1 class="text-primary">$34040</h1>
                  <h3 class="font-weight-500 mb-xl-4 text-primary">North America
                  </h3>
                  <p class="mb-2 mb-xl-0">The total number of sessions within the
                    date range. It is the period time a user is actively engaged
                    with your website, page or app, etc</p>
                </div>
              </div>
              <div class="col-md-12 col-xl-9">
                <div class="row">
                  <div class="col-md-6 border-right">
                    <div class="table-responsive mb-3 mb-md-0 mt-3">
                      <table class="table table-borderless report-table">
                        <tr>
                          <td class="text-muted">Illinois</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <h5 class="font-weight-bold mb-0">713</h5>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-muted">Washington</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"
                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <h5 class="font-weight-bold mb-0">583</h5>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-muted">Mississippi</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <h5 class="font-weight-bold mb-0">924</h5>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-muted">California</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <h5 class="font-weight-bold mb-0">664</h5>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-muted">Maryland</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 40%"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <h5 class="font-weight-bold mb-0">560</h5>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-muted">Alaska</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <h5 class="font-weight-bold mb-0">793</h5>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-6 mt-3">
                    <canvas id="south-america-chart"></canvas>
                    <div id="south-america-legend"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="card">
        <div class="card-body">
          <p class="card-title">Annual Procurement Plan for F.Y 2023</p>
          <div class="box-tools">
            <button @click="toCreatePR()" type="button" class="btn btn-primary btn-icon-text">
              <i class="ti-plus btn-icon-prepend"></i>
              Create PR
            </button>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                  <div class="row">
                    <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6"></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <procurement_table />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-5"></div>
                    <div class="col-sm-12 col-md-7"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import procurement_table from '../../components/gss/procurement_table.vue';

export default {
  name: 'DetailedReport',
  components: {
    procurement_table
  },
  mounted() {
    this.renderDetailedReportChart();
  },
  methods: {
    toCreatePR() {
            this.$router.push("/gss/create_pr");
        },
    renderDetailedReportChart() {
      if ($("#north-america-chart").length) {
        var areaData = {
          labels: ["Jan", "Feb", "Mar"],
          datasets: [{
            data: [100, 50, 50],
            backgroundColor: [
              "#4B49AC", "#FFC100", "#248AFD",
            ],
            borderColor: "rgba(0,0,0,0)"
          }]
        };
        var areaOptions = {
          responsive: true,
          maintainAspectRatio: true,
          segmentShowStroke: false,
          cutoutPercentage: 78,
          elements: {
            arc: {
              borderWidth: 4
            }
          },
          legend: {
            display: false
          },
          tooltips: {
            enabled: true
          },
          legendCallback: function (chart) {
            var text = [];
            text.push('<div class="report-chart">');
            text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Offline sales</p></div>');
            text.push('<p class="mb-0">88333</p>');
            text.push('</div>');
            text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Online sales</p></div>');
            text.push('<p class="mb-0">66093</p>');
            text.push('</div>');
            text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
            text.push('<p class="mb-0">39836</p>');
            text.push('</div>');
            text.push('</div>');
            return text.join("");
          },
        }
        var northAmericaChartPlugins = {
          beforeDraw: function (chart) {
            var width = chart.chart.width,
              height = chart.chart.height,
              ctx = chart.chart.ctx;

            ctx.restore();
            var fontSize = 3.125;
            ctx.font = "500 " + fontSize + "em sans-serif";
            ctx.textBaseline = "middle";
            ctx.fillStyle = "#13381B";

            var text = "90",
              textX = Math.round((width - ctx.measureText(text).width) / 2),
              textY = height / 2;

            ctx.fillText(text, textX, textY);
            ctx.save();
          }
        }
        var northAmericaChartCanvas = $("#north-america-chart").get(0).getContext("2d");
        var northAmericaChart = new Chart(northAmericaChartCanvas, {
          type: 'doughnut',
          data: areaData,
          options: areaOptions,
          plugins: northAmericaChartPlugins
        });
        document.getElementById('north-america-legend').innerHTML = northAmericaChart.generateLegend();
      }

      if ($("#order-chart-dark").length) {
        var areaData = {
          labels: ["10", "", "", "20", "", "", "30", "", "", "40", "", "", "50", "", "", "60", "", "", "70"],
          datasets: [{
            data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350", "590", "350", "620", "500", "990", "780", "650"],
            borderColor: [
              '#4747A1'
            ],
            borderWidth: 2,
            fill: false,
            label: "Orders"
          },
          {
            data: [400, 450, 410, 500, 480, 600, 450, 550, 460, "560", "450", "700", "450", "640", "550", "650", "400", "850", "800"],
            borderColor: [
              '#F09397'
            ],
            borderWidth: 2,
            fill: false,
            label: "Downloads"
          }
          ]
        };
        var areaOptions = {
          responsive: true,
          maintainAspectRatio: true,
          plugins: {
            filler: {
              propagate: false
            }
          },
          scales: {
            xAxes: [{
              display: true,
              ticks: {
                display: true,
                padding: 10,
                fontColor: "#fff"
              },
              gridLines: {
                display: false,
                drawBorder: false,
                color: 'transparent',
                zeroLineColor: '#575757'
              }
            }],
            yAxes: [{
              display: true,
              ticks: {
                display: true,
                autoSkip: false,
                maxRotation: 0,
                stepSize: 200,
                min: 200,
                max: 1200,
                padding: 18,
                fontColor: "#fff"
              },
              gridLines: {
                display: true,
                color: "#575757",
                drawBorder: false
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
              tension: .35
            },
            point: {
              radius: 0
            }
          }
        }
        var revenueChartCanvas = $("#order-chart-dark").get(0).getContext("2d");
        var revenueChart = new Chart(revenueChartCanvas, {
          type: 'line',
          data: areaData,
          options: areaOptions
        });
        document.getElementById('order-legend').innerHTML = revenueChart.generateLegend();

      }

      if ($("#sales-chart-dark").length) {
        var SalesChartCanvas = $("#sales-chart-dark").get(0).getContext("2d");
        var SalesChart = new Chart(SalesChartCanvas, {
          type: 'bar',
          data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May"],
            datasets: [{
              label: 'Offline Sales',
              data: [480, 230, 470, 210, 330],
              backgroundColor: '#98BDFF'
            },
            {
              label: 'Online Sales',
              data: [400, 340, 550, 480, 170],
              backgroundColor: '#4B49AC'
            }
            ]
          },
          options: {
            cornerRadius: 5,
            responsive: true,
            maintainAspectRatio: true,
            layout: {
              padding: {
                left: 0,
                right: 0,
                top: 20,
                bottom: 0
              }
            },
            scales: {
              yAxes: [{
                display: true,
                gridLines: {
                  display: true,
                  drawBorder: false,
                  color: "#575757"
                },
                ticks: {
                  display: true,
                  min: 0,
                  max: 500,
                  callback: function (value, index, values) {
                    return value + '$';
                  },
                  autoSkip: true,
                  maxTicksLimit: 10,
                  fontColor: "#F0F0F0"
                }
              }],
              xAxes: [{
                stacked: false,
                ticks: {
                  beginAtZero: true,
                  fontColor: "#F0F0F0"
                },
                gridLines: {
                  color: "#575757",
                  display: false
                },
                barPercentage: 1
              }]
            },
            legend: {
              display: false
            },
            elements: {
              point: {
                radius: 0
              }
            }
          },
        });
        document.getElementById('sales-legend').innerHTML = SalesChart.generateLegend();
      }

      if ($("#south-america-chart").length) {
        var areaData = {
          labels: ["Jan", "Feb", "Mar"],
          datasets: [{
            data: [60, 70, 70],
            backgroundColor: [
              "#4B49AC", "#FFC100", "#248AFD",
            ],
            borderColor: "rgba(0,0,0,0)"
          }]
        };
        var areaOptions = {
          responsive: true,
          maintainAspectRatio: true,
          segmentShowStroke: false,
          cutoutPercentage: 78,
          elements: {
            arc: {
              borderWidth: 4
            }
          },
          legend: {
            display: false
          },
          tooltips: {
            enabled: true
          },
          legendCallback: function (chart) {
            var text = [];
            text.push('<div class="report-chart">');
            text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Offline sales</p></div>');
            text.push('<p class="mb-0">495343</p>');
            text.push('</div>');
            text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Online sales</p></div>');
            text.push('<p class="mb-0">630983</p>');
            text.push('</div>');
            text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
            text.push('<p class="mb-0">290831</p>');
            text.push('</div>');
            text.push('</div>');
            return text.join("");
          },
        }
        var southAmericaChartPlugins = {
          beforeDraw: function (chart) {
            var width = chart.chart.width,
              height = chart.chart.height,
              ctx = chart.chart.ctx;

            ctx.restore();
            var fontSize = 3.125;
            ctx.font = "600 " + fontSize + "em sans-serif";
            ctx.textBaseline = "middle";
            ctx.fillStyle = "#000";

            var text = "76",
              textX = Math.round((width - ctx.measureText(text).width) / 2),
              textY = height / 2;

            ctx.fillText(text, textX, textY);
            ctx.save();
          }
        }
        var southAmericaChartCanvas = $("#south-america-chart").get(0).getContext("2d");
        var southAmericaChart = new Chart(southAmericaChartCanvas, {
          type: 'doughnut',
          data: areaData,
          options: areaOptions,
          plugins: southAmericaChartPlugins
        });
        document.getElementById('south-america-legend').innerHTML = southAmericaChart.generateLegend();
      }
      if ($("#south-america-chart-dark").length) {
        var areaData = {
          labels: ["Jan", "Feb", "Mar"],
          datasets: [{
            data: [60, 70, 70],
            backgroundColor: [
              "#4B49AC", "#FFC100", "#248AFD",
            ],
            borderColor: "rgba(0,0,0,0)"
          }]
        };
        var areaOptions = {
          responsive: true,
          maintainAspectRatio: true,
          segmentShowStroke: false,
          cutoutPercentage: 78,
          elements: {
            arc: {
              borderWidth: 4
            }
          },
          legend: {
            display: false
          },
          tooltips: {
            enabled: true
          },
          legendCallback: function (chart) {
            var text = [];
            text.push('<div class="report-chart">');
            text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Offline sales</p></div>');
            text.push('<p class="mb-0">495343</p>');
            text.push('</div>');
            text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Online sales</p></div>');
            text.push('<p class="mb-0">630983</p>');
            text.push('</div>');
            text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
            text.push('<p class="mb-0">290831</p>');
            text.push('</div>');
            text.push('</div>');
            return text.join("");
          },
        }
        var southAmericaChartPlugins = {
          beforeDraw: function (chart) {
            var width = chart.chart.width,
              height = chart.chart.height,
              ctx = chart.chart.ctx;

            ctx.restore();
            var fontSize = 3.125;
            ctx.font = "600 " + fontSize + "em sans-serif";
            ctx.textBaseline = "middle";
            ctx.fillStyle = "#fff";

            var text = "76",
              textX = Math.round((width - ctx.measureText(text).width) / 2),
              textY = height / 2;

            ctx.fillText(text, textX, textY);
            ctx.save();
          }
        }
        var southAmericaChartCanvas = $("#south-america-chart-dark").get(0).getContext("2d");
        var southAmericaChart = new Chart(southAmericaChartCanvas, {
          type: 'doughnut',
          data: areaData,
          options: areaOptions,
          plugins: southAmericaChartPlugins
        });
        document.getElementById('south-america-legend').innerHTML = southAmericaChart.generateLegend();
      }

    }
  }
}
</script>