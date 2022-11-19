<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User list (Page 1) / forum.bittorrent.org</title>
<link rel="stylesheet" type="text/css" href="style/Air.css" />
<!--[if lte IE 6]><script type="text/javascript" src="style/imports/minmax.js"></script><![endif]-->
</head>

<body onload="document.getElementById('userlist').elements['username'].focus()">

<div id="punuserlist" class="pun">
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
				<li id="navuserlist" class="isactive"><a href="userlist.php">User list</a></li>
				<li id="navrules"><a href="misc.php?action=rules">Rules</a></li>
				<li id="navsearch"><a href="search.php">Search</a></li>
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
<div class="blockform">
	<h2><span>User search</span></h2>
	<div class="box">
		<form id="userlist" method="get" action="userlist.php">
			<div class="inform">
				<fieldset>
					<legend>Find and sort users</legend>
					<div class="infldset">
						<label class="conl">Username<br /><input type="text" name="username" value="" size="25" maxlength="25" /><br /></label>
						<label class="conl">User group
						<br /><select name="show_group">
							<option value="-1" selected="selected">All</option>
							<option value="1">Administrators</option>
							<option value="2">Moderators</option>
							<option value="4">Members</option>
							<option value="6">BitTorrent Helper</option>
							<option value="7">Developer</option>
						</select>
						<br /></label>
						<label class="conl">Sort by
						<br /><select name="sort_by">
							<option value="username" selected="selected">Username</option>
							<option value="registered">Registered</option>
							<option value="num_posts">Number of posts</option>
						</select>
						<br /></label>
						<label class="conl">Sort order
						<br /><select name="sort_dir">
							<option value="ASC" selected="selected">Ascending</option>
							<option value="DESC">Descending</option>
						</select>
						<br /></label>
						<p class="clearb">Enter a username to search for and/or a user group to filter by. The username field can be left blank. Use the wildcard character * for partial matches. Sort users by name, date registered or number of posts and in ascending/descending order.</p>
					</div>
				</fieldset>
			</div>
			<p class="buttons"><input type="submit" name="search" value="Submit" accesskey="s" /></p>
		</form>
	</div>
</div>

<div class="linkst">
	<div class="inbox">
		<p class="pagelink"><span class="pages-label">Pages: </span><strong class="item1">1</strong> <a href="userlist.php?username=&amp;show_group=-1&amp;sort_by=username&amp;sort_dir=ASC&amp;p=2">2</a> <a href="userlist.php?username=&amp;show_group=-1&amp;sort_by=username&amp;sort_dir=ASC&amp;p=3">3</a> <span class="spacer">…</span> <a href="userlist.php?username=&amp;show_group=-1&amp;sort_by=username&amp;sort_dir=ASC&amp;p=53">53</a> <a href="userlist.php?username=&amp;show_group=-1&amp;sort_by=username&amp;sort_dir=ASC&amp;p=2">Next</a></p>
		<div class="clearer"></div>
	</div>
</div>

<div id="users1" class="blocktable">
	<h2><span>User list</span></h2>
	<div class="box">
		<div class="inbox">
			<table cellspacing="0">
			<thead>
				<tr>
					<th class="tcl" scope="col">Username</th>
					<th class="tc2" scope="col">Title</th>
					<th class="tc3" scope="col">Posts</th>
					<th class="tcr" scope="col">Registered</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="tcl"><a href="profile.php?id=91294">!webedding</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2010-09-22</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=90932">#chelle</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2010-04-26</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=90567">-*Jessie*-</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2009-10-01</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=90990">007jsl</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2010-05-19</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=89799">08jobec</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2008-06-08</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=90952">0zas</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">1</td>
					<td class="tcr">2010-05-07</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=90373">100_in_a_55</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2009-06-07</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=89694">196705</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2008-04-24</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=90453">1ennon</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2009-07-16</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=90236">1q1undeva</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2009-01-13</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=89921">1stqarwan</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2008-07-26</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=91330">256</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2010-09-30</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=91880">2Cclearly</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-01-01</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=93944">2pickupwomen</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-06-12</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=94558">35johnsk</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-07-23</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=93882">4meli4</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-06-09</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=93490">4qmialy2</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-05-10</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=89717">505boy</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2008-05-09</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=90232">7777777</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2009-01-12</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=93218">88davia</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-04-26</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=93202">88oplan</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-04-24</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=92406">8anos</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-02-20</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=89821">8writer</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2008-06-16</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=93940">A Home</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-06-12</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=93692">a54spenren4tals</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-05-25</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=92624">aabdla</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-03-09</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=89877">Aage</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2008-07-08</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=89961">aaron</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2008-08-10</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=91600">aaronzalewski</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2010-11-24</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=90916">ab420</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2010-04-19</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=90069">abalbosa</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2008-10-06</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=94618">abbot1abby</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-07-27</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=89792">abc4711</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2008-06-07</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=90160">Abcd</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2008-11-25</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=90966">Abdelkrim</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">2</td>
					<td class="tcr">2010-05-13</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=92712">AbdielVolmar</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-03-16</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=91898">AbelLundy</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-01-05</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=91104">abernethyaccursius</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2010-07-15</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=89943">ablomgren</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2008-08-04</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=94606">abrah222m</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-07-26</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=92062">abrat6917</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-01-21</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=91282">abukme</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">3</td>
					<td class="tcr">2010-09-20</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=94528">abulom1ade</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-07-21</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=93436">AccaBodicia</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-05-09</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=93394">aceseal</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-05-09</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=89614">aciani1</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">5</td>
					<td class="tcr">2008-02-29</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=94458">acollazo</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-07-18</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=90083">ACooper47</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2008-10-15</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=93594">actiongames83</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-05-17</td>
				</tr>
				<tr>
					<td class="tcl"><a href="profile.php?id=93552">adam27cbrr</a></td>
					<td class="tc2">Member</td>
					<td class="tc3">0</td>
					<td class="tcr">2011-05-12</td>
				</tr>
			</tbody>
			</table>
		</div>
	</div>
</div>

<div class="linksb">
	<div class="inbox">
		<p class="pagelink"><span class="pages-label">Pages: </span><strong class="item1">1</strong> <a href="userlist.php?username=&amp;show_group=-1&amp;sort_by=username&amp;sort_dir=ASC&amp;p=2">2</a> <a href="userlist.php?username=&amp;show_group=-1&amp;sort_by=username&amp;sort_dir=ASC&amp;p=3">3</a> <span class="spacer">…</span> <a href="userlist.php?username=&amp;show_group=-1&amp;sort_by=username&amp;sort_dir=ASC&amp;p=53">53</a> <a href="userlist.php?username=&amp;show_group=-1&amp;sort_by=username&amp;sort_dir=ASC&amp;p=2">Next</a></p>
		<div class="clearer"></div>
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
