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
	<link rel="stylesheet" href="//neotemp.herokuapp.com/style/font-awesome.css?0.6043739806135013" />
	<link rel="stylesheet" href="//neotempserver.herokuapp.com/theme/panels.css?0.05775719039551208" />
	<link rel="stylesheet" href="//neotempserver.herokuapp.com/theme/main.css?0.9202030300571862" />
	<link rel="stylesheet" href="//neotemp.herokuapp.com/style/battle.css?0.08661829841673319" />
	<link rel="stylesheet" href="//neotemp.herokuapp.com/style/replay.css?0.45114571543086046" />
	<link rel="stylesheet" href="//neotemp.herokuapp.com/style/utilichart.css?0.8059476218194497" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neotempserver.herokuapp.com/?0.7134226614404964"><img src="//neotempserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4489597129276106" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4287143543142762">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6376757305434331">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neotempserver.herokuapp.com/ladder/?0.9825232277949927">Ladder</a></li>
				<li><a class="button nav-last" href="//neotempserver.herokuapp.com/forums/?0.9433592156415367">Forum</a></li>
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
	<script src="//neotemp.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2820693565534993"></script>
	<script src="//neotemp.herokuapp.com/js/lib/lodash.core.js?0.42213163774206053"></script>
	<script src="//neotemp.herokuapp.com/js/lib/backbone.js?0.39064875251824294"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6296783281209344"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neotemp.herokuapp.com/js/lib/jquery-cookie.js?0.47267171563446264"></script>
	<script src="//neotemp.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4501214823846984"></script>
	<script src="//neotemp.herokuapp.com/js/battle-sound.js?0.30087903478903133"></script>
	<script src="//neotemp.herokuapp.com/config/config.js?0.007076173996897639"></script>
	<script src="//neotemp.herokuapp.com/js/battledata.js?0.7762873817468225"></script>
	<script src="//neotemp.herokuapp.com/data/pokedex-mini.js?0.46801646832856747"></script>
	<script src="//neotemp.herokuapp.com/data/pokedex-mini-bw.js?0.3334728349783027"></script>
	<script src="//neotemp.herokuapp.com/data/graphics.js?0.6228224923266803"></script>
	<script src="//neotemp.herokuapp.com/data/pokedex.js?0.04144820603515598"></script>
	<script src="//neotemp.herokuapp.com/data/items.js?0.6007051524548506"></script>
	<script src="//neotemp.herokuapp.com/data/moves.js?0.7731662200348575"></script>
	<script src="//neotemp.herokuapp.com/data/abilities.js?0.8708623064905194"></script>
	<script src="//neotemp.herokuapp.com/data/teambuilder-tables.js?0.8305181039071778"></script>
	<script src="//neotemp.herokuapp.com/js/battle-tooltips.js?0.6255168515742382"></script>
	<script src="//neotemp.herokuapp.com/js/battle.js?0.8730666242708758"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
