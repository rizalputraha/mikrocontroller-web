var url = "{{url('admin/monitor/grafik')}}";
var Years = new Array();
var Tinggi = new Array();
var Kecepatan = new Array();
var Kekeruhan = new Array();

$(document).ready(function () {
    $.get(url, function (response) {
        response.forEach(function (data) {
            Tinggi.push(data.tinggi);
            Kecepatan.push(data.kecepatan);
            Kekeruhan.push(data.kekeruhan);
            Years.push(data.created_at);
        });
        var ctx = document.getElementById("canvas").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: Years,
                datasets: [{
                    label: 'Tinggi',
                    data: Tinggi,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    });
});