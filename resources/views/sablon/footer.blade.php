</main>
</div>
</div>

<script src="asset/js/jquery-3.2.1.min.js"></script>
<script src="asset/dist/js/bootstrap.min.js"></script>

<script src="asset/js/chart.min.js"></script>
<script src="asset/js/chart-data.js"></script>
<script src="asset/js/easypiechart.js"></script>
<script src="asset/js/easypiechart-data.js"></script>
<script src="asset/js/bootstrap-datepicker.js"></script>
<script src="asset/js/custom.js"></script>
<script>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

</body>
</html>
