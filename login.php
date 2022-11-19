<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX, FOLLOW" />
<title>Login / forum.bittorrent-archive.mythra.dev</title>
<link rel="stylesheet" type="text/css" href="style/Air.css" />
<link rel="stylesheet" type="text/css" href="captcha/css/style.css" />
<link rel="stylesheet" type="text/css" href="captcha/css/redmond/jquery-ui-1.8.21.custom.css" />
<script type="text/javascript" src="captcha/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="captcha/js/jquery-ui-1.8.21.custom.min.js"></script>
<script type="text/javascript" src="captcha/js/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript">
	$(function(){var f=$("#sliderCaptcha");var b=$("#cleCaptcha");var d=$(".boutonsCaptcha");var a=$("#javascriptCaptcha");var e=[3,18,12,35,11,36,2,8,44,47,0,30,30,1,45,28,30,47,7,29,37,41,47,48,43,5,15,41,42,31,13,46,49,26,32,11,12,34,20,6,32,20,37,13,22,32,41,2,30,49];var h=0;var g=5;var c=0;a.hide();f.slider({value:0,min:0,max:g,step:1,slide:function(i,j){if(j.value>c){c=j.value;h+=c}},stop:function(j,k){var i=false;if(k.value==g){if(h==((g+Math.pow(g,2))/2)){i=true;f.slider("option","disabled",true);if(b.val().length!=e.length){$.post("captcha.php",{tokenCaptcha:b.val()},function(m){var l="";$.each(e,function(){l+=m.charAt(this%m.length)});b.val(l);d.removeAttr("disabled")})}}}if(!i){h=c=0;f.slider("option","value",h)}}})});
</script>
<script type="text/javascript">
/* <![CDATA[ */
function process_form(the_form)
{
	var element_names = {
		"req_username": "Username",
		"req_password": "Password"
	};
	if (document.all || document.getElementById)
	{
		for (var i = 0; i < the_form.length; ++i)
		{
			var elem = the_form.elements[i];
			if (elem.name && (/^req_/.test(elem.name)))
			{
				if (!elem.value && elem.type && (/^(?:text(?:area)?|password|file)$/i.test(elem.type)))
				{
					alert('"' + element_names[elem.name] + '" is a required field in this form.');
					elem.focus();
					return false;
				}
			}
		}
	}
	return true;
}
/* ]]> */
</script>
<!--[if lte IE 6]><script type="text/javascript" src="style/imports/minmax.js"></script><![endif]-->
</head>

<body onload="document.getElementById('login').elements['req_username'].focus()">

<div id="punlogin" class="pun">
<div class="top-box"><div><!-- Top Corners --></div></div>
<div class="punwrap">

<div id="brdheader" class="block">
	<div class="box">
		<div id="brdtitle" class="inbox">
			<h1><a href="index.php">forum.bittorrent-archive.mythra.dev</a></h1>
			<div id="brddesc">BitTorrent.org community</div>
		</div>
		<div id="brdmenu" class="inbox">
			<ul>
				<li id="navindex"><a href="index.php">Index</a></li>
				<li id="navextra1"><a href="http://bittorrent.org">Homepage</a></li>
				<li id="navextra2"><a href="https://groups.google.com/a/bittorrent.com/forum/#!forum/bt-developers">Mailing List</a></li>
				<li id="navextra3"><a href="irc://irc.freenode.net/bittorrent">IRC</a></li>
				<li id="navuserlist"><a href="userlist.php">User list</a></li>
				<li id="navrules"><a href="misc.php?action=rules">Rules</a></li>
				<li id="navsearch"><a href="search.php">Search</a></li>
				<li id="navregister"><a href="register.php">Register</a></li>
				<li id="navlogin" class="isactive"><a href="login.php">Login</a></li>
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
			<div class="usercontent">Forums are closed.
Use the new mailing list!
https://groups.google.com/a/bittorrent.com/forum/#!forum/bt-developers</div>
		</div>
	</div>
</div>

<div id="brdmain">
<div class="blockform">
	<h2><span>Login</span></h2>
	<div class="box">
		<form id="login" method="post" action="login.php?action=in" onsubmit="return process_form(this)">
			<div class="inform">
				<fieldset>
					<legend>Enter your username and password below</legend>
					<div class="infldset">
						<input type="hidden" name="form_sent" value="1" />
						<input type="hidden" name="redirect_url" value="index.php" />
						<label class="conl required"><strong>Username <span>(Required)</span></strong><br /><input type="text" name="req_username" size="25" maxlength="25" tabindex="1" /><br /></label>
						<label class="conl required"><strong>Password <span>(Required)</span></strong><br /><input type="password" name="req_password" size="25" tabindex="2" /><br /></label>

						<div class="rbox clearb">
							<label><input type="checkbox" name="save_pass" value="1" tabindex="3" />Log me in automatically each time I visit.<br /></label>
						</div>

						<p class="clearb">If you have not registered or have forgotten your password click on the appropriate link below.</p>
						<p class="actions"><span><a href="register.php" tabindex="5">Not registered yet?</a></span> <span><a href="login.php?action=forget" tabindex="6">Forgotten your password?</a></span></p>
					</div>
				</fieldset>
			</div>
						<div class="inform">
				<fieldset>
					<legend>Captcha</legend>
					<div class="infldset">
						<p>Please drag the cursor from left to right.</p>
						<div class="rbox">
							<div id="javascriptCaptcha">Warning : You must activate Javascript in you browser to use the captcha.</div>
							<div id="sliderCaptcha"></div>
							<input type="hidden" id="cleCaptcha" name="cleCaptcha" value="1381799a6aa044e61cedcd3284147c22d2aa235d429d6ba4c96" />
						</div>
					</div>
				</fieldset>
			</div>
			<p class="buttons"><input type="submit" name="login" value="Login" tabindex="4" class="boutonsCaptcha" disabled="disabled" /></p>
		</form>
	</div>
</div>
</div>

<div id="brdfooter" class="block">
	<h2><span>Board footer</span></h2>
	<div class="box">
		<div id="brdfooternav" class="inbox">
			<div class="conl">
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
