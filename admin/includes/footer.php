  </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- WYSIWYG editor -->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script type="text/javascript" src="js/dropzone.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript">
     google.charts.load('current', {'packages':['corechart']});
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

       var data = google.visualization.arrayToDataTable([
         ['Task', 'Counts'],
         ['Views',    <?php echo $session->count; ?>],
         ['Comments', <?php echo Comment::count_all(); ?>],
         ['Users',    <?php echo User::count_all(); ?>],
         ['Photos',   <?php echo Photo::count_all(); ?>]
       ]);

       var options = {
         title: 'Statistics',
         pieSliceText: 'label'
       };

       var chart = new google.visualization.PieChart(document.getElementById('piechart'));

       chart.draw(data, options);
     }
   </script>
</body>

</html>
