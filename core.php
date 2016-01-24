<?php
// header("Content-Type: text/css; charset=utf-8");
// date_default_timezone_set('Europe/Berlin');
// $now = time();
// if (date("d.m") == "01.04" || date("d.m") == "31.03")
// $future = strtotime("midnight") + 86400;
// else
// $future = $now + 86400;
// $modded = date("D, d M o H:i:s",$future);
// //echo "Expires: Sat, 26 Jul 1997 05:00:00 GMT<br/>";
// //echo "Expires: $modded GMT";
// header("Expires: $modded CET");
// header("Last-Modified: ".gmdate("D, d M Y H:i:s", filemtime(__FILE__)) ." GMT");
// header("Cache-Control: private, max-age=86400");
// header("Cache-Control: pre-check=86400", false);
$main_tone = "orange";
print <<<ENDCSS
@import url('//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');
// @import url('cmp/ans.css');
// @import url('cmp/smn.css');
// @import url('cmp/san.css');
html,body {
	margin:0;
	padding:0
}
* {
	box-sizing:border-box
}
html {
	background:#E9E5E2
}
body {
	font-size:13px;
	font-family:'Helevetica',sans-serif;
	line-height:1.3;
	color:#222
}
th,td {
	font-size:12px;
	font-family:'Helevetica',sans-serif;
	line-height:1.3
}
p {
	padding:0;
	margin:0
}
a {
	color:#2980b9;
	font-weight:bold;
	text-decoration:none
}
a:hover {
	color:#d30;
	text-decoration:none
}
a:focus {
	outline:0px solid transparent
}
a:active {
	color:#b92201
}
img[src$="sponsor.gif"],img[src$="sponsor2.gif"],img[src$="sponsor3.gif"] {
	display:inline-block;
	width:0px;
	height:10px;
	background:url(i/sponsor_o.png);
	background-repeat:no-repeat;
	padding-left:11px;
	overflow:hidden;
	margin-right:2px
}
img[src$="sponsor2.gif"] {
	background:url(i/sponsor_g.png)
}
img[src$="sponsor3.gif"] {
	background:url(i/sponsor_b.png)
}
input[type="submit"],.framemapbg br + a[href$="logout.php"],.framemapbg br + a[href$="logout.php"] + br + a,form[action="friends.php?action=insertuser"] input[type="submit"],#ttContent input[type="submit"] {
	box-shadow:0px 1px 0px 0px #ffffff inset;
	background:-moz-linear-gradient( center top,#ffffff 5%,#f6f6f6 100% );
	background:-webkit-gradient( linear,left top,left bottom,color-stop(0.05,#ffffff),color-stop(1,#f6f6f6) );
	/*border-radius:4px;*/
	border:1px solid #ccc;
	display:inline-block;
	padding:2px 3px;
	text-align:center;
	text-decoration:none;
	text-shadow:1px 1px 0px #eee;
	font-size:11px;
	margin:0 1px;
	cursor:pointer;
	font-weight: bold;
	min-width: 100px;
	/*font-family:Helevetica*/
}
input[type="submit"]:hover,.framemapbg br + a[href$="logout.php"]:hover,.framemapbg br + a[href$="logout.php"] + br + a:hover,form[action="friends.php?action=insertuser"] input[type="submit"]:hover,#ttContent input[type="submit"]:hover {
	background:-moz-linear-gradient( center top,#f6f6f6 5%,#ffffff 100% );
	background:-webkit-gradient( linear,left top,left bottom,color-stop(0.05,#f6f6f6),color-stop(1,#ffffff) )
}
input[type="submit"] {
	margin-top:3px
}
.framemapbg br + a[href$="logout.php"],.framemapbg br + a[href$="logout.php"] + br + a {
	width:75px;
	font-weight:normal;
	margin-top:6px
}
.framemapbg br + a[href$="logout.php"] {
	color:#0a0
}
.framemapbg br + a[href$="logout.php"] + br + a {
	color:#d00
}
.healthok,.valueincreased {
	color:#27ae60
}
#listrow_lifep span.healthcritical, #listrow_lifep span.healthmed {
	font-size: 30;
}
.healthcritical, .healthmed {
	color:red;
}
#ttContainer table {
	border-collapse:separate !important;
	border:0px solid transparent !important
}
#ttCaption {
	background-color:#fff !important;
	border:1px solid #777 !important;
	border-radius:4px 4px 0 0 !important;
	border-bottom:1px solid #777 !important;
	color:#222 !important;
	text-align:center;
	background-image:url(i/br2.png) !important
}
#ttContent {
	background:#f1f5fb url(i/noise.png) left top repeat-x !important;
	border:1px solid #777 !important;
	border-top:0 !important;
	border-radius:0 0 4px 4px !important;
	color:#222 !important
}
#ttContent img {
	width:20px;
	height:20px
}
#ttCaption img[src$="close.gif"] {
	display:inline-block;
	width:0px;
	height:10px;
	background:url(i/rcsmall.png);
	background-repeat:no-repeat;
	margin-top:3px;
	padding-right:10px;
	overflow:hidden
}
#ttContent textarea,input[name="name"][type="text"][id="name"][value=""][size="20"][maxlength="30"] ,textarea[name="brief"][cols="20"][rows="10"][wrap="VIRTUAL"][id="brief"] ,form[action="friends.php?action=insertuser"] input[name="username"] ,.framemainbg textarea ,.framemainbg input[name="name"][type="text"][id="name"][size="30"][maxlength="30"],.frameitembg textarea[name="tele_msg"] {
	width:100%
}
textarea,input[type="text"],input:not([type]) {
	border:1px solid rgba(0,0,0,.2);
	padding:3px;
	/*font-family:Helevetica;*/
	font-size:13px;
	background:#FFECD3
}
.frameitembg textarea {
	height:50%
}
.framemainbg,.framemainbg td {
	color:#222
}
.listusersrow img[src$="blase.gif"],.friendlist img[src$="blase.gif"] {
	display:none
}
a[href^="main.php?action=whisperuser&act_user_id="]:after {
	content:"\\f075";
	color: #27ae60;
}
.framemainbg a[href^="chatform.php?action=whisperuser&act_user_id="]:after {
	content:"\\f075";
	color: #27ae60;
}
img[src$="group.gif"] {
	display:none
}
a[href^="fight.php?action=groupinvite&act_user_id="]:after {
	content:"\\f0c0"
}
#listrow_group img[src$="group.gif"] {
	display:none
}
a[href^="fight.php?action=groupjoinrand"]:before {
	content:"\\f0c0"
}
a[href^="chatform.php?action=whisperuser&act_user_id="]:after,a[href^="chatform.php?action=whisperuser&act_user_id="]:hover:after,a[href^="main.php?action=whisperuser&act_user_id="]:after,a[href^="main.php?action=whisperuser&act_user_id="]:hover:after,a[href^="fight.php?action=groupinvite&act_user_id="]:after,a[href^="fight.php?action=groupinvite&act_user_id="]:hover:after,a[href^="fight.php?action=groupjoinrand"]:before,a[href^="fight.php?action=groupjoinrand"]:hover:before {
	/*color:#666;*/
	font-family:FontAwesome;
	font-style:normal;
	font-weight:normal;
	line-height:.9
}
a[href^="chatform.php?action=whisperuser&act_user_id="],a[href^="chatform.php?action=whisperuser&act_user_id="]:hover,a[href^="main.php?action=whisperuser&act_user_id="],a[href^="main.php?action=whisperuser&act_user_id="]:hover,a[href^="fight.php?action=groupinvite&act_user_id="],a[href^="fight.php?action=groupinvite&act_user_id="]:hover,a[href^="fight.php?action=groupjoinrand"],a[href^="fight.php?action=groupjoinrand"]:hover {
	text-decoration:none
}
.friendlist img[src$="close.gif"] {
	display:inline-block;
	width:0px;
	height:10px;
	background:url(i/rcsmall.png);
	background-repeat:no-repeat;
	margin-top:1px;
	padding-left:10px;
	overflow:hidden
}
.friendlist a[href="#"][onclick*="tt(event,"]:after {
	content:attr(title);
	position:absolute;
	left:326px;
	right:5px;
	display:inline-block;
	border:1px solid #ccc;
	border-bottom:0;
	background:url(i/white.png);
	padding:1px;
	color:#222;
	font-weight:normal;
	margin-top:-2px;
	height:17px;
	overflow:hidden
}
.friendlist tr:first-of-type a[href="#"][onclick^="tt"]:after {
	border-top-left-radius:4px;
	border-top-right-radius:4px
}
.friendlist tr:last-of-type a[href="#"][onclick^="tt"]:after {
	border-bottom-left-radius:4px;
	border-bottom-right-radius:4px;
	border-bottom:1px solid #ccc;
	height:16px
}
.friendlist a[href="#"][onclick*="tt(event,"][title="Kommentar verfassen"]:after {
	content:"Kein Kommentar festgelegt...";
	color:#bbb;
	font-style:italic
}
.friendlist + br + p + .friendlist a[href="#"][onclick*="tt(event,"]:after {
	left:278px
}
.listplaceitemsrow br + br + br {
	display:none
}
.friendlist {
	border-collapse:separate;
	border-spacing:0px
}
.friendlist tr td {
	border-bottom:1px solid #ccc;
	padding:1px;
	margin-top:3px;
	background:url(i/white.png)
}
.friendlist tr td[width="200px"] {
	width:250px !important
}
.friendlist tr td:first-of-type {
	border-left:1px solid #ccc
}
.friendlist tr td:last-of-type {
	border-right:1px solid #ccc
}
.friendlist tr:first-of-type td {
	border-top:1px solid #ccc
}
.friendlist tr:first-of-type td:first-of-type {
	border-top-left-radius:4px
}
.friendlist tr:first-of-type td:last-of-type {
	border-top-right-radius:5px
}
.friendlist tr:last-of-type td:first-of-type {
	border-bottom-left-radius:4px
}
.friendlist tr:last-of-type td:last-of-type {
	border-bottom-right-radius:5px
}
.friendlist:first-of-type tr td:first-of-type:after {
	content:" "
}
form[action="friends.php?action=insertuser"] input[name="username"] {
	width:300px
}
p.maincaption {
	text-shadow:1px 1px 5px #888;
	font-size:25px;
	padding:5px
}
/*p.maincaption + br {
	display:none
}*/
img[src$="sieg.jpg"],img[src$="niederlage.jpg"] {
	width:37px;
	height:30px
}
/*img[src$="brief.jpg"] {
	display:inline-block;
	width:0px;
	height:14px;
	background:url(i/brief.png);
	background-repeat:no-repeat;
	background-position:left bottom;
	padding-left:16px;
	overflow:hidden;
	margin-right:5px
}
img[src$="brief.jpg"] + br {
	display:none
}*/
p.maincaption2 {
	font-size:15px;
	/*padding:3px*/
	text-align: left;
	width: 600px;
}
p.maincaption2 a {
	text-shadow:0px 0px 0px #888
}
/*a[href="main.php?action=archive&mode=show#newest_msg"] ~ p.maincaption2 {
	margin-top:15px;
	padding:3px;
	border:1px solid #ccc;
	border-radius:5px;
	font-size:13px
}*/
.itemlistcaption[style="width:550px"],.listcaption[style="width:550px"] {
	border-radius:0 0 !important;
	background-color:orange !important;
	border:1px solid rgba(0,0,0,.2) !important;
	background-image:none !important;
	padding:4px 8px !important;
	color:#eee !important;
	font-size:13px;
	font-weight:bold
}
.itemlistcaption[style="width:550px"],.listcaption[style="width:550px"],.itemlistcaption[style="width:550px"] + .listrow,.listcaption[style="width:550px"] + .listrow {
	width:100% !important
}
.itemlistcaption[style="width:550px"] a,.listcaption[style="width:550px"] a,.itemlistcaption[style="width:550px"] a:hover,.listcaption[style="width:550px"] a:hover {
	color:#fff
}
.itemlistcaption[style="width:550px"] + .listrow,.listcaption[style="width:550px"] + .listrow {
	background-color:#eee !important;
	border:1px solid rgba(0,0,0,.2) !important;
	border-bottom:0;
	padding:4px 4px !important
}
.itemlistcaption[style="width:550px"] + .listrow img,.listcaption[style="width:550px"] + .listrow img {
	opacity:.9
}
.itemlistcaption[style="width:550px"] + .listrow td,.listcaption[style="width:550px"] + .listrow td {
	color:#222 !important;
	font-size:12px
}
.listcaption[style="width:550px"] img {
	display:none
}
.listcaption[style="width:550px"] a,.listcaption[style="width:550px"] a:hover {
	text-decoration:none;
	font-size:0;
	display:inline-block
}
.listcaption[style="width:550px"] a:after {
	font-size:15px;
	line-height:13px;
	font-family:FontAwesome;
	font-style:normal;
	font-weight:normal
}
.listcaption[style="width:550px"] a[title$="ein)"]:after {
	content:"\\f06e";
	color:#fff
}
.listcaption[style="width:550px"] a[title$="aus)"]:after {
	content:"\\f070";
	color:#fa9
}
td[style$="/map/black.jpg"] a:not(.nocango),td[style$="/map/u/Einzelbilder/002.jpg"] a,td[style$="/map/ixi19.jpg"] a {
	width:50px;
	height:50px;
	display:block;
	background-image:url(i/uk.png) !important
}
img[src$="/map/black.jpg"] + div:after,img[src$="/map/u/Einzelbilder/002.jpg"] + div:after,img[src$="/map/ixi19.jpg"] + div:after {
	content:"";
	width:25px;
	height:25px;
	display:block;
	background-image:url(i/uk.png) !important;
	background-size:25px 25px;
	position:absolute;
	left:0;
	top:0
}
.builtcaption,.editcaption,.visitcaption {
	position:absolute;
	right:10px;
	top:5px;
	color:transparent;
	font-size:0
}
.builtcaption a,.editcaption a,.visitcaption a {
	box-shadow:0px 1px 0px 0px #ffffff inset;
	background:-webkit-gradient( linear,left top,left bottom,color-stop(0.05,#ffffff),color-stop(1,#f6f6f6) );
	background:-moz-linear-gradient( center top,#ffffff 5%,#f6f6f6 100% );
	display:inline-block;
	color:#666 !important;
	padding:3px 5px;
	text-decoration:none;
	text-shadow:1px 1px 0px #eee;
	font-size:11px;
	margin:0 1px
}
.builtcaption a:hover,.editcaption a:hover,.visitcaption a:hover {
	background:-webkit-gradient( linear,left top,left bottom,color-stop(0.05,#f6f6f6),color-stop(1,#ffffff) );
	background:-moz-linear-gradient( center top,#f6f6f6 5%,#ffffff 100% );
	color:#222 !important
}
.uplantimg {
	width:30px;
	height:30px
}
.frameitembg select[name="z_pos_id"] option[value="73"] {
	font-weight:bold
}
/*.personlistcaption:not([style*="width:550px"]),.itemlistcaption:not([style*="width:550px"]) {
	display:none
}
table.areadescription + br,table.areadescription + br + table + br,table.areadescription + br + table + br + table + br {
	display:none
}
div.uwork br:first-of-type + br {
	display:none
}
div.uwork + br[style="clear:both;"] + br {
	display:none
}*/
.tutorial {
	border:1px solid #ccc !important;
	background-color:#eee !important;
	-moz-border-radius:8px !important;
	-webkit-border-radius:8px !important;
	border-radius:8px !important;
	color:#222
}
.tutorial legend {
	border:1px solid #ccc !important;
	background-color:#eee !important;
	-moz-border-radius:3px !important;
	-webkit-border-radius:3px !important;
	border-radius:3px !important;
	color:#222;
	padding:2px
}
.framemapbg td > a {
	display:inline-block;
	position:relative;
	width:50px;
	height:50px
}
.framemapbg td > a:after {
	position:absolute;
	left:0;
	right:0;
	top:0;
	color:#000;
	font-weight:normal;
	background:rgba(255,255,255,.75);
	border:0px solid #eee;
	box-shadow:0 5px 5px -5px rgba(0,0,0,.8);
	font-size:10px;
	text-align:center;
	padding:2px 0
}
a[href="main.php?arrive_eval=getmission"],a[href="main.php?finish=1"] {
	display:block;
	width:200px;
	height:40px;
	padding:10px;
	margin:10px 0;
	border:1px solid rgba(0,0,0,.2);
	text-align:center;
	color:#fff !important;
	font-size:bigger;
	background:#27ae60
}
a[href="main.php?arrive_eval=getmission"]:hover,a[href="main.php?finish=1"]:hover {
	color:#fff !important;
	background:#2ecc71
}
.framebannerbg:before {
	position:absolute;
	white-space:pre;
	left:0;
	top:-5px;
	width:270px;
	height:50px;
	font-size:11px;
	display:block;
	padding:10px;
	border:3px solid #eee;
	text-overflow:ellipsis;
	overflow:hidden;
	visibility:hidden
}
.framebannerbg table td:first-of-type {
	display:none
}
.framebannerbg table td:last-of-type {
	position:absolute;
	right:15px;
	top:8px
}
#ItemFrameItem a[href^="item.php?action=fastspell&spellslot"]:not([href$="mode=delete"]) {
	display:block;
	margin:-20px -6px 0 -5px;
	background:#f5f5f5;
	padding:2px 8px;
	border-bottom:1px solid rgba(0,0,0,.1);
	z-index:10;
	position:relative
}
#ItemFrameItem a[href^="item.php?action=fastspell&spellslot"]:not([href$="mode=delete"]):first-of-type {
	margin-top:0;
	border-top:1px solid rgba(0,0,0,.1)
}
#ItemFrameItem a[href^="item.php?action=fastspell&spellslot"]:not([href$="mode=delete"]):last-of-type {
	margin-bottom:8px
}
#fssel1:after,#fssel2:after,#fssel3:after,#fssel4:after,#fssel5:after,#fssel6:after,#fssel7:after,#fssel8:after,#fssel9:after {
	display:inline-block;
	margin-left:8px;
	content:attr(title)
}
#x-467y-472 a[href$="main.php?go=exit"] {
	display:inline-block;
	margin-top:40px
}
.abilitymenu {
	border-spacing:0px;
	border-collapse:collapse;
	width:calc(100% + 12px);
	margin:0 -6px
}
.abilitymenu td {
	border:1px solid #ddd;
	background:#fafafa;
	color:#222;
	padding:2px 5px
}
.abilitymenu tr:nth-of-type(2n) td {
	background:#eee
}
form[name="bank"] table {
	border-collapse:collapse;
	border:1px solid rgba(0,0,0,.1)
}
form[name="bank"] tr td {
	background:#fefefe;
	padding:2px 6px
}
form[name="bank"] tr:nth-of-type(2n) td {
	background:#eee
}
form[name="bank"] a {
	float:right;
	margin:4px 2px;
	display:inline-block;
	margin-left:5px
}
form[name="bank"] span[style="font-size:.8em;"] {
	font-size:0 !important
}
form[name="bank"] span[style="font-size:.8em;"] span {
	font-size:10px !important;
	height:20px;
	width:20px;
	border-radius:50%;
	background:#3498db;
	color:#fff;
	text-shadow:0 1px 2px rgba(0,0,0,.2);
	margin:0 6px;
	display:inline-block;
	padding:0;
	line-height:20px;
	padding-right:1px;
	text-align:center;
	box-shadow:0 1px 2px rgba(0,0,0,.2) inset;
	font-weight:bold
}
form[name="bank"] b[onmouseover^="tt('gepresste Zauberkugel'"] {
	color:#d00
}
.framechatformbg {
	border:0 !important
}
.framechatformbg table {
	border:0 !important;
	padding:0;
	margin:0;
	border-collapse:collapse
}
.framechatformbg td {
	color:#111
}
#chatform {
	padding:0;
	margin:0
}
#chatform input[type="text"] {
	border:1px solid #ccc;
	border-top:0;
	border-bottom:0;
	padding:2px 7px;
	height:35px;
	margin-top:-1px;
	background:#FFECD3;
	font-size:13px;
	/*color: #006600;*/
}
#chatform input[type="submit"] {
	margin-top:-1px
}
.framechatformbg td:nth-of-type(1) {
	padding-left:6px !important;
	padding-right:6px !important
}
.framechatformbg td:nth-of-type(2) {
	padding-right:4px
}
.framechattextbg:before {
	background-image:url(i/noiset.png);
	background-repeat:repeat-x;
	background-attachment:fixed;
	background-position:left bottom;
	position:fixed;
	left:0;
	right:0;
	bottom:0;
	height:5px;
	z-index:1000;
	content:""
}
.framechattextbg:after {
	background-image:url(i/noise.png);
	background-repeat:repeat-x;
	background-attachment:fixed;
	background-position:left top;
	position:fixed;
	left:0;
	right:0;
	top:0;
	height:5px;
	z-index:1000;
	content:""
}
.framechattextbg p {
	font-size:13px
}
.framechattextbg > :not(div):last-of-type {
	padding-bottom:6px
}
.chattext {
	color:#222
}
/*.chattext i {
	color:#444
}*/
.chattextscream,.submitschreien {
	color:#05c
}
.chattextclan,.submitclan {
	color:red
}
.chattextgroup,.submitgroup {
	color:#CE5A21
}
.chattextinfo {
	color:olive;
	font-style:italic
}
.chattextinfo::before {
	content: "Bemerkenswert:\\0020";
}
.chattextwhisper,.submitwhisper {
	color:#006600
}
.chattextglobal,.submitglobalchat {
	color:purple;
}
.chattextglobal:before {
	padding-right:2px;
	font-family:FontAwesome;
	font-style:normal;
	font-weight:normal;
	content:"\\f0c2"
}
.chattextscream:before {
	padding-left:1px;
	padding-right:7px;
	font-family:FontAwesome;
	font-style:normal;
	font-weight:normal;
	content:"\\f0ac"
}
/*.worldsay,.worldsay table,.worldsay tbody,.worldsay table td {
	font-size:11px
}*/
.worldsay table,.worldsay tbody {
	border-collapse:separate
}
.worldsay {
	margin:0 -2px
}
/*.worldsay tr[bgcolor="#99EE99"] {
	background-color:transparent !important;
	color:#d99 !important
}*/
.worldsay tr[bgcolor="#99EE99"] td {
	padding:2px 5px;
	background-color:#27ae60 !important;
	/*color:#FAFAFA !important;*/
	border:1px solid rgba(0,0,0,.2) !important
}
/*.worldsay tr[bgcolor="#C1CEF9"] {
	background-color:transparent !important;
	color:#d99 !important
}*/
.worldsay tr[bgcolor="#C1CEF9"] td {
	padding:2px 5px;
	background-color:#2980b9 !important;
	color:#FAFAFA !important;
	border:1px solid rgba(0,0,0,.2) !important
}
/*.worldsay tr[bgcolor="#FFAEA1"] {
	background-color:transparent !important;
	color:#d99 !important
}*/
.worldsay tr[bgcolor="#FFAEA1"] td {
	padding:2px 5px;
	background-color:red !important;
	color:#FAFAFA !important;
	border:1px solid rgba(0,0,0,.2) !important
}
table[style="border:1px solid #C85424;"] {
	margin:0 -2px;
	border:0 solid rgba(0,0,0,0) !important
}
table[style="border:1px solid #C85424;"] td {
	padding:2px 5px;
	background-color:#ffe !important;
	color:#222 !important;
	border:1px solid rgba(0,0,0,.2) !important;
	font-size:12px
}
table[style="border:1px solid #C85424;"] img {
	width:24px;
	height:24px;
	margin:4px 8px 4px 0
}
img[src="http://voting.gdynamite.de/images/gd_animbutton.gif"] {
	display:none
}
img[src*="item_divider.gif"],.chatpics {
	display:none
}
.framemainbg a,.framechattextbg a {
	/*color:#d30;*/
	font-weight:bold
}
.framemainbg a:hover,.framechattextbg a:hover {
	color:#f50
}
#ItemFrameClanmenu .listrow[title]:after {
	content:attr(title);
	display:block
}
.framemenubg {
	/*font-size:12px*/
	line-height: 1.0em;
}
html[id^="MainFrame"],html[id^="ItemFrame"],html[id^="ChatFrameChattext"] {
	position:relative;
	overflow-y:scroll;
	height:100%
}
html[id^="MainFrame"] {
	padding:10px
}
#ChatFrameChattext {
	padding:6px;
	background-color:#E9E5E2
}
/*#ChatFrameChatform {
	background:#fafafa url(i/noise_gray.png)
}*/
html[id^="ItemFrame"] {
	padding:6px;
	overflow-x:hidden
}
.frameitembg p,.frameitembg td {
	line-height:1.1
}
html[id^="MapFrame"] {
	position:relative;
	height:295px
}
.framebannerbg {
	background: #FAFAFA;
	/*background: linear-gradient(to right, #e0832c 0%,#e5c77b 100%);*/
	background-image: url(i/fwbanner.jpg);
}
.framebannerbg > * {
	border-bottom:6px solid orange !important
}
.framemenubg {
	height:65px
}
html[id^="ItemFrame"],html[id^="MapFrame"],.framemenubg {
	border-left:1px solid #aaa
}
html[id^="ItemFrame"]:before {
	position:fixed;
	left:0;
	top:0;
	bottom:0;
	width:1px;
	background:#aaa;
	content:""
}
.frameitembg {
	font-size:12px
}
#MapFrameID2 {
	padding:8px
}
.frameitembg .listcaption, .itemlistcaption, .personlistcaption, .maincaption2,.listcaption[style="width: 550px"] {
	border:1px solid rgba(0,0,0,.2);
	border-left:0;
	border-right:0;
	background:$main_tone;
	text-align:center;
	color:#000;
	padding:0px 5px;
	font-weight:bold;
	font-size:13px;
	text-shadow:0 2px 1px rgba(0,0,0,.2);
	height:20px;
	line-height:21px
}

.listcaption[style="width: 550px"] {
	text-align: left !important;
}

.itemlistcaption, .personlistcaption, #plantrow {
	text-align: left !important;
}
p.personlistcaption {
	background: #2980b9 !important;
	color: #FFF !important;
}
#plantrow {
	background: green !important;
	color: #FFF !important;
}
.frameitembg .listcaption:first-of-type {
	border-top:0
}
.frameitembg .listrow {
	padding:0 5px;
	/*min-height:20px;*/
	background:#fafafa;
	font-size:12px;
	line-height:20px
}
.frameitembg .listrow a:hover {
	text-decoration:none !important
}
.frameitembg p.listcaption:first-of-type {
	margin-top:-6px
}
.frameitembg .listcaption,.frameitembg .listrow {
	margin-left:-6px;
	margin-right:-6px
}
#listrow_clan,#listrow_int,#listrow_defensep,#listrow_special {
	background:#eee
}
#listrow_aka_battlep {
	background:#FFA54F;
	color:#000;
	text-align:center;
	border-bottom:1px solid rgba(0,0,0,.2);
	font-size:10px
}
#listrow_aka_battlep a {
	color:#3498db
}
#listrow_char_mission,#listrow_clan {
	height:20px;
	display:table;
	margin-left:-6px;
	padding:0;
	width:calc(100% + 12px);
	border-collapse:collapse;
	font-size:0;
	color:transparent;
	margin-bottom:-3px
}
#listrow_char_mission a,#listrow_clan a {
	display:table-cell;
	width:50%;
	text-align:center;
	padding:0 2px;
	margin:0;
	height:20px;
	line-height:21px
}
#listrow_char_mission a:nth-of-type(1),#listrow_clan a:nth-of-type(1) {
	border-right:1px solid rgba(0,0,0,.1)
}
#listrow_char_mission a {
	font-size:0
}
#listrow_char_mission a:nth-of-type(1):after {
	font-size:12px;
	content:"F\\00E4higkeiten"
}
#listrow_char_mission a:nth-of-type(2):after {
	font-size:12px;
	content:"Auftrag"
}
#listrow_clan a {
	font-size:12px
}
#listrow_clan img[src$="group.gif"] {
	display:none
}
#listrow_clan a[href="fight.php?action=groupjoinrand"]:after {
	padding-left:3px;
	content:" Gruppe"
}
#listrow_group {
	position:absolute;
	z-index:2;
	right:6px;
	left:calc(50% + 6px);
	background:red;
	text-align:center;
	margin-top:-19px;
	background:#eee;
	border:0
}
#listrow_lifep {
	position:absolute;
	right:0;
	background:#fff;
	margin:0;
	z-index:10000;
	font-size:16px;
	border:1px solid rgba(0,0,0,.2);
	padding:0 5px;
	height:40px;
	line-height:40px;
	border-right:0;
	box-shadow:0 0 3px rgba(0,0,0,.1)
}
#listrow_lifep > b {
	display:none
}
#listrow_lifep > span > b {
	font-weight:bold
}
#listrow_int > b:first-of-type,#listrow_money > b {
	display:inline-block;
	width:16px;
	overflow:hidden;
	line-height:0
}
#listrow_int > b:first-of-type {
	width:0
}
#listrow_status + div[align="center"] {
	display:none
}
#listrow_money {
	white-space:nowrap;
	overflow:hidden
}
#listrow_money > b {
	display:inline-block;
	width:16px;
	overflow:hidden
}
#listrow_money img[src$="icon_gold.gif"] {
	display:inline-block;
	width:0;
	margin-right:100%
}
#listrow_money b:before {
	content:url(i/icon_gold.gif);
	margin-right:4px;
	transform:translateY(1px);
	display:inline-block
}
#listrow_money a {
	display:inline-block
}
#listrow_money a img {
	display:none
}
#listrow_money a[href="item.php?action=moneydrop1"] {
	text-indent:-5px;
	margin-left:-100%;
	margin-right:100%
}
#listrow_money a[href="item.php?action=moneytransfer1"] {
	margin-left:-100%;
	margin-right:100% 
}
#listrow_money a:after {
	font-family:FontAwesome;
	font-weight:normal;
	font-style:normal
}
#listrow_money a[href="item.php?action=moneydrop1"]:after {
	content:"\\f175";
	color: red;
}
#listrow_money a[href="item.php?action=moneytransfer1"]:after {
	content:"\\f0ec"
}
#listrow_money > b,#listrow_lifep > b,#listrow_int > b,#listrow_attackp > b,#listrow_attackw > b,#listrow_defensep > b,#listrow_defensew > b {
	font-weight:normal
}
#listrow_money,#listrow_lifep,#listrow_int,#listrow_attackp,#listrow_attackw,#listrow_defensep,#listrow_defensew {
	font-weight:bold
}
#listrow_special,#listrow_special a {
	height:20px;
	line-height:20px
}
#listrow_special a {
	width:0;
	display:inline-block;
	font-size:0
}
#listrow_special a:before {
	font-size:12px;
	content:"Spezial"
}
#listrow_status {
	min-height:0
}
#listrow_special + #listrow_status {
	min-height:20px;
	margin-top:-20px;
	text-indent:50px;
	background:#eee
}
#listrow_status .small {
	font-size:12px
}
#listrow_int ~ .listcaption {
	margin-top:4px
}
/*#listrow_int ~ .listcaption a {
	color:#eee
}*/
#listrow_int ~ .listcaption a:hover,#listrow_int ~ .listcaption a:focus {
	color:#fff
}
#filterrow {
	padding:3px;
	/*background:#ddd;*/
	text-align:center;
	width:calc(100% + 12px);
	margin:0 -6px
}
#filterrow b {
	padding:0
}
#listrow_char_mission {
	background: #fafafa;
}
.listitemrow {
	position:relative;
	padding:2px 3px;
	padding-left:9px;
	padding-right:70px;
	background:#fafafa;
	width:calc(100% + 12px);
	margin:0 -6px;
	min-height:19px
}
/*.listitemrow:nth-of-type(2n) {
	background:#eee
}*/


.listitemrow ~ form {
	width:0;
	height:0;
	margin:0;
	padding:0
}
.listitemrow * {
	z-index:2
}
#listrow_int ~ .listitemrow br {
	display:none
}
.listitemrow .itemequipped,.listitemrow .itemmagic,.listitemrow .itemamount {
	display:inline-block;
	font-weight:bold;
	font-size:12px;
	color:#27ae60
}
.listitemrow .itemamount {
	color:#2980b9 !important;
}

.listitemrow .itemamount {
	padding-right:2px
}
.itemmagic {
	color:#27ae60
}
.listitemrow .itemmagic {
	width:0;
	font-size:0;
	color:transparent
}
.listitemrow .itemmagic:before {
	content:"";
	display:block;
	position:absolute;
	width:auto;
	top:0;
	left:1px;
	bottom:0;
	width:4px
}
.listitemrow .itemmagic:before {
	background:#bb7857
}
.listitemrow .itemmagic.magicextend:before {
	background:#83bb57
}
.listitemrow a img {
	display:none
}
.listitemrow a[href^="item.php?action=activate"] {
	/*font-size:0;*/
	content: url("i/black/svg/circle-o.svg");
}
.listitemrow a[href^="item.php?action=activate"]:before {
	content:"\\f10c"
	/*content: url("i/black/svg/circle-o.svg");*/
}
.listitemrow a[href^="item.php?action=activate"]:hover:before {
	content:"\\f10c"
	/*content: url("i/black/svg/circle.svg");*/
}
.listitemrow a[href^="item.php?action=watch"]:before {
	content:"\\f06e";
	/*font-size:12px
	content: url("i/black/svg/eye.svg");*/
}
.listitemrow a[href^="item.php?action=transfer1"]:before, .listitemrow a[href^="item.php?action=manytransfer1"]:before {
	content:"\\f0ec"
	/*content: url("i/black/svg/exchange.svg");*/
}
.listitemrow a[href^="item.php?action=manydrop"]:before {
	content:"\\f175"
	/*content: url("i/black/svg/angle-double-down.svg");*/
}
.listitemrow a[href^="item.php?action=activate"]:before,.listitemrow a[href^="item.php?action=watch"]:before,.listitemrow a[href^="item.php?action=transfer1"]:before,.listitemrow a[href^="item.php?action=manytransfer1"]:before,.listitemrow a[href^="item.php?action=manydrop"]:before {
	margin:0 3px;
	display:inline-block;
	color:#666;
	font-size:14px;
	font-family:FontAwesome;
	font-style:normal;
	font-weight:normal;
	line-height:1
}
.listitemrow a[href^="item.php?action=watch"]:before {
	font-size:13px;
	transform:translateY(-1px)
}
.listitemrow a[href^="item.php?action=activate"]:hover,.listitemrow a[href^="item.php?action=watch"]:hover,.listitemrow a[href^="item.php?action=transfer1"]:hover,.listitemrow a[href^="item.php?action=manytransfer1"]:hover,.listitemrow a[href^="item.php?action=manydrop"]:hover {
	text-decoration:none
}
#listrow_int ~ .listitemrow,#listrow_int ~ .listitemrow br ~ a,#listrow_int ~ .listitemrow br ~ a:hover {
	display:block;
	font-size:0;
	color:transparent
}
#listrow_int ~ .listitemrow b {
	word-break:break-word
}
#listrow_int ~ .listitemrow b {
	font-size:12px;
	color:#222
}
#listrow_int ~ .listitemrow a[href^="item.php?action=activate"],#listrow_int ~ .listitemrow a[href^="item.php?action=watch"],#listrow_int ~ .listitemrow a[href^="item.php?action=transfer1"],#listrow_int ~ .listitemrow a[href^="item.php?action=manytransfer1"],#listrow_int ~ .listitemrow a[href^="item.php?action=manydrop"] {
	width:16px;
	height:16px;
	position:absolute;
	top:3px;
	z-index:3
}
#listrow_int ~ .listitemrow a[href^="item.php?action=activate"] {
	right:49px;
}
#listrow_int ~ .listitemrow a[href^="item.php?action=watch"] {
	right:33px
}
#listrow_int ~ .listitemrow a[href^="item.php?action=transfer1"] {
	right:17px
}
#listrow_int ~ .listitemrow a[href^="item.php?action=manytransfer1"] {
	right:17px
}
#listrow_int ~ .listitemrow a[href^="item.php?action=manydrop"] {
	right:1px
}
#listrow_int ~ .listitemrow a[href^="item.php?action=activate"]:before,#listrow_int ~ .listitemrow a[href^="item.php?action=watch"]:before,#listrow_int ~ .listitemrow a[href^="item.php?action=transfer1"]:before,#listrow_int ~ .listitemrow a[href^="item.php?action=manytransfer1"]:before,#listrow_int ~ .listitemrow a[href^="item.php?action=manydrop"]:before {
	margin:0
}
#listrow_int ~ .listitemrow a[href^="item.php?action=manydrop"]:before {
	color: red !important;
}
#listrow_int ~ .listitemrow a[href^="item.php?action=watch"]:before {
	color: #27ae60;
}
#listrow_int ~ .listitemrow a[href^="item.php?action=transfer1"]:before, #listrow_int ~ .listitemrow a[href^="item.php?action=manytransfer1"]:before, #listrow_int ~ .listitemrow a[href^="item.php?action=manydrop"]:before, #listrow_int ~ .listitemrow a[href^="item.php?action=activate"]:before {
	color: #2980b9;
}
#listrow_int ~ .listitemrow a[href^="item.php?action=watch"]:hover:before,#listrow_int ~ .listitemrow a[href^="item.php?action=transfer1"]:hover:before,#listrow_int ~ .listitemrow a[href^="item.php?action=manytransfer1"]:hover:before,#listrow_int ~ .listitemrow a[href^="item.php?action=manydrop"]:hover:before,#listrow_int ~ .listitemrow a[href^="item.php?action=activate"]:hover:before {
	color:#d30
}
.listitemrow[id^="itemarea"],#itemunusedzk {
	background-color:#eee;
	min-height:45px;
	position:relative;
	white-space:normal;
	padding:5px
}
.listitemrow[id^="itemarea"]:nth-of-type(2n) {
	background-color:#fafafa
}
b + br + .listitemrow[id^="itemarea"],b + br + #itemunusedzk {
	margin-top:8px
}
.listitemrow[id^="itemarea"] .areaimg,#itemunusedzk .areaimg {
	position:absolute;
	right:5px;
	bottom:5px
}
.listitemrow[id^="itemarea"] .itemarea + br,#itemunusedzk .itemarea + br {
	display:none
}
.listitemrow[id^="itemarea"] .medium,#itemunusedzk .medium {
	display:inline-block;
	margin-bottom:8px
}
.listitemrow[id^="itemarea"] a:before,#itemunusedzk a:before {
	font-size:12px
}
.listitemrow[id^="itemarea"] a[href^="item.php?action=activate"]:before,#itemunusedzk a[href^="item.php?action=activate"]:before {
	color:#666;
	font-size:15px;
	font-family:FontAwesome;
	font-style:normal;
	font-weight:normal;
	line-height:1
}
.listitemrow[id^="itemarea"] a[href^="item.php?action=activate"],.listitemrow[id^="itemarea"] a[href^="item.php?action=activate"]:hover,#itemunusedzk a[href^="item.php?action=activate"],#itemunusedzk a[href^="item.php?action=activate"]:hover {
	transform:translateY(1px);
	display:inline-block;
	font-size:0;
	margin:0 3px;
	text-decoration:none;
	width:16px;
	height:16px
}
.listitemrow[id^="itemarea"] a[href^="item.php?action=activate"]:before,#itemunusedzk a[href^="item.php?action=activate"]:before {
	margin:0 2px;
	content:"\\f10c"
}
.listitemrow[id^="itemarea"] a[href^="item.php?action=activate"]:hover:before,#itemunusedzk a[href^="item.php?action=activate"]:hover:before {
	color:#d30
}
.listitemrow[id^="itemarea"] .timeday {
	color:#27ae60
}
.listitemrow[id^="itemarea"] .timehour {
	color:#f39c12
}
.listitemrow[id^="itemarea"] .timemin,.listitemrow[id^="itemarea"] .timesec {
	color:#c0392b
}
table.areadescription {
	margin:-10px -10px 2px -10px;
	border-collapse:separate;
	width:calc(100% + 20px);
	padding:0
}
table.areadescription .imageborder {
	padding:3px;
	background-color:#fafafa;
	width:46px;
	height:46px;
	position:absolute;
	left:4px;
	top:4px
}
table.areadescription .mainheader {
	padding-left:70px;
	padding-top:7px;
	padding-bottom:7px;
	font-size:22px;
	background-color:orange;
	color:#000;
	border-bottom:1px solid rgba(0,0,0,.2);
	text-shadow:0 2px 1px rgba(0,0,0,.2);
}
table.areadescription .areadescription {
	padding:11px;
	background:#fff8ef;
	border-bottom:1px solid rgba(0,0,0,.1)
}
table.areadescription tr:nth-of-type(2) .areadescription {
	background:#fff8ef url(i/noise.png) left top repeat-x
}
.listusersrow,.listplaceitemsrow {
	padding:3px 8px;
	border:1px solid #ccc;
	border-bottom:0 solid transparent;
	/*font-size:12px;*/
	margin:0;
	height:auto;
	min-height:0;
	background:#fafafa;
	box-shadow:0 3px 3px -3px rgba(0,0,0,.2)
}
.listusersrow td,.listplaceitemrow td {
	font-size:12px
}
.listusersrow {
	clear:both
}
/*.personlistcaption + .listusersrow,.listplaceitemsrow:first-of-type {
	margin-top:10px
}*/
.listusersrow:last-of-type,.listplaceitemsrow:last-of-type {
	border-bottom:1px solid #ccc
}
.listplaceitemsrow {
	padding:5px 10px
}
.listusersrow > img,.listplaceitemsrow img {
	width:24px;
	height:24px;
	margin:3px 8px 3px 3px
}
.listplaceitemsrow i {
	display:inline-block;
	padding:0 3px
}
.fastattack {
	/*color:orange !important;*/
	font-size:15px
}
.fastattack:hover {
	color:#d30 !important
}
.listplaceitemsrow a,.listplaceitemsrow b {
	font-size:13px
}
.listplaceitemsrow i {
	font-style:normal
}
.aggressivenpc {
	color:#d00;
	display:inline-block;
	padding-right:3px
}
.aggressivenpc:before {
	font-family:FontAwesome;
	font-style:normal;
	font-weight:normal;
	content:"\\f071";
	padding-left:4px;
	padding-right:2px
}
#captchaHolder {
	box-sizing:content-box;
	margin:0 auto;
	border:1px solid #ccc !important;
	box-shadow:0 0 4px rgba(0,0,0,.3)
}
.listusersrow>b+br+br+img~a~br,.listusersrow>b+br+br~br+br+br+br {
	display:none
}
.listusersrow>b+br+br+img {
	width:50px;
	height:50px
}
.framemapbg table {
	border:1px solid rgba(0,0,0,.2);
	padding:3px;
	width:auto !important;
	margin-top:19px;
	background:#ccc
}
.framemapbg img[src*="zahl"] {
	opacity:.75
}
.framemapbg table a {
	display:block;
	width:50px;
	height:50px;
	border:0
}
.framemapbg table a {
	text-decoration:none
}
.nocango {
	opacity:.9
}
.nocango:hover {
	background:transparent url(i/nocango.png) left top no-repeat;
	cursor:default !important
}
/*.stdjpg {
	opacity:.9;
	background-image:url(i/berg.png) !important
}*/
a[href="map.php?reload=1"] {
	position:absolute;
	left:16px;
	font-size:11px
}
a[href="map.php?reload=1"]:before {
	content:"\\f021 ";
	font-family:FontAwesome;
	font-style:normal;
	font-weight:normal;
	color:#2980b9
}
a[href="map.php?reload=1"]:after {
	content:" Aktualisieren"
}
a[href="map.php?reload=1"]:hover {
	text-decoration:none	
}
a[href="map.php?reload=1"] img {
	display:none
}
.positiontext {
	position:absolute;
	right:0;
	left:0;
	top:0;
	line-height:19px;
	text-align:right;
	font-size:11px;
	color:#eee;
	padding:0px 12px 0px 3px;
	height:20px;
	border-bottom:1px solid rgba(0,0,0,.2);
	background:orange;
	font-weight:bold;
	/*text-shadow:0 2px 1px rgba(0,0,0,.2)*/
}

.positiontext {
	color:#000
}

.positiontext a {
	color:#2980b9;
	text-decoration:none
}
.positiontext a:hover {
	color:#000 !important;
	text-decoration:none
}
#test {
	text-align:center;
	font-size:9px;
	color:#000;
	width:242px;
	padding:3px;
	min-height:14px;
	margin:0 auto;
	color:#222
}
.framemapbg td {
	display:inline-block;
	position:relative;
	width:50px;
	height:50px
}
.positiontext:after {
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
	position:absolute;
	top:0;
	left:105px;
	font-family:FontAwesome;
	color:#ffa375
}
// siehe Addon #phasespacer {
	display:inline-block;
	height:0
}
#phasespacer br {
	display:none
}
#phasespacer + center {
	background:rgba(255,255,255,.5);
	border:0
}
#phasespacer + center + div {
	margin:0 !important
}
#phasedisp {
	margin-left:-6px;
	width:calc(100% + 12px) !important;
	height:18px !important;
	margin-top: 2px;
}
#fullenergydisp {
	background-image:none !important;
	overflow:hidden;
	background: linear-gradient(to top, #ffb76b 0%,#ffa73d 50%,#ff7f04 100%) !important;
	border:0px solid #000 !important;
	width:100% !important;
	height:18px !important
}
#curenergy {
	background-image:none !important;
	background: #1e5799;
	background: linear-gradient(to bottom, #1e5799 0%,#2989d8 50%,#7db9e8 100%) !important;
	border:0px solid #000 !important;
	border-radius:0 0 0 3px;
	overflow:hidden;
	height:18px !important
}
#phasetext {
	text-shadow: 0 2px 1px rgba(0,0,0,.2);
	color:#eee;
	padding:0;
	line-height:18px;
	height:18px !important;
	width:100% !important;
	font-size: 12px !important;
	font-weight: bold;
}
#fastspell {
	margin:4px -6px;
	margin-bottom:4;
	border:1px solid rgba(0,0,0,.2);
	border-left:0;
	border-right:0;
	background:orange;
	text-align:center;
	color:#eee;
	padding:0 5px;
	//font-weight:bold;
	width:calc(100% + 12px);
	font-size:13px;
	height:20px;
	line-height:20px;
	text-shadow:0 2px 1px rgba(0,0,0,.2)
}
#fastspell td {
	color:#000;
	font-size:13px
}
#fastspell tr > td + td > b {
	color:transparent;
	font-size:0
}
a.fast_spell_set,span.fast_spell_set {
	margin-left:3px;
	margin-right:3px;
	display:inline-block;
	text-decoration:none;
	border-radius:50%;
	width:16px;
	height:16px;
	background:#3498db;
	text-align:center;
	font-size:11px;
	line-height:16px
}
span.fast_spell_set {
	background:#fff;
	color:#222
}
a.fast_spell_set {
	color:#eee
}
a.fast_spell_set:hover,a.fast_spell_set:focus {
	color:#fff;
	text-decoration:none
}
table[id^="fastspell"]:not(#fastspell) {
	height:20px;
	margin:0 -6px;
	padding:2px 5px;
	width:calc(100% + 12px);
	/*background-color:#fafafa*/
}
table[id^="fastspell"]:not(#fastspell):nth-of-type(2n) {
	background-color:#eee
}
table[id^="fastspell"] + .small {
	display:block;
	padding:1px 1px;
	/*background-color:#ddd;*/
	font-size:12px;
	text-align:center;
	width:calc(100% + 12px);
	margin:0 -6px
}
table[id^="fastspell"]:not(#fastspell):last-of-type + .small a {
	color:red;
	text-decoration:none;
	font-weight:bold
}
table[id^="fastspell"]:not(#fastspell):last-of-type + .small a:hover {
	color:#d30;
}
table[id^="fastspell"]:not(#fastspell):last-of-type + .small br {
	display:none
}
table[id^="fastspell"]:not(#fastspell):last-of-type + .small:empty {
	display:none
}
table[id^="fastspell"]:not(#fastspell) td {
	font-size:12px;
	color:#666
}
table[id^="fastspell"]:not(#fastspell) a {
	font-size:12px;
	color:#000;
	text-decoration:none;
}
table[id^="fastspell"]:not(#fastspell) a:hover {
	color:#d30;
}
.fastitemamount {
	color:#08f !important
}


table[id^="fastspell"]:not(#fastspell) img[src$="close.gif"],#close1 img[src$="close.gif"],#close2 img[src$="close.gif"] {
	display:inline-block;
	width:0px;
	height:10px;
	background:url(i/black/svg/trash.svg);
	/*font-weight:normal;
	font-style:normal;
	font-family:FontAwesome;
	content: "\\f1f8";*/
	background-repeat:no-repeat;
	margin-top:2px;
	padding-left:10px;
	overflow:hidden
}
table[id^="fastspell"]:hover:not(#fastspell) img[src$="close.gif"] {
	background:url(i/black/svg/trash_red.svg);
}
#MainFrameProfil a[href^="profil.php?action=enable"]:before,#MainFrameProfil a[href^="profil.php?action=show"]:before {
	display:inline-block;
	font-weight:normal;
	font-style:normal;
	font-family:FontAwesome;
	content:"\\f00d";
	margin-right:4px;
	width:16px;
	text-align:center;
	color:#d00
}
#MainFrameProfil a[href^="profil.php?action=skip"]:before {
	display:inline-block;
	font-weight:normal;
	font-style:normal;
	font-family:FontAwesome;
	content:"\\f00c";
	margin-right:4px;
	width:16px;
	text-align:center;
	color:#27ae60
}
form[action="profil.php?action=changestyle2"] b:after {
	display:block;
	margin:8px -1px 60vh -1px;
	border:1px solid rgba(0,0,0,.1);
	padding:8px;
	background-color:#fa9;
	color:#222;
	font-weight:normal;
	white-space:pre-wrap;
	content:"Du willst deinen Style wirklich wieder ÃfÆ'Ã,Â?ndern? Du kannst natÃfÆ'Ã,Â?rlich jeder Zeit zurÃfÆ'Ã,Â?ckkehren.\\AIn jedem Fall wÃfÆ'Ã,Â?re es nett,wenn du Feedback im Forum abgibst:fw.jshack.org/flatlight (Weiterleitung)\\AScrolle nach unten,um deinen Style zu ÃfÆ'Ã,Â?ndern."
}
# Blutblob 51 - 162 A # Blutblob auf Position X:-799 Y:-282 erzeugt keine Kindblobs  #ItemFrameItem img[src*="/images/sponsor"][title^="(noch 1 T"],#ItemFrameItem img[src*="/images/sponsor"][title^="(noch 2 T"],#ItemFrameItem img[src*="/images/sponsor"][title^="(noch 3 T"] {
	animation:blink 1s steps(5,start) infinite
}
@keyframes blink {
	0% {
		opacity:0
	}
	50% {
		opacity:1
	}
	100% {
		opacity:0
	}
}
.framebannerbg table td:first-of-type {
	display:none
}
.framebannerbg table td:last-of-type {
	position:absolute;
	left:4px;
	top:4px
}
a[href="premium.php"] + br + br + style + table {
	border:0 !important
}
a[href="premium.php"] + br + br + style + table tr.bg1[style="font-weight:bold;border:2px solid #C85424;"] {
	border:1px solid #ccc !important;
	background:#fafafa
}
a[href="premium.php"] + br + br + style + table tr.bg1[style="font-weight:bold;border:2px solid #C85424;"] ~ tr {
	border:1px solid #ccc !important;
	border-top:0 !important
}
a[href="premium.php"] + br + br + style + table tr.bg1[style="font-weight:bold;border:2px solid #C85424;"] ~ tr.bg1 {
	background-color:#fafafa !important
}
a[href="premium.php"] + br + br + style + table tr.bg1[style="font-weight:bold;border:2px solid #C85424;"] ~ tr.bg2 {
	background-color:#eee !important
}
a[href="premium.php"] + br + br + style + table tr img[src] {
	width:16px;
	height:16px
}
#listrow_status span[title$="(15 Minuten)"]:after {
	content:" (15m)"
}
#listrow_status span[title$="(14 Minuten)"]:after {
	content:" (14m)"
}
#listrow_status span[title$="(13 Minuten)"]:after {
	content:" (13m)"
}
#listrow_status span[title$="(12 Minuten)"]:after {
	content:" (12m)"
}
#listrow_status span[title$="(11 Minuten)"]:after {
	content:" (11m)"
}
#listrow_status span[title$="(10 Minuten)"]:after {
	content:" (10m)"
}
#listrow_status span[title$="(9 Minuten)"]:after {
	content:" (9m)"
}
#listrow_status span[title$="(8 Minuten)"]:after {
	content:" (8m)"
}
#listrow_status span[title$="(7 Minuten)"]:after {
	content:" (7m)"
}
#listrow_status span[title$="(6 Minuten)"]:after {
	content:" (6m)"
}
#listrow_status span[title$="(5 Minuten)"]:after {
	content:" (5m)"
}
#listrow_status span[title$="(4 Minuten)"]:after {
	content:" (4m)"
}
#listrow_status span[title$="(3 Minuten)"]:after {
	content:" (3m)"
}
#listrow_status span[title$="(2 Minuten)"]:after {
	content:" (2m)"
}
#listrow_status span[title$="(1 Minuten)"]:after {
	content:" (1m)"
}
#listrow_status span[title$="(wenigen Sekunden)"]:after {
	content:" (<1m)"
}
#listrow_status span[title$="(4 Minuten)"],#listrow_status span[title$="(3 Minuten)"],#listrow_status span[title$="(2 Minuten)"],#listrow_status span[title$="(1 Minuten)"],#listrow_status span[title$="(wenigen Sekunden)"] {
	text-decoration:blink
}
#listrow_attackp {
	height:20px;
	overflow:hidden
}
#listrow_attackp .valueincreased:after {
	display:inline-block;
	width:200px;
	content:""
}
#listrow_attackw,#listrow_defensew {
	display:inline-block;
	float:right;
	font-size:0;
	margin-right:3px;
	margin-top:-20px;
	height:20px;
	line-height:16px;
	position:relative;
	background:#fafafa;
	transition:width 250ms,color 250ms,font-size 250ms;
	color:#eee;
	width:30px;
	overflow-y:hidden
}
#listrow_defensew {
	background:#eee
}
#listrow_attackw:hover,#listrow_defensew:hover {
	font-weight:normal;
	padding-left:4px;
	width:calc(100% + 2px);
	font-size:12px;
	color:#222
}
#listrow_attackw b,#listrow_defensew b {
	display:inline-block;
	position:absolute;
	right:0;
	top:0;
	font-size:0
}
#listrow_attackw a:after,#listrow_defensew a:after {
	display:inline-block;
	font-size:12px;
	padding-left:10px
}
#listrow_attackw[title$='1%'] a:after,#listrow_defensew[title$='1%'] a:after {
	content:'1%'
}
#listrow_attackw[title$='2%'] a:after,#listrow_defensew[title$='2%'] a:after {
	content:'2%'
}
#listrow_attackw[title$='3%'] a:after,#listrow_defensew[title$='3%'] a:after {
	content:'3%'
}
#listrow_attackw[title$='4%'] a:after,#listrow_defensew[title$='4%'] a:after {
	content:'4%'
}
#listrow_attackw[title$='5%'] a:after,#listrow_defensew[title$='5%'] a:after {
	content:'5%'
}
#listrow_attackw[title$='6%'] a:after,#listrow_defensew[title$='6%'] a:after {
	content:'6%'
}
#listrow_attackw[title$='7%'] a:after,#listrow_defensew[title$='7%'] a:after {
	content:'7%'
}
#listrow_attackw[title$='8%'] a:after,#listrow_defensew[title$='8%'] a:after {
	content:'8%'
}
#listrow_attackw[title$='9%'] a:after,#listrow_defensew[title$='9%'] a:after {
	content:'9%'
}
#listrow_attackw[title$='10%'] a:after,#listrow_defensew[title$='10%'] a:after {
	content:'10%'
}
#listrow_attackw[title$='11%'] a:after,#listrow_defensew[title$='11%'] a:after {
	content:'11%'
}
#listrow_attackw[title$='12%'] a:after,#listrow_defensew[title$='12%'] a:after {
	content:'12%'
}
#listrow_attackw[title$='13%'] a:after,#listrow_defensew[title$='13%'] a:after {
	content:'13%'
}
#listrow_attackw[title$='14%'] a:after,#listrow_defensew[title$='14%'] a:after {
	content:'14%'
}
#listrow_attackw[title$='15%'] a:after,#listrow_defensew[title$='15%'] a:after {
	content:'15%'
}
#listrow_attackw[title$='16%'] a:after,#listrow_defensew[title$='16%'] a:after {
	content:'16%'
}
#listrow_attackw[title$='17%'] a:after,#listrow_defensew[title$='17%'] a:after {
	content:'17%'
}
#listrow_attackw[title$='18%'] a:after,#listrow_defensew[title$='18%'] a:after {
	content:'18%'
}
#listrow_attackw[title$='19%'] a:after,#listrow_defensew[title$='19%'] a:after {
	content:'19%'
}
#listrow_attackw[title$='20%'] a:after,#listrow_defensew[title$='20%'] a:after {
	content:'20%'
}
#listrow_attackw[title$='21%'] a:after,#listrow_defensew[title$='21%'] a:after {
	content:'21%'
}
#listrow_attackw[title$='22%'] a:after,#listrow_defensew[title$='22%'] a:after {
	content:'22%'
}
#listrow_attackw[title$='23%'] a:after,#listrow_defensew[title$='23%'] a:after {
	content:'23%'
}
#listrow_attackw[title$='24%'] a:after,#listrow_defensew[title$='24%'] a:after {
	content:'24%'
}
#listrow_attackw[title$='25%'] a:after,#listrow_defensew[title$='25%'] a:after {
	content:'25%'
}
#listrow_attackw[title$='26%'] a:after,#listrow_defensew[title$='26%'] a:after {
	content:'26%'
}
#listrow_attackw[title$='27%'] a:after,#listrow_defensew[title$='27%'] a:after {
	content:'27%'
}
#listrow_attackw[title$='28%'] a:after,#listrow_defensew[title$='28%'] a:after {
	content:'28%'
}
#listrow_attackw[title$='29%'] a:after,#listrow_defensew[title$='29%'] a:after {
	content:'29%'
}
#listrow_attackw[title$='30%'] a:after,#listrow_defensew[title$='30%'] a:after {
	content:'30%'
}
#listrow_attackw[title$='31%'] a:after,#listrow_defensew[title$='31%'] a:after {
	content:'31%'
}
#listrow_attackw[title$='32%'] a:after,#listrow_defensew[title$='32%'] a:after {
	content:'32%'
}
#listrow_attackw[title$='33%'] a:after,#listrow_defensew[title$='33%'] a:after {
	content:'33%'
}
#listrow_attackw[title$='34%'] a:after,#listrow_defensew[title$='34%'] a:after {
	content:'34%'
}
#listrow_attackw[title$='35%'] a:after,#listrow_defensew[title$='35%'] a:after {
	content:'35%'
}
#listrow_attackw[title$='36%'] a:after,#listrow_defensew[title$='36%'] a:after {
	content:'36%'
}
#listrow_attackw[title$='37%'] a:after,#listrow_defensew[title$='37%'] a:after {
	content:'37%'
}
#listrow_attackw[title$='38%'] a:after,#listrow_defensew[title$='38%'] a:after {
	content:'38%'
}
#listrow_attackw[title$='39%'] a:after,#listrow_defensew[title$='39%'] a:after {
	content:'39%'
}
#listrow_attackw[title$='40%'] a:after,#listrow_defensew[title$='40%'] a:after {
	content:'40%'
}
#listrow_attackw[title$='41%'] a:after,#listrow_defensew[title$='41%'] a:after {
	content:'41%'
}
#listrow_attackw[title$='42%'] a:after,#listrow_defensew[title$='42%'] a:after {
	content:'42%'
}
#listrow_attackw[title$='43%'] a:after,#listrow_defensew[title$='43%'] a:after {
	content:'43%'
}
#listrow_attackw[title$='44%'] a:after,#listrow_defensew[title$='44%'] a:after {
	content:'44%'
}
#listrow_attackw[title$='45%'] a:after,#listrow_defensew[title$='45%'] a:after {
	content:'45%'
}
#listrow_attackw[title$='46%'] a:after,#listrow_defensew[title$='46%'] a:after {
	content:'46%'
}
#listrow_attackw[title$='47%'] a:after,#listrow_defensew[title$='47%'] a:after {
	content:'47%'
}
#listrow_attackw[title$='48%'] a:after,#listrow_defensew[title$='48%'] a:after {
	content:'48%'
}
#listrow_attackw[title$='49%'] a:after,#listrow_defensew[title$='49%'] a:after {
	content:'49%'
}
#listrow_attackw[title$='50%'] a:after,#listrow_defensew[title$='50%'] a:after {
	content:'50%'
}
#listrow_attackw[title$='51%'] a:after,#listrow_defensew[title$='51%'] a:after {
	content:'51%'
}
#listrow_attackw[title$='52%'] a:after,#listrow_defensew[title$='52%'] a:after {
	content:'52%'
}
#listrow_attackw[title$='53%'] a:after,#listrow_defensew[title$='53%'] a:after {
	content:'53%'
}
#listrow_attackw[title$='54%'] a:after,#listrow_defensew[title$='54%'] a:after {
	content:'54%'
}
#listrow_attackw[title$='55%'] a:after,#listrow_defensew[title$='55%'] a:after {
	content:'55%'
}
#listrow_attackw[title$='56%'] a:after,#listrow_defensew[title$='56%'] a:after {
	content:'56%'
}
#listrow_attackw[title$='57%'] a:after,#listrow_defensew[title$='57%'] a:after {
	content:'57%'
}
#listrow_attackw[title$='58%'] a:after,#listrow_defensew[title$='58%'] a:after {
	content:'58%'
}
#listrow_attackw[title$='59%'] a:after,#listrow_defensew[title$='59%'] a:after {
	content:'59%'
}
#listrow_attackw[title$='60%'] a:after,#listrow_defensew[title$='60%'] a:after {
	content:'60%'
}
#listrow_attackw[title$='61%'] a:after,#listrow_defensew[title$='61%'] a:after {
	content:'61%'
}
#listrow_attackw[title$='62%'] a:after,#listrow_defensew[title$='62%'] a:after {
	content:'62%'
}
#listrow_attackw[title$='63%'] a:after,#listrow_defensew[title$='63%'] a:after {
	content:'63%'
}
#listrow_attackw[title$='64%'] a:after,#listrow_defensew[title$='64%'] a:after {
	content:'64%'
}
#listrow_attackw[title$='65%'] a:after,#listrow_defensew[title$='65%'] a:after {
	content:'65%'
}
#listrow_attackw[title$='66%'] a:after,#listrow_defensew[title$='66%'] a:after {
	content:'66%'
}
#listrow_attackw[title$='67%'] a:after,#listrow_defensew[title$='67%'] a:after {
	content:'67%'
}
#listrow_attackw[title$='68%'] a:after,#listrow_defensew[title$='68%'] a:after {
	content:'68%'
}
#listrow_attackw[title$='69%'] a:after,#listrow_defensew[title$='69%'] a:after {
	content:'69%'
}
#listrow_attackw[title$='70%'] a:after,#listrow_defensew[title$='70%'] a:after {
	content:'70%'
}
#listrow_attackw[title$='71%'] a:after,#listrow_defensew[title$='71%'] a:after {
	content:'71%'
}
#listrow_attackw[title$='72%'] a:after,#listrow_defensew[title$='72%'] a:after {
	content:'72%'
}
#listrow_attackw[title$='73%'] a:after,#listrow_defensew[title$='73%'] a:after {
	content:'73%'
}
#listrow_attackw[title$='74%'] a:after,#listrow_defensew[title$='74%'] a:after {
	content:'74%'
}
#listrow_attackw[title$='75%'] a:after,#listrow_defensew[title$='75%'] a:after {
	content:'75%'
}
#listrow_attackw[title$='76%'] a:after,#listrow_defensew[title$='76%'] a:after {
	content:'76%'
}
#listrow_attackw[title$='77%'] a:after,#listrow_defensew[title$='77%'] a:after {
	content:'77%'
}
#listrow_attackw[title$='78%'] a:after,#listrow_defensew[title$='78%'] a:after {
	content:'78%'
}
#listrow_attackw[title$='79%'] a:after,#listrow_defensew[title$='79%'] a:after {
	content:'79%'
}
#listrow_attackw[title$='80%'] a:after,#listrow_defensew[title$='80%'] a:after {
	content:'80%'
}
#listrow_attackw[title$='81%'] a:after,#listrow_defensew[title$='81%'] a:after {
	content:'81%'
}
#listrow_attackw[title$='82%'] a:after,#listrow_defensew[title$='82%'] a:after {
	content:'82%'
}
#listrow_attackw[title$='83%'] a:after,#listrow_defensew[title$='83%'] a:after {
	content:'83%'
}
#listrow_attackw[title$='84%'] a:after,#listrow_defensew[title$='84%'] a:after {
	content:'84%'
}
#listrow_attackw[title$='85%'] a:after,#listrow_defensew[title$='85%'] a:after {
	content:'85%'
}
#listrow_attackw[title$='86%'] a:after,#listrow_defensew[title$='86%'] a:after {
	content:'86%'
}
#listrow_attackw[title$='87%'] a:after,#listrow_defensew[title$='87%'] a:after {
	content:'87%'
}
#listrow_attackw[title$='88%'] a:after,#listrow_defensew[title$='88%'] a:after {
	content:'88%'
}
#listrow_attackw[title$='89%'] a:after,#listrow_defensew[title$='89%'] a:after {
	content:'89%'
}
#listrow_attackw[title$='90%'] a:after,#listrow_defensew[title$='90%'] a:after {
	content:'90%'
}
#listrow_attackw[title$='91%'] a:after,#listrow_defensew[title$='91%'] a:after {
	content:'91%'
}
#listrow_attackw[title$='92%'] a:after,#listrow_defensew[title$='92%'] a:after {
	content:'92%'
}
#listrow_attackw[title$='93%'] a:after,#listrow_defensew[title$='93%'] a:after {
	content:'93%'
}
#listrow_attackw[title$='94%'] a:after,#listrow_defensew[title$='94%'] a:after {
	content:'94%'
}
#listrow_attackw[title$='95%'] a:after,#listrow_defensew[title$='95%'] a:after {
	content:'95%'
}
#listrow_attackw[title$='96%'] a:after,#listrow_defensew[title$='96%'] a:after {
	content:'96%'
}
#listrow_attackw[title$='97%'] a:after,#listrow_defensew[title$='97%'] a:after {
	content:'97%'
}
#listrow_attackw[title$='98%'] a:after,#listrow_defensew[title$='98%'] a:after {
	content:'98%'
}
#listrow_attackw[title$='99%'] a:after,#listrow_defensew[title$='99%'] a:after {
	content:'99%'
}
#listrow_attackw[title$='100%'] a:after,#listrow_defensew[title$='100%'] a:after {
	content:'100%'
}
#listrow_attackw[title$='101%'] a:after,#listrow_defensew[title$='101%'] a:after {
	content:'101%'
}
#listrow_attackw[title$='102%'] a:after,#listrow_defensew[title$='102%'] a:after {
	content:'102%'
}
#listrow_attackw[title$='103%'] a:after,#listrow_defensew[title$='103%'] a:after {
	content:'103%'
}
#listrow_attackw[title$='104%'] a:after,#listrow_defensew[title$='104%'] a:after {
	content:'104%'
}
#listrow_attackw[title$='105%'] a:after,#listrow_defensew[title$='105%'] a:after {
	content:'105%'
}
#listrow_attackw[title$='106%'] a:after,#listrow_defensew[title$='106%'] a:after {
	content:'106%'
}
#listrow_attackw[title$='107%'] a:after,#listrow_defensew[title$='107%'] a:after {
	content:'107%'
}
#listrow_attackw[title$='108%'] a:after,#listrow_defensew[title$='108%'] a:after {
	content:'108%'
}
#listrow_attackw[title$='109%'] a:after,#listrow_defensew[title$='109%'] a:after {
	content:'109%'
}
#listrow_attackw[title$='110%'] a:after,#listrow_defensew[title$='110%'] a:after {
	content:'110%'
}
#listrow_attackw[title$='111%'] a:after,#listrow_defensew[title$='111%'] a:after {
	content:'111%'
}
#listrow_attackw[title$='112%'] a:after,#listrow_defensew[title$='112%'] a:after {
	content:'112%'
}
#listrow_attackw[title$='113%'] a:after,#listrow_defensew[title$='113%'] a:after {
	content:'113%'
}
#listrow_attackw[title$='114%'] a:after,#listrow_defensew[title$='114%'] a:after {
	content:'114%'
}
#listrow_attackw[title$='115%'] a:after,#listrow_defensew[title$='115%'] a:after {
	content:'115%'
}
#listrow_attackw[title$='116%'] a:after,#listrow_defensew[title$='116%'] a:after {
	content:'116%'
}
#listrow_attackw[title$='117%'] a:after,#listrow_defensew[title$='117%'] a:after {
	content:'117%'
}
#listrow_attackw[title$='118%'] a:after,#listrow_defensew[title$='118%'] a:after {
	content:'118%'
}
#listrow_attackw[title$='119%'] a:after,#listrow_defensew[title$='119%'] a:after {
	content:'119%'
}
#listrow_attackw[title$='120%'] a:after,#listrow_defensew[title$='120%'] a:after {
	content:'120%'
}
#listrow_attackw[title$='121%'] a:after,#listrow_defensew[title$='121%'] a:after {
	content:'121%'
}
#listrow_attackw[title$='122%'] a:after,#listrow_defensew[title$='122%'] a:after {
	content:'122%'
}
#listrow_attackw[title$='123%'] a:after,#listrow_defensew[title$='123%'] a:after {
	content:'123%'
}
#listrow_attackw[title$='124%'] a:after,#listrow_defensew[title$='124%'] a:after {
	content:'124%'
}
#listrow_attackw[title$='125%'] a:after,#listrow_defensew[title$='125%'] a:after {
	content:'125%'
}
#listrow_attackw[title$='126%'] a:after,#listrow_defensew[title$='126%'] a:after {
	content:'126%'
}
#listrow_attackw[title$='127%'] a:after,#listrow_defensew[title$='127%'] a:after {
	content:'127%'
}
#listrow_attackw[title$='128%'] a:after,#listrow_defensew[title$='128%'] a:after {
	content:'128%'
}
#listrow_attackw[title$='129%'] a:after,#listrow_defensew[title$='129%'] a:after {
	content:'129%'
}
#listrow_attackw[title$='130%'] a:after,#listrow_defensew[title$='130%'] a:after {
	content:'130%'
}
#listrow_attackw[title$='131%'] a:after,#listrow_defensew[title$='131%'] a:after {
	content:'131%'
}
#listrow_attackw[title$='132%'] a:after,#listrow_defensew[title$='132%'] a:after {
	content:'132%'
}
#listrow_attackw[title$='133%'] a:after,#listrow_defensew[title$='133%'] a:after {
	content:'133%'
}
#listrow_attackw[title$='134%'] a:after,#listrow_defensew[title$='134%'] a:after {
	content:'134%'
}
#listrow_attackw[title$='135%'] a:after,#listrow_defensew[title$='135%'] a:after {
	content:'135%'
}
#listrow_attackw[title$='136%'] a:after,#listrow_defensew[title$='136%'] a:after {
	content:'136%'
}
#listrow_attackw[title$='137%'] a:after,#listrow_defensew[title$='137%'] a:after {
	content:'137%'
}
#listrow_attackw[title$='138%'] a:after,#listrow_defensew[title$='138%'] a:after {
	content:'138%'
}
#listrow_attackw[title$='139%'] a:after,#listrow_defensew[title$='139%'] a:after {
	content:'139%'
}
#listrow_attackw[title$='140%'] a:after,#listrow_defensew[title$='140%'] a:after {
	content:'140%'
}
#listrow_attackw[title$='141%'] a:after,#listrow_defensew[title$='141%'] a:after {
	content:'141%'
}
#listrow_attackw[title$='142%'] a:after,#listrow_defensew[title$='142%'] a:after {
	content:'142%'
}
#listrow_attackw[title$='143%'] a:after,#listrow_defensew[title$='143%'] a:after {
	content:'143%'
}
#listrow_attackw[title$='144%'] a:after,#listrow_defensew[title$='144%'] a:after {
	content:'144%'
}
#listrow_attackw[title$='145%'] a:after,#listrow_defensew[title$='145%'] a:after {
	content:'145%'
}
#listrow_attackw[title$='146%'] a:after,#listrow_defensew[title$='146%'] a:after {
	content:'146%'
}
#listrow_attackw[title$='147%'] a:after,#listrow_defensew[title$='147%'] a:after {
	content:'147%'
}
#listrow_attackw[title$='148%'] a:after,#listrow_defensew[title$='148%'] a:after {
	content:'148%'
}
#listrow_attackw[title$='149%'] a:after,#listrow_defensew[title$='149%'] a:after {
	content:'149%'
}
#listrow_attackw[title$='150%'] a:after,#listrow_defensew[title$='150%'] a:after {
	content:'150%'
}
#listrow_attackw[title$='151%'] a:after,#listrow_defensew[title$='151%'] a:after {
	content:'151%'
}
#listrow_attackw[title$='152%'] a:after,#listrow_defensew[title$='152%'] a:after {
	content:'152%'
}
#listrow_attackw[title$='153%'] a:after,#listrow_defensew[title$='153%'] a:after {
	content:'153%'
}
#listrow_attackw[title$='154%'] a:after,#listrow_defensew[title$='154%'] a:after {
	content:'154%'
}
#listrow_attackw[title$='155%'] a:after,#listrow_defensew[title$='155%'] a:after {
	content:'155%'
}
#listrow_attackw[title$='156%'] a:after,#listrow_defensew[title$='156%'] a:after {
	content:'156%'
}
#listrow_attackw[title$='157%'] a:after,#listrow_defensew[title$='157%'] a:after {
	content:'157%'
}
#listrow_attackw[title$='158%'] a:after,#listrow_defensew[title$='158%'] a:after {
	content:'158%'
}
#listrow_attackw[title$='159%'] a:after,#listrow_defensew[title$='159%'] a:after {
	content:'159%'
}
#listrow_attackw[title$='160%'] a:after,#listrow_defensew[title$='160%'] a:after {
	content:'160%'
}
#listrow_attackw[title$='161%'] a:after,#listrow_defensew[title$='161%'] a:after {
	content:'161%'
}
#listrow_attackw[title$='162%'] a:after,#listrow_defensew[title$='162%'] a:after {
	content:'162%'
}
#listrow_attackw[title$='163%'] a:after,#listrow_defensew[title$='163%'] a:after {
	content:'163%'
}
#listrow_attackw[title$='164%'] a:after,#listrow_defensew[title$='164%'] a:after {
	content:'164%'
}
#listrow_attackw[title$='165%'] a:after,#listrow_defensew[title$='165%'] a:after {
	content:'165%'
}
#listrow_attackw[title$='166%'] a:after,#listrow_defensew[title$='166%'] a:after {
	content:'166%'
}
#listrow_attackw[title$='167%'] a:after,#listrow_defensew[title$='167%'] a:after {
	content:'167%'
}
#listrow_attackw[title$='168%'] a:after,#listrow_defensew[title$='168%'] a:after {
	content:'168%'
}
#listrow_attackw[title$='169%'] a:after,#listrow_defensew[title$='169%'] a:after {
	content:'169%'
}
#listrow_attackw[title$='170%'] a:after,#listrow_defensew[title$='170%'] a:after {
	content:'170%'
}
#listrow_attackw[title$='171%'] a:after,#listrow_defensew[title$='171%'] a:after {
	content:'171%'
}
#listrow_attackw[title$='172%'] a:after,#listrow_defensew[title$='172%'] a:after {
	content:'172%'
}
#listrow_attackw[title$='173%'] a:after,#listrow_defensew[title$='173%'] a:after {
	content:'173%'
}
#listrow_attackw[title$='174%'] a:after,#listrow_defensew[title$='174%'] a:after {
	content:'174%'
}
#listrow_attackw[title$='175%'] a:after,#listrow_defensew[title$='175%'] a:after {
	content:'175%'
}
#listrow_attackw[title$='176%'] a:after,#listrow_defensew[title$='176%'] a:after {
	content:'176%'
}
#listrow_attackw[title$='177%'] a:after,#listrow_defensew[title$='177%'] a:after {
	content:'177%'
}
#listrow_attackw[title$='178%'] a:after,#listrow_defensew[title$='178%'] a:after {
	content:'178%'
}
#listrow_attackw[title$='179%'] a:after,#listrow_defensew[title$='179%'] a:after {
	content:'179%'
}
#listrow_attackw[title$='180%'] a:after,#listrow_defensew[title$='180%'] a:after {
	content:'180%'
}
#listrow_attackw[title$='181%'] a:after,#listrow_defensew[title$='181%'] a:after {
	content:'181%'
}
#listrow_attackw[title$='182%'] a:after,#listrow_defensew[title$='182%'] a:after {
	content:'182%'
}
#listrow_attackw[title$='183%'] a:after,#listrow_defensew[title$='183%'] a:after {
	content:'183%'
}
#listrow_attackw[title$='184%'] a:after,#listrow_defensew[title$='184%'] a:after {
	content:'184%'
}
#listrow_attackw[title$='185%'] a:after,#listrow_defensew[title$='185%'] a:after {
	content:'185%'
}
#listrow_attackw[title$='186%'] a:after,#listrow_defensew[title$='186%'] a:after {
	content:'186%'
}
#listrow_attackw[title$='187%'] a:after,#listrow_defensew[title$='187%'] a:after {
	content:'187%'
}
#listrow_attackw[title$='188%'] a:after,#listrow_defensew[title$='188%'] a:after {
	content:'188%'
}
#listrow_attackw[title$='189%'] a:after,#listrow_defensew[title$='189%'] a:after {
	content:'189%'
}
#listrow_attackw[title$='190%'] a:after,#listrow_defensew[title$='190%'] a:after {
	content:'190%'
}
#listrow_attackw[title$='191%'] a:after,#listrow_defensew[title$='191%'] a:after {
	content:'191%'
}
#listrow_attackw[title$='192%'] a:after,#listrow_defensew[title$='192%'] a:after {
	content:'192%'
}
#listrow_attackw[title$='193%'] a:after,#listrow_defensew[title$='193%'] a:after {
	content:'193%'
}
#listrow_attackw[title$='194%'] a:after,#listrow_defensew[title$='194%'] a:after {
	content:'194%'
}
#listrow_attackw[title$='195%'] a:after,#listrow_defensew[title$='195%'] a:after {
	content:'195%'
}
#listrow_attackw[title$='196%'] a:after,#listrow_defensew[title$='196%'] a:after {
	content:'196%'
}
#listrow_attackw[title$='197%'] a:after,#listrow_defensew[title$='197%'] a:after {
	content:'197%'
}
#listrow_attackw[title$='198%'] a:after,#listrow_defensew[title$='198%'] a:after {
	content:'198%'
}
#listrow_attackw[title$='199%'] a:after,#listrow_defensew[title$='199%'] a:after {
	content:'199%'
}
#listrow_attackw[title$='200%'] a:after,#listrow_defensew[title$='200%'] a:after {
	content:'200%'
}
#listrow_attackw a {
	color:#27ae60
}
#listrow_attackw[title$=" 9%"] a:after,#listrow_attackw[title$=" 8%"] a:after,#listrow_attackw[title$=" 7%"] a:after,#listrow_attackw[title$=" 6%"] a:after,#listrow_attackw[title$=" 5%"] a:after,#listrow_attackw[title$=" 4%"] a:after,#listrow_attackw[title$=" 3%"] a:after,#listrow_attackw[title$=" 2%"] a:after,#listrow_attackw[title$=" 1%"] a:after {
	color:#c0392b
}
#listrow_defensew a {
	color:#27ae60
}
#listrow_defensew[title$=" 9%"] a:after,#listrow_defensew[title$=" 8%"] a:after,#listrow_defensew[title$=" 7%"] a:after,#listrow_defensew[title$=" 6%"] a:after,#listrow_defensew[title$=" 5%"] a:after,#listrow_defensew[title$=" 4%"] a:after,#listrow_defensew[title$=" 3%"] a:after,#listrow_defensew[title$=" 2%"] a:after,#listrow_defensew[title$=" 1%"] a:after {
	color:#c0392b
}
#listrow_attackw:not([title]) a[href="item.php?action=aselect"]:after,#listrow_defensew:not([title]) a[href="item.php?action=dselect"]:after {
	content:"\\2014";
	font-weight:normal;
	color:#222 !important
}
#puzzle .pic1,#puzzle .pic2,#puzzle .pic3,#puzzle .pic4,#puzzle .pic5,#puzzle .pic6,#puzzle .pic7,#puzzle .pic8,#puzzle .pic9,#puzzle .pic10,#puzzle .pic11,#puzzle .pic12,#puzzle .pic13,#puzzle .pic14,#puzzle .pic15 {
	background-image:url(i/zauberpuzzle.png) !important
}
#MainFrameMain {
	background: #eee !important;
}
.letter {
	padding:3px 8px;
	border:1px solid #ccc;
	border-bottom:0 solid transparent;
	/*font-size:12px;*/
	margin:0;
	height:auto;
	min-height:0;
	background:#fafafa;
	box-shadow:0 3px 3px -3px rgba(0,0,0,.2)
}

select {
	max-width: 100%;
}

#listrow_group {
	line-height: 16px;
}

.achievtable tr > td:nth-child(1) {
	width: 40px;
}

.achievtable td {
	width: 100%;
	background: #fafafa;
}

.achievtable img {
	width: 40px;
}

.framemainbg .maindesc1 {
	background-color: #fafafa;
}
.maindesc1 {
	width: 600px;
}

.listrow:not(#ItemFrameItem .listrow):nth-child(odd) {
	background: #eee
}

a[href*="clanmenu.php?action=sos"] {
    display: block;
    font-weight: bold;
    text-align: right;
}

@media only screen and (max-width: 800px) {
	#chatform input[type="submit"]  {
		min-width: 50px;
	}
}

/* Erwin */
/* Importierbares Styleaddon fÃ¼r Freewar - (c) Zabuza 2011 */

/* Itemhervorhebung fÃ¼r Shops - Edelstoff  Welt 2 */

td.areadescription table b[onmouseover^="tt('Bernsteinfeder',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('bronzene Jerodar-Halskette',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Felsenwurmschild',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Fernheilzauber',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('FeuerÃ¶l',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Feuerkolben',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Flasche Sumpfgas',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Goldkrebspanzer',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Goldflosse',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Goldstaub',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('goldener Kuhdarm',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('goldene Jerodar-Halskette',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Goldsonnen-BlÃ¼mchen',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('groÃŸer Skorpionstachel',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Hasenfell',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Horn des Teidams',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('lebendes Wasser',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Notizblock',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('KrustenkÃ¤ferpanzer',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Kristall der Heilung',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Kristall des Schmerzes',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Langzahn',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Schild der Vernichtung',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Silberfuchsfell',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Speisekarte aus Blatenien',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Spitzhacke',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('silberne Jerodar-Halskette',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('starker RÃ¼ckangriff gegen edelstoff',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Statue von Horikon',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Steinschale',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Stierhoden',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Tropfstein',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Trockenwurmpanzer',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Waldschlurchpanzer',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Zauberpolle',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('Zauber der Wiederherstellung',"]{color:#CC0000;}
td.areadescription table b[onmouseover^="tt('zerbrochene Jerodar-Halskette',"]{color:#CC0000;}


ENDCSS;
?>