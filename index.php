<!-- Full credits to the respective owners of the chosen images -->
<?php
$page = $_GET["page"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Världshändelser 2016</title>

	<link href="css/style.css" type="text/css" rel="stylesheet" />

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
	<body>
		<div class="overlay">
		<h1>Världshändelser 2016</h1>
		<nav>
			<ul>
				<a href="index.php?page=home"><li>Hem</li></a>
				<a href="index.php?page=about"><li>Om oss</li></a>
				<a href="index.php?page=contact"><li>Kontakt & Tips</li></a>
				<a href="index.php?page=finland"><li>Inom Finland</li></a>
				<a href="index.php?page=eu"><li>Inom EU</li></a>
				<a href="index.php?page=world"><li>Utomlands</li></a>
			</ul>
		</nav>
		<hr />

		<?php
		if(strpos($page, "home") !== false || empty($page)) {
		?>
		<h2>Heta händelser</h2>
		<div class="newsBox">
		<h3>USAs Presidentval</h3>
		<p>Under hösten 2016 hettade det till i USA då presidentvalet kom närmare och närmare. De tre huvudsakliga personerna var Hillary Clinton som stod för demokraterna, Donald Trump som stod för republikanerna, och Bernie Sanders som var självständig, och när valet började närma sig de sista timmarna, var det Hillary Clinton och Donald Trump som var häl i häl. Slutligen, efter den intensiva striden mellan vem som skulle väljas, så drog Donald Trump hem segern för republikanerna.
		</p>
		<img src="http://www.2016usaelection.org/wp-content/themes/atahualpa/images/2016-election.jpg" />
		</div>

		<div class="newsBox">
		<h3>Sjukhursjoursystemet 12 + 1</h3>
		<p>Efter en tid av delvisa konflikter mellan Svenskspråkiga invånare som varit missnöjda med både språket de blivit betjänat på samt sjukhus med jourer som känns långt borta, så blev det en regeringsfråga om vad man skulle göra. Skulle de 12 joursjukhus som vi har idag behållas, eller tillåta en jour vid Vasa centralsjukhus? Det beslutet blev nyligen framröstat och beslutet och sammanfattningen resulterade i ett Nej. 12 + 1 systemet gick inte igenom, vilket betyder att vi ännu kommer använda oss av 12, inte 13 joursjukhus.
		</p>
		<img src="http://www.somaliska.com/wp-content/uploads/2011/10/sjukhus.jpg" />
		</div>

		<div class="newsBox">
		<h3>Terrorattack i Tyskland</h3>
		<p>Under 19 December begick den misstänkte terrorism gruppen ISIS ett till terror-ingrepp mot Tyskland. En julmarknad var i full fart i huvudstaden Berlin när en lastbil hade blivit kapad och kördes därefter rakt in i folkmassan som fanns runtom marknaden. 12 st är rapporterade döda och 48 skadade. Både lastbilen, originella chauffören samt organisationen/gruppen bakom gärningsmannen har blivit identiferade sedan attacken.
		</p>
		<img src="https://www.thestar.com/content/dam/thestar/news/world/2016/12/20/berlin-christmas-market-attack-intentional-police-say/berlinchristmasmarkettrucktow.jpg" />
		</div>

		<div class="newsBox">
		<h3>Dödsskjutningar brevid restaurang</h3>
		<p>Sammanlagt 3 personer blev under slutet av 2016 skjuten bredvid restaurangen Imatra i sydöstra Finland. Gärningsmannen besköt personerna och väntade därefter i en bil på poliserna att anlända till scenen. Gärningsmannen sägs att inte hade haft något större motiv för skjutningarna, och sitter nu i fängelse tills vidare.
		</p>
		<img src="http://im.mtv.fi/image/379346/landscape16_9/1024/576/ea3752d3a2ec2c8b39510d246c864826/LV/1384061.jpg" />
		</div>
		
		<?php
		}
		else if (strpos($page, "about") !== false) {
		?>

		<h3>Om oss</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In suscipit, sem at dapibus ornare, erat urna semper dui, sit amet condimentum justo sem vel magna. Nullam velit ipsum, facilisis sed metus ut, dictum euismod felis. Ut eleifend ornare mi, et porttitor neque euismod in. Suspendisse sit amet sem eget massa bibendum ornare. Sed et maximus urna. Maecenas tincidunt quam ut libero aliquam, eu ultrices mauris posuere. Sed posuere malesuada nulla at porttitor. Ut fringilla ac urna nec scelerisque. Aenean vestibulum id augue efficitur pulvinar. Donec id lectus dapibus, consequat nisi et, ultricies augue. Suspendisse in nisl iaculis, vestibulum sapien non, laoreet leo. Etiam sem tortor, rhoncus a mauris vitae, vulputate venenatis urna. Nam ornare, dolor auctor egestas faucibus, dolor sapien tempor erat, a vehicula purus augue ut odio. Praesent commodo consectetur ligula, a tempus mauris semper a. Nunc tincidunt nisi nisl, quis egestas neque vestibulum non.</p>

		<?php
		}
		else if (strpos($page, "contact") !== false) {
		?>
		
		<h3>Kontakt & tips</h3>
		<p>Om du har tips eller dylikt som vi missat kan du kontakta & tipsa oss via kontaktformuläret nedan! Om vidare kontakt behövs kontaktar vi dig via den epost eller telefonnummer som du anger.</p>
		<br />
		<form method="POST">
			<div class="form-group">
				<input type="text" name="name" placeholder="Namn" class="form-control" />
			</div>
			<div class="form-group">
				<input type="text" name="email" placeholder="Epost" class="form-control" />
			</div>
			<div class="form-group">
				<input type="text" name="phnnumber" placeholder="Tfn. Nummer" class="form-control" />
			</div>
			<div class="form-group">
				<textarea name="message" class="form-control" placeholder="Meddelande"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" name="confirm" value="Skicka" class="form-control" disabled />
			</div>
		</form>

		<?php
		}
		else if(strpos($page, "finland") !== false) {
		?>

		<div class="newsBox">
		<h3>Sjukhusjoursystemet 12 + 1</h3>
		<p>Efter en tid av delvisa konflikter mellan Svenskspråkiga invånare som varit missnöjda med både språket de blivit betjänat på samt sjukhus med jourer som känns långt borta, så blev det en regeringsfråga om vad man skulle göra. Skulle de 12 joursjukhus som vi har idag behållas, eller tillåta en jour vid Vasa centralsjukhus? Det beslutet blev nyligen framröstat och beslutet och sammanfattningen resulterade i ett Nej. 12 + 1 systemet gick inte igenom, vilket betyder att vi ännu kommer använda oss av 12, inte 13 joursjukhus.
		</p>
		<img src="http://www.somaliska.com/wp-content/uploads/2011/10/sjukhus.jpg" />
		</div>

		<div class="newsBox">
		<h3>President Mauno Koivisto med Alzheimers</h3>
		<p>Tellervo Koivisto, President Mauno Koivistos fru har givit ifrån sig att Mauno sedan tidigare insjuknat i Alzheimers och att hans närminne inte längre funkar, vilket har lett till att Tellervo nu är Maunos anhörigvårdare. Mauno är idag 93 år gammal.
		</p>
		<img src="http://g4.nh.ee/images/pix/900x585/c331c63f/mauno-koivisto-66439850.jpg" />
		</div>

		<div class="newsBox">
		<h3>Dödsskjutningar brevid restaurang</h3>
		<p>Sammanlagt 3 personer blev under slutet av 2016 skjuten bredvid restaurangen Imatra i sydöstra Finland. Gärningsmannen besköt personerna och väntade därefter i en bil på poliserna att anlända till scenen. Gärningsmannen sägs att inte hade haft något större motiv för skjutningarna, och sitter nu i fängelse tills vidare.
		</p>
		<img src="http://im.mtv.fi/image/379346/landscape16_9/1024/576/ea3752d3a2ec2c8b39510d246c864826/LV/1384061.jpg" />
		</div>

		<!-- News in Finland -->

		<?php
		}
		else if (strpos($page, "eu") !== false) {
		?>

		<!-- News in EU -->

		<div class="newsBox">
		<h3>Terrorattack i Tyskland</h3>
		<p>Under 19 December begick den misstänkte terrorism gruppen ISIS ett till terror-ingrepp mot Tyskland. En julmarknad var i full fart i huvudstaden Berlin när en lastbil hade blivit kapad och kördes därefter rakt in i folkmassan som fanns runtom marknaden. 12 st är rapporterade döda och 48 skadade. Både lastbilen, originella chauffören samt organisationen/gruppen bakom gärningsmannen har blivit identiferade sedan attacken.
		</p>
		<img src="https://www.thestar.com/content/dam/thestar/news/world/2016/12/20/berlin-christmas-market-attack-intentional-police-say/berlinchristmasmarkettrucktow.jpg" />
		</div>
		
		<div class="newsBox">
		<h3>Brexit, Storbritannien och EU</h3>
		<p>När Storbritannien bestämde sig för att införa en folkröstning om landet ska lämna eller vara kvar i EU blev det snabbt en väldigt het debatt runt ämnet. En viss folkdel ville stanna kvar för att, bland annat, inte hamna i den debatt som ännu delvist pågår runt det just nu och för att behålla marknaden mellan Storbritannien och EU, och en viss folkdel ville lämna EU för en hel del olika orsaker. Efter att rösterna hade gått igenom samt räknats var spänningen i sin topp, och när beslutet kom så påbörjade Storbritannien sin utgång från EU. Vissa självständighets frågor har kommit upp samt lika mycket så att få en till röstning för valet, men inget av det har hänt ännu så här långt.
		</p>
		<img src="https://www.timeshighereducation.com/sites/default/files/hand-holding-brexit-sign-eu-referendum.jpg" />
		</div>

		<div class="newsBox">
		<h3>Militärkupp i Turkiet</h3>
		<p>Under sommaren 2016 började en militariserad grupp i Turkiet ett försök att ta över en del av Turkiet. Försöket misslyckades på grund av att landets egentliga armé ryckte in tillräckligt snabbt och fick ett stopp på det till sist, men tyvärr hade siffran för dödsoffren redan hunnit upp till 256 och många flera skadade. Efter att incidenten hade tagits under kontroll arresterades över 3000 av de som varit med i försöket. Det sägs att motivet till attacken var att återställa landet till en bättre form med frihet och männskliga rättigheter.</p>
		<img src="http://gfx.aftonbladet-cdn.se/image/23180563/1000/normal/36dce06e8da24/TURKEY+MILITARY+COUP.JPEG-446D1.JPG" />
		</div>

		<?php
		}
		else if (strpos($page, "world") !== false) {
		?>

		<!-- World news -->

		<div class="newsBox">
		<h3>USAs Presidentval</h3>
		<p>Under hösten 2016 hettade det till i USA då presidentvalet kom närmare och närmare. De tre huvudsakliga personerna var Hillary Clinton som stod för demokraterna, Donald Trump som stod för republikanerna, och Bernie Sanders som var självständig, och när valet började närma sig de sista timmarna, var det Hillary Clinton och Donald Trump som var häl i häl. Slutligen, efter den intensiva striden mellan vem som skulle väljas, så drog Donald Trump hem segern för republikanerna.
		</p>
		<img src="http://www.2016usaelection.org/wp-content/themes/atahualpa/images/2016-election.jpg" />
		</div>

		<div class="newsBox">
		<h3>Terrorattack i Syrien</h3>
		<p>Terrorgruppen ISIS som de flesta känner igen från deras angrepp på historiska platser, städer och dess invånare, angrep en till Syrisk stad (Deir ez-Zor) i Januari, 2016. Med 135-300+ rapporterade döda (både soldater men också invånare) och en okänd mängd skadade, så hör det till det en av de större massakerna i området under Våren.
		</p>
		<img src="http://www.newyorker.com/wp-content/uploads/2015/11/Filkins-War-Syria-Russian-Jet-1200.jpg" />
		</div>

		<div class="newsBox">
		<h3>Långdistans raket avfyrad från Nordkorea</h3>
		<p>Nordkorea avfyrade i börjanet av 2016 en långdistans raket utan tillstånd från UN och flera andra internationella organisationer. Detta hände också en månad efter att de utan tillstånd hade testat ett atomvapen. Nord korea har sedan dess påstått att avfyrandet ända ändamål var för vetenskapliga orsaker, men flera andra länder tror att det ändå troligen var ett döljt vapentest.</p>
		<img src="http://static3.businessinsider.com/image/4f703e31eab8ea5b40000001/ignoring-threats-north-korea-moves-its-long-range-rocket-to-the-launch-pad.jpg" />
		</di>

		<?php
		}
		?>

		<hr />
		<footer>
			<p>© Copyright Reserved 2017</p>
		</footer>

		</div>
	</body>
</html>