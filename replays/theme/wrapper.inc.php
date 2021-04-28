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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.22562743794342888" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.9465108889810094" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.31543858130454194" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.8996842228224955" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.41180466115018133" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.9351404161873833" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.9063524520309911"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.23938920822449372" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.667522966709903">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7311119048394599">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.2162785709787025">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.9013208648113884">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9541080173275567"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.99818121523343"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.746079171643367"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9349555588248213"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.22750060800790117"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6454574392857766"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.3130310546317361"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.5400230284448575"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.7907162981285893"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.09102694276812717"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.0015370684072708585"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.06094039636253035"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.7866306037720532"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.6919823251027288"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.7364864073738095"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.6212348428792234"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.056772133822839965"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.9930208249560719"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.8105169831550298"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
