<!doctype html>
<html lang="nl">

<head>
	<meta charset="utf-8">
	<style>
		body {
			height: 100%;
			margin: 0;
			padding: 0;
			display: flex;
			align-items: center;
			justify-content: center;
			background: rgb(255, 173, 122);
			background: linear-gradient(45deg, rgba(255, 173, 122, 1) 0%, rgba(255, 179, 186, 1) 50%, rgba(89, 174, 168, 1) 100%);
		}

		html {
			height: 100%;
		}

		h1 {
			font-size: 10em;
			color: white;
		}

		p {
			font-size: 3em;
			color: white;
		}

		@font-face {
			font-family: 'OtypicalHeadline';
			src: url('OtypicalHeadline-Medium.woff2') format('woff2'),
		}

		#denkhetniet {
			text-align: center;
			justify-content: center;
			align-items: center;
			font-family: OtypicalHeadline, sans-serif;
		}

		#antwoord {
			color: black;
		}

		a:link {
			color: white;
		}

		a:visited {
			color: white;
		}

		a:hover {
			color: black;
		}
	</style>
	<title>Heeft Odido al IPv6?</title>
</head>

<body>
	<div id="denkhetniet">
		<h1><span id="antwoord">Nee.</span> Helaas.</h1>
		<p>
			<?php
			if (filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
				echo "En jij ook niet! (of je browser prefereert IPv4 om \$reden) 👎";
			} elseif (filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
				echo "Maar jij wel! 👍";
			} else {
				echo "En daar vind ik wat van. ";
			}
			?>
		</p>
		<p id="het-kan-ook-zo-oliebol">
			<a href="https://www.kpn.com/service/internet/ipv6.htm">Het</a>
			<a href="https://www.delta.nl/klantenservice/internet-en-wifi/ipv6/">kan</a>
			<a href="https://www.ziggo.nl/klantenservice/internet-wifi/ipv6-bij-ziggo">ook</a>
			<a href="https://freedom.nl/nieuwsartikel/freedom-krijgt-hoogste-score-voor-ipv6-gebruik-in-nederland">zo</a>.
			Odido.
			<a href="https://stats.labs.apnic.net/ipv6/AS1136?c=NL&p=1&v=1&w=30&x=1">H</a><a href="https://stats.labs.apnic.net/ipv6/AS33915?c=NL&p=1&v=1&w=30&x=1">e</a><a href="https://stats.labs.apnic.net/ipv6/AS15542?c=NL&p=1&v=1&w=30&x=1">t</a>
			<a href="https://stats.labs.apnic.net/ipv6/AS206238?c=NL&p=1&v=1&w=30&x=1">k</a><a href="https://stats.labs.apnic.net/ipv6/AS43995?c=NL&p=1&v=1&w=30&x=1">a</a><a href="https://stats.labs.apnic.net/ipv6/AS14593?c=NL&p=1&v=1&w=30&x=1">n</a>
			<a href="https://stats.labs.apnic.net/ipv6/AS15435?c=NL&p=1&v=1&w=30&x=1">o</a><a href="https://stats.labs.apnic.net/ipv6/AS12414?c=NL&p=1&v=1&w=30&x=1">o</a><a href="https://stats.labs.apnic.net/ipv6/AS207375?c=NL&p=1&v=1&w=30&x=1">k</a>
			<a href="https://stats.labs.apnic.net/ipv6/AS25596?c=NL&p=1&v=1&w=30&x=1">z</a><a href="https://stats.labs.apnic.net/ipv6/AS207176?c=NL&p=1&v=1&w=30&x=1">o</a>.
		</p>
	</div>
	<!-- Matomo -->
	<script>
		var _paq = window._paq = window._paq || [];
		/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
		_paq.push(['trackPageView']);
		_paq.push(['enableLinkTracking']);
		(function() {
			var u = "//stats.it53.nl/";
			_paq.push(['setTrackerUrl', u + 'matomo.php']);
			_paq.push(['setSiteId', '8']);
			var d = document,
				g = d.createElement('script'),
				s = d.getElementsByTagName('script')[0];
			g.async = true;
			g.src = u + 'matomo.js';
			s.parentNode.insertBefore(g, s);
		})();
	</script>
	<!-- End Matomo Code -->
</body>

</html>
