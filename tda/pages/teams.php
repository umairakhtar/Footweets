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
                                    <a href="#">Hashtag Popularity</a>
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
                                    <a href="#">Team Description</a>
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
                    <h1 class="page-header">Team Descriptions</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Arsenal
                        </div>
                        <div class="panel-body">
							<img src="teams/arsenal.jpg"> 
                        <p> <b>Nickname:</b> The Gunners.</p>

<p><b>City:</b> Based in north London.</p>

<p>Arsenal were founded in 1886. The club used to play in South East London, on the other side of the Thames river. In 1913, the club moved to north London and moved into Arsenal Stadium (more commonly known as Highbury), which was their home until 2006. They moved to their new ground just half a mile away named the Emirates Stadium, which cost over £390 million to build and has a capacity of 60,000.</p>

<p>For most of their history, Arsenal’s uniform colors have been bright red shirts with white sleeves. The choice of red is in recognition of a charitable donation from Nottingham Forest, soon after Arsenal was founded in 1886.</p>
                              
<p><b>Arch-enemy:</b> Tottenham Hotspur.</p>

<p><b>Honors:</b> Arsenal have won the Premier League 13 times, the FA Cup 10 times, the League Cup twice, and the FA Community Shield 12 times. In Europe, the Gunners have won the European Cup Winners’ Cup once, and the Inter-Cities Fairs Cup once too.</p>

<p><b>Did You Know?</b> In 1919, Arsenal finished in fifth place in Division Two, but were dubiously elected to rejoin the First Division at the expense of local rivals Tottenham Hotspur.</p>

<p><b>Famous Players:</b> Arsenal have a number of famous players including David O’Leary – the player with the most appearances for the club (722), Tony Adams – who is second in the all time appearance list with 668. He was also captain from 1988 to 2002, Thierry Henry – 228 goals in 396 appearances, Patrick Vieira, who made over 400 appearances.</p>

<p><b>Fun Fact:</b> Arsenal have one of the best top-flight records in history, having finished below fourteenth only seven times. </p>
							   <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Aston Villa
                        </div>
                        <div class="panel-body">
							<img src="teams/astonvilla.jpg">
                        <p> <b>Nicknames:</b> Villa, Villans, or the Lions</p>

<p><b>City:</b> Located in Birmingham, England</p>

<p>Aston Villa play their home games at Villa Park.</p>

<p>The 42,788 seater stadium is a UEFA 5-star rated stadium, having hosted international fixtures as well as FA Cup semi finals previously. Aston Villa have played at Villa Park since 1897, after Aston Park (1874-1876) and Perry Barr (1876-1897).</p>

<p>Villa’s traditional kit colors are claret shirts with sky blue sleeves, white shorts and sky blue socks.</p>

<p><b>Arch-enemy:</b> Aston Villa have a fierce rivalry with Birmingham City, this derby is known as the ‘Second City derby’. The two Midlands clubs are generally regarded as each other’s most fierce rivals, though this was perhaps less true between 1988 and 2002, when the two clubs were in different divisions and as a result did not play each other. Villa’s biggest local rivalry was Coventry City, but since Coventry play outside the Premier League, Aston Villa’s key local rivals now are Wolverhampton Wanderers, West Bromwich Albion and Birmingham City.</p>

<p><b>Famous Players:</b> Aston Villa have provided more England internationals than any other club, with 71. Therefore, they have a number of famous and well known former players. Gareth Barry played over 400 times for the club, scoring 52 goals. Gordon Cowans had three stints at Villa, racking up 528 appearances. Dennis Mortimer also made over 500 appearances. Gerry Hitchens had a shorter spell at the club, but had a fantastic goal ratio, scoring 96 times in 160 matches. Harry Hampton was another top forward for the club, scoring 242 goals in 376 games. Defensively, Allan Evans was a top performer for Villa during the 70s and 80s, playing 380 times.</p>

<p><b>Honors:</b> Aston Villa have won 10 domestic cups in total. They have won the First Division seven times, whilst winning the Second Division twice, and the Third Division once. They have also won the FA Cup seven times, and the League Cup five times. They have even won the FA Community Shield once, and the Football League War Cup. In Europe, Villa have won the European Cup, the European Super Cup and the Intertoto Cup once each.</p>

<p><b>Fun Fact:</b> Aston Villa have spent 102 seasons in the top tier of English soccer; the only club to have spent longer in the top flight is Everton, with 108 seasons, making Aston Villa versus Everton the most-played fixture in English top-flight soccer.  </p>                             
							   <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Chelsea
                        </div>
                        <div class="panel-body">
						<img src="teams/chelsea.jpg">
							<p><b>Nickname:</b> The Blues</p>

<p><b>City:</b> Located in west London.</p>

<p>The Blues, founded in 1905, have spent most of their history in the top tier of English soccer. Stamford Bridge has always been their home, but the Bridge hasn’t always been a modernized state-of-the-art 42,000 all-seater stadium. The new design was announced in the 1970s, but project problems occurred a couple of years later, which eventually led the club close to bankruptcy. A long legal battle meant that Chelsea’s future at the stadium wasn’t secured until the 1990s, when renovation work resumed. The Stamford Bridge freehold, the pitch, the turnstiles and Chelsea’s naming rights are now owned by Chelsea Pitch Owners, a non-profit organization in which fans are the shareholders. It is no secret that the fans and staff involved at Chelsea would like a bigger stadium, as the current club ownership have stated that a larger stadium is necessary in order for Chelsea to stay competitive with rival clubs who have significantly larger stadia, such as Arsenal and Manchester United.</p>

<p>Chelsea’s former manager Tommy Docherty changed Chelsea’s kit to blue shorts and white socks believing the colors were more modern and distinctive, since no other side used this combination.</p>

<p><b>Arch-Enemies:</b> Chelsea do not have a traditional rivalry on the scale of the Merseyside derby or the North London derby because of their West London derbies with Fulham or Queens Park Rangers have not been  as prominent over the years since the clubs have often been in different divisions. It has developed that Chelsea fans find their fiercest rivalries with Arsenal, Tottenham Hotspur and Manchester United.</p>

<p><b>Famous Players:</b> Chelsea have many notable players in their past, but one of the present would have to be Frank Lampard. The England midfielder has won a record three Player of the Year awards at the club, and has been the club’s top scorer in a season four times. Not to mention the 12 club cups Lampard has won at his time with Chelsea. Other notable players include Jimmy Floyd Hasselbaink, who averaged almost a goal every two games, Ray Wilkins, Petr Cech, Alan Hudson, Steve Clarke, Jimmy Greaves, Marcel Desailly, Didier Drogba, Claude Makalele, Bobby Tambling, Dennis Wise, Kerry Dixon, Peter Bonetti, Ron Harris, Peter Osgood, John Terry, Gianfranco Zola and Ashley Cole.</p>

<p><b>Honors:</b> Domestically, Chelsea have won six league titles, the First Division four times, the Second Division twice. They have won seven FA Cups, four Football League Cups, four FA Community Shields, and two Full Members Cup. In Europe, Chelsea have once won the UEFA Champions League, UEFA Super Cup, and twice the UEFA Cup Winners’ Cup. They have also won the FIFA Club World Cup.</p>

<p><b>Club fact:</b> Chelsea are owned by Russian billionaire Roman Abramovich, who is the 50th richest man in the world.</p>                         
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Crystal Palace
                        </div>
                        <div class="panel-body">
							<img src="teams/cpalace.png">
                    <p>     <b>Nickname:</b> The Eagles.</p>

<p><b>City:</b> Located in south London.</p>

<p>Crystal Palace play their homes games at Selhurst Park – a 26,000 capacity stadium.</p>

<p>Did You Know? Palace have worn a claret and blue kit for their history, as it was donated to them from Aston Villa.</p>

<p><b>Arch Enemy:</b> The Eagles have a well-known rivalry with Brighton & Hove Albion, despite the clubs being over 40 miles apart. Palace also have a rivalry with Millwall, who have exchanged a number of players with the club during their history.</p>

<p><b>Famous Players:</b> Some notable Crystal Palace players from the past include Nigel Martyn, Attilio Lombardo, John Salako, Kenny Sansom, Geoff Thomas, Andy Johnson, Chris Coleman, Andy Gray, Ian Wright, Jim Cannon (most appearances for the club), Terry Long, Albert Harry, Peter Simpson (record goalscorer), Edwin Smith, Mark Bright, George Clarke and Johnny Byrne.</p>

<p><b>Honors:</b> Crystal Palace have won Division One once and the Football League Third Division South once. The Eagles were promoted to the Premier League in May 2013 when they beat Watford in the Play-off Final 1-0 in extra time with a Kevin Phillips goal.</p>

<p><b>Interesting Fact:</b> Crystal Palace have been in administration twice, once in 1998 and then 2000.</p>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Everton
                        </div>
                        <div class="panel-body">
							<img src="teams/everton.jpg">
                        <p> Nickname: The Toffees</p>

<p><b>City:</b> Located in Liverpool.</p>

<p>Everton were founded in 1878 as St Domingo’s F.C.  The club were renamed to Everton a year later, before becoming one of the founding members of The Football League.</p>

<p>The Toffees’ ground is called Goodison Park, a 40,000 seater stadium that has been Everton’s home since 1892, following a move away from Anfield (yes, Anfield). A dispute between the Everton chairman John Houlding and the Anfield owner about how the club should be owned and run led to Houlding attempting to gain full control of the club by registering the company Everton F.C and Athletics Ground Ltd. In response, Everton left Anfield for Goodison Park. Houlding attempted to take over Everton and change the name, colors, fixtures etc., but The Football Association denied him, so instead, Houlding formed a new club, Liverpool F.C.</p>

<p>Everton’s traditional colors are royal blue shirts, white shorts and blue socks.</p>

<p><b>Arch-Enemy:</b> As many are aware, Everton have a rivalry with Merseyside neighbors Liverpool. However, the Merseyside derby has been named ‘the friendly derby’, as it is often seen that the opposition supporters are stood side by side. Although on the field, this fixture has seen more red cards than any other Premier League fixture.</p>

<p><b>Famous Players:</b> Notable Everton players include Neville Southall, Brian Labone, Dave Watson, Dixie Dean, Kevin Sheedy, Bob Latchford, Joe Royle and Roy Vernon.</p>

<p><b>Fun Fact:</b> The club have entered the UK pop charts four times under different titles during the 1980s and 1990s when many clubs released a song to mark reaching the FA Cup Final.</p>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Liverpool
                        </div>
                        <div class="panel-body">
							<img src="teams/liverpool.jpg">
                        <p> <b>Nickname:</b> The Reds</p>

<p><b>City:</b> Located in Liverpool.</p>

<p>Liverpool were formed in 1892 and have played at Anfield ever since.</p>

<p>The club wore blue and white shirt colors for the first four years of its existence, before adopting the color red.</p>

<p>Originally used by Everton before moving to Goodison Park, Anfield has been Liverpool’s home since 1892. The capacity of the stadium at the time was only 20,000, although only 100 spectators watched Liverpool’s first match at Anfield.</p>

<p><b>Arch-Enemies:</b> Liverpool’s rivals are Everton, in which they contest in the Merseyside derby. The derby stems from the formation and dispute with Everton officials and the then owners of Anfield. Liverpool’s rivalry with Manchester United is viewed as a manifestation of the cities’ competition during the Industrial Revolution of the 19th century. The rivalry between the clubs intensified during the 1960s, after Manchester United became the first English team to win the European Cup in 1968, an achievement surpassed by Liverpool’s four European Cup victories in the 1970s and 1980s. Manchester United started to dominate English football during the 1990s, making the rivalry all the more intense.</p>

<p><b>Honors:</b> Liverpool have won 18 First Division titles, four Second Division titles, seven FA Cups, eight League Cups, 15 Charity Shields/FA Community Shields, five UEFA Champions Leagues, three UEFA Cups and three UEFA Super Cups.</p>

<p><b>Famous Players:</b> Notable Liverpool greats include Bill Shankly, Bob Paisley, Steven Gerrard, Ian Callaghan, Ian Rush, Kevin Keegan, Kenny Dalglish, Jamie Carragher, Phil Neal, Ray Clemence, Emlyn Hughes, Tommy Smith, Bruce Grobbelaar and Alan Hansen.</p>

<p><b>Fun Fact:</b> Liverpool have accumulated more top-flight wins than any other English team.</p>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Manchester City
                        </div>
                        <div class="panel-body">
							<img src="teams/mcfc.jpg">
                        <p> <b>Nickname:</b> Manchester City have a number of nicknames including City, the Citizens, the Sky Blues and the Blues.</p>

<p><b>City:</b> Located in east Manchester.</p>

<p>The club were founded in 1880 as St Mark’s, but in 1894 the name was changed to Manchester City.</p>

<p>City’s traditional home kit colors are sky blue and white.</p>

<p>Manchester City’s stadium is the City of Manchester Stadium, also known as Eastlands and the Etihad Stadium since July 2011 because of a sponsorship deal. The stadium is situated in east Manchester and is part of a 200-year operating lease from Manchester City Council after the 2002 Commonwealth Games. The stadium has been City’s home since the end of the 2002–03 season when the club moved from Maine Road. Before moving to the stadium, Manchester City spent in excess of £30 million to convert it to football use. </p>

<p><b>Arch-enemy:</b> Manchester City are rivals with Manchester United, a rivalry that seems to have become more fierce over the years. The two clubs used to be local teams within Manchester, when spectators would watch United one week, then City the next. However, after the Second World War, a stronger rivalry developed and following both teams became uncommon. From then onwards, the fixture between the two teams became frequently bad tempered.<p>

<p><b>Famous Players:</b> Manchester City players who are considered as notable are: Alan Oakes – most appearances (680), Joe Corrigan (3 Player of the Year Awards), Mike Doyle, Bert Trautmann, Paul Power, Billy Meredith, Eric Brook, Tommy Johnson, Colin Bell, Joe Hayes and Billie Gillespie.</p>

<p><b>Honors:</b> Manchester City have won the First Division/Premier League three times, Second Division/First Division seven times and the Third Division Play-offs. They have also won five FA Cups, two Football League Cups and four FA Community Shields. They won the UEFA Cup Winners’ Cup in 1970.</p>

<p><b>Fun Fact:</b> City’s first ever overseas manager was Sven-Goran Eriksson who was appointed in 2007.</p>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Manchester United
                        </div>
                        <div class="panel-body">
						<img src="teams/mufc.jpg">	
<p><b>Nickname:</b> Red Devils.</p>

<p><b>City:</b> Located in Stratford, outside the city limits of Manchester.</p>

<p>Manchester United were founded in 1878. United play at Old Trafford, a 75,000 seater stadium that has been their home since 1910.</p>

<p>The Red Devils wear red shirts, white shorts and black socks, a color combination that they have worn for most of their history.</p>

<p><b>Arch-enemy:</b> Other than the big rivalry with Manchester City, United have other rivalries with Arsenal – due to the amount of times the two clubs have competed for league titles over the years, especially with the two managers in charge (Sir Alex Ferguson and Arsene Wenger), Liverpool – due to the competition between the two cities during the industrial Revolution, Leeds United – due to the Wars of the Roses that was fought between the House of Lancaster and the House of York with Manchester United representing Lancashire and Leeds representing Yorkshire.</p>

<p>Many people may have heard of the Busby Babes, or Matt Busby, due to the Munich Air Disaster from 1958 when Busby (manager of Manchester United at the time) and his team were on an aircraft on the way back from a European Cup quarter-final victory against Red Star Belgrade. The plane crashed when attempting to take off after refueling in Munich, Germany. The plane had Manchester United players on board, eight of who died – George Bent, Roger Byrne, Eddie Colman, Duncan Edwards, Mark Jones, David Pegg, Tommy Taylor and Billy Whelan. Others were also injured. Matt Busby was one of the most successful managers in United’s history, having won the First Division five times and FA Cup twice at the club. He was also the first manager to win the European Cup with an English team.</p>

<p><b>Famous Players:</b> Notable Manchester United players are Bobby Charlton, Denis Law, Jack Rowley, Wayne Rooney, George Best, Ryan Giggs, Paul Scholes, David Beckham, Eric Cantona, Brian Kidd, Brian Robson, Bill Foulkes, Roy Keane, Gary Neville and Gary Pallister.</p>

<p><b>Honors:</b> Manchester United have a very large trophy cabinet, having won the First Division and Premier League 20 times, the Second Division twice, the FA Cup 11 times, the League Cup four times and the FA Charity/Community Shield 19 times. They have also won European competitions such as the European Cup/UEFA Champions League three times, the UEFA Cup Winners’ Cup once, and the UEFA Super Cup once. They have even won the Intercontinental Cup and the FIFA Club World Cup once each.</p>

<p><b>Fun Fact:</b> Sir Alex Ferguson is the most honored and longest-serving manager in the club’s history.</p>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Newcastle United
                        </div>
                        <div class="panel-body">
							<img src="teams/nufc.jpg">
                        <p> <b>Nickname:</b> Magpies, or the Toon.</p>

<p><b>City:</b> Located in Newcastle, in the north east of England.</p>

<p>Newcastle United were founded in 1892. St James’ Park has been the home of Newcastle United throughout the club’s history and has hosted international and Olympic Games events. The stadium has a capacity of over 50,000 and is known as one of the finest football stadia in the United Kingdom.</p>

<p>The colors of Newcastle’s home kit is black and white stripes, which have been the colors for most of the club’s history. The colors were brought into the home strip since 1894 as the reserve team wore the stripy kit before the kit was transformed into the senior team.</p>

<p><b>Arch-enemy:</b> The Toon have a fierce rivalry with Sunderland. The two cities are just ten miles apart situated in the north east of England. The first competitive meeting between the two sides was played in 1888 in a FA Cup tie. The fixture is known as the Tyne and Wear derby.</p>

<p><b>Famous Players:</b> Notable Newcastle United players from past and present are Jimmy Lawrence – most appearances (496), Frank Hudspeth, Frank Clark, Shay Given, Bobby Mitchell, Alan Shearer, Rob Lee, Peter Beardsley, Nolberto Solano, Jimmy Milburn, Hughie Gallacher and Malcolm MacDonald.</p>

<p><b>Honors:</b> In their history, Newcastle United have won the First Division four times, the Championship three times and the Northern League three times. They have won six FA Cups, two FA Youth Cups and an FA Community Shield. In Europe, the Magpies have won the Inter-Cities Fairs Cup and the UEFA Intertoto Cup once. </p>

<p><b>Fun Fact:</b> Newcastle United have spent more than 80 seasons in the top-flight.</p>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Norwich City
                        </div>
                        <div class="panel-body">
							<img src="teams/norwich.jpg">
                       <p>  <b>Nickname:</b> Canaries.</p>

<p><b>City:</b> Located in East Anglia, in the east of England.</p>

<p>Norwich were founded in 1902. The club were first promoted to the Football League First Division in 1972.</p>

<p>The kit colors of Norwich have changed in their history. The main colors were once light blue and white halved shirts, but since around 1907 the team have worn yellow and green shirts.</p>

<p><b>Arch-Enemy:</b> Ipswich Town are the Canaries’ main rivals. The fixture is labeled the East Anglian derby.</p>

<p><b>Famous Players:</b> Norwich have previous notable players such as Ron Ashman, Terry Allcock, Terry Anderson, Neil Adams, Kevin Keelan, Ian Culverhouse, Steve Bruce, Duncan Forbes, Mark Bowen, Darren Huckerby, Ian Crook, Martin Peters, Darren Eadie, Chris Sutton and Iwan Roberts.</p>

<p><b>Honors:</b> In their history, the Canaries have won the Football League First Division, the Third Division twice, and the League Cup twice.</p>

<p><b>Fun Fact:</b> The Canaries’ most famous supporter is celebrity cook Delia Smith. On 28 February 2005, Smith attracted attention during the half-time break of a home match against Manchester City. At the time Norwich were fighting an ultimately unsuccessful battle against relegation from the Premier League, and in order to rally the crowd, Smith grabbed the microphone from the club announcer on the pitch and said: “A message for the best football supporters in the world: we need a 12th man here. Where are you? Where are you? Let’s be ‘avin’ you! Come on!” Norwich lost the match 3–2. Smith denied suggestions in the media that she had been drunk while delivering the speech.</p>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Southampton
                        </div>
                        <div class="panel-body">
							<img src="teams/sou.jpg">
                       <p>  <b>Nickname:</b> The Saints. </p>

<p><b>City:</b> Based in Southampton, on the south coast of England. </p>

<p>Southampton were founded in 1885.</p>

<p>The Saints play their home games at St Mary’s stadium, which has been their home since 2001. Their previous ground was the Dell. St Mary’s can hold up to 32,690 spectators and has previously hosted international fixtures. </p>

<p>Saints have worn red for most of their history and the stripes have also been part of the home kit for much of their existence.</p>

<p><b>Arch-enemy:</b> Southampton are involved in the South Coast derby, which is contested between themselves and Portsmouth. The fixture could also be called the Hampshire derby, as Portsmouth are in the same county just 17 miles apart. In recent years, the fixture has been labeled ‘El Classi Coast’. </p>

<p><b>Famous Players:</b> Southampton notable players are Matthew Le Tissier, Terry Paine, Mick Channon, Nick Holmes, Tommy Traynor, Jason Dodd, Claus Lundekvam, John Sydenham, Francis Benali, Bill Rawlings, James Beattie, David Armstrong, Ron Davies, Marian Pahars, Alan Shearer, Kevin Keegan, Bobby Stokes, Rod Wallace, Peter Shilton, Tim Flowers and more recently Rickie Lambert and Adam Lallana. </p>

<p><b>Honors:</b> The Saints have won the Football League One/Division Three, Third Division South, Southern League six times, FA Cup once, and the Football League Trophy. </p>

<p><b>Fun Fact:</b> The Saints’ anthem is the popular sport tune ‘When the Saints Go Marching In’, and since the club’s official nickname is “the Saints,” they are one of only a few teams who do not change the original lyric.</p>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Stoke City
                        </div>
                        <div class="panel-body">
							<img src="teams/stoke.jpg">
                       <p>  <b>Nickname:</b> Potters.</p>

<p><b>City:</b> Located in Stoke-On-Trent.</p>

<p>Stoke City were founded in 1863. Their home ground is the Britannia stadium, which has a capacity of over 27,000.</p>

<p>The Potters’ traditional home kit is red and white vertically striped shirt, white shorts and socks.</p>

<p>Stoke City fans were once known for their hooliganism in the 1970s, 80s, 90s and early 2000s. They were labeled the ‘Naughty Forty’.</p>

<p><b>Arch-enemy:</b> The Potters’ local rivals are Port Vale, but due to the sides not being in the same division for much of their history. Other West Midlands teams such as West Bromwich Albion and Wolverhampton Wanderers have increased rivalries.</p>

<p><b>Famous Players:</b> Former Stoke City players who are notable include Eric Skeels – most appearances for the club, John McCue, Bob McGrory, Denis Smith, Alan Boor, Peter Fox, Jackie Marsh, Alan Dodd, John Ritchie, Freddie Steele, Frank Bowyer, Charlie Wilson, Johnny King, Tommy Sale and Gordon Banks.</p>

<p><b>Honors:</b> In their history, Stoke City have won the Football League Third Division three times, the Third Division North, the Football Alliance, the Birmingham & District League, the Southern League Division Two twice, the League Cup once and the Football League Trophy twice.</p>

<p><b>Fun Fact:</b> The Potters’ former ground (Victoria Ground) once had a capacity of around 56,000.</p>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Sunderland
                        </div>
                        <div class="panel-body">
							<img src="teams/sunderland.jpg">
                        <p> <b>Nickname:</b> The Black Cats</p>

<p><b>City:</b> Located in Sunderland, in the north east of England.</p>

<p>Sunderland were founded in 1879. They play in red and white vertical stripes, with black shorts and socks. The red and white stripes have been adopted by Sunderland since the 1887-88 season.</p>

<p>The Black Cats play at the Stadium of Light, a 49,000 seater stadium which has been their home since 1997. Previously to the Stadium of Light, Roker Park was the home of Sunderland for 99 years.</p>

<p><b>Arch-enemy:</b> Sunderland have a main rivalry with nearby neighbors Newcastle. The fixture between the two sides is called the Tyne-Wear derby. The river Wear runs through Sunderland, while the Tyne river runs through Newcastle.</p>

<p><b>Famous Players:</b> Notable former Sunderland players are Jimmy Montgomery – most appearances for the club, Len Ashurst, Gary Bennett, Bobby Kerr, Gordon Armstrong, Charlie Hurley, Bobby Gurney, Kevin Ball, Martin Harvey, Charlie Buchan, Dave Halliday, George Holley, Johnny Campbell, Kevin Phillips and Jimmy Millar.</p>

<p><b>Honors:</b> Sunderland have previously won the First Division six times, the Second Division/Championship five times, the Third Division once and the FA Cup twice.</p>

<p><b>Fun fact:</b> The nickname ‘Black Cats’ was decided by the supporters in a poll on the Sunderland website. Over half the suggestions were preferred as the ‘Black Cats’.</p>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Swansea City
                        </div>
                        <div class="panel-body">
							<img src="teams/swansea.jpg">
                         <p><b>Nickname:</b> The Swans.</p>

<p><b>City:</b> Located in Swansea, alongside the coast in south Wales.</p>

<p>Swansea were founded in 1912. They play their home games at the Liberty Stadium, which holds just over 20,000 spectators. Prior to the Liberty Stadium, City played at Vetch Field.</p>

<p>Swansea play in a white kit, with white shirts, shorts and socks.</p>

<p><b>Arch-enemy:</b> Swansea have a well-known and fierce rivalry with Cardiff City, which has been regarded as one of the most hostile rivalries in British football.</p>

<p><b>Famous Players:</b> Notable Swansea players include Wilfred Milne – most league appearances, Roger Freestone, Herbie Williams, Robbie James, Bob Latchford, Wyndham Evans, Ivor Allchurch, Alan Curtis, Len Thompson, Lee Trundle, John Toshack and Trevor Ford.</p>

<p><b>Honors:</b> Swansea have previously won the Football League Championship Final, League One (three times) and League Two. They have also won the Football League Cup and the Football League Trophy.</p>

<p><b>Fun fact:</b> Swansea beat Bradford City 5-0 in the 2012-13 Football League Cup Final, which was the competition’s highest ever winning margin in the final.</p>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Tottenham Hotspur
                        </div>
                        <div class="panel-body">
							<img src="teams/spurs.jpg">
                       <p>  <b>Nickname:</b> Spurs, or the Lilywhites.</p>

<p><b>City:</b> Located in north London.</p>

<p>Spurs were founded in 1882 and have played at White Hart Lane since 1899. White Hart Lane, known as ‘The Lane’ to most Spurs fans, holds over 36,000 spectators.</p>

<p>Tottenham’s kit has been predominantly white throughout most of their history.</p>

<p>The club’s most famous manager is Bill Nicholson, who changed the way the club played soccer by bringing a fast passing game to White Hart Lane. Under Nicholson, Tottenham won the top flight league in England, the FA Cup and Charity Shield in 1961. In 1963, the club won the European Cup Winners’ Cup.</p>

<p><b>Arch-Enemy:</b> Tottenham’s North London neighbors and fierce rivals are Arsenal. In 1919, Arsenal only finished in fifth place in Division Two, but were dubiously elected to rejoin the First Division at the expense of local rivals Tottenham Hotspur.</p>
<p><b>Famous Players:</b> Tottenham have many well known players from the past including: Martin Chivers, Ricky Villa, Les Allen, Paul Allen, Darren Anderton, Paul Gascoigne, Jimmy Greaves, Ledley King, Glenn Hoddle, Gary Lineker, Jimmy Dimmock, John White, Martin Peters, Steve Perryman, Teddy Sheringham, Chris Waddle, David Ginola, Steffen Freund, Chris Hughton and many more.</p>

<p><b>Honors:</b> In the club’s history, Spurs have won the First Division twice, the Second Division twice, the Southern League once, the Western League once,  the FA Cup eight times, the League Cup four times, the FA Charity Shield seven times and in Europe they won the UEFA Cup twice and the UEFA Cup Winners’ Cup once.</p>

<p><b>Fun Fact:</b> The club’s motto is Audere est Facere (“To Dare Is to Do”). Also, when Spurs won the FA Cup in 1901, they were the only non-league club to win the competition after the formation of the Football League in 1888.</p>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           West Bromwich Albion
                        </div>
                        <div class="panel-body">
							<img src="teams/wba.jpg">
                        <p> <b>Nickname:</b> The Baggies, the Throstles or Albion.</p>

<p><b>City:</b> Located five miles outside of Birmingham, near the center of England.</p>

<p>West Bromwich Albion (sometimes referred to as West Brom or simply WBA) were founded in 1878. The Baggies play their home matches at The Hawthorns, a 26,000 seater stadium.</p>

<p>West Brom currently play in navy blue and white striped shirts and have done for the majority of their existence.</p>

<p><b>Arch-Enemy:</b> The Baggies see Wolverhampton Wanderers as their main rivals more recently, compared to in the past when their fixtures against Aston Villa were fierce. Albion and Wolves have contested the Black Country derby more than 150 times.</p>

<p><b>Famous Players:</b> West Brom’s famous players are Tony Brown – most appearances for the club, John Wile, Jesse Pennington, Ray Barlow, Ronnie Allen, Don Howe, Derek Statham, W.G Richardson, Bryan Robson, Neil Clement, Lee Hughes, Cyrille Regis, Billy Bassett and Jeff Astle.</p>

<p><b>Honors:</b> In their history, West Brom have won the First Division once, the Second Division once, the FA Cup five times, the League Cup once, the FA Charity Shield twice and the FA Youth Cup once.</p>

<p><b>Fun Fact:</b> Stoney Lane was the home ground of West Brom before the Hawthorns.</p>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           West Ham United
                        </div>
                        <div class="panel-body">
							<img src="teams/whu.jpg">
                         <p><b>Nickname:</b> The Hammers or the Iron.</p>
<p><b>City:</b> Located in east London.</p>

<p>West Ham were founded in 1895. The Hammers have played at Upton Park since 1904 but the real name for the stadium is the Boleyn Ground. It is often referred to as Upton Park due to its location, in Upton Park. The Hammers are planning to move to the Olympic Stadium in 2015.</p>

<p>West Ham wear claret and blue. They have worn these colors for most of their existence.</p>

<p>West Ham supporters are well documented for their rivalries and hooliganism, during the 1970s and 80s, West Ham supporters (The Inter City Firm) were one of the first “casuals”, so called because they avoided police supervision by not wearing football-related clothing and traveled to away matches on regular Inter City trains.</p>

<p><b>Arch-Enemy:</b> West Ham have the strongest and oldest rivalry with Millwall. The two sides are local rivals and fixtures between the teams have previously resulted in considerable violence and damage to buildings. Several pitch invasions during the matches have previously seen the game brought to a temporary halt.</p>

<p><b>Famous Players:</b> The Iron have many past players who are well known, including Vic Watson, Billy Bonds, Frank Lampard Sr., Trevor Brooking, Bobby Moore, Alvin Martin, Jimmy Ruffell, Steve Potts, Geoff Hurst, Jim Barrett, Tony Cottee, Martin Peters, Paulo Di Canio, Joe Cole, Scott Parker, Johnny Byrne and Steve Potts.</p>

<p><b>Honors:</b> In their history, West Ham have won the Second Division/Championship twice, the Western League, the FA Cup three times, the FA Charity Shield once, the European Cup Winners Cup once and the UEFA Intertoto Cup once.</p>

<p><b>Interesting Fact:</b> The number 6 shirt is retired, in memory of the former England and West Ham legend Bobby Moore who wore the shirt.</p>
                                <div class="flot-chart-content" id="flot-line-chart"></div>
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