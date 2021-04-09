<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.15006951553093062" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.2630378307263588" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.6647512684896186" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.4098353989281558" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.9045041973189261" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.37618803194154604" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.8086462359706201"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.33676397496461985" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5791130128597355">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.11995969561966491">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.6579948824500164">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.03984245516165985">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.052229962835378174"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.8255007063160933"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.2537483717300899"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5079132400705322"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.4647724274692504"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.49056500634486766"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.51136655058888"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.012009380585740637"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.7460426385642223"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.6257096667567437"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.6702354798447232"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.8363364774853543"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.9314510319327738"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.1922963901087975"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.5413016480653439"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.3146530292682186"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.8942265803703016"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.8978851222100772"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.9708046883777366"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
