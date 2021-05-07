<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kampung Tematik</title>
	<meta name="description" content="360&deg; Image Gallery - A-Frame">
	<script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
	<script src="https://unpkg.com/aframe-event-set-component@5/dist/aframe-event-set-component.min.js"></script>
	<script src="https://unpkg.com/aframe-layout-component@5.3.0/dist/aframe-layout-component.min.js"></script>
	<script src="https://unpkg.com/aframe-template-component@3.2.1/dist/aframe-template-component.min.js"></script>
	<script src="https://unpkg.com/aframe-proxy-event-component@2.1.0/dist/aframe-proxy-event-component.min.js"></script>
	<script src="{{ url('/js/aframe-href-component.js') }}"></script>
</head>

<body>
	<a-scene canvas="" keyboard-shortcuts="" vr-mode-ui="">

		<!-- Image link template to be reused. -->
		<script id="link" type="text/html">
			<a-entity class="link"
			geometry="primitive: plane; height: 2; width: 3"
			material="shader: flat; src:"
			event-set__mouseenter="scale: 1.09 1.09 1.09"
			event-set__mouseleave="scale: 1 1 1">
		</a-entity>
	</script>

	<a-assets>
		<img id="city" crossorigin="anonymous" src="https://cdn.glitch.com/3878eda5-e79c-42ac-82f2-b5c4b3ecb1eb%2FMain%20Menu%201.jpg?v=1603745196850">
		<img id="city-thumb" crossorigin="anonymous" src="https://cdn.aframe.io/360-image-gallery-boilerplate/img/thumb-city.jpg">
		<img id="cubes-thumb" crossorigin="anonymous" src="https://cdn.aframe.io/360-image-gallery-boilerplate/img/thumb-cubes.jpg">
		<img id="sechelt-thumb" crossorigin="anonymous" src="https://cdn.aframe.io/360-image-gallery-boilerplate/img/thumb-sechelt.jpg">
		<audio id="click-sound" crossorigin="anonymous" src="https://cdn.aframe.io/360-image-gallery-boilerplate/audio/click.ogg"></audio>
		<img id="cubes" crossorigin="anonymous" src="https://cdn.aframe.io/360-image-gallery-boilerplate/img/cubes.jpg">
		<img id="sechelt" crossorigin="anonymous" src="https://cdn.aframe.io/360-image-gallery-boilerplate/img/sechelt.jpg">

	</a-assets>

	@foreach($tempatWisataArrays as $tempatWisataArray)	

	<!-- SKY untuk mengatur gambar panorama yang diapakai -->
	<a-sky id="image-360" radius="10" src="{{$tempatWisataArray->thumbnail}}"
		animation__fade="property: components.material.material.color; type: color; from: #FFF; to: #000; dur: 300; startEvents: fade"
		animation__fadeback="property: components.material.material.color; type: color; from: #000; to: #FFF; dur: 300; startEvents: animationcomplete__fade"></a-sky>

		<a-entity
		position="-0.3 4.3 -5" rotation="0 0 0"
		geometry="primitive: plane; height: auto; width: auto"
		material="color: white; transparent: true; opacity: 0.3"
		text="width: 20; color: black; font: kelsonsans; align: center; value: KAMPUNG TEMATIK
		KOTA MALANG">

	</a-entity>
	<!-- Image links. -->
	@php
	$i = -6;
	$c = 0;
	$count_y = 0;
	$y = 1;
	@endphp	
	<a-entity id="links" position="{{$i}} {{$y}} -4" rotation="0 0 0">
		<a-plane color="#CCC" height="0.4" width="3" position="0 -1.2 0" ></a-plane>
		<a-text value="{{$tempatWisataArray->nama_tempat_wisata}}" position="0 -1.2 0" align="center" width="3" color="black" scale="2 2 2"></a-text>
		<a-entity link="href: /user-home" template="src: #link" data-thumb="{{$tempatWisataArray->thumbnail}}"></a-entity>
		<!-- <a-entity link="href: /user-home; title: My Homepage; image:{{$tempatWisataArray->thumbnail}}"></a-entity> -->
		<!-- <a-link href="/user-home" title="My Homepage" image="" visualAspectEnabled="false"></a-link> -->
	</a-entity>
	@php
	$i+=4;
	$c++;
	$count_y++;
	@endphp
	@if ($count_y % 4 == 0)
	@php
	$y += -2.7;
	$i = -6;
	@endphp
	@endif	

	@endforeach
	<!-- Camera + cursor. -->
	<a-entity position="0 1.8 4">
		<a-camera id="camera" look-controls="" wasd-controls-enabled="false" camera="active:true" rotation="-1.3750987083139854 -3.0939720937064483 0" position="0 0 0">
			<a-ring radius-outer="0.20" radius-inner="0.10" position="0 0 -3" material="color: cyan; shader: flat" cursor="maxDistance: 30; fuse: true" geometry="primitive:ring;radiusOuter:0.20;radiusInner:0.10" raycaster="" scale="0.4628376812078244 0.4628376812078244 0.4628376812078244">
				<a-animation begin="click" easing="ease-in" attribute="scale" fill="backwards" from="0.1 0.1 0.1" to="1 1 1" dur="150"></a-animation>
				<a-animation begin="fusing" easing="ease-in" attribute="scale" fill="forwards" from="1 1 1" to="0.1 0.1 0.1" dur="1500"></a-animation>
			</a-ring>
			<a-text value="Panorama Image ©2020 Kampung Tematik" position="0 -2.2 -3" align="center"  color="white" scale="0.8 0.8 0.8"></a-text>
		</a-camera>
	</a-entity>

	<a-entity camera look-controls>
		<a-cursor
		id="cursor"
		animation__click="property: scale; startEvents: click; from: 0.1 0.1 0.1; to: 1 1 1; dur: 150"
		animation__fusing="property: fusing; startEvents: fusing; from: 1 1 1; to: 0.1 0.1 0.1; dur: 1500"
		event-set__mouseenter="_event: mouseenter; color: springgreen"
		event-set__mouseleave="_event: mouseleave; color: black"
		raycaster="objects: .link"></a-cursor>
	</a-entity>
</a-scene>
</body>
</html>
