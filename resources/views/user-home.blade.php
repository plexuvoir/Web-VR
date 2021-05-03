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
		<!-- <a-entity position="0 1.8 4"> -->
			<a-camera id="camera" look-controls="" wasd-controls-enabled="false" camera="active:true" rotation="-1.3750987083139854 -3.0939720937064483 0" position="0 0 0">
				<a-ring radius-outer="0.30" radius-inner="0.20" position="0 0 -3" material="color: cyan; shader: flat" cursor="maxDistance: 30; fuse: true" geometry="primitive:ring;radiusOuter:0.30;radiusInner:0.20" raycaster="" scale="0.4628376812078244 0.4628376812078244 0.4628376812078244">
					<a-animation begin="click" easing="ease-in" attribute="scale" fill="backwards" from="0.1 0.1 0.1" to="1 1 1" dur="150"></a-animation>
					<a-animation begin="fusing" easing="ease-in" attribute="scale" fill="forwards" from="1 1 1" to="0.1 0.1 0.1" dur="1500"></a-animation>
				</a-ring>
			</a-camera>
			<!-- </a-entity> -->
			<!--360 stereo LR-->

			<a-text font="roboto" value="Selamat Datang di VR Pantai Malang\n Silakan pilih pantai yang ingin dikunjungi." width="10" position="0 7 -10" rotation="0 0 0" align="center" color="black"></a-text>		
		<!-- <a-assets>
			<img id="play" src="https://cdn.glitch.com/d7743f86-5ed0-4cb5-b749-2d186df7515a%2Ficons8-play-64.png?v=1619076158162">
			<img id="pause" src="https://cdn.glitch.com/d7743f86-5ed0-4cb5-b749-2d186df7515a%2Ficons8-pause-64.png?v=1619076158162">
			<video id="maldives" src="https://cdn.glitch.com/d7743f86-5ed0-4cb5-b749-2d186df7515a%2Fmaldives.mp4?v=1618466951948" loop="true"></video>
		</a-assets>

		<a-camera>
			<a-cursor></a-cursor>
		</a-camera>

		<a-videosphere src="maldives"> </a-videosphere>
		<a-image id="videoControls" src="play" position="0 1 -2"></a-image> -->		


		<!-- <a-entity immersive-video="type: 360_mono_horizontal; source:https://cdn.glitch.com/d7743f86-5ed0-4cb5-b749-2d186df7515a%2Fmaldives.mp4?v=1618466951948"></a-entity>
			<a-image id="videoControls" src="https://cdn.glitch.com/d7743f86-5ed0-4cb5-b749-2d186df7515a%2Ficons8-play-64.png?v=1619076158162" position="0 1 -2"></a-image> -->
			@php
			$x = -3.5;
			$y = 4;	
			$nextLine = 1;			
			@endphp

			@foreach($tempatWisataArrays as $tempatWisataArray)			
			@if ($nextLine%3==0)
			@php
			$y-=4.5; 
			$x=-3.5;
			@endphp
			@endif		

			<a-image id="thumbnail" src="{{$tempatWisataArray->thumbnail}}" width="6" height="3.5" position="{{$x}} {{$y}} -10" rotation="0 0 0" href="user-vr/{{$tempatWisataArray->id}}">			
				<a-plane color="#CCC" height="0.4" width="6" position="0 1.7 0.01" ></a-plane>
				<a-text font="roboto" value="{{$tempatWisataArray->nama_tempat_wisata}}" position="0 1.7 0.01" align="center" width="3" color="black" scale="2 2 2"></a-text>				
			</a-image>			

			@php
			$x+=7;
			$nextLine+=1;			
			@endphp			
			@endforeach
			
		</a-scene>

	</body>
	</html>