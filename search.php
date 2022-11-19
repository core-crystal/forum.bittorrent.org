<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX, FOLLOW" />
<title>Search / forum.bittorrent.org</title>
<link rel="stylesheet" type="text/css" href="style/Air.css" />
<!--[if lte IE 6]><script type="text/javascript" src="style/imports/minmax.js"></script><![endif]-->
</head>

<body onload="document.getElementById('search').elements['keywords'].focus()">

<div id="punsearch" class="pun">
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
				<li id="navextra1"><a href="http://bittorrent.org">Homepage</a></li>
				<li id="navextra2"><a href="https://groups.google.com/a/bittorrent.com/forum/#!forum/bt-developers">Mailing List</a></li>
				<li id="navextra3"><a href="irc://irc.freenode.net/bittorrent">IRC</a></li>
				<li id="navuserlist"><a href="userlist.php">User list</a></li>
				<li id="navrules"><a href="misc.php?action=rules">Rules</a></li>
				<li id="navsearch" class="isactive"><a href="search.php">Search</a></li>
				<li id="navregister"><a href="register.php">Register</a></li>
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
			<div class="usercontent">Forums are closed.
Use the new mailing list!
https://groups.google.com/a/bittorrent.com/forum/#!forum/bt-developers</div>
		</div>
	</div>
</div>

<div id="brdmain">
<div id="searchform" class="blockform">
	<h2><span>Search</span></h2>
	<div class="box">
		<form id="search" method="get" action="search.php">
			<div class="inform">
				<fieldset>
					<legend>Enter your search criteria</legend>
					<div class="infldset">
						<input type="hidden" name="action" value="search" />
						<label class="conl">Keyword search<br /><input type="text" name="keywords" size="40" maxlength="100" /><br /></label>
						<label class="conl">Author search<br /><input id="author" type="text" name="author" size="25" maxlength="25" /><br /></label>
						<p class="clearb">To search by keyword, enter a term or terms to search for. Separate terms with spaces. Use AND, OR and NOT to refine your search. To search by author enter the username of the author whose posts you wish to search for. Use wildcard character * for partial matches.</p>
					</div>
				</fieldset>
			</div>
			<div class="inform">
				<fieldset>
					<legend>Select where to search</legend>
					<div class="infldset">
						<div class="conl multiselect">Forum
						<br />
						<div class="checklist">
							<fieldset><legend><span>BitTorrent</span></legend>
								<div class="checklist-item"><span class="fld-input"><input type="checkbox" name="forums[]" id="forum-26" value="26" /></span> <label for="forum-26">Announcements</label></div>
								<div class="checklist-item"><span class="fld-input"><input type="checkbox" name="forums[]" id="forum-27" value="27" /></span> <label for="forum-27">General</label></div>
								<div class="checklist-item"><span class="fld-input"><input type="checkbox" name="forums[]" id="forum-25" value="25" /></span> <label for="forum-25">BEPs</label></div>
								<div class="checklist-item"><span class="fld-input"><input type="checkbox" name="forums[]" id="forum-29" value="29" /></span> <label for="forum-29">BEP process</label></div>
								<div class="checklist-item"><span class="fld-input"><input type="checkbox" name="forums[]" id="forum-33" value="33" /></span> <label for="forum-33">Research Tools</label></div>
								<div class="checklist-item"><span class="fld-input"><input type="checkbox" name="forums[]" id="forum-32" value="32" /></span> <label for="forum-32">Cooperation between BitTorrent and ISPs</label></div>
								<div class="checklist-item"><span class="fld-input"><input type="checkbox" name="forums[]" id="forum-30" value="30" /></span> <label for="forum-30">Attacks against BitTorrent</label></div>
							</fieldset>
						</div>
						</div>
						<label class="conl">Search in
						<br /><select id="search_in" name="search_in">
							<option value="0">Message text and topic subject</option>
							<option value="1">Message text only</option>
							<option value="-1">Topic subject only</option>
						</select>
						<br /></label>
						<p class="clearl">Choose in which forum you would like to search and if you want to search in topic subjects, message text or both.</p>
<p>If no forums are selected, all forums will be searched.</p>					</div>
				</fieldset>
			</div>
			<div class="inform">
				<fieldset>
					<legend>Select how to view search results</legend>
					<div class="infldset">
						<label class="conl">Sort by
						<br /><select name="sort_by">
							<option value="0">Post time</option>
							<option value="1">Author</option>
							<option value="2">Subject</option>
							<option value="3">Forum</option>
						</select>
						<br /></label>
						<label class="conl">Sort order
						<br /><select name="sort_dir">
							<option value="DESC">Descending</option>
							<option value="ASC">Ascending</option>
						</select>
						<br /></label>
						<label class="conl">Show results as
						<br /><select name="show_as">
							<option value="topics">Topics</option>
							<option value="posts">Posts</option>
						</select>
						<br /></label>
						<p class="clearb">You can choose how you wish to sort and show your results.</p>
					</div>
				</fieldset>
			</div>
			<p class="buttons"><input type="submit" name="search" value="Submit" accesskey="s" /></p>
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
