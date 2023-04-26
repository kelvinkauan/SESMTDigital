<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../SESMTDigital/views/Grafico/Style/grafico.css" >
    <title>Gráficos</title>
</head>
<body>
<nav>
<div class="circle" ></div>
   <div class="img">
    <img src="/../SESMTDigital/views/imagens/logBranca_SESMT.png"alt="">
   </div>
   <div class="home">
    <ul>
    <a href="../Controller/controller.php?action=PaginaPrincipal">
    <li>
      HOME 
    </li>
    </a>
   </ul>
   </div>
   <div class="logo">
    <img src="/../SESMTDigital/views/imagens/SESMTDigital-logo.png" alt="">
 </div>
</nav>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "", { role: "style" } ],
        ["Conforme", 50, "#015c92"],
        ["Não-Conforme", 0, "#004e99"],
        ["NA", 0, "#050d46"],
         ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Respostas assinaladas",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
        annotations: {
        textStyle: {fontName: 'Poppins',fontSize: 20,}}
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
  <div class="chart">
<div  id="columnchart_values" style="width: 490px; height: 345px;"></div>

<div  id="colunas_values" style="width: 337px; height: 345px;"></div>

<div  id="colunas2_values" style="width: 337px; height: 345px;"></div>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "", { role: "style" } ],
        ["Conforme", 50, "#050d46"],
        
         ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Conformidades",
        width: 200,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
        annotations: {
        textStyle: { fontName: 'Poppins', fontSize: 20}
        },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("colunas_values"));
      chart.draw(view, options);
  }
  </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "", { role: "style" } ],
        ["Ações em aberto", 10, "#050d46"],
        
         ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Ações em Aberto",
        width: 200,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
        annotations: {
        textStyle: { fontName: 'Poppins', fontSize: 20}
        },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("colunas2_values"));
      chart.draw(view, options);
  }
  </script>
  <div class="chart">
       
</div>
</body>
</html>