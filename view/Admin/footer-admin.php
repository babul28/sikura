  <footer class="main-footer">
    <strong>Copyright &copy; 2017 <a href="index.php?">sikura.go.id</a> All rights reserved.</strong>
  </footer>

<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- ChartJS -->
<script src="bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas)

    var areaChartData = {
      labels  : ['January', 'February', 'Maret', 'April', 'Mei', 'Juni', 'July', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
      datasets: [
        {
          label               : 'Pernikahan',
          fillColor           : '#00c0ef',
          strokeColor         : '#00c0ef',
          pointColor          : '#00c0ef',
          pointStrokeColor    : '#00c0ef',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#00c0ef',
          data                : [<?php echo $nikah_bulan['1'].','.$nikah_bulan['2'].','.$nikah_bulan['3'].','.$nikah_bulan['4'].','.$nikah_bulan['5'].','.$nikah_bulan['6'].','.$nikah_bulan['7'].','.$nikah_bulan['8'].','.$nikah_bulan['9'].','.$nikah_bulan['10'].','.$nikah_bulan['11'].','.$nikah_bulan['12'] ?>]
        },
        {
          label               : 'Perceraian',
          fillColor           : '#dd4b39',
          strokeColor         : '#dd4b39',
          pointColor          : '#dd4b39',
          pointStrokeColor    : '#dd4b39',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#dd4b39',
          data                : [<?php echo $cerai_bulan['1'].','.$cerai_bulan['2'].','.$cerai_bulan['3'].','.$cerai_bulan['4'].','.$cerai_bulan['5'].','.$cerai_bulan['6'].','.$cerai_bulan['7'].','.$cerai_bulan['8'].','.$cerai_bulan['9'].','.$cerai_bulan['10'].','.$cerai_bulan['11'].','.$cerai_bulan['12'] ?>]
        },
        {
          label               : 'Rujuk Nikah',
          fillColor           : '#f39c12',
          strokeColor         : '#f39c12',
          pointColor          : '#f39c12',
          pointStrokeColor    : '#f39c12',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#f39c12',
          data                : [<?php echo $rujuk_bulan['1'].','.$rujuk_bulan['2'].','.$rujuk_bulan['3'].','.$rujuk_bulan['4'].','.$rujuk_bulan['5'].','.$rujuk_bulan['6'].','.$rujuk_bulan['7'].','.$rujuk_bulan['8'].','.$rujuk_bulan['9'].','.$rujuk_bulan['10'].','.$rujuk_bulan['11'].','.$rujuk_bulan['12'] ?>]
        },
        {
          label               : 'Total',
          fillColor           : '#00a65a',
          strokeColor         : '#00a65a',
          pointColor          : '#00a65a',
          pointStrokeColor    : '#00a65a',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#00a65a',
          data                : [<?php echo $jumlah['1'].','.$jumlah['2'].','.$jumlah['3'].','.$jumlah['4'].','.$jumlah['5'].','.$jumlah['6'].','.$jumlah['7'].','.$jumlah['8'].','.$jumlah['9'].','.$jumlah['10'].','.$jumlah['11'].','.$jumlah['12'] ?>]
        }
      ]
    }

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : false,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions)
  })
</script>
</body>
</html>
