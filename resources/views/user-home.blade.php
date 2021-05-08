<html>
<head>
	<title>My A-Frame Scene</title>
	<script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
	<script src="https://unpkg.com/aframe-immersive-video-component/dist/aframe-immersive-video-component.min.js"></script>
	<script src="https://unpkg.com/aframe-event-set-component@5/dist/aframe-event-set-component.min.js"></script>
	<script src="https://unpkg.com/aframe-layout-component@5.3.0/dist/aframe-layout-component.min.js"></script>
	<script src="https://unpkg.com/aframe-template-component@3.2.1/dist/aframe-template-component.min.js"></script>
	<script src="https://unpkg.com/aframe-proxy-event-component@2.1.0/dist/aframe-proxy-event-component.min.js"></script>
	<script type="text/javascript" src="{{ URL::asset('js/aframe-href-component.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>

	
</head>

<body>
	<a-scene canvas="" keyboard-shortcuts="" vr-mode-ui="">		

		<a-sky color="#00BFFF"></a-sky>
		<a-entity camera look-controls>
			<a-entity cursor="fuse: true; fuseTimeout: 1500" position="0 0 -1" geometry="primitive: ring; radiusInner: 0.02; radiusOuter: 0.03" material="color: red; shader: flat">
			</a-entity>
		</a-entity>
		

		<a-text font="roboto" value="Selamat Datang di VR Pantai Malang\n Silakan pilih pantai yang ingin dikunjungi." width="10" position="0 7 -10" rotation="0 0 0" align="center" color="black"></a-text>		

		@php
		$x = -3.5;
		$y = 4;	
		$nextLine = 1;			
		@endphp

		@forelse($tempatWisataArrays as $tempatWisataArray)			
		@if ($nextLine%3==0)
		@php
		$y-=4.5; 
		$x=-3.5;
		@endphp
		@endif		

		<!-- <a-image id="thumbnail" src="{{$tempatWisataArray->thumbnail}}" width="6" height="3.5" position="{{$x}} {{$y}} -10" rotation="0 0 0" href="user-vr/{{$tempatWisataArray->id}}">			
			<a-plane color="#CCC" height="0.4" width="6" position="0 1.7 0.01" ></a-plane>
			<a-text font="roboto" value="{{$tempatWisataArray->nama_tempat_wisata}}" position="0 1.7 0.01" align="center" width="3" color="black" scale="2 2 2"></a-text>				
		</a-image>			 -->
		<a-entity link="href: /user-vr/{{$tempatWisataArray->id}}">
			<a-image id="thumbnail" src="{{$tempatWisataArray->thumbnail}}" width="6" height="3.5" position="{{$x}} {{$y}} -10" rotation="0 0 0">			
				<a-plane color="#CCC" height="0.4" width="6" position="0 1.7 0.01" ></a-plane>
				<a-text font="roboto" value="{{$tempatWisataArray->nama_tempat_wisata}}" position="0 1.7 0.01" align="center" width="3" color="black" scale="2 2 2"></a-text>

			</a-image>			
		</a-entity>				
		@php
		$x+=7;
		$nextLine+=1;			
		@endphp		

		@empty		
		<a-text font="roboto" value="Belum ada tempat wisata." width="10" position="0 7 -20" rotation="0 0 0" align="center" color="black" scale="3 3 3"></a-text>		
		@endforelse

	</a-scene>

</body>
</html>