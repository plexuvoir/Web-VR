<html>
<head>
	<title>My A-Frame Scene</title>
	<script src="https://aframe.io/releases/0.8.2/aframe.min.js"></script>
	<script src="https://unpkg.com/aframe-immersive-video-component/dist/aframe-immersive-video-component.min.js"></script>
	<script src="https://unpkg.com/aframe-event-set-component@5/dist/aframe-event-set-component.min.js"></script>
	<script src="https://unpkg.com/aframe-layout-component@5.3.0/dist/aframe-layout-component.min.js"></script>
	<script src="https://unpkg.com/aframe-template-component@3.2.1/dist/aframe-template-component.min.js"></script>
	<script src="https://unpkg.com/aframe-proxy-event-component@2.1.0/dist/aframe-proxy-event-component.min.js"></script>
	<script type="text/javascript" src="{{ URL::asset('js/aframe-href-component.js') }}"></script>

	
</head>

<body>
	<a-scene>
			<a-text font="roboto" value="Selamat Datang di VR Pantai Malang\n Silakan pilih pantai yang ingin dikunjungi." width="10" position="0 7.5 -10" rotation="0 0 0" align="center" color="black"></a-text>
			<a-image id="thumbnail" src="https://cdn.glitch.com/d7743f86-5ed0-4cb5-b749-2d186df7515a%2FBalekambang.jpg?v=1619769879063" width="5" height="3" position="-7 5 -10" rotation="0 0 0" href="">										
				<a-plane color="#CCC" height="0.4" width="5" position="0 1.2 0.5" ></a-plane>
				<a-text font="roboto" value="balekambang" position="0 1.2 0.5" align="center" width="3" color="black" scale="2 2 2"></a-text>				
			</a-image>		

			<a-image id="thumbnail" src="https://cdn.glitch.com/d7743f86-5ed0-4cb5-b749-2d186df7515a%2FBalekambang.jpg?v=1619769879063" width="5" height="3" position="0 5 -10" rotation="0 0 0" href="">										
				<a-plane color="#CCC" height="0.4" width="5" position="0 1.2 0.5" ></a-plane>
				<a-text font="roboto" value="watu leter" position="0 1.2 0.5" align="center" width="3" color="black" scale="2 2 2"></a-text>				
			</a-image>					
			
			<a-image id="thumbnail" src="https://cdn.glitch.com/d7743f86-5ed0-4cb5-b749-2d186df7515a%2FBalekambang.jpg?v=1619769879063" width="5" height="3" position="7 5 -10" rotation="0 0 0" href="">										
				<a-plane color="#CCC" height="0.4" width="5" position="0 1.2 0.5" ></a-plane>
				<a-text font="roboto" value="tiga warna" position="0 1.2 0.5" align="center" width="3" color="black" scale="2 2 2"></a-text>				
			</a-image>					
		</a-scene>

	</body>
	</html>