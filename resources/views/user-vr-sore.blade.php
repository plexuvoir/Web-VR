<html>
<head>
	<title>VR Pantai Malang</title>
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
	<script>
		AFRAME.registerComponent('play-pause', {
			init: function(){
				var myVideo =  document.querySelector('#vid-360');				
				var videoControls = document.querySelector('#videoControls');				
				this.el.addEventListener('click', function(){
					if (myVideo.paused) {
						myVideo.play();
						videoControls.setAttribute('visible','false');		
						videoControls.setAttribute('scale','0 0 0');				
					}

				});

			}

		});
	</script>

	
</head>

<body>
	<a-scene>	
		<a-assets>
			<video muted id="vid-360" src="{{$spotArrays['link_video_sore']}}" loop="true" autoplay></video>
			<img id="play" src="https://cdn.glitch.com/d7743f86-5ed0-4cb5-b749-2d186df7515a%2Ficons8-play-64.png?v=1619076158162">
			<img id="pause" src="https://cdn.glitch.com/d7743f86-5ed0-4cb5-b749-2d186df7515a%2Ficons8-pause-64.png?v=1619076158162">
		</a-assets>	
		<a-entity sound="src:{{$spotArrays['link_suara_sore']}}; autoplay: true; loop:true"></a-entity>				
		<a-entity camera look-controls>
			<a-entity cursor="fuse: true; fuseTimeout: 1500" position="0 0 -1" geometry="primitive: ring; radiusInner: 0.02; radiusOuter: 0.03" material="color: red; shader: flat">
			</a-entity>
		</a-entity>
		<a-videosphere src="#vid-360"></a-videosphere>
		<a-image id="videoControls" src="#play" position="0 0 -2" scale="5 5 1" visible="false" play-pause></a-image>
		@foreach ($tombolArrays as $tombolArray)
		<a-entity link="href: /user-spot-sore/{{$tombolArray->id_own}}" geometry="primitive: box; height:2; width:10; depth:0.5" material="color:#0275d8; side: double; opacity:1;" position="{{$tombolArray->x_pos}} {{$tombolArray->y_pos}} {{$tombolArray->z_pos}}" rotation="{{$tombolArray->x_rot}} {{$tombolArray->y_rot}} {{$tombolArray->z_rot}}">
			<a-text font="roboto" value="{{$tombolArray->nama_own}}" width="20" position="0 0 0.3" rotation="0 0 0" align="center" href="/user-spot-sore/{{$tombolArray->id_own}}"></a-text>
		</a-entity>			
		@endforeach

		<a-entity link="href: /user-spot/{{$spotArrays->id_spot}}" geometry="primitive: box; height:2; width:10; depth:0.5" material="color:#0275d8; side: double; opacity:1;" position="-2 -20 -20" rotation="-45 0 0" href="/user-spot/{{$spotArrays->id_spot}}">
			<a-text font="roboto" value="Pagi" width="20" position="0 0 1" rotation="0 0 0" align="center"></a-text>
		</a-entity>	
		<a-entity link="href: /user-home" geometry="primitive: box; height:2; width:2; depth:0.5" material="color:#0275d8; side: double; opacity:1;" position="5 -20 -20" rotation="-45 0 0">
			<a-image src="https://cdn.glitch.com/d7743f86-5ed0-4cb5-b749-2d186df7515a%2Fhome.png?v=1620020548636" position="0 0 0.5" rotation="0 0 0" align="center" href="/user-home"></a-image>				
		</a-entity>	
	</a-scene>

</body>
</html>