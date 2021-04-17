<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Zenju">
<meta property="og:title" content="FreeFileSync" />
<meta property="og:type" content="product" />
<meta property="og:url" content="https://freefilesync.org/" />
<meta property="og:image" content="https://freefilesync.org/images/FreeFileSync.png" />
<meta property="og:description" content="Download FreeFileSync 11.9. FreeFileSync is a free open source data backup software that helps you synchronize files and folders on Windows, Linux and macOS." />
<meta property="og:site_name" content="FreeFileSync.org" />
<link rel="icon" type="image/x-icon" href="/images/freefilesync.ico">
<link rel="alternate" type="application/rss+xml" title="FreeFileSync News Feed" href="/news-feed.php">
<style>
		@font-face {
		  font-family: 'Indie Flower';
		  font-style: normal;
		  font-weight: 400;
		  src: local('Indie Flower'), local('IndieFlower'), url(/IndieFlower.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		  font-display: swap;
		}
	</style>
<style>*
{
    margin:  0;
    padding: 0;
}

h1
{
    display: inline-block;
	vertical-align: middle;
}

h2
{
	font-size: 26px;
	font-weight: normal;
	margin: 10px 0;
    text-align: left;
}

h3
{
	font-size: 22px;
	font-weight: normal;
	margin: 10px 0;
    text-align: left;
}

html
{
    text-align: center;
	background: linear-gradient(white, #e6e6e6 800px);
}

body
{
    min-height: 100vh;
    display: inline-flex;
    flex-direction: column;
    align-items: stretch;

	font-family: -apple-system, "Segoe UI", Arial, Tahoma, Helvetica, sans-serif;
    /*-> Arial: Ubuntu/FireFox bug with padded input control and THB or TRY currency symbols => seems fixed */
    font-size: 16px;
    line-height: 150%;
    color: #3e3629;
	background: linear-gradient(to right, #ededed, #c9d7ce);
    box-shadow: 1px 1px 8px #888;
}

a
{
  color: #368ad2;
}

a:hover
{
	color: #4ae;
}

a:visited
{
    color: #4b279b;
}

.direct-download-link
{
	text-decoration: none;
	font-weight: bold;
	font-size: 110%;

    /*Fix "Clickable elements too close together" */
    display: block;
    margin-bottom: 1px;
}

a.direct-download-link:hover
{
	text-decoration: underline;
}

a.direct-download-link:visited
{
    color: #368ad2; /*same color as default!*/
}

a.ffs-download-button
{
    display: inline-block;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    color: #000;
    text-decoration: none;
    outline: none;
    background: linear-gradient(#1fa526, #7bff4b 60%);
    border-radius: 5px;
    border: 2px solid #3f3e3e;
    box-shadow: 1px 1px 2px #888;
    padding: 3px 55px;
}
a.ffs-download-button:hover
{
    box-shadow: 0px 0px 0px 4px #4ae
}

#centerArea
{
    flex-grow: 1;
	background: url(/images/background-logo.png) no-repeat;
	background-position: 20px 125px;
}

.topnav
{
    display: none;
    margin: 0 10px;
    text-align: left;
}

header
{
    background: linear-gradient(30deg, rgb(21, 161, 29), rgb(85, 186, 102), white 36%);
    border-radius: 10px;
    box-shadow: 3px 3px 5px #888;
    margin: 10px 20px;
}

footer
{
    flex-shrink: 0; /*as child of body*/
    border-top: 1px solid #AAA;
    padding: 15px 25px;
    display: flex; /*for child elements*/
}

section
{
    width: 748px; /*make exact room for banner: leaderboard (728 x 90) + 20px margin */
    margin-bottom: 10px;
	text-align: left;
	overflow: hidden;
}

.sub-section
{
	box-shadow: 3px 3px 5px #888;
	border-radius: 10px;
	background-color: white;
	padding: 10px 0;
	margin: 0 20px 10px 0; /*coordinate right margin with leaderboard size (728x90)!!! */
}

.center-parent
{
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}

.section-banner
{
    /*min-height: 90px; width: 728px; -> support Google ad size optimization*/
    line-height: 0;
	background: rgba(255, 255, 255, 0.6); /* #fffa, #ffffffaa forms not working in Chrome!*/
    margin: 0 20px 10px 0;
}

.inline-banner
{
    /*min-height: 90px; width: 728px; -> support Google ad size optimization*/
    line-height: 0;
}

.floating-banner
 {
     min-width: 336px; /*support 336 x 280, large rectangle*/
     /*min-height: 250px; -> support Google ad size optimization*/
     float: right;
     margin-left: 5px;
     line-height: 0;
 }

 /* #header-banner
 {
     line-height: 0;
 	background: rgba(255, 255, 255, 0.6);
     margin: 0 20px 10px 0;
 } */

#alt-banner
{
	display: none;
	border: 1px solid black;
    margin: 0 20px 10px 0;
	background: linear-gradient(to right, #ffd6d6, #eeecff);
	text-align: justify;
	padding: 10px 20px;
}
.alt-banner-image
{
	float: right;
	margin-left: 10px;
	line-height: 0;
	border: 3px solid #3fa44b;
	border-radius: 10px;
	background: linear-gradient(to right, #c8e7a6, #f0f3ed);
    box-shadow: 1px 1px 8px #888;
}
a.alt-banner-image:hover
{
	background: #bcbff5;
	border-color: #f9fff9;
}

a.header-url-area
{
	display: block;
	text-decoration: none;
	outline: none;
    padding: 3px 0;
}

.header-logo
{
	vertical-align: middle;
	margin-right: 5px;
}

.header-label
{
    background: linear-gradient(to right, #1da514, #7ff62b, #80e642);
    /*http://nimbupani.com/using-background-clip-for-text-with-css-fallback.html*/
    -webkit-background-clip: text; /*still required by Chrome*/
    /*background-clip: text; -> W3C validation error!*/
    color: transparent;
    -webkit-text-stroke: 1px #888;
    font-size: 52px;
    line-height: 52px;
}

/* IE11-specific hackery: no support for "background-clip: text" */
@media all and (-ms-high-contrast: none), (-ms-high-contrast: active)
{
	.header-label
	{
        color: #3eb334;
		background: inherit;
	}
}

.header-description
{
    font-family: 'Indie Flower', cursive;
    font-size: 21px;
    line-height: 32px;
	color: #777;
    display: block;
}

.noselect
{
    -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
    -khtml-user-select: none; /* Konqueror HTML */
    -moz-user-select: none; /* Firefox */
    -ms-user-select: none; /* Internet Explorer/Edge */
    user-select: none; /* Non-prefixed version, currently supported by Chrome and Opera */
}

.screen-snippet
{
	box-shadow: 1px 1px 2px #888;
    max-width: 100%;
    height: auto;
}

.description
{
	padding: 0 30px;
	text-align: justify;
}

.content-padding
{
    padding: 0 30px;
}

.content-margin
{
    margin: 0 30px;
}

.half-line { line-height: 50%; }

.horizontal-line
{
	border-bottom: 1px solid #AAA;
	margin: 10px 0;
}

nav
{
	float:left;
	margin: 0px 15px 20px 20px;
}


.menu-links a
{
	box-shadow: 1px 1px 2px #888;
	/*bug Safari incorrectly considers the color part of fully transparent ARGB colors! => use rgba(255, 255, 255, 0)); => seems fixed?*/
    background: linear-gradient(to right, white, rgba(255, 255, 255, 0));
	border-radius: 3px;
	outline: none;
    margin-bottom: 8px;
    text-decoration: none;
}

.menu-links a:hover
{
	background: linear-gradient(to right, rgba(1, 129, 0, 0.30), rgba(54, 205, 12, .30), rgba(225, 254, 188, .30));
}

.topnav .menu-links a
{
	display: inline-block;
}

nav .menu-links a
{
	display: block;
    font-weight: 300;
}

nav a.download-link,
nav a.forum-link
{
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

nav a.forum-link
{
    margin-right: 8px;
	line-height: 90%;
}

a.donation-link,
a.thank-you-link
{
	border: solid 2px #99aabb;
	box-shadow: 3px 3px 4px #777;
    background: #f8f8f8;
}

body#about       a.about-link,
body#videos      a.videos-link,
body#screenshots a.screenshots-link,
body#download    a.download-link,
body#faq         a.faq-link,
body#manual      a.manual-link,
body#archive     a.archive-link,
body#vision      a.vision-link,
body#thank-you   a.thank-you-link
{
	box-shadow: 3px 3px 2px 1px #777;
	background: linear-gradient(to right, rgb(1, 129, 0), rgb(54, 205, 12), rgb(225, 254, 188));
    /*font-weight: initial;*/
}

.menu-label
{
	display: inline-block;
    color: #3e3629;
	font-size: 20px;
    text-shadow: #fff 1px 1px 1px;
    padding: 10px;
}

nav .donation-link  .menu-label,
nav .thank-you-link .menu-label
{
    padding: 0;
}

.menu-label-description
{
	font-size: 70%;
}

.changelog-header
{
	font-size: 16px;
}

section ul, section ol
{
	padding-left: 20px;
}

a.social-button
{
	display: inline-block !important;
	line-height: 0;
	padding: 3px;
}
a.social-button:hover
{
	background-color: #4ae
}

.accordion-button
{
    background-color: #eee;
    cursor: pointer;
    border: none;
    outline: none;
    transition: 0.2s;
	white-space: normal;
}
.accordion-button.active,
.accordion-button:hover
{
    background-color: #ddd;
}
.accordion-button:after
{
    content: '\02795'; /* Unicode character for "plus" sign (+) */
    color: #777;
    float: right;
    margin-left: 5px;
}
.accordion-button.active:after
{
    content: "\2796"; /* Unicode character for "minus" sign (-) */
}


/*remove dotted selection border on FireFox*/
button::-moz-focus-inner
{
	border: 0;
}

input::-moz-focus-inner
{
	border: 0;
}

a.thumbnail
{
	display:inline-block;
	padding: 4px;
	line-height: 0;
	border-radius: 6px;
}
a.thumbnail:hover
{
	background-color:#4ae
}

.link-image-left
{
    vertical-align: middle;
    padding-right: 5px;
}

.highlight-border
{
    display: inline-block;
    padding: 2px;
    border-radius: 3px;
    outline: none;
}
.highlight-border:hover
{
    box-shadow: 0px 0px 0px 3px #4ae
}

.command-line
{
    text-align: left;
    font-family: "Courier New", Courier, monospace;
}
.file-path
{
    text-align: left;
    font-family: Consolas, "Courier New", Courier, monospace;
}

.command-line-comment
{
	color: #808080;
	font-weight: bold;
	font-style: italic;
}

.external-link
{
    background: url(/images/external-link.svg) no-repeat 0 5px;
    background-size: .9em;
    padding-left: 1.1em;
}
/* alternative? this is patently insane! https://stackoverflow.com/a/53336754 https://codepen.io/sosuke/pen/Pjoqqp */

.greybox
{
	padding: 6px 15px;
	background: #f8f8f8;
	box-shadow: 1px 1px 4px #888;
    margin: 5px 0; /*compensate for box-shadow*/
}
.bluebox
{
	padding: 6px 15px;
	background: #ccccff;
	border: 1px solid #000080;
    margin: 5px 0;
}

.greybox li, .bluebox li
{
    margin-bottom: 5px;
}

.rounded-box
{
	border-radius: 7px;
	background: #f8f8f8;
	box-shadow: 1px 1px 4px #888;
}

.os-logo
{
	vertical-align: middle;
	padding-right: 5px;
}

.modern-button
{
	padding: 6px 12px;
	font-weight: bold;
    font-size: 15px; /*Safari defaults most controls to 11px!*/
	background-image: linear-gradient(#fcfcfc,#eee);
	border: 1px solid #d5d5d5;
	border-radius: 3px;
	color: #333;
	cursor: pointer;
    transition: border-color .2s ease-in-out,box-shadow .2s ease-in-out;
    box-shadow: 1px 1px 2px #888;
}
.modern-button:hover
{
	background-image: linear-gradient(#eee, #ddd);
}
.modern-button:focus
{
	border-color: #51a7e8;
    box-shadow: 1px 1px 2px #51a7e8;
}
.modern-button.active
{
    background-image: none;
    border-color: #b5b5b5;
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.15);
}

.modern-input
{
	padding: 6px 0 6px 6px;
	border: 1px solid #ccc;
	border-radius: 3px;
	color: #333;
    font-family: inherit; /*fixes Ubuntu Firefox bug with padded input control and THB or TRY currency symbols in the Arial font*/
    font-size: 14px; /*Safari defaults most controls to 11px!*/
    transition: border-color .2s ease-in-out,box-shadow .2s ease-in-out;
}
.modern-input:focus
{
	border-color: #51a7e8;
	box-shadow: 0 0 5px rgba(81,167,232,0.5);
}


@keyframes spinner-item
{
    to { transform: rotate(360deg); }
}


/*do NOT apply to @media print! consider user manual PDF*/
@media screen and (max-width: 1050px)
{
    .responsive-hide { display: none !important; }
    .responsive-show { display: block !important; }

    header
    {
        border-radius: initial;
        margin: 0 0 10px 0;
    }
    body
    {
        display: flex;
    }
    .topnav
    {
        display: block;
    }
    section
    {
        width: initial;
    }
    .sub-section, #header-banner, #alt-banner, .section-banner
    {
        margin-right: 0;
    }
    .description, .content-padding
    {
        padding: 0 15px;
    }
    .content-margin
    {
        margin: 0 15px;
    }
    .floating-banner
    {
        float:  initial;
        margin: initial;
    }
}
</style>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-65280758-1"></script>
<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

				gtag('config', 'UA-65280758-1', { 'anonymize_ip': true });
	</script>
<script>
	function canUseCookies()
	{
		if (canUseCookies.buf === undefined) 			canUseCookies.buf = true;
		return canUseCookies.buf;
	}

		if (!canUseCookies())
	{
		var script = document.createElement("script");
		script.async = "async";
		script.src = "/cookie/init.js.static.php";
		document.head.appendChild(script);

		var link  = document.createElement("link");
		link.rel  = "stylesheet";
		link.href = "/cookie/cookieconsent.min.css";
		document.head.appendChild(link);
	}
</script>
<script>//-----------------------------------------
// KEEP IT SHORT! => file will be inlined!
//-----------------------------------------

function toggleBlock(id)
{
	var e = document.getElementById(id);
	if (e.style.display == "none")
		e.style.display = "block";
	else
		e.style.display = "none";
}


//https://www.w3schools.com/howto/howto_js_accordion.asp
function toggleArcadion(button, panel)
{
	//toggle between adding and removing the "active" class, to highlight the button that controls the panel

	if (panel.style.display === "none")
		panel.style.display = "block";
	else
		panel.style.display = "none";

	if (panel.style.display === "none")
		button.classList.remove("active");
	else
		button.classList.add("active");
}


function forEachByClassName(className, onItem)
{
	var items = document.getElementsByClassName(className);
	for (var i = 0; i < items.length; ++i)
		onItem(items[i]);
}


function sendHttpPost(url, parameters)
{
	var form = document.createElement("form");
	form.setAttribute("method", "POST");
	form.setAttribute("action", url);

	for (var name in parameters)
		if (parameters.hasOwnProperty(name))
		{
			var field = document.createElement("input");
			field.setAttribute("type", "hidden");
			field.setAttribute("name",  name);
			field.setAttribute("value", parameters[name]);
			form.appendChild(field);
		}

	document.body.appendChild(form);
	form.submit();
	//alternative: XMLHttpRequest
}


function getCookie(name)
{
	var value = '; ' + document.cookie;
	var parts = value.split('; ' + name + '=');
	return parts.length != 2 ? '' : decodeURIComponent(parts.pop().split(';').shift());
}


function setCookie(name, value, expiryDays)
{
	var exdate = new Date();
	exdate.setDate(exdate.getDate() + expiryDays);

	var cookie =
	[
		name + '=' + encodeURIComponent(value),
		'expires=' + exdate.toUTCString(),
		'path=/',
		'domain=.freefilesync.org', //consider local Apache server: it doesn't use HTTPS and domain is local IP
		'secure'                    //
	];

	document.cookie = cookie.join(';');
}


// //list of country codes returned: http://country.io/names.json
// function detectCountryByIP(onResponse)
// {
// 	var cc = getCookie("country_code");
// 	if (cc)
// 		return onResponse(cc);
//
// 	//examples of free geo ip providers: https://github.com/insites/cookieconsent/blob/master/src/cookieconsent.js
// 	var request = new XMLHttpRequest()
// 	request.open("GET", "https://ipinfo.io/json", true /*async*/);
// 	request.onload = function(event)
// 	{
// 		if (event.target.status != 200)
// 			throw "Failed to load ipinfo.io. Status code: " + event.target.status;
//
// 		var cc = event.target.response.country;
// 		if (!cc)
// 			throw "Failed to parse ipinfo.io response: " + JSON.stringify(event.target.response);
//
// 		setCookie("country_code", cc, 1 /*expiryDays*/);
// 		onResponse(cc);
// 	};
// 	request.onerror = function(event) { throw "Failed to load ipinfo.io."; };
// 	request.responseType = "json";
// 	request.send(); //throw Exception
// }
</script>

<script>
		function registerOnAdcodeFailed(fun)
		{
			if (window.adcodeFailed === true)
				fun();
			else
				(onAdcodeFailed = window.onAdcodeFailed || []).push(fun);
		}

		function notifyAdcodeFailed()
		{
			if (window.onAdcodeFailed !== undefined)
				window.onAdcodeFailed.forEach(fun => fun());
			window.adcodeFailed = true;
		}
	</script>
<script>
				if (getCookie("donation") == "" &&
					getCookie("donated" ) == "" ) //legacy cookie! (used until 2020-03-06)
				{
					var script = document.createElement("script");
					script.async   = "async";
					script.src     = "//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js";
					script.onerror = notifyAdcodeFailed;
					document.head.appendChild(script);
				}
			</script>
<style>
			.email-crypt::before { content: attr(data-name) attr(data-at); }
			.email-crypt::after  { content: attr(data-domain); }
		</style> <meta name="description" content="Downloads the newest FreeFileSync for local installation and FreeFileSync portable for use on USB sticks.">
<title>Download the Latest Version - FreeFileSync</title>
<link rel="canonical" href="https://freefilesync.org/download.php">
<style>
		.donation-edition-banner
		{
			display: block;
			text-decoration: none;
			outline: none;
			color: inherit !important;
			box-shadow: 1px 1px 2px #888;
			font-size: 105%;
		    background: linear-gradient(40deg, rgb(164, 255, 116), rgb(60, 239, 42), rgb(185, 255, 148) 400px);
		    padding: 3px 5px 6px 8px;
		    border: 1px solid #d5d5d5;
		    border-radius: 4px;
			margin: 0 5px 10px 5px;
		}
		.donation-edition-banner:hover
		{
		    background: linear-gradient(40deg, rgb(164, 255, 116), rgb(204, 255, 0), rgb(185, 255, 148) 400px);
		}

		.donation-edition-feature
		{
			color: #466949;
			font-size: 90%;
			padding: 1px 0 0 5px;
			display: inline-block;
			background: linear-gradient(to right, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0)); /* #fffa, #ffffffaa forms not working in Chrome!*/
		    display: flex;
		    align-items: center;
		}

		.donation-edition-feature img
		{
		    margin-right: 4px;
		}

		.change-item
		{
			display:flex;
			padding-bottom:.4em;
		}
	</style>
</head>
<body id="download">
<div id="centerArea">
<header>
<a class="header-url-area" href="/">
<img src="/images/FreeFileSync.png" width="64" height="64" class="header-logo responsive-hide" alt="">
<h1>
<span class="header-label">FreeFileSync</span>
<span class="header-description">Open Source File Synchronization</span>
</h1>
</a>
</header>
<div class="topnav">
<span class="menu-links">
<a class="about-link" href="/"><span class="menu-label">About</span></a>
<a class="videos-link" href="/tutorials.php"><span class="menu-label">Tutorials</span></a>
<a class="screenshots-link" href="/screenshots.php"><span class="menu-label">Screenshots</span></a>
<a class="vision-link" href="/vision.php"><span class="menu-label">Vision</span></a>
<a class="download-link" href="/download.php">
<span class="menu-label">
<img src="/images/download-down-arrow.png" width="26" height="22" style="vertical-align:middle; margin:-12px 0 -10px 0;" alt=""> Download</span>
</a>
<a class="archive-link" href="/archive.php"><span class="menu-label">Archive</span></a>
<a class="forum-link" href="/forum/"><span class="menu-label">
<img src="/images/forum.png" width="24" height="24" style="vertical-align:middle; margin:-15px 0 -10px 0;" alt=""> Forum</span>
</a>
<a class="faq-link" href="/faq.php"><span class="menu-label">FAQ</span></a>
<a class="manual-link" href="/manual.php"><span class="menu-label">Manual</span></a>
<a class="donation-link" href="/donate" style="display:none">
<span class="menu-label"><img src="/images/freefilesync-heart.png" width="32" height="30" style="vertical-align:middle; margin:-12px 0 -10px 0;" alt=""> Donate</span>
</a>
<a class="thank-you-link" href="#" style="display:none">
<span class="menu-label"><img src="/images/freefilesync-heart.png" width="32" height="30" style="vertical-align:middle; margin:-12px 0 -10px 0;" alt=""> Thanks,
<span class="donor-name" style="font-weight:600"></span>
</span>
</a>
<span style="display:inline-block; vertical-align:middle;">
<a class="social-button" target="_blank" rel="nofollow noopener" href="https://twitter.com/intent/tweet?text=Download+FreeFileSync%2C+the+free+data+backup+software+to+synchronize+files+and+folders%3A+https%3A%2F%2Ffreefilesync.org&url=https%3A%2F%2Ffreefilesync.org">
<img src="/images/share-twitter.png" width="32" height="32" alt="Tweet with Twitter" title="Tweet with Twitter"></a>
<a class="social-button" target="_blank" rel="nofollow noopener" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffreefilesync.org">
<img src="/images/share-facebook.png" width="32" height="32" alt="Like on Facebook" title="Like on Facebook"></a>
<a class="social-button" href="/news-feed.php" rel="alternate" type="application/rss+xml">
<img src="/images/share-rss.png" width="32" height="32" alt="FreeFileSync News Feed" title="Follow the FreeFileSync news feed"></a>
</span>
</span>
</div>
<nav class="responsive-hide">
<div class="menu-links">
<a class="about-link" href="/"><span class="menu-label">About FreeFileSync</span></a>
<div style="display:flex">
<div>
<a class="videos-link" href="/tutorials.php"><span class="menu-label">Tutorials</span></a>
<a class="screenshots-link" href="/screenshots.php"><span class="menu-label">Screenshots</span></a>
<a class="vision-link" href="/vision.php"><span class="menu-label">Vision</span></a>
</div>
<div style="flex-grow:1; margin-left:8px; display:flex; flex-direction:column">
<a class="download-link" href="/download.php">
<span class="menu-label">
<img src="/images/download-down-arrow.png" width="26" height="22" style="vertical-align:middle; margin-top:-10px; margin-bottom:-10px" alt=""><br>
Download
</span>
</a>
<a class="archive-link" href="/archive.php"><span class="menu-label">Archive</span></a>
</div>
</div>
<div style="display:flex">
<a class="forum-link" href="/forum/">
<div class="menu-label">
<div style="margin-bottom: 8px">
<img src="/images/forum.png" width="24" height="24" style="vertical-align:middle; margin-top:-15px; margin-bottom:-10px" alt=""> Forum
</div>
<div class="menu-label-description">
Report Bugs<br>
Discuss Features
</div>
</div>
</a>
<div>
<a class="faq-link" href="/faq.php"><span class="menu-label">FAQ</span></a>
<a class="manual-link" href="/manual.php"><span class="menu-label">Manual</span></a>
</div>
</div>
<a class="donation-link" href="/donate" style="display:none">
<span class="menu-label">
<img src="/images/freefilesync-heart.png" width="47" height="44" style="vertical-align:middle; padding:5px 0;" alt=""> Donate
</span>
</a>
<a class="thank-you-link" href="#" style="display:none">
<span class="menu-label" style="font-size:initial; padding:5px 0;">
<span style="margin-bottom:-5px;"><img src="/images/freefilesync-heart.png" width="24" height="22" style="vertical-align:middle;" alt=""> Thank you,</span><br>
<span class="donor-name" style="font-weight:600"></span>
</span>
</a>
<script>
										var tx        = getCookie('donation');
					var donorName = getCookie('donor_name');

					if (tx != '') //avoid CLS: change GUI only if non-default view
					{
						forEachByClassName('donation-link',  function(item){ item.style.display = "none"; });
						forEachByClassName('thank-you-link', function(item){ item.style.display = ""; });
						forEachByClassName('thank-you-link', function(item){ item.href = '/thank-you.php?tx=' + tx; });
						forEachByClassName('donor-name',     function(item){ item.textContent = donorName; });
					}
				</script>
<div class="half-line">&nbsp;</div>
<div>
<a class="social-button" target="_blank" rel="nofollow noopener" href="https://twitter.com/intent/tweet?text=Download+FreeFileSync%2C+the+free+data+backup+software+to+synchronize+files+and+folders%3A+https%3A%2F%2Ffreefilesync.org&url=https%3A%2F%2Ffreefilesync.org">
<img src="/images/share-twitter.png" width="32" height="32" alt="Tweet with Twitter" title="Tweet with Twitter"></a>
<a class="social-button" target="_blank" rel="nofollow noopener" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffreefilesync.org">
<img src="/images/share-facebook.png" width="32" height="32" alt="Like on Facebook" title="Like on Facebook"></a>
<a class="social-button" href="/news-feed.php" rel="alternate" type="application/rss+xml">
<img src="/images/share-rss.png" width="32" height="32" alt="FreeFileSync News Feed" title="Follow the FreeFileSync news feed"></a>
</div>
</div>
</nav>
<section>
<div id="alt-banner">
<!--googleoff: snippet-->
<b>It looks like an ad blocker has blocked all the ads.</b>
<a href="/donate#support" class="alt-banner-image"><img src="/images/freefilesync-heart.png" width="65" height="60" alt=""></a>
The FreeFileSync project is 100% dependent on ad revenue and donations to stay alive. Instead of the ads, and
after FreeFileSync has proven useful to you, please think about supporting with a donation.
<!--googleon: snippet-->
<br>
</div>
<script>
				function showBannerAlternative()
				{
					
					var banner = document.getElementById("alt-banner");
					banner.style.display = "block";

										var img = document.createElement('img');
					img.src = "/download.php.adblock";
					img.height="70";
					img.style.cssText = "float:left; margin:-4px 5px 0 -10px;";
					banner.prepend(img);
				}

								registerOnAdcodeFailed(showBannerAlternative);
			</script>
<div class="sub-section">
<div class="description">
<h2 id="support">Support the Project</h2>
<img src="/images/freefilesync-heart.png" width="65" height="60" alt="" style="float:left; margin-right:10px;">
<a href="vision.php">FreeFileSync strives</a> to provide high-quality software with zero open bugs. This is achieved by fast release cycles and free 24/7 support for everyone.<br>
If you find FreeFileSync useful, please consider supporting the project by donating.
</div>
<div class="half-line">&nbsp;</div>
<div class="description">
Your donation will fund the development of new features and help to keep up continuous program maintenance.
This ensures that FreeFileSync stays up to date and always provides the best performance on constantly changing hardware and software.
</div>
<div style="clear:both"></div>
<div class="half-line">&nbsp;</div>
<div style="margin: 0 5px; display:flex; flex-wrap:wrap;">
<div style="flex-grow:1; flex-basis:180px;">
<a href="/faq.php#donation-edition" title="What are the benefits of the FreeFileSync Donation Edition?" class="donation-edition-banner">
Donate and get the <b>Donation Edition</b> with bonus features:<br>
<div class="donation-edition-feature"><img src="/images/de-parallel.png" width="21" height="16" alt=""> <div><b>parallel</b> file copy</div></div>
<div class="donation-edition-feature"><img src="/images/de-auto.png" width="21" height="16" alt=""> <div><b>auto</b>-updater</div></div>
<div class="donation-edition-feature"><img src="/images/de-portable.svg" width="20" height="20" alt=""> <div><b>portable</b> zip</div></div>
<div class="donation-edition-feature"><img src="/images/de-email.png" width="21" height="16" alt=""> <div><b>email</b> notifications</div></div>
<div class="donation-edition-feature"><img src="/images/de-silent.png" width="21" height="16" alt=""> <div><b>silent</b> installation</div></div>
</a>
 </div>
<div style="margin:0 5px; flex-grow:999; flex-basis:440px;">
<style>
    .donate-tabs {}

    .donate-now-container
    {
        display: inline-block;
        height: 50px;
        background: linear-gradient(90deg, transparent, #ddddff 96px);
        padding-left: 25px;
        padding-right: 15px;
    }

    .donate-now-label
    {
        font-size: 23px;
        line-height: 12px;
        text-align: center;
        font-weight: 600;
        color: #2e7aff;
        text-shadow: #FFF 2px 2px 1px;
    }

    .donate-service-icon {}

    .donate-tabs > input
    {
        display: none;
    }

    /*button backgrounds*/
    .donate-tabs > input + label
    {
        display: inline-block;
        height: 46px;
        border: 2px solid #ccc;
        cursor: pointer;
        vertical-align: bottom;
        /*transition: 0.1s; => looks a bit wobbly */
        background: linear-gradient(to bottom, white, #eee);
    }
    .donate-tabs > input + label:not(:first-of-type)
    {
        border-left: none;
    }
    .donate-tabs > input:checked + label,
    .donate-tabs > input + label:hover
    {
        background: linear-gradient(to bottom, #eee, #ccc);
    }

    .donate-tabs > input:checked + label
    {
        background: linear-gradient(to bottom, #eee, #ccc);
        border-width: 3px;
        margin-bottom: -3px; /*compensate 3px vs 2px border size increase */
        border-color: #8587ff;
        border-left-style: solid;
    }
    /*button foreground images*/
    .donate-tabs > input + label > .donate-service-icon
    {
        filter: grayscale(100%) contrast(75%) brightness(120%);
    }
    .donate-tabs > input:checked + label > .donate-service-icon,
    .donate-tabs > input + label:hover > .donate-service-icon
    {
        filter: inherit;
    }

    #donate-section-paypal,
    #donate-section-card,
    #donate-section-giropay,
    #donate-section-sofort,
    #donate-section-wechat
    {
        display: none;
    	border: solid 6px #99aabb;
    	background: #ddddff;
    	padding: 10px;
    	border-radius: 15px;
    	box-shadow: 3px 3px 4px #777;
    }

    #donate-tab-paypal:checked  ~ #donate-section-paypal,
    #donate-tab-card:checked    ~ #donate-section-card,
    #donate-tab-giropay:checked ~ #donate-section-giropay,
    #donate-tab-sofort:checked  ~ #donate-section-sofort,
    #donate-tab-wechat:checked  ~ #donate-section-wechat
    {
        display: block;
    }

    
    input.donation-amount
    {
    	background: url(/images/donation-amount.png) no-repeat white 5px;
    	background-size: 24px;
    	padding-left: 35px;
    }

    input.donation-donorname
    {
    	background: url(/images/donation-username.png) no-repeat white 5px;
    	background-size: 24px;
    	padding-left: 35px;
    }

    input.donation-email
    {
    	background: url(/images/donation-email.png) no-repeat white 5px;
    	background-size: 24px;
    	padding-left: 35px;
    }

    textarea.donation-comment
    {
    	background: url(/images/donation-comment.png) no-repeat white 5px 5px;
    	background-size: 24px;
    	padding-left: 35px;
        box-sizing: border-box;
        width:  100%;
        /*height: 100%; -> not working on safari => use display:flex for parent*/
        resize: vertical;
    }

    .button-donate
    {
        flex-grow: 1;
    	width: 160px;
    	white-space: normal;
        align-self: center;
        min-height: 50px;
    }

    .paypal-guest-toggle
    {
        display: inline-block;
        font-size: 15px; /*Safari defaults most controls to 11px!*/
    	padding: 2px 4px;
    	margin-top: 7px;
    	color: white;
    	border-radius: 3px;
    	background-color: #95acf0;
    }

    #paypal-guest-panel
    {
        /*display: none;  no, keep as inline style to support toggleArcadion()*/
    	padding: 0 20px;
    	background:white;
    	border-radius:4px;
    	margin-top: 10px;
    }
</style>

<div class="donate-tabs noselect">
<div class="donate-now-container">
<div class="donate-now-label center-parent">Donate<br><span style="font-size: 13px; color: grey;">...and comment</span></div>
</div><input type="radio" id="donate-tab-paypal" name="donate-tab-group"><label for="donate-tab-paypal" title="Donate with PayPal">
<img src="/images/donate-tab-paypal.svg" width="89" height="24" class="center-parent donate-service-icon" alt="PayPal" style="padding: 0 8px;">
</label><input type="radio" id="donate-tab-card" name="donate-tab-group" checked><label for="donate-tab-card" title="Donate with Credit Card">
<img src="/images/donate-tab-card-small.png" width="61" height="38" class="center-parent donate-service-icon" alt="Credit Card" style="padding: 0 8px;">
</label><input type="radio" id="donate-tab-giropay" name="donate-tab-group"><label style="display:none" for="donate-tab-giropay" title="Donate with Giropay">
<span style="display:block; text-align:center; padding:0px 2px; line-height:125%; text-shadow:#fff 1px 1px 1px;" class="center-parent donate-service-icon">Überweisung<br>
<img src="/images/donate-tab-giropay.svg" width="46" height="20" alt="Giropay">
</span>
</label><input type="radio" id="donate-tab-sofort" name="donate-tab-group"><label style="display:none" for="donate-tab-sofort" title="Donate with Sofort. Überweisung">
<img src="/images/donate-tab-sofort.svg" width="57" height="38" class="center-parent donate-service-icon" alt="Sofort. Überweisung" style="padding: 0 8px;">
</label><input type="radio" id="donate-tab-wechat" name="donate-tab-group"><label style="display:none" for="donate-tab-wechat" title="Donate with WeChat Pay">
<img src="/images/donate-tab-wechat.svg" width="42" height="38" class="center-parent donate-service-icon" alt="WeChat Pay" style="padding: 0 8px;">
</label>


<div id="donate-section-paypal">
<form action="/donate/paypal_donate.php" method="POST" style="display:flex; flex-wrap:wrap;">
<div style="flex-grow:999; display:flex">
<textarea name="comment" class="modern-input donation-comment" placeholder="Leave a comment (optional)"></textarea>
</div>
<div style="flex-grow:1; align-self:center;">
<select id="paypal-currency" name="currency" onchange="onPayPalCurrencyChanged()" class="modern-input" style="display:block; width: 100%; box-sizing: border-box;">
<option value="AUD" data-symbol="A$">Australian Dollar: A$</option>
<option value="BRL" data-symbol="R$">Brazilian Real: R$</option>
<option value="GBP" data-symbol="£">British Pound: £</option>
<option value="CAD" data-symbol="C$">Canadian Dollar: C$</option>
<option value="CZK" data-symbol="Kč">Czech Koruna: Kč</option>
<option value="DKK" data-symbol="kr.">Danish Krone: kr.</option>
<option value="USD" data-symbol="US$">Dollar: US$</option>
<option value="EUR" data-symbol="€" selected>Euro: €</option>
<option value="HKD" data-symbol="HK$">Hong Kong Dollar: HK$</option>
<option value="JPY" data-symbol="¥">Japanese Yen: ¥</option>
<option value="MXN" data-symbol="Mex$">Mexican Peso: Mex$</option>
<option value="NZD" data-symbol="NZ$">New Zealand Dollar: NZ$</option>
<option value="PLN" data-symbol="zł">Polish Zloty: zł</option>
<option value="RUB" data-symbol="₽">Russian Ruble: ₽</option>
<option value="SGD" data-symbol="S$">Singapore Dollar: S$</option>
<option value="SEK" data-symbol="kr">Swedish Krona: kr</option>
<option value="CHF" data-symbol="Fr.">Swiss Franc: Fr.</option>
<option value="TWD" data-symbol="NT$">Taiwan New Dollar: NT$</option>
</select>
<input type="number" id="paypal-amount" name="amount" class="modern-input donation-amount" placeholder="Amount" required min="1" style="display:block; width: 100%; box-sizing: border-box;">
<input type="hidden" name="subscription_id" value="">
<input type="hidden" name="ab_test" value="-1">
<button type="button" class="accordion-button paypal-guest-toggle" onclick="toggleArcadion(this, document.getElementById('paypal-guest-panel'))" style="display:none">How to skip joining PayPal</button>
</div>
<input type="submit" class="modern-button button-donate" value="Donate with PayPal">
</form>
<div id="paypal-guest-panel" style="display:none">
<br>
To donate via credit card or debit without creating a PayPal account, execute the following steps:<br>
<br>
<ol>
<li>On the PayPal login page select <b>Continue without a PayPal account</b>:<br>
<img src="/images/paypal-debit-or-credit-card.png" width="404" height="331" class="screen-snippet" style="margin: 5px 0 0 0;" alt="Donate as PayPal guest">
<br>&nbsp;
<li>On the checkout page, enter your payment details and click on <b>Pay Now</b>:<br>
<img src="/images/paypal-guest-checkout.png" width="409" height="155" class="screen-snippet" style="margin: 5px 0 0 0;" alt="Donate as PayPal guest">
<br>&nbsp;
<li>Note to <b>German supporters</b>: PayPal discontinued Guest Checkout and requires everyone to set up a PayPal account. (Nov, 2016)<br>
<br>
As an alternative you may donate via
<script>
                        function selectDonationTab(tabId)
                        {
                            document.getElementById(tabId).checked = true;
                            window.scrollTo(0, 0);
                        }
                    </script>
<a href="javascript:selectDonationTab('donate-tab-card');" class="highlight-border"><b>Credit Card</b></a> or
<a href="javascript:selectDonationTab('donate-tab-giropay');" class="highlight-border"><b>Giropay Überweisung</b></a>.
</ol>
<br>
</div>
<script>
            function onPayPalCurrencyChanged()
            {
                var currencyCtrl = document.getElementById("paypal-currency");
                var symbol = currencyCtrl[currencyCtrl.selectedIndex].dataset.symbol;
                document.getElementById("paypal-amount").placeholder = "Amount in " + symbol;
            }

            onPayPalCurrencyChanged(); //init
        </script>
</div>


<div id="donate-section-card">
<form action="/donate/stripe_donate_card.php" method="POST" style="display:flex; flex-wrap:wrap;">
<div style="flex-grow:999; display:flex">
<textarea name="comment" class="modern-input donation-comment" placeholder="Leave a comment (optional)"></textarea>
</div>
<div style="flex-grow:1; align-self:center;">
<select name="currency" id="credit-card-currency" class="modern-input" onchange="onCreditCardCurrencyChanged()" style="display:block; width: 100%; box-sizing: border-box;">
<option value="AUD" data-symbol="A$">Australian Dollar: A$</option>
<option value="BRL" data-symbol="R$">Brazilian Real: R$</option>
<option value="GBP" data-symbol="£">British Pound: £</option>
<option value="CAD" data-symbol="C$">Canadian Dollar: C$</option>
<option value="CNY" data-symbol="¥">Chinese Renminbi: ¥</option>
<option value="CZK" data-symbol="Kč">Czech Koruna: Kč</option>
<option value="DKK" data-symbol="kr.">Danish Krone: kr.</option>
<option value="USD" data-symbol="US$">Dollar: US$</option>
<option value="EUR" data-symbol="€" selected>Euro: €</option>
<option value="HKD" data-symbol="HK$">Hong Kong Dollar: HK$</option>
<option value="JPY" data-symbol="¥">Japanese Yen: ¥</option>
<option value="MXN" data-symbol="Mex$">Mexican Peso: Mex$</option>
<option value="NZD" data-symbol="NZ$">New Zealand Dollar: NZ$</option>
<option value="PLN" data-symbol="zł">Polish Zloty: zł</option>
<option value="RUB" data-symbol="₽">Russian Ruble: ₽</option>
<option value="SGD" data-symbol="S$">Singapore Dollar: S$</option>
<option value="SEK" data-symbol="kr">Swedish Krona: kr</option>
<option value="CHF" data-symbol="Fr.">Swiss Franc: Fr.</option>
<option value="TWD" data-symbol="NT$">Taiwan New Dollar: NT$</option>
<option value="TRY" data-symbol="₺">Turkish Lira: ₺</option>
</select>
<input type="number" name="amount" id="credit-card-amount" class="modern-input donation-amount" placeholder="Amount" required min="1" style="display:block; width: 100%; box-sizing: border-box;">
<input type="email" name="email" class="modern-input donation-email" placeholder="Email" value="" style="display:none;
                       width: 100%; box-sizing: border-box;">
<input type="hidden" name="subscription_id" value="">
<input type="hidden" name="ab_test" value="-1">
</div>
<input type="submit" class="modern-button button-donate" value="Donate with Credit Card">
</form>
<script>
            function onCreditCardCurrencyChanged()
            {
                var currencyCtrl = document.getElementById("credit-card-currency");
                var symbol = currencyCtrl[currencyCtrl.selectedIndex].dataset.symbol;
                document.getElementById("credit-card-amount").placeholder = "Amount in " + symbol;
            }

            onCreditCardCurrencyChanged(); //init
        </script>
</div>


<div id="donate-section-giropay">
<form action="/donate/stripe_donate_giropay.php" method="POST" style="display:flex; flex-wrap:wrap;">
<div style="flex-grow:999; display:flex">
<textarea name="comment" class="modern-input donation-comment" placeholder="Leave a comment (optional)"></textarea>
</div>
<div style="flex-grow:1; align-self:center;">
<input type="number" name="amount" class="modern-input donation-amount" placeholder="Amount in €" required min="1" max="999999" style="display:block; width: 100%; box-sizing: border-box;">
<input type="text" name="donor_name" class="modern-input donation-donorname" placeholder="Your name" value="" required style="display:block; width: 100%; box-sizing: border-box;">
<input type="email" name="email" class="modern-input donation-email" placeholder="Email" value="" required style="display:block; width: 100%; box-sizing: border-box;">
<input type="hidden" name="subscription_id" value="">
<input type="hidden" name="ab_test" value="-1">
</div>
<input type="submit" class="modern-button button-donate" value="Donate with Giropay">
</form>
</div>




<div id="donate-section-wechat">
<form action="/donate/stripe_donate_wechat.php" method="POST" style="display:flex; flex-wrap:wrap;">
<div style="flex-grow:999; display:flex">
<textarea name="comment" class="modern-input donation-comment" placeholder="Leave a comment (optional)"></textarea>
</div>
<div style="flex-grow:1; align-self:center;">
<input type="number" id="wechat-amount" name="amount" class="modern-input donation-amount" placeholder="Amount in €" required min="1" max="999999" style="display:block; width: 100%; box-sizing: border-box;">
<input type="text" name="donor_name" class="modern-input donation-donorname" placeholder="Your name" value="" required style="display:block; width: 100%; box-sizing: border-box;">
<input type="email" name="email" class="modern-input donation-email" placeholder="Email" value="" required style="display:block; width: 100%; box-sizing: border-box;">
<input type="hidden" name="subscription_id" value="">
<input type="hidden" name="ab_test" value="-1">
</div>
<input type="submit" class="modern-button button-donate" value="Donate with WeChat Pay">
</form>
</div>
</div>

</div>
</div>
</div>
<div class="section-banner">
<ins class="adsbygoogle" id="adinsert1" style="display:block" data-ad-client="ca-pub-3739718732642383" data-ad-slot="8895128801" data-ad-format="auto" data-full-width-responsive="true">
</ins>
<script>
				if (getCookie("donation") == "" &&
					getCookie("donated" ) == "" ) //legacy cookie! (used until 2020-03-06)
				{
					if (!canUseCookies())
						(adsbygoogle = window.adsbygoogle || []).requestNonPersonalizedAds=1;

					(adsbygoogle = window.adsbygoogle || []).push({});
				}
				else 
				{
					var ins = document.getElementById("adinsert1");
					if (ins) //removed by ad-blocker?
						ins.parentNode.style.display = "none";
				}
			</script></div>
<div class="sub-section dl-section">
<div class="description">
<h2>Download FreeFileSync</h2>
</div>
<div class="half-line">&nbsp;</div>
<div class="content-padding">
<table style="border-spacing:0" role="presentation">
<tr id="ffs-donation-editon-row" style="display:none">
<td><img src="/images/freefilesync-heart.png" width="26" height="24" class="os-logo" alt=""></td>
<td>
<a id="ffs-download-button-donation" class="ffs-download-button" style="padding:3px" href="#">
<span style="font-weight:initial">Download</span>
FreeFileSync 11.9 <span style="font-weight:300">[Donation Edition]</span>
</a>
</td>
</tr>
<script>
				 		var tx = getCookie('donation');
				 		if (tx != '')
				 		{
							document.getElementById('ffs-donation-editon-row').style.display = "";
				 			document.getElementById('ffs-download-button-donation').href = '/thank-you.php?tx=' + tx;
				 		}
				 	</script>
<tr><td><img src="/images/os-windows-small.png" width="24" height="24" class="os-logo" alt=""></td><td><a href="/download/FreeFileSync_11.9_Windows_Setup.exe" rel="nofollow" class="direct-download-link">
<span style="font-weight:initial">Download</span> FreeFileSync 11.9 Windows</a></td></tr>
<tr><td><img src="/images/os-macos-small.png" width="24" height="24" class="os-logo" alt=""></td><td><a href="/download/FreeFileSync_11.9_macOS.zip" rel="nofollow" class="direct-download-link">
<span style="font-weight:initial">Download</span> FreeFileSync 11.9 macOS</a></td></tr>
<tr><td><img src="/images/os-linux-small.png" width="24" height="24" class="os-logo" alt=""></td><td><a href="/download/FreeFileSync_11.9_Linux.tar.gz" rel="nofollow" class="direct-download-link">
<span style="font-weight:initial">Download</span> FreeFileSync 11.9 Linux</a></td></tr>
<tr><td></td><td><a href="/download/FreeFileSync_11.9_Source.zip" rel="nofollow" class="direct-download-link">
<span style="font-weight:initial">Download</span> FreeFileSync 11.9 Source</a></td></tr>
</table>
<div class="half-line">&nbsp;</div>
<a href="news-feed.php" rel="alternate" type="application/rss+xml" class="highlight-border">
<img src="/images/rss.png" width="24" height="24" alt="" class="link-image-left">Subscribe for FreeFileSync update notifications
</a>
</div>
</div>
<div class="sub-section">
<div class="description">
<h2>Latest Changes</h2>
</div>
<div class="floating-banner">
<ins class="adsbygoogle" id="adinsert2" style="display:block" data-ad-client="ca-pub-3739718732642383" data-ad-slot="8487810982" data-ad-format="auto" data-full-width-responsive="true">
</ins>
<script>
				if (getCookie("donation") == "" &&
					getCookie("donated" ) == "" ) //legacy cookie! (used until 2020-03-06)
				{
					if (!canUseCookies())
						(adsbygoogle = window.adsbygoogle || []).requestNonPersonalizedAds=1;

					(adsbygoogle = window.adsbygoogle || []).push({});
				}
				else 
				{
					var ins = document.getElementById("adinsert2");
					if (ins) //removed by ad-blocker?
						ins.parentNode.style.display = "none";
				}
			</script></div>
<div class="half-line">&nbsp;</div>
<div class="content-margin">
<div class="changelog-header">FreeFileSync 11.9<div style="float:right"><time datetime="2021-04-01T00:00:00+00:00">Apr 1, 2021</time></div></div>
<div class="horizontal-line"></div><div class="change-item"><img src="/images/ffs-bullet.png" width="16" height="8" alt="" style="margin:.6em 2px 0 0; transform:translateY(-50%); flex-shrink:0;"> <div style="flex-grow:1; line-height:100%;">Save different layouts depending on screen resolution</div></div>
<div class="change-item"><img src="/images/ffs-bullet.png" width="16" height="8" alt="" style="margin:.6em 2px 0 0; transform:translateY(-50%); flex-shrink:0;"> <div style="flex-grow:1; line-height:100%;">Fixed large file icon scaling quality (Windows)</div></div>
<div class="change-item"><img src="/images/ffs-bullet.png" width="16" height="8" alt="" style="margin:.6em 2px 0 0; transform:translateY(-50%); flex-shrink:0;"> <div style="flex-grow:1; line-height:100%;">Fixed broken default filter excluding DocumentRevisions (macOS)</div></div>
<div class="change-item"><img src="/images/ffs-bullet.png" width="16" height="8" alt="" style="margin:.6em 2px 0 0; transform:translateY(-50%); flex-shrink:0;"> <div style="flex-grow:1; line-height:100%;">Don't immediately exit terminal when installer error is showing (Linux)</div></div>
<div class="change-item"><img src="/images/ffs-bullet.png" width="16" height="8" alt="" style="margin:.6em 2px 0 0; transform:translateY(-50%); flex-shrink:0;"> <div style="flex-grow:1; line-height:100%;">Explicitly set file permissions when installing missing directories (Linux)</div></div>
<div class="change-item"><img src="/images/ffs-bullet.png" width="16" height="8" alt="" style="margin:.6em 2px 0 0; transform:translateY(-50%); flex-shrink:0;"> <div style="flex-grow:1; line-height:100%;">Support installation using noexec temp directory (Linux)</div></div>
<div class="change-item"><img src="/images/ffs-bullet.png" width="16" height="8" alt="" style="margin:.6em 2px 0 0; transform:translateY(-50%); flex-shrink:0;"> <div style="flex-grow:1; line-height:100%;">Don't fail installation if root is the only user (Linux)</div></div>
<div class="change-item"><img src="/images/ffs-bullet.png" width="16" height="8" alt="" style="margin:.6em 2px 0 0; transform:translateY(-50%); flex-shrink:0;"> <div style="flex-grow:1; line-height:100%;">Added automatic socket close on execv (Linux, macOS)</div></div>
<div class="change-item"><img src="/images/ffs-bullet.png" width="16" height="8" alt="" style="margin:.6em 2px 0 0; transform:translateY(-50%); flex-shrink:0;"> <div style="flex-grow:1; line-height:100%;">Fixed Google Drive login hanging after authentication (Linux)</div></div>
<div class="change-item"><img src="/images/ffs-bullet.png" width="16" height="8" alt="" style="margin:.6em 2px 0 0; transform:translateY(-50%); flex-shrink:0;"> <div style="flex-grow:1; line-height:100%;">Correctly generate and parse Windows epoch time (Windows, macOS)</div></div>
</div>
<div style="clear:both"></div>
<div class="half-line">&nbsp;</div>
</div>
</section>
<div style="clear:both"></div>
</div>
<footer>
<a href="/privacy.php" rel="nofollow" style="flex-grow:1;">Privacy Policy</a>
<a href="https://fto.freefilesync.org" target="_blank" rel="nofollow noopener" class="social-button responsive-hide" style="margin:-5px 50px; border-radius:5px;">
<img src="https://fto.freefilesync.org/images/FreeTemplateOffice.ico" width="24" height="24" title="FreeTemplateOffice" alt="FreeTemplateOffice">
</a>
<div style="flex-grow:1;">
Copyright &copy; 2021 Zenju: <a href="#" class="email-crypt" id="email1" onclick="const urlScraps = 'mailto40fre%65files%79n%63%2Eor%67';
							 window.location.href = urlScraps.substr(0, 6) + String.fromCharCode(58) + this.dataset.name +
													String.fromCharCode(37) + urlScraps.substr(6);
							return false;"><noscript>[Turn on JavaScript to see the email address]</noscript></a><script>
				var email = document.getElementById('email1');

				email.setAttribute('data-name', 'zenju');
				email.setAttribute('data-at', String.fromCharCode(1 << 6));
				email.setAttribute('data-domain', 'freefilesync.org');
			</script> </div>
</footer>
</body>
</html>
