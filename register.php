<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX, FOLLOW" />
<title>Forum rules / Register / forum.bittorrent.org</title>
<link rel="stylesheet" type="text/css" href="style/Air.css" />
<link rel="stylesheet" type="text/css" href="captcha/css/style.css" />
<link rel="stylesheet" type="text/css" href="captcha/css/redmond/jquery-ui-1.8.21.custom.css" />
<script type="text/javascript" src="captcha/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="captcha/js/jquery-ui-1.8.21.custom.min.js"></script>
<script type="text/javascript" src="captcha/js/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript">
	$(function(){var f=$("#sliderCaptcha");var b=$("#cleCaptcha");var d=$(".boutonsCaptcha");var a=$("#javascriptCaptcha");var e=[43,24,32,41,10,46,44,30,47,28,3,41,29,26,40,37,37,48,25,17,28,4,34,39,9,39,36,12,2,29,27,45,4,10,37,15,6,32,46,4,10,49,46,40,26,36,28,14,35,4];var h=0;var g=5;var c=0;a.hide();f.slider({value:0,min:0,max:g,step:1,slide:function(i,j){if(j.value>c){c=j.value;h+=c}},stop:function(j,k){var i=false;if(k.value==g){if(h==((g+Math.pow(g,2))/2)){i=true;f.slider("option","disabled",true);if(b.val().length!=e.length){$.post("captcha.php",{tokenCaptcha:b.val()},function(m){var l="";$.each(e,function(){l+=m.charAt(this%m.length)});b.val(l);d.removeAttr("disabled")})}}}if(!i){h=c=0;f.slider("option","value",h)}}})});
</script>
<!--[if lte IE 6]><script type="text/javascript" src="style/imports/minmax.js"></script><![endif]-->
</head>

<body>

<div id="punregister" class="pun">
<div class="top-box"><div><!-- Top Corners --></div></div>
<div class="punwrap">

<div id="brdheader" class="block">
	<div class="box">
		<div id="brdtitle" class="inbox">
			<h1><a href="index.php">forum.bittorrent.org</a></h1>
			<div id="brddesc">BitTorrent.org community</div>
		</div>
		<div id="brdmenu" class="inbox">
			<ul>
				<li id="navindex"><a href="index.php">Index</a></li>
				<li id="navextra1"><a href="http://forum.bittorrent.org">Homepage</a></li>
				<li id="navextra2"><a href="irc://irc.freenode.net/bittorrent">IRC</a></li>
				<li id="navuserlist"><a href="userlist.php">User list</a></li>
				<li id="navrules"><a href="misc.php?action=rules">Rules</a></li>
				<li id="navsearch"><a href="search.php">Search</a></li>
				<li id="navregister" class="isactive"><a href="register.php">Register</a></li>
				<li id="navlogin"><a href="login.php">Login</a></li>
			</ul>
		</div>
		<div id="brdwelcome" class="inbox">
			<p class="conl">You are not logged in.</p>
			<ul class="conr">
				<li><span>Topics: <a href="search.php?action=show_recent" title="Find topics with recent posts.">Active</a> | <a href="search.php?action=show_unanswered" title="Find topics with no replies.">Unanswered</a></span></li>
			</ul>
			<div class="clearer"></div>
		</div>
	</div>
</div>

<div id="announce" class="block">
	<div class="hd"><h2><span>Announcement</span></h2></div>
	<div class="box">
		<div id="announce-block" class="inbox">
			<div class="usercontent">Due to a configuration mishap, this year's worth of posts are gone. Database backups were also not working correctly for this forum due to that configuration problem.
Sorry about that.</div>
		</div>
	</div>
</div>

<div id="brdmain">
<div id="rules" class="blockform">
	<div class="hd"><h2><span>Forum rules</span></h2></div>
	<div class="box">
		<form method="get" action="register.php">
			<div class="inform">
				<fieldset>
					<legend>You must agree to the following in order to register</legend>
					<div class="infldset">
						<div class="usercontent"><b>GENERAL RULES</b>
<ol><li>Discussions about the downloading of copyrighted material are not allowed, and under no circumstances are links or specifics to be brought up. Living in a country where downloading copyright material without the owner's consent is not illegal does not make you an exception; we cater to the lowest common denominator.
</li><li>Read the FAQ and stickies, and search the forums before posting a new thread. Chances are very good that you're going to be posting something that's been posted before.
</li><li>Old versions of ÂµTorrent are unsupported.
</li><li>Spam = lock 'n' ban
</li></ol>
<br />
<b>FORUM ETIQUETTE</b>
<ol><li>Avoid language which can be deemed offensive to other users.
</li><li>Don't bump threads unnecessarily. That means "don't bump every single hour, day, or week."
</li><li>Keep discussions on topic; don't hijack threads.
</li><li>No trolling or flamebaiting.
</li><li>Refrain from posting messages MOSTLY CAPITALized, Needlessly Capitalizing Each Word, or using |_337 5|>34|<.
</li><li>Quoting an entire post is annoying. DON'T do it. If you must, quote the parts you're responding to directly. Quote pyramids are annoying too. DON'T let them happen in your posts.
</li></ol></div>
					</div>
				</fieldset>
			</div>
			<p class="buttons"><input type="submit" name="agree" value="Agree" /> <input type="submit" name="cancel" value="Cancel" /></p>
		</form>
	</div>
</div>
</div>

<div id="brdfooter" class="block">
	<h2><span>Board footer</span></h2>
	<div class="box">
		<div id="brdfooternav" class="inbox">
			<div class="conl">
				<form id="qjump" method="get" action="viewforum.php">
					<div><label><span>Jump to<br /></span>
					<select name="id" onchange="window.location=('viewforum.php?id='+this.options[this.selectedIndex].value)">
						<optgroup label="BitTorrent">
							<option value="26">Announcements</option>
							<option value="27">General</option>
							<option value="25">BEPs</option>
							<option value="29">BEP process</option>
							<option value="33">Research Tools</option>
							<option value="32">Cooperation between BitTorrent and ISPs</option>
							<option value="30">Attacks against BitTorrent</option>
							<option value="28">Feature Requests, Found Bugs &gt;&gt;&gt;</option>
						</optgroup>
					</select>
					<input type="submit" value=" Go " accesskey="g" />
					</label></div>
				</form>
			</div>
			<div class="conr">
				<p id="poweredby">Powered by <a href="http://fluxbb.org/">FluxBB</a></p>
			</div>
			<div class="clearer"></div>
		</div>
	</div>
</div>

</div>
<div class="end-box"><div><!-- Bottom corners --></div></div>
</div>

</body>
</html>
