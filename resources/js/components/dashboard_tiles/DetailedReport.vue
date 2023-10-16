<template>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card position-relative">
                <div class="card-body">
                    <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2"
                        data-ride="carousel">
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
                                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                                        style="width: 70%" aria-valuenow="70"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
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
                                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                                        style="width: 30%" aria-valuenow="30"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
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
                                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                                        style="width: 95%" aria-valuenow="95"
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
                                                                    <div class="progress-bar bg-info" role="progressbar"
                                                                        style="width: 60%" aria-valuenow="60"
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
                                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                                        style="width: 40%" aria-valuenow="40"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
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
                                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                                        style="width: 75%" aria-valuenow="75"
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
                                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                                        style="width: 70%" aria-valuenow="70"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
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
                                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                                        style="width: 30%" aria-valuenow="30"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
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
                                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                                        style="width: 95%" aria-valuenow="95"
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
                                                                    <div class="progress-bar bg-info" role="progressbar"
                                                                        style="width: 60%" aria-valuenow="60"
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
                                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                                        style="width: 40%" aria-valuenow="40"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
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
                                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                                        style="width: 75%" aria-valuenow="75"
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
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'DetailedReport',
    components: {

    },
    mounted() {
        this.renderDetailedReportChart();
    },
    methods: {
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
        }
    }
}
</script>