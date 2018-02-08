<?php
$connection = new MongoClient();	
ini_set('mongo.long_as_object', 1);
$collection = $connection->EPL->epl;
$cursor = $collection->find();
$num_docs = $cursor->count();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Footweets!!!</title>
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/timeline.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
			<img class="what" src="football-stadium-wallpaper.jpg" height="310" width="1348">
            </div>
             <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                   <i class="fa fa-clock-o fa-fw"></i>  <i class="fa fa-caret-down"></i> 
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a class="text-center">
                                <strong>Game Week 35</strong>
                                <i></i>
                            </a>
                        </li>
						 <li class="divider"></li>
						<li>
                                <div>
                                    ManCity vs Stoke City
                                    <span class="pull-right text-muted">
                                        <em>Sat |5:15 PM</em>
                                    </span>
                                </div>
                        </li>
                        <li class="divider"></li>
                        <li>                          
                                <div>
                                    Aston Villa vs Southampton
                                    <span class="pull-right text-muted">
                                        <em>Sat |7:30 PM</em>
                                    </span>
                                </div>                            
                        </li>
                        <li class="divider"></li>
                        <li>                          
                                <div>
                                    Bournemouth vs Chelsea
                                    <span class="pull-right text-muted">
                                        <em>Sat |7:30 PM</em>
                                    </span>
                                </div>                            
                        </li>
						<li class="divider"></li>
                        <li>                            
                                <div>
                                    Liverpool vs Newcastle
                                    <span class="pull-right text-muted">
                                        <em>Sat |7:30 PM</em>
                                    </span>
                                </div>                           
                        </li>
						<li class="divider"></li>
                        <li>                           
                                <div>
                                    Sunderland vs Arsenal
                                    <span class="pull-right text-muted">
                                        <em>Sun |6:35 PM</em>
                                    </span>
                                </div>                           
                        </li>
						<li class="divider"></li>
                        <li>                          
                                <div>
                                    Leicester vs Swansea City
                                    <span class="pull-right text-muted">
                                        <em>Sun |8:45 PM</em>
                                    </span>
                                </div>                            
                        </li>
						<li class="divider"></li>
                        <li>                           
                                <div>
                                    Tottenham vs WestBrom
                                    <span class="pull-right text-muted">
                                        <em>Tue |12:30 AM</em>
                                    </span>
                                </div>                            
                        </li>
						<li class="divider"></li>
                        <li>
                            <a class="text-center" href="grid.php">
                                <strong>Show All Fixtures</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>                            
                                <div>
                                    <p>
                                        <strong>Leicester City</strong>
                                        <span class="pull-right text-muted">26% Popularity</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100" style="width: 26%">
                                            <span class="sr-only">26% Popularity (success)</span>
                                        </div>
                                    </div>
                                </div>                           
                        </li>
                        <li class="divider"></li>
                        <li>                           
                                <div>
                                    <p>
                                        <strong>Tottenham Hotspur</strong>
                                        <span class="pull-right text-muted">19% Popularity</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100" style="width: 19%">
                                            <span class="sr-only">19% Popularity</span>
                                        </div>
                                    </div>
                                </div>                           
                        </li>
                        <li class="divider"></li>
                        <li>                           
                                <div>
                                    <p>
                                        <strong>Arsenal</strong>
                                        <span class="pull-right text-muted">41% Popularity</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100" style="width: 41%">
                                            <span class="sr-only">41% Popularity (warning)</span>
                                        </div>
                                    </div>
                                </div>                           
                        </li>
                        <li class="divider"></li>
                        <li>                           
                                <div>
                                    <p>
                                        <strong>Manchester City</strong>
                                        <span class="pull-right text-muted">65% Popularity</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                            <span class="sr-only">65% Popularity (danger)</span>
                                        </div>
                                    </div>
                                </div>                         
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="leaguetable.php">
                                <strong>See Full Table</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>                    
                </li>               
            </ul>
			<br> <br>
			<br> <br>
			<br> <br>
			<br> <br>
			<br> <br>
			<br> <br>
			<br> <br>
			<br> <br>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">                 
                       <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="playerpop.php">Popularity of Players</a>
                                </li>
                                <li>
                                    <a href="hashtag.php">Hashtag Popularity</a>
                                </li>
                                <li>
                                    <a href="followmap.php">Follower Map</a>
                                </li>
								<li>
                                    <a href="matchpop.php">Match Popularity</a>
                                </li>
								<li>
                                    <a href="#">Tweets count per month</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="leaguetable.php"><i class="fa fa-soccer-ball-o fa-fw"></i>Football League</a>
                        </li>
						   <li>
                            <a href="#"><i class="fa fa-group fa-fw"></i>Teams<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="managerpop.php">Manager Popularity</a>
                                </li>
								<li>
                                    <a href="motionmap.php">Motion Map</a>
                                </li>
								<li>
                                    <a href="teams.php">Team Description</a>
                                </li>                               
                            </ul>
                        </li>
						<li>
                            <a href="fixtures/grid.php"><i class="fa fa-flag fa-fw"></i>Fixtures</a>
                        </li>
						<li>
                            <a href="trending.php"><i class="fa fa-heart-o fa-fw"></i>Trending Data</a>
                        </li>
                   </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Team Tweets count(Monthly Analysis)</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Arsenal
                        </div>
                        <div class="panel-body">
                         <script type="text/javascript">
function gvisDataLineChartID1e68133c7ac6 () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
16711 
],
[
 "Feb",
22435 
],
[
 "Mar",
19609 
] 
];
data.addColumn('string','Months');
data.addColumn('number','TweetCount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1e68133c7ac6() {
var data = gvisDataLineChartID1e68133c7ac6();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1e68133c7ac6')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1e68133c7ac6);
})();
function displayChartLineChartID1e68133c7ac6() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1e68133c7ac6"></script>
<div id="LineChartID1e68133c7ac6" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
							<div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <p>January was a pretty normal month for Arsenal: Winning, drawing and losing in various competitons. There weren't any big games for arsenal that month. February, however became a somewhat boring month in which arsenal had problems scoring up front. They still managed to make some points but the month turned sour when they lost successive matches to big teams - Barcelona (in the Champions League) and Manchester United. Arsenal was the most popular team in the last week of February</p>
							<p>It was in March when fans started venting their frustration out. Their title challenge ended that month following disappointing losses to Watford and Swansea. 4th Place seems destined for them.
                        </div>
                        </div>
                    </div>
                </div>
            </div>            
			  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Aston Villa
                        </div>
                        <div class="panel-body">
						<script type="text/javascript">
function gvisDataLineChartID1a281c733ef4 () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
10469 
],
[
 "Feb",
7231 
],
[
 "Mar",
9237 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1a281c733ef4() {
var data = gvisDataLineChartID1a281c733ef4();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1a281c733ef4')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1a281c733ef4);
})();
function displayChartLineChartID1a281c733ef4() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1a281c733ef4"></script>
<div id="LineChartID1a281c733ef4" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>                        
							<div class="panel-heading">                            
                        </div>
                        <div class="panel-body">
                            <p>When it seemed like Aston Villa were destined for relegation, there came a glimmer of hope and confidence in January. They won and drew and gained more points that month than in any other month. However, they lost all their matches in february and also in march, signalling the end to their hopes of staying in the premier league.</p>
							<p>Disappointment reached the peak when Aston Villa lost 6-0 at home to liverpool in which the team was accused of not "showing up". In March, their manager Remi Garde was sacked after just 6 months in charge. They will play next season in the Championship and not the Premier League
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          AFC Bournemouth
                        </div>
                        <div class="panel-body">
						<script type="text/javascript">
function gvisDataLineChartID1bb46c8c5f4a () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
12387 
],
[
 "Feb",
8966 
],
[
 "Mar",
13102 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb46c8c5f4a() {
var data = gvisDataLineChartID1bb46c8c5f4a();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb46c8c5f4a')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb46c8c5f4a);
})();
function displayChartLineChartID1bb46c8c5f4a() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb46c8c5f4a"></script>
<div id="LineChartID1bb46c8c5f4a" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>                        
							<div class="panel-heading">                            
                        </div>
                        <div class="panel-body">
                            <p>Bournemouth, playing for the first ever time in the Premier League is different in many ways to the other teams. Bournemouth started attracting its fans by sticking to their attractive strategy despite having fewer and less-able players in their team. February was infact a low month for them, when they crashed out of the FA Cup and failed to win even a single game</p>
							<p>However, march couldn't have been better. Three consecutive wins set their fans talking on twitter. Their win against fellow strugglers Newcastle United gained a lot of talk</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Chelsea
                        </div>
                        <div class="panel-body">
						<script type="text/javascript">
function gvisDataLineChartID1bb462c37955 () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
38412 
],
[
 "Feb",
28671 
],
[
 "Mar",
32196 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb462c37955() {
var data = gvisDataLineChartID1bb462c37955();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb462c37955')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb462c37955);
})();
function displayChartLineChartID1bb462c37955() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb462c37955"></script>
<div id="LineChartID1bb462c37955" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>                        
							<div class="panel-heading">                            
                        </div>
                        <div class="panel-body">
                            <p>Chelsea were unbeaten in January, a statistic which doesn't sound surprising considering their title win just last year. However, when you consider that they were in 15th place when Jose Mourinho was sacked and their new manager Guus Hiddink was appointed, it surely was a turnaround of fortunes for them. Fans and pundits alike were astounded of their form and that was the reason why chelsea was the most popular team in January</p>
							<p>They drew a lot of matches in February but broke their unbeaten streak in March in the worst way - by losing to local rivals Tottenham. In march, they announced their future manager Antonio Conte, which wasn't entirely surprising, and this is why the tweet count for March was only slighty more than that of February.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Crystal Palace
                        </div>
                        <div class="panel-body">
<script type="text/javascript">
function gvisDataLineChartID1bb486d6c32 () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
9026 
],
[
 "Feb",
7394 
],
[
 "Mar",
6958 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb486d6c32() {
var data = gvisDataLineChartID1bb486d6c32();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb486d6c32')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb486d6c32);
})();
function displayChartLineChartID1bb486d6c32() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>  
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb486d6c32"></script>
<div id="LineChartID1bb486d6c32" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>                        
							<div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <p>One of the most controversial, surpising and talked-about signings in January was their signing of eccentric striker Emmanuel Adebayor who was a former Arsenal, Tottenham and Real Madrid Stiker. Such a prestigious name was expected to fill crystal palace's striker void. However results didnt improve and hence fans became more and more disinterested in the team</p>
							<p>Infact Alan Pardew, their manager was under immense pressure in March. Recent results hasn't improved his position either, and Adebayor hasn't striked. However his job seems to be safe for now.
                           
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Everton
                        </div>
                        <div class="panel-body">						
<script type="text/javascript">
function gvisDataLineChartID1bb44ab32ec9 () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
19622 
],
[
 "Feb",
11145 
],
[
 "Mar",
10806 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb44ab32ec9() {
var data = gvisDataLineChartID1bb44ab32ec9();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb44ab32ec9')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb44ab32ec9);
})();
function displayChartLineChartID1bb44ab32ec9() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb44ab32ec9"></script>
<div id="LineChartID1bb44ab32ec9" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>                        
							<div class="panel-heading">                            
                        </div>
                        <div class="panel-body">
                            <p>The Roberto Martinez effect hasn't been working too much of late, but in January it was in full force. With tough fixtures against Manchester City twice in the Capital one cup to face, an away trip to chelsea and a home tie against title runners-up tottenham, everton weren't expected to end out successful against them. However they knocked Manchester City out of the capital one cup and drew against tottenham and chelsea. This just increased transfer gossip related to their star player Romelu Lukaku</p>
							<p>But once the transfer window ended in January, their mentions in twitter collapsed. They had an uninteresting line up of fixtures in february and march. They just had 4 games in march in which they won twice and lost twice. 
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Leicester City
                        </div>
                        <div class="panel-body">
<script type="text/javascript">
function gvisDataLineChartID1bb47145045 () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
29964 
],
[
 "Feb",
24081 
],
[
 "Mar",
27317 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb47145045() {
var data = gvisDataLineChartID1bb47145045();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb47145045')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb47145045);
})();
function displayChartLineChartID1bb47145045() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb47145045"></script>
<div id="LineChartID1bb47145045" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>                        
							<div class="panel-heading">                            
                        </div>
                        <div class="panel-body">
                            <p>Leicester City just cant stop surprising everyone. What seemed like a lucky streak for them in the beginning of the season when they were in the top half of the season because of their supreme attacking form. They drew quite a few matches in january. In February, they overcame tough opponents liverpool, and manchester city in february. However they lost rather unfairly to Arsenal, keeping arsenal in the title hunt.</p>
							<p>Their story of determination and grit continued and in march, instead of having a hot blazing attack, they had a rock solid defence not letting in goals at all, which is highliy uncharacteristic of a traditional relegation-struggler. Fans all over the world are loving leicester city's success story and everyone just hopes that leicester city win the league and vardy/mahrez or kante win the PFA preimier league player of the year.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Liverpool FC
                        </div>
                        <div class="panel-body">
<script type="text/javascript">
function gvisDataLineChartID1bb423b61362 () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
42771 
],
[
 "Feb",
37126 
],
[
 "Mar",
35504 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb423b61362() {
var data = gvisDataLineChartID1bb423b61362();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb423b61362')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb423b61362);
})();
function displayChartLineChartID1bb423b61362() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb423b61362"></script>
<div id="LineChartID1bb423b61362" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
							<div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <p>Klopp to the Kop! All newspapers read the same headline in january and he was expected to give liverpool a huge period of success. He started the month off in unspectacular fashion, losing to West Ham, losing to Manchester United and drewing Exeter and Arsenal. However, the anfield fans had a lot of love for Klopp's energetic personality and their faith was rewarded when they won a nail biter against norwich 5-4. Their Penalty shootout win against stoke city also grabbed headlines and what ensued was a huge amount of discussion on every social media site</p>
							<p>However, being involved in as many as 3 competitions in February, fatigue was expected from their players. What followed were a few losses to leicester, man city and west ham. In march, his success against bigger teams continued when he triumphed 3-0 against man city and knocked manchester united out of the europa league. The international break in the middle of march did bring a decrease in the number of tweets
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Manchester City
                        </div>
                        <div class="panel-body">
<script type="text/javascript">
function gvisDataLineChartID1bb445894bd2 () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
29106 
],
[
 "Feb",
38771 
],
[
 "Mar",
36483 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb445894bd2() {
var data = gvisDataLineChartID1bb445894bd2();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb445894bd2')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb445894bd2);
})();
function displayChartLineChartID1bb445894bd2() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb445894bd2"></script>
<div id="LineChartID1bb445894bd2" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>                        
							<div class="panel-heading">                         
                        </div>
                        <div class="panel-body">
                            <p>The rumours are finally put to rest! Pep Guardiola's future has been resolved and he is going to be Manchester City's new manager come next July. This sparked off a huge discussion on social media, especially from rival fans who just wished they snatched Pep from under everyone's noses. However, this announcement rather unsuprisinly brought a run of losses to the team. Everyone pointed the finger to Pellegrini, their current manager. </p>
							<p>Their run of results were completely normal in January. There weren't any transfer rumours that month related to Manchester City as well, which is why the tweet count was particularly less that month. Come march, their key players, Silva and De Bruyne also returned from Injury, and this caused an increase in fortunes especially in the champions league. March proved to be a popular month as well. 
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Manchester United
                        </div>
                        <div class="panel-body">
<script type="text/javascript">
function gvisDataLineChartID25945e53355d () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
18684 
],
[
 "Feb",
31497 
],
[
 "Mar",
29496 
] 
];
data.addColumn('string','Month');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID25945e53355d() {
var data = gvisDataLineChartID25945e53355d();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID25945e53355d')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID25945e53355d);
})();
function displayChartLineChartID25945e53355d() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script> 
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID25945e53355d"></script>
<div id="LineChartID25945e53355d" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
							<div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <p>Once United manager Louis Van Gaal announced in the beginning of the month that there weren't going to be any transfers this month, fans didnt have much to expect and hence stayed away from social media sites. January was a low month anyway since it contained less popular fixtures such as Derby county, stoke, etc</p>
							<p>United seemed destined to land up in the top 4, until Rooney got injured in training for a long period of time. He seemed to be in great form and united's lack of options to replace him threatened to be a threat to their challenge. Infact, they were in danger of getting knocked out of the europa league as well to lowly Midjyland. But cometh the hour, cometh the man! (or the boy). Teenage striker Rashford scored a hattrick on his debut and then a brace against rivals Arsenal. What followed was a period of ups and downs in March with Rashford continuing to perform admirably despite fatigue. 
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Newcastle United
                        </div>
                        <div class="panel-body">
<script type="text/javascript">
function gvisDataLineChartID1bb4141422d0 () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
11692 
],
[
 "Feb",
9098 
],
[
 "Mar",
9736 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb4141422d0() {
var data = gvisDataLineChartID1bb4141422d0();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb4141422d0')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb4141422d0);
})();
function displayChartLineChartID1bb4141422d0() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb4141422d0"></script>
<div id="LineChartID1bb4141422d0" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
							<div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <p>By the end of December 2015, the image of fans leaving before the end of the game seemed familiar yet confusing. Newcastle thought the team needed investment and spent 37 million pounds, which was more than any other premier league team. However the signings failed to gel, and performances failed to improve. They won just a single game in January and were 19th in the table, which is very surprising for a team like newcastle.</p>
							<p>In February they conceded 8 goals in just 3 games, in which they won one game 1-0. However, the manager's fate was sealed in March when they failed to win a single game. Former Real Madrid manager Rafa Benitez has been given the task to save newcastle's season. Fans seem optimistic but can he deliver?</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Norwich City
                        </div>
                        <div class="panel-body">
<script type="text/javascript">
function gvisDataLineChartID1bb4697f363e () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
8561 
],
[
 "Feb",
6782 
],
[
 "Mar",
7118 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb4697f363e() {
var data = gvisDataLineChartID1bb4697f363e();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb4697f363e')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb4697f363e);
})();
function displayChartLineChartID1bb4697f363e() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb4697f363e"></script>
<div id="LineChartID1bb4697f363e" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
							<div class="panel-heading">
                        </div>
                        <div class="panel-body">
                           <p>Started as one of the favourites of the season to be relegated but have fought valiantly at times. They spent over 20 million pounds in January to try and make a statement. </p>
						   <p>Their main signing was naismith from everton after their crushing 3-0 loss to rivals Bournemouth
 and he seemed to make a great debut in their entertaining 4-5 loss to liverpool. Norwich currently though, are in a run of poor form and they are just 1 point over the relagation zone with 4 games to play. They will surely hope that sunderland and newcastle continue losing so that they can stay in the league</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Southampton
                        </div>
                        <div class="panel-body">
<script type="text/javascript">
function gvisDataLineChartID1bb44c6a6552 () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
14256 
],
[
 "Feb",
10603 
],
[
 "Mar",
9972 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb44c6a6552() {
var data = gvisDataLineChartID1bb44c6a6552();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb44c6a6552')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb44c6a6552);
})();
function displayChartLineChartID1bb44c6a6552() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script> 
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb44c6a6552"></script>
<div id="LineChartID1bb44c6a6552" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
							<div class="panel-heading">
                        </div>
                        <div class="panel-body">
                           <p>Southampton are one of the most popular teams in the premier league despite never having won the premier league in their history. Their fans like the team because they play attractive football and because of their academy which is known for making quality players!</p>
						   <p>However, they are inconsistent as well sometimes
. Southampton lost easy games to norwich and crystal palace early in january only to cover up ground by winning the rest of the games. Southampton are in the middle of the table and are performing neither below nor above expectations.
</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Stoke City
                        </div>
                        <div class="panel-body">
<script type="text/javascript">
function gvisDataLineChartID1bb437d768d9 () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
16317 
],
[
 "Feb",
11348 
],
[
 "Mar",
11009 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb437d768d9() {
var data = gvisDataLineChartID1bb437d768d9();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb437d768d9')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb437d768d9);
})();
function displayChartLineChartID1bb437d768d9() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb437d768d9"></script>
<div id="LineChartID1bb437d768d9" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>                        
							<div class="panel-heading">                            
                        </div>
                        <div class="panel-body">
                            <p>Can you imagine a small team whose average position in the premier league was 14th before this season to instill fear in opponent's minds? That is exactly what stoke have done over the last few years. Teams dread coming to the Brittania (Stoke's home ground), even big teams such as Arsenal, who have dropped a lot of points in this fixture over the last few years.
 Stoke, however, look very different this season.</p>
							<p>They aimed from the beginning to change their physical approach to the game and they have tried to incorporate flair into the game. They bought skillful Players such as Shaqiri and Bojan and now they look like a very attractive team to watch. A bit of brawn is sometimes necessary. Stoke were hammered 3-0 in 2 consecutive games in february but soon recovered and they now win some and lose some. 
</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Sunderland
                        </div>
                        <div class="panel-body">
<script type="text/javascript">
function gvisDataLineChartID1bb4549651b0 () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
13144 
],
[
 "Feb",
9164 
],
[
 "Mar",
7126 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb4549651b0() {
var data = gvisDataLineChartID1bb4549651b0();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb4549651b0')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb4549651b0);
})();
function displayChartLineChartID1bb4549651b0() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb4549651b0"></script>
<div id="LineChartID1bb4549651b0" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
							<div class="panel-heading">
                        </div>
                        <div class="panel-body">
                           <p>Wahbi Khazri, Jermain Lens and lamine kone
. These new players were meant to help sunderland stay in the premier league. Relatively unknown but moderately expensive signings followed by a team which normally goes for experience at this time of the year. Sunderland are used to relegation challenges and now they look like they can avoid the drop after initially losing many matches.</p>
						   <p>They won against Manchester United in february which was a very surprising result that put a lot of pressure on united manager, Louis Van Gaal. As usual, not a lot of tweets related to this team are shown, especially in march, when they had a boring run of fixtures against lower teams. They drew all of them. 
</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Swansea City
                        </div>
                        <div class="panel-body">
<script type="text/javascript">
function gvisDataLineChartID1bb453316bbd () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
7539 
],
[
 "Feb",
6812 
],
[
 "Mar",
7721 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb453316bbd() {
var data = gvisDataLineChartID1bb453316bbd();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb453316bbd')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb453316bbd);
})();
function displayChartLineChartID1bb453316bbd() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script> 
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb453316bbd"></script>
<div id="LineChartID1bb453316bbd" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
							<div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <p>The only welsh club in the premier league is one of the most followed clubs in europe despite having a very few number of trophies. Swansea experienced a downturn in form and popularity which led to Garry Monk's sacking in January. </p>
							<p>The games lacked any sort of spark or controversial incidents since then. The popularity hasn't increased despite having a new manager arrive in the club. This could be explained as the manager is a shy personality who does not speak a lot of english. Things do seem to be better after their surprise 2-1 away win against Arsenal. </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Tottenham Hotspur
                        </div>
                        <div class="panel-body">
<script type="text/javascript">
function gvisDataLineChartID1bb44bf030d0 () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
25019 
],
[
 "Feb",
28716 
],
[
 "Mar",
26934 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb44bf030d0() {
var data = gvisDataLineChartID1bb44bf030d0();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb44bf030d0')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb44bf030d0);
})();
function displayChartLineChartID1bb44bf030d0() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb44bf030d0"></script>
<div id="LineChartID1bb44bf030d0" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
							<div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <p>A dynamic, young, and predominantly english team filled with young talent such as Dele Alli, Harry Kane and Christian Eriksen continue to surprise fans along with Leicester and West Ham with their brand of attacking football. It seemed that their surprising challenge for the title started to derail in January following 2 draws and a home loss to leicester. But when they were expected to fall further, they only roared back ferociously! They won all their premier league games in February and thumped Fiorentina out of the Europa League as well.</p>
							<p>March had a very attractive Europa League tie with dortmund in which they surprisingly played with a weaker line up and ended losing 5-1. The 2-2 draw vs arsenal too was a major talking point in that month. Rest assured, the season for tottenham seems to be a success especially since they are certain to finish above local rivals arsenal in the premier league, something that rarely ever happens. </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Watford FC
                        </div>
                        <div class="panel-body">
<script type="text/javascript">
function gvisDataLineChartID1bb461da5b84 () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
12663 
],
[
 "Feb",
8147 
],
[
 "Mar",
11204 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb461da5b84() {
var data = gvisDataLineChartID1bb461da5b84();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb461da5b84')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb461da5b84);
})();
function displayChartLineChartID1bb461da5b84() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb461da5b84"></script>
<div id="LineChartID1bb461da5b84" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
							<div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <p>Watford has emerged as the most successful promoted side this season spearheaded by their attacking duo of Deeney and Ighalo. Ighalo was linked to many clubs in january and that is way Watford was mentioned more than expected in January. The quality of performances and interest faded in February as they only scored 3 goals in 5 games that month.</p>
							<p>Watford's best moment in march came when they knocked arsenal out of the FA Cup at their own home. A lot of talk was about Arsenal continuing to disappoint fans, but watford fans are satisfied by their team's progress.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          West Bromwich Albion
                        </div>
                        <div class="panel-body">
						<script type="text/javascript">
function gvisDataLineChartID1bb420581448 () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
5763 
],
[
 "Feb",
5147 
],
[
 "Mar",
2389 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb420581448() {
var data = gvisDataLineChartID1bb420581448();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb420581448')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb420581448);
})();
function displayChartLineChartID1bb420581448() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb420581448"></script>
<div id="LineChartID1bb420581448" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>                        
							<div class="panel-heading">                        
                        </div>
                        <div class="panel-body">
                           <p>West Brom has had a pretty average season. The biggest talking point of January was their signing of Rondon and fellow striker Berahino's apology to the club. In february an away win against everton was their best win and their surprise loss to lower league opposition Reading FC was their lowest point.</p>
						   <p>This loss kicked them out of the FA Cup. Their 2-2 draw against table toppers Leicester in March was a very good result for the team. Results have been somewhat positive, but fan following has taken a hit this season. Let us hope that west brom has something interesting for the fans in the upcoming months!</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         West Ham United
                        </div>
                        <div class="panel-body">
<script type="text/javascript">
function gvisDataLineChartID1bb439164ec5 () {
var data = new google.visualization.DataTable();
var datajson =
[
 [
 "Jan",
18824 
],
[
 "Feb",
19910 
],
[
 "Mar",
16573 
] 
];
data.addColumn('string','Months');
data.addColumn('number','Tweetcount');
data.addRows(datajson);
return(data);
}
function drawChartLineChartID1bb439164ec5() {
var data = gvisDataLineChartID1bb439164ec5();
var options = {};
options["allowHtml"] = true;
options["vAxes"] = [{title:'Tweetcount'}];
options["hAxes"] = [{title:'Months'}];
    var chart = new google.visualization.LineChart(
    document.getElementById('LineChartID1bb439164ec5')
    );
    chart.draw(data,options);
}
(function() {
var pkgs = window.__gvisPackages = window.__gvisPackages || [];
var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
var chartid = "corechart";
var i, newPackage = true;
for (i = 0; newPackage && i < pkgs.length; i++) {
if (pkgs[i] === chartid)
newPackage = false;
}
if (newPackage)
  pkgs.push(chartid);
callbacks.push(drawChartLineChartID1bb439164ec5);
})();
function displayChartLineChartID1bb439164ec5() {
  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
  window.clearTimeout(window.__gvisLoad);
  window.__gvisLoad = setTimeout(function() {
  var pkgCount = pkgs.length;
  google.load("visualization", "1", { packages:pkgs, callback: function() {
  if (pkgCount != pkgs.length) {
  return;
}
while (callbacks.length > 0)
callbacks.shift()();
} });
}, 100);
}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartLineChartID1bb439164ec5"></script>
<div id="LineChartID1bb439164ec5" 
  style="width: 500; height: automatic;">
</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
							<div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <p>Unlike rivals West Brom, west ham have been extremely interesting this year. In their last season at Boleyn Ground, fans have been treated to very attractive football, comebacks and nail biting finishes. This trend is somewhat surprising as west ham traditionally plays very pedestrian and physical football.</p>
							<p>Skills wizard Dimitri Payet has won them many games including twice against Liverpool in February and January and thumping Blackburn rovers 5-1. They defeated tottenham hotspur, everton away and drew against chelsea and united in march. Next season promises to be even better since they are moving into a brand new Olympics Stadium. This is a very positive transition period for West Ham. </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>