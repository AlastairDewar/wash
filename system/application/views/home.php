<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
	<head>
		<meta http-equiv="author" content="Alastair Dewar" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="content-language" content="en" />
		<meta http-equiv="description" content="" />
		<meta http-equiv="keywords" content="" />
		<title>WASH Server</title>
		<link rel="stylesheet" type="text/css" media="screen" href="./css/screen.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="./css/slimbox.css"  />
		<script type="text/javascript" src="./js/mootools.js"></script>
		<script type="text/javascript" src="./js/slimbox.js"></script>
		<script type="text/javascript">
			window.addEvent('domready', function(){
				// initiate Accordian from mootools
				var accordion = new Accordion('h2.atStart', 'div.atStart', {
					opacity: false,
					onActive: function(toggler, element){
						toggler.setStyle('color', '#252625');
						toggler.setStyle('background-color', '#f2f2f2');
					},
			
					onBackground: function(toggler, element){
						toggler.setStyle('color', '#bfbfbf');
						toggler.setStyle('background-color', '#252625');
					}
				}, $('accordion'));
			});
		</script>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<h1>WASH Server</h1>
			</div> <!-- end header -->
			<div id="menu">
				<div id="accordion">
					<h2 class="toggler atStart" style="text-align: center;">&bull;&nbsp;&bull;&nbsp;&bull;&nbsp;&bull;&nbsp;&bull;</h2>
					<div id="hide_all" class="element atStart">
					</div> <!-- end hide_all -->

					<h2 class="toggler atStart">Manage Services</h2>
					<div id="manage_services" class="element atStart">
						<ul>
							<li><a href="<?echo site_url("service/backup");?>" class="backup">Backup</a></li>
							<li><a href="<?echo site_url("service/email");?>" class="email">E-mail</a></li>
							<li><a href="<?echo site_url("service/ftp");?>" class="ftp">FTP</a></li>
							<li><a href="<?echo site_url("service/multimedia");?>" class="multimedia">Multimedia</a></li>
							<li><a href="<?echo site_url("service/supervision");?>" class="parent">Parental Controls</a></li>
							<li><a href="<?echo site_url("service/folders");?>" class="folder">Shared Folders</a></li>
							<li><a href="<?echo site_url("service/printers");?>" class="printer">Shared Printers</a></li>
							<li><a href="<?echo site_url("service/torrents");?>" class="torrents">Torrents</a></li>
							<li><a href="<?echo site_url("service/tv");?>" class="tv">TV</a></li>
							<li><a href="<?echo site_url("service/websites");?>" class="websites">Websites</a></li>
						</ul>
					</div> <!-- end manage_services -->
			
					<h2 class="toggler atStart">Security</h2>
					<div id="security" class="element atStart">
						<ul>
							<li><a href="<?echo site_url("security/virus");?>" class="virus">Anti-Virus</a></li>
							<li><a href="<?echo site_url("security/encryption");?>" class="encrypt">Encryption</a></li>
							<li><a href="<?echo site_url("security/firewall");?>" class="firewall">Firewall</a></li>
							<li><a href="<?echo site_url("security/password");?>" class="password">Password Manager</a></li>
							<li><a href="<?echo site_url("security/privacy");?>" class="privacy">Privacy</a></li>
							<li><a href="<?echo site_url("security/users");?>" class="users">Users &amp; Groups</a></li>
						</ul>
					</div> <!-- end security -->
					
					<h2 class="toggler atStart">System Information</h2>
					<div id="system_information" class="element atStart">
						<ul>
							<li><a href="<?echo site_url("system/diagnostics");?>" class="diagnostics">Diagnostics &amp; Health</a></li>
							<li><a href="<?echo site_url("system/information");?>" class="information">General Information</a></li>
							<li><a href="<?echo site_url("system/hdd");?>" class="hdd">Hard Drive Disks</a></li>
							<li><a href="<?echo site_url("system/networking");?>" class="networking">Networking</a></li>
							<li><a href="<?echo site_url("system/log");?>" class="log">Logs</a></li>
							<li><a href="<?echo site_url("system/settings");?>" class="settings">Settings</a></li>
							<li><a href="<?echo site_url("system/statistics");?>" class="statistics">Statistics</a></li>
						</ul>
					</div> <!-- end system_information -->
				</div>
			</div> <!-- end menu -->
			<div id="content">
				<h2>Welcome to the Dewar Home Server</h2>
				<p>To get started, click a link on the menu to the left.</p>
			</div> <!-- end content -->
			<div id="footer">
				<p>System by <a href="http://www.alastairdewar.co.uk">Alastair Dewar</a>, Theme by <a href="http://www.brettalton.com">Brett Alton</a>.</p>
				<p>Copyright &copy; 2007, 2008 <a href="http://github.com/AlastairDewar/wash/tree/master">WASH Project</a>. All rights reserved.</p>
			</div> <!-- end footer -->
		</div> <!-- end container -->
	</body>
</html>
