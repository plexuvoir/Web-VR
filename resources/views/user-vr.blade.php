<html>
<head>
	<title>My A-Frame Scene</title>
	<script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>	
	<script src="https://unpkg.com/aframe-event-set-component@5/dist/aframe-event-set-component.min.js"></script>
	<script src="https://unpkg.com/aframe-layout-component@5.3.0/dist/aframe-layout-component.min.js"></script>
	<script src="https://unpkg.com/aframe-template-component@3.2.1/dist/aframe-template-component.min.js"></script>
	<script src="https://unpkg.com/aframe-proxy-event-component@2.1.0/dist/aframe-proxy-event-component.min.js"></script>
	<script type="text/javascript" src="{{ URL::asset('js/aframe-href-component.js') }}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>

	
</head>

<body>
	<a-scene>				
		<a-camera id="camera" look-controls="" wasd-controls-enabled="false" camera="active:true" rotation="-1.3750987083139854 -3.0939720937064483 0" position="0 0 0">
			<a-ring radius-outer="0.30" radius-inner="0.20" position="0 0 -3" material="color: cyan; shader: flat" cursor="maxDistance: 30; fuse: true" geometry="primitive:ring;radiusOuter:0.30;radiusInner:0.20" raycaster="" scale="0.4628376812078244 0.4628376812078244 0.4628376812078244">
				<a-animation begin="click" easing="ease-in" attribute="scale" fill="backwards" from="0.1 0.1 0.1" to="1 1 1" dur="150"></a-animation>
				<a-animation begin="fusing" easing="ease-in" attribute="scale" fill="forwards" from="1 1 1" to="0.1 0.1 0.1" dur="1500"></a-animation>
			</a-ring>
		</a-camera>
		@if($spotArrays)
		<a-assets>
			<video muted id="360-vid" src="{{$spotArrays['link_video_pagi']}}" loop="true" autoplay="true"></video>
		</a-assets>		
		<a-videosphere src="#360-vid"></a-videosphere>
		<a-entity sound="src:{{$spotArrays['link_suara_pagi']}}; autoplay: true; loop:true"></a-entity>
		@foreach ($tombolArrays as $tombolArray)
		<a-entity link="href: /user-spot/{{$tombolArray->id_own}}" geometry="primitive: box; height:2; width:10; depth:0.5" material="color:#0275d8; side: double; opacity:1;" position="{{$tombolArray->x_pos}} {{$tombolArray->y_pos}} {{$tombolArray->z_pos}}" rotation="{{$tombolArray->x_rot}} {{$tombolArray->y_rot}} {{$tombolArray->z_rot}}">
			<a-text font="roboto" value="{{$tombolArray->nama_own}}" width="20" position="0 0 0.3" rotation="0 0 0" align="center" href="/user-spot/{{$tombolArray->id_own}}"></a-text>
		</a-entity>			
		@endforeach
		<a-entity link="href: /user-spot-sore/{{$spotArrays->id_spot}}" geometry="primitive: box; height:2; width:10; depth:0.5" material="color:#0275d8; side: double; opacity:1;" position="-2 -20 -20" rotation="-45 0 0" href="/user-spot-sore/{{$spotArrays->id_spot}}">
			<a-text font="roboto" value="Sore" width="20" position="0 0 1" rotation="0 0 0" align="center"></a-text>
		</a-entity>	
		<a-entity link="href: /user-home" geometry="primitive: box; height:2; width:2; depth:0.5" material="color:#0275d8; side: double; opacity:1;" position="5 -20 -20" rotation="-45 0 0" href="/user-home">
			<a-image src="https://cdn.glitch.com/d7743f86-5ed0-4cb5-b749-2d186df7515a%2Fhome.png?v=1620020548636" position="0 0 0.5" rotation="0 0 0" align="center"></a-image>				
		</a-entity>	
		@else
		<a-sky color="#00BFFF"></a-sky>
		<a-text font="roboto" value="Belum ada spot. \nArahkan pandangan ke tombol home untuk kembali." width="10" position="0 7 -20" rotation="0 0 0" align="center" color="black" scale="3 3 3"></a-text>
		<a-entity link="href: /user-home" geometry="primitive: box; height:2; width:2; depth:0.5" material="color:#0275d8; side: double; opacity:1;" position="0 3 -20" rotation="0 0 0" href="/user-home">
			<a-image src="https://cdn.glitch.com/d7743f86-5ed0-4cb5-b749-2d186df7515a%2Fhome.png?v=1620020548636" position="0 0 0.5" rotation="0 0 0" align="center"></a-image>				
		</a-entity>	
		@endif
	</a-scene>

</body>
</html>