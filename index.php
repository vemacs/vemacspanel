<?php include("config.php"); ?>
<!DOCTYPE html>
<head>
	<title>Control Panel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="app.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<div class="modal">
		<div class="topbar">
			<div class="panel1">
				<span class="servername"><? echo $SERVERNAME; ?></span>
				<div class="memory">Memory - 
					<span class="used"><? echo $CURRENTMEMORY; echo $CURRENTMEMORYUNIT ?></span> /
					<span class="total"><? echo $TOTALMEMORY; echo $TOTALMEMORYUNIT ?></span>
				</div>
			</div>
			<div class="panel2">
				<img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OEUwRjVDOTBCQjUwMTFFMjlGMkFCMDQ3NTVDMTU3RDYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OEUwRjVDOTFCQjUwMTFFMjlGMkFCMDQ3NTVDMTU3RDYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4RTBGNUM4RUJCNTAxMUUyOUYyQUIwNDc1NUMxNTdENiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4RTBGNUM4RkJCNTAxMUUyOUYyQUIwNDc1NUMxNTdENiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PsCNes0AAACLSURBVHjaYmxtbWUAAmMgvgfE7xkwAViOBUgIAvFuqEJXNMXGULmzTFCJTiRBQTRFIH4FE1QQpHAWkqQLkqJ0kIksSNakQ+k0qCKYGMgABiY0h89CYoPcvBrGQVaohGTSHjQ+XCHILauQ3OSK5OaZIAXIwWOM7CY0N4MVgoLnLFTBLDQ3wxSfBQgwANmkIokhNxJKAAAAAElFTkSuQmCC" />
			</div>
			<div class="panel3">
				<img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAAKCAYAAABi8KSDAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MEMwNjdDMDRCQjUwMTFFMjgxMTM5RkY3Rjk2ODU5NjAiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MEMwNjdDMDVCQjUwMTFFMjgxMTM5RkY3Rjk2ODU5NjAiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDowQzA2N0MwMkJCNTAxMUUyODExMzlGRjdGOTY4NTk2MCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDowQzA2N0MwM0JCNTAxMUUyODExMzlGRjdGOTY4NTk2MCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PnjtF14AAACpSURBVHjaYmxqamLAAxYC8SwgPgrisCBJOANxIBCLIYm5AXEsEC8H4hKQYkYgngHEaXhsCAHi6yDF6VCFt4G4DIivAfEfqKJtQHwPiPOA+A5IcRYQ/wViTyC+i2ZiFBCfg3GYgFgdiG9hUciArBCm+DUQSwMxFwMBAFK8Hoj5gHg2EHMTUtwAdQbIfS+gzkHG22CKQR58C8TWQNwMxP5ArIRm4FcYAyDAAG6dIa8UpdQ7AAAAAElFTkSuQmCC" />
			</div>
			<div class="panel4">
				<span class="playerstitle">Players</span>
				<div class="players">
					<span class="amt"><? echo $PLAYERAMOUNT; ?></span> /
					<span class="pltotal"><? echo $PLAYERTOTAL; ?></span>
				</div>
			</div>
		</div> <!-- end of top bar -->
		<div class="row2">
			<div class="serverlog">
				<pre class="serverlogpre">2013-02-18 13:48:34 [INFO] Loading properties
2013-02-18 13:48:34 [INFO] Default game type: SURVIVAL
2013-02-18 13:48:34 [INFO] Generating keypair
2013-02-18 13:48:34 [INFO] Starting Minecraft server on *:25565
2013-02-18 13:48:35 [INFO] This server is running CraftBukkit version git-MCPC-Plus-jenkins-MCPC-Plus-196 (MC: 1.4.7) (Implementing API version 1.4.7-R1.1-SNAPSHOT)
2013-02-18 13:48:35 [INFO] Loaded inheritance map of 706 classes
2013-02-18 13:48:35 [WARNING] **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
2013-02-18 13:48:35 [WARNING] The server will make no attempt to authenticate usernames. Beware.
2013-02-18 13:48:35 [WARNING] While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
2013-02-18 13:48:35 [WARNING] To change this, set "online-mode" to "true" in the server.properties file.
2013-02-18 13:48:35 [INFO] Loading ComputerCraft v1.481 (rev 834)
2013-02-18 13:48:35 [INFO] ComputerCraft: Searching for RedPowerLib...
2013-02-18 13:48:35 [INFO] ComputerCraft: RedPowerLib and methods located.
2013-02-18 13:48:35 [INFO] Loading CCTurtle v1.481 (rev 834)
2013-02-18 13:48:37 [INFO] Fluid registration: 
2013-02-18 13:48:37 [INFO] Liquid Orange Dye
2013-02-18 13:48:38 [SEVERE] java.lang.NoSuchMethodException: buildcraft.energy.OilPopulate.generateSurfaceDeposit(yc, int, int, int, int)
2013-02-18 13:48:38 [SEVERE] 	at java.lang.Class.getMethod(Class.java:1624)

2013-02-18 13:48:38 [SEVERE] 	at net.minecraftforge.event.ASMEventHandler_124_BuildcraftPlugin_preInit_Pre.invoke(.dynamic)
2013-02-18 13:48:38 [SEVERE] 	at net.minecraftforge.event.ASMEventHandler.invoke(ASMEventHandler.java:35)
2013-02-18 13:48:38 [SEVERE] 	at net.minecraftforge.event.EventBus.post(EventBus.java:103)
2013-02-18 13:48:38 [SEVERE] 	at extrabiomes.PluginManager.activatePlugins(PluginManager.java:17)
</pre>
			</div>
			<div class="playerlist">
				<ul>
					<li><img src="http://i.fishbans.com/helm/Notch/32" class="head"><div class="playername">Notch</div></li>
					<li><img src="http://i.fishbans.com/helm/jeb_/32" class="head"><div class="playername active">jeb_</div></li>
					<li class="playercontrol"> &#8226; <a href="#">make operator</a> <br> &#8226; <a href="#">kick from server</a> <br> &#8226; <a href="#">ban from server</a></li>
					<li><img src="http://i.fishbans.com/helm/vemacs/32" class="head"><div class="playername">vemacs</div></li>
					<li><img src="http://i.fishbans.com/helm/Savoie/32" class="head"><div class="playername">Savoie</div></li>
				</ul>
			</div>
		</div> <!-- end of row2 -->
		<div class="row3">
			<div class="inputarrbox"><div class="inputarr">&gt;</div></div>
			<input class="commandentry" type="text"></input>
			<button class="send">Send</button>
		</div>
	</div>
</body>
</html>