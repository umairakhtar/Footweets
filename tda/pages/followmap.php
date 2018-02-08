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
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                                    <a href="#">Follower Map</a>
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
                    <h1 class="page-header">Followers Map</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Map
                        </div>
                        <div class="panel-body">
							<div id="ninja-slider">
								<div class="slider-inner">
								<ul>
									<li>
										<a class="ns-img" href="followermap/Arsenal.jpg"></a>
										<div class="caption"></div>
									</li>
									<li><a class="ns-img" href="followermap/avfc.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/bou.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/Chelsea.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/cry.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/everton.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/lei.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/Liverpool.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/Manutd.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/mcfc.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/newC.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/nor.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/sou.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/sto.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/sun.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/swa.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/tot.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/wat.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/West Brom.jpg"></a>
										<div class="caption"></div>
									</li>    
									<li><a class="ns-img" href="followermap/Whu.jpg"></a>
										<div class="caption"></div>
									</li>    
									</ul>
								<div class="fs-icon" title="Expand/Close"></div>
								</div>
								<div id="morris-area-chart">
								</div>
							</div>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                        
							<div class="panel-heading">
                        </div>
                        <div class="panel-body">
<ul>
<b><li>Arsenal - 7.37mn Followers</li></b>

<p>Arsenal is one of the biggest clubs in the world containing more than 7 million followers on twitter. Traditionally a 'Big 4' Club, Arsenal attracted a lot of fans when they finished Unbeaten in the 2003-2004 season. Arsenal is the most popular team in the south east asia region including in India, Indonesia and Singapore. It is also one of the most popular teams in Africa. </p>

<b><li>Aston Villa - 678K Followers</li></b>

<p>Aston Villa will be facing relegation for the first time in their history, but they still remain one of the more popular teams in England. The Main reason fans support aston villa is because they are intrigued by their history. Aston Villa has followers all over the world, especially in the US, especially in the Florida region. Aston Villa are owned by American Owners as well. However, there are very few followers of aston villa in India, China and South america - which are the most populous regions in the world. </p>

<b><li>Bournemouth - 155k Followers</li></b>

<p>Bournemouth have quite a few followers all over the world, which is surprising since this season is the first time they have played in the premier league. They have been attracting a lot of fans this season with their attractive playstyle. The largest proportion of Cherries' followers are european, but the team is also popular in Uruguay, Sri Lanka and Ghana</p>

<b><li>Chelsea - 6.82mn Followers</li></b>

<p>Another one of the Big 4 clubs, chelsea is one of the most popular clubs in the world. Its popularity soared greatly after it was taken over by their Russian Owner in 2003. Before this year, chelsea hardly tasted success. The biggest reason why fans support chelsea is because of its success. Chelsea is the most popular football team in Canada and Ivory Coast. Chelsea always has a high proportion of African Players in their team which is why it is also highly popular in Africa. There are many fans in India as well.</p>

<b><li>Crystal Palace - 344k Followerrs</li></b>

<p>Crystal Palace is one of the least successful london based teams. They are highly overshadowed by other london based teams like arsenal, chelsea and west ham. Crystal Palace have only recently returned to the premier league and have some followers in south africa and chad in Africa. Crystal Palace has some fans in North America as well, but it isn't popular in South America, asia or Oceania.</p>

<b><li>Everton - 815k followers</li></b>

<p>Everton are overshadowed by their merseyside rivals Liverpool since they both reside in the same city. However everton is a very popular team in england, especially scotland and Wales. It has fans in India, Malaysia and Phillipines. It is one of the most popular teams in the Bahamas. </p>

<b><li>Leicester City - 490k followers</li></b>

<p>Isn't it surprising that the team on the top of the premier league table has only 490k Followers? Leicester City had only returned to the premier league last season and just avoided relegation last time. No one could have predicted this rise of success. Leicester City is popular in england and spain and also in Africa and Japan. Within a few years, leicester city will gain a lot of new followers. </p>

<b><li>Liverpool - 5.98 million Followers</li></b>

<p>Liverpool is a team that is very prominent on social media and contains roughly 6 million followers. It is a successful team as well although lately they havent experienced this kind of success. They won their last champions league title 9 years ago and their last premier league title over 24 years ago. Liverpool is the most popular team in singapore, malaysia and indonesia and also in the US & Canada. It has a large base of followers in south america, africa and europe. It is the second most popular team in India.</p>

<b><li>ManUtd - 7.49 m followers</li></b>

<p>Containing the largest fan base only behind Real Madrid and Barcelona, Manchester United is arguably the biggest club in the Premier League. Having won 20 titles, more than any other team, fans are used to success and an attractive playstyle. However it is surprising that they dont have a lot of fans in North and South America. Manchester United is the most popular team in India and Indonesia. It is also the most popular team in New Zealand.</p>

<b><li>ManCity - 3.19 m </li></b>

<p>Manchester City aren't too far behind their local rivals. City is followed by many in India and Argentina. It is the most popular team in Australia as well, and it has more fans in North America than they have united fans. Man City's success and fan following improved dramatically after they were bought by an Emirati Sheikh, and it is expected to increase even further</p>

<b><li>Newcastle - 801 k followers</li></b>

<p>Newcastle is a very iconic team in the UK which contained famous players such as Alan Shearer and Kevin Keegan. They have won the premier league 5 times and is easily the most popular team of the premier league in North America. It is also highly followed by fellow european countries especially belgium and england including scotland and wales. Italians and Spanish people also like Newcastle United, however their fan following is expected to decrease following a period of failure and a lack of trophies</p>

<b><li>Norwich - 362k</li></b>

<p>The people of norwich are very proud of their local team, as they have climbed from the lower tiers of english football to the top with limited financial support. However, outside of england, norwich is hardly followed by anywhere else except for Japan and South Africa. It is a small club</p>

<b><li>Southampton - 569k</li></b>

<p>The english are very proud of southamtpon football club, which has created many talented players who went on to play for england at a professional level. Southampton is very popular in Europe and West Africa and they have gained new fans in India and Oceania.</p>

<b><li>Stoke City - 479K</li></b>

<p>Stoke city was a largely unheard name 5 years ago, but ever since they got promoted to the premier league, there was no looking back. Stoke City has gained a lot of followers because of their tough and brawn nature. They are followed clos0ely by Europeans and North Americans and they have a fan base in South America as well.</p>

<b><li>Sunderland - 489k</li></b>

<p>The Red and White Army has been in the middle half of the premier league for a long time but havent tasted success. It is a small team with a large proportion of their followers in England. It is followed by some sections in the middle east as well</p>

<b><li>Swansea - 521k</li></b>

<p>The Swans are the pride of wales and possibly europe as well. It has a very large proportion of followers in England and Spain, who like their laid back and passing approach to football. Americans who tune in to football are mesmerized by their passing style.</p>

<b><li>Tottenham - 1.47m</li></b>

<p>Sitting second in the league after a long time, they have a chance to win their first premier league title since 1984. Tottenham are a team which tries to win titles but doesn't quite get there. North America's most favourite team is Tottenham only behind Newcastle. It also has a lot of fans in brazil and south korea.</p>

<b><li>Watford - 168k</li></b>

<p>The Hornets have been a popular and loved team in England for a long time. They are gaining in popularity in North America and Australia. </p>

<b><li>West Brom - 421k</li></b>

<p>West Brom is one of the most popular teams in Africa and Australia, but the major share of its followers in England itself. West Brom have been in the premier league for a long time and seems like they will stay there</p>

<b><li>West Ham - 802k</li></b>

<p>The Hammers are one of the oldest ever clubs in the UK and they are three time fa cup and one time european cup winners. West Ham have a huge fan following in South Africa and in South America as well. They are one of the most popular clubs in London and will house the biggest stadium in the city next season.</p>                           
</ul>                       
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