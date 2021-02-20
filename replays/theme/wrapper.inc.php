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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.9423946903288363" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.3369558957202603" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.8737032975353569" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.17920728215809323" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.5981536411770936" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.6940760637785233" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.818200704634231"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.49619068198998373" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3653948251032306">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.22228468694708226">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.09827810352333843">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.10293367299648781">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5617727696104151"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.2147908971915682"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.7112903665904671"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08668751588776158"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.5911230107112806"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.27097997266582996"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.07912716562875821"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.5887185072810226"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.7372038654553501"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.49746076266210393"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.6563377882800119"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.774548419323678"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.22734407544704482"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.31720276796792657"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.5579659816901714"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.6147586416961257"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.03549231338552161"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.23024650594733354"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.5471620261482706"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
