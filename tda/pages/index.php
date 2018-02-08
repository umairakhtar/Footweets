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
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="ninja-slider.css" rel="stylesheet" />
    <script src="ninja-slider.js" type="text/javascript"></script>
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
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
                                    <a href="month.php">Tweets count per month</a>
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
                    <h1 class="page-header">Dashboard</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">20</div>
                                    <div>Teams</div>
                                </div>
                            </div>
                        </div>                        
                            <div class="panel-footer">
                                <span class="pull-left"></span>
                                <span class="pull-right"></span>
                                <div class="clearfix"></div>
                            </div>                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-trophy fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">1</div>
                                    <div>Title</div>
                                </div>
                            </div>
                        </div>                        
                            <div class="panel-footer">
                                <span class="pull-left"></span>
                                <span class="pull-right"></span>
                                <div class="clearfix"></div>
                            </div>                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-globe fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">4.7b</div>
                                    <div>Football Fans</div>
                                </div>
                            </div>
                        </div>                        
                            <div class="panel-footer">
                                <span class="pull-left"></span>
                                <span class="pull-right"></span>
                                <div class="clearfix"></div>
                            </div>                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-twitter fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">11.4m</div>
                                    <div>Twitter Followers</div>
                                </div>
                            </div>
                        </div>                       
                            <div class="panel-footer">
                                <span class="pull-left"></span>
                                <span class="pull-right"></span>
                                <div class="clearfix"></div>
                            </div>                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> English Premier League Popularity Graphs
                            <div class="pull-right">
                                
                            </div>
                        </div>
                        <div class="panel-body">
							<div id="ninja-slider">
								<div class="slider-inner">
								<ul>
									<li>
										<a class="ns-img" href="epl final.png"></a>
										<div class="caption"></div>
									</li>
									<li><a class="ns-img" href="followermap/epl.jpg"></a>
										<div class="caption"></div>
									</li>   									
								</ul>
								<div class="fs-icon" title="Expand/Close"></div>
								</div>
								<div id="morris-area-chart">
								</div>
							</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Most Popular Player
                            <div class="pull-right">
                            </div>
                        </div>
                        <div class="panel-body">
							<script type="text/javascript">
								function gvisDatadoughnut () {
								var data = new google.visualization.DataTable();
								var datajson =
								[
								 [
								 "#Ozil",
								910 
								],
								[
								 "#Rooney",
								719 
								],
								[
								 "#Vardy",
								5991 
								],
								[
								 "#Kane",
								982 
								],
								[
								 "#Aguero",
								1321 
								],
								[
								 "#Hazard",
								540 
								],
								[
								 "#Payet",
								760 
								],
								[
								 "#DeBruyne",
								954 
								],
								[
								 "#Martial",
								1258 
								],
								[
								 "#Sturridge",
								686 
								] 
								];
								data.addColumn('string','Players');
								data.addColumn('number','Tweet.count');
								data.addRows(datajson);
								return(data);
								}
								function drawChartdoughnut() {
								var data = gvisDatadoughnut();
								var options = {};
								options["allowHtml"] = true;
								options["width"] =    650;
								options["height"] =    650;
								options["slices"] = {0: {offset: 0.2},
															 1: {offset: 0.2},
															 2: {offset: 0.2}};
								options["legend"] = "none";
								options["colors"] = ['black','orange', 'blue', 
															 'red', 'purple', 'green','olive','magenta','grey','brown'];
								options["pieSliceText"] = "label";
								options["pieHole"] =    0.5;
									var chart = new google.visualization.PieChart(
									document.getElementById('doughnut')
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
								callbacks.push(drawChartdoughnut);
								})();
								function displayChartdoughnut() {
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
							<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartdoughnut"></script>
							<div id="doughnut" 
								style="width: 800; height: 800;">
							</div>
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> English Premier League Timeline
                        </div>
                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                    <div class=""><i class="fa "></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">The start of the English Premier league</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> Feb 20th, 1992</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
										<img src="timeline/1.jpg" width="250">
                                            <p>The original league was called the Football league and became the English Premier league. 22 teams joined the competition at the beginning of the season.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="warning"><i class="fa"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">BBC Radio 5</h4>
											<p><small class="text-muted"><i class="fa fa-clock-o"></i> Feb 21st, 1992</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
										<img src="timeline/2.jpg" width="250">
                                            <p>BBC Radio 5 has been the EPL's national readio partner since the league began.</p>                                          
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=""><i class="fa"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">The first game</h4>
											<p><small class="text-muted"><i class="fa fa-clock-o"></i> Aug 15th, 1992</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
										<img src="timeline/3.jpg" width="250">
                                            <p>The first English Premier League game is played and the two teams were Sheffield United and Manchester United.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">First title Sponsorship</h4>
											<p><small class="text-muted"><i class="fa fa-clock-o"></i> Jan 1st, 1993</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
										<img src="timeline/4.jpg" width="250">
                                            <p>Carling become the first Title Sponsors and the league was called the Carling Premiership.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=""><i class="fa"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">First Season Winners</h4>
											<p><small class="text-muted"><i class="fa fa-clock-o"></i> May 11th, 1993</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
										<img src="timeline/5.jpg" width="250">
                                            <p>Manchester United have been crowned champions of the inaugral Premier League, erstwhile called the Football League. This followed a period of tremendous success for Manchester United under Sir Alex Ferguson</p>
                                            <hr>                                            
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Ball Sponsorship - Nike</h4>
											<p><small class="text-muted"><i class="fa fa-clock-o"></i> Jan 1st, 2000</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
										<img src="timeline/6.jpg" width="250">
                                            <p>Nike became sponsors of the premier league and started providing footballs since the 2000-2001 season. Every season, new balls with a unique new design for the season is used.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class=""><i class="fa"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Second Title Sponsor</h4>
											<p><small class="text-muted"><i class="fa fa-clock-o"></i> Jan 1st, 2001</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
										<img src="timeline/7.jpg" width="250">
                                            <p>Barclaycard becomes the new league title sponsor. This had tremendous benefits to the commercial success of the league typified by turning over 570 million euros in that season. .</p>
                                        </div>
                                    </div>
                                </li>
								<li class="timeline-inverted">
                                    <div class=""><i class="fa"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">EA sports</h4>
											<p><small class="text-muted"><i class="fa fa-clock-o"></i> Jan 1st, 2003</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
										<img src="timeline/8.jpg" width="250">
                                            <p>EA sports has been the offical sports tecnology sponsor of the EPL since 2003.</p>
                                        </div>
                                    </div>
                                </li>
								 <li>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Barclys Premier league</h4>
											<p><small class="text-muted"><i class="fa fa-clock-o"></i> Jan 1st, 2004</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
										<img src="timeline/9.jpg" width="250">
                                            <p>Barclays is now the title sponsor.</p>
                                        </div>
                                    </div>
                                </li>
								<li class="timeline-inverted">
                                    <div class=""><i class="fa"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Talk sports</h4>
											<p><small class="text-muted"><i class="fa fa-clock-o"></i> Jan 1st, 2007</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
										<img src="timeline/10.png" width="250">
                                            <p>Talk sports has been a media outlet for the epl since 2007.</p>
                                        </div>
                                    </div>
                                </li>
								 <li>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">NBC Contract</h4>
											<p><small class="text-muted"><i class="fa fa-clock-o"></i> Jan 1st, 2012</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
										<img src="timeline/11.jpg" width="250">
                                            <p>NBC signed a three year deal with the EPL for $250 million.</p>
                                        </div>
                                    </div>
                                </li>
								<li class="timeline-inverted">
                                    <div class=""><i class="fa "></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">BT Sport</h4>
											<p><small class="text-muted"><i class="fa fa-clock-o"></i> Jan 1st, 2013</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
										<img src="timeline/12.jpg" width="250">
                                            <p>BTC Sport is a new broadcast partner for the EPL. They had just joined in the 2013- 2014 season.</p>
                                        </div>
                                    </div>
                                </li>
								 <li>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">News UK</h4>
											<p><small class="text-muted"><i class="fa fa-clock-o"></i> Jan 1st, 2013</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
										<img src="timeline/13.jpg" width="250">
                                            <p>New UK is a new media outlet for the EPL. They cover EPL games all across the web.</p>
                                        </div>
                                    </div>
                                </li>
								<li class="timeline-inverted">
                                    <div class=""><i class="fa "></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">EPL Demographics</h4>
											<p><small class="text-muted"><i class="fa fa-clock-o"></i> Jan 1st, 2014</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
										<img src="timeline/14.png" width="250">
                                            <p>Male fans continue to dominate support in this survey and account for 86% of season ticket holders and 84% of non-season ticket holders.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Most Followed Football Team on Twitter
                        </div>
                        <div class="panel-body">
                            <div class="list-group">
                                <a class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> @ManUtd
                                    <span class="pull-right text-muted small"><em>7.48M</em>
                                    </span>
                                </a>
                                <a class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> @Arsenal
                                    <span class="pull-right text-muted small"><em>7.37M</em>
                                    </span>
                                </a>
                                <a class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> @ChelseaFC
                                    <span class="pull-right text-muted small"><em>6.81M</em>
                                    </span>
                                </a>
                                <a class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> @LFC
                                    <span class="pull-right text-muted small"><em>5.68M</em>
                                    </span>
                                </a>
                                <a class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> @MCFC
                                    <span class="pull-right text-muted small"><em>3.19M</em>
                                    </span>
                                </a>
                                <a class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> @SpursOfficial
                                    <span class="pull-right text-muted small"><em>1.47M</em>
                                    </span>
                                </a>
                                <a class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> @Everton
                                    <span class="pull-right text-muted small"><em>814K</em>
                                    </span>
                                </a>
                                <a class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> @whufc_official
                                    <span class="pull-right text-muted small"><em>802K</em>
                                    </span>
                                </a>
                                <a class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> @NUFC
                                    <span class="pull-right text-muted small"><em>800K</em>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Trending Hashtags
                        </div>
                        <div class="panel-body">
							<div class="list-group">
                                <a class="list-group-item">
                                    <i class="fa fa-fw"></i> #YNWA
                                    <span class="pull-right text-muted small"><em></em>
                                    </span>
                                </a>
                                <a class="list-group-item">
                                    <i class="fa fa-fw"></i> #LIVEVE
                                    <span class="pull-right text-muted small"><em></em>
                                    </span>
                                </a>
                                <a class="list-group-item">
                                    <i class="fa fa-fw"></i> #LIVvEFC
                                    <span class="pull-right text-muted small"><em></em>
                                    </span>
                                </a>
                                <a class="list-group-item">
                                    <i class="fa fa-fw"></i> #mufc
                                    <span class="pull-right text-muted small"><em></em>
                                    </span>
                                </a>
                                <a class="list-group-item">
                                    <i class="fa fa-fw"></i> #vibes
                                    <span class="pull-right text-muted small"><em></em>
                                    </span>
                                </a>
                                <a class="list-group-item">
                                    <i class="fa fa-fw"></i> #ggmu
                                    <span class="pull-right text-muted small"><em></em>
                                    </span>
                                </a>
                                <a class="list-group-item">
                                    <i class="fa fa-fw"></i> #lfc
                                    <span class="pull-right text-muted small"><em></em>
                                    </span>
                                </a>
                                <a class="list-group-item">
                                    <i class="fa fa-fw"></i> #MOTM
                                    <span class="pull-right text-muted small"><em></em>
                                    </span>
                                </a>
                                <a class="list-group-item">
                                    <i class="fa fa-fw"></i> #COYB
                                    <span class="pull-right text-muted small"><em></em>
                                    </span>
                                </a>
                            </div>
                            <div id="morris-donut-chart"></div>
                        </div>
                    </div>
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Recent Tweets
                         </div>
                        <div class="panel-body">
							<?php
								if( $num_docs > 0 )
								{
									foreach ($cursor as $id)
									{
							?>
                            <ul class="chat">
                                <li class="clearfix">
									<div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">
											<?php echo nl2br($id['user_name'] . "\n"); ?>
											</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa  fa-fw"></i> 
                                            </small>
                                        </div>
                                        <p>
                                            <?php echo nl2br($id['tweet_text'] . "\n"); ?>
                                        </p>
                                    </div>
                                </li>
                               </ul>
							   <?php
										}
									}
									else
									{
										echo "No products found \n";
									}
								?>
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