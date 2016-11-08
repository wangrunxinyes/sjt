<?php
use frontend\assets\LoveAsset;
LoveAsset::register($this);
?>
<div id="heading">
	<h1>表白墙</h1><br>
	<h2>大胆说出来</h2>
</div>
<!-- The icon set is based on Material Design icons by Google (https://github.com/google/material-design-icons) -->
<svg id="icon" viewBox="0 0 48 48" style="background-color:#ffffff00" version="1.1"
    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
  >
	<g id="favorite" style="display:none">
		<path d="M24,42.7l-2.9-2.6C10.8,30.7,4,24.6,4,17C4,10.8,8.8,6,15,6c3.5,0,6.8,1.6,9,4.2C26.2,7.6,29.5,6,33,6
          c6.2,0,11,4.8,11,11c0,7.6-6.8,13.7-17.1,23.1L24,42.7z" fill="#F00"/>
	</g>

	<g id="loyalty" style="display:none">
		<path d="M42.8,23.2l-18-18C24.1,4.4,23.1,4,22,4H8C5.8,4,4,5.8,4,8v14c0,1.1,0.4,2.1,1.2,2.8l18,18c0.7,0.7,1.7,1.2,2.8,1.2
        c1.1,0,2.1-0.4,2.8-1.2l14-14c0.7-0.7,1.2-1.7,1.2-2.8C44,24.9,43.5,23.9,42.8,23.2z" fill="#F08080"/>
		<path d="M11,14c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,14,11,14z" fill="#FFF"/>
		<path d="M34.5,30.5L26,39.1l-8.5-8.5l0,0C16.6,29.6,16,28.4,16,27c0-2.8,2.2-5,5-5c1.4,0,2.6,0.6,3.5,1.5l1.5,1.5l1.5-1.5c0.9-0.9,2.2-1.5,3.5-1.5c2.8,0,5,2.2,5,5C36,28.4,35.4,29.6,34.5,30.5L34.5,30.5z" fill="#FFF"/>
	</g>
	<g id="receipt" style="display:none">
		<path d="M6,44l3-3l3,3l3-3l3,3l3-3l3,3l3-3l3,3l3-3l3,3l3-3l3,3V4l-3,3l-3-3l-3,3l-3-3l-3,3l-3-3l-3,3l-3-3l-3,3l-3-3L9,7L6,4V44z" fill="#336699"/>
		<path d="M36,34H12v-4h24V34z" fill="#FFF"/>
		<path d="M36,26H12v-4h24V26z" fill="#FFF"/>
		<path d="M36,18H12v-4h24V18z" fill="#FFF"/>
	</g>
</svg>
<div id="options">
	<label for="selIcon" class="affection-label">Affection wall</label><br><br>
	<label for="selIcon" class="affection-alert">{ 敬请期待 }</label>
	<div class="option">
		<select id="selIcon"></select>
	</div>
	<div class="option">
		<label for="selEasing">Easing:</label>
		<select id="selEasing"></select>
	</div>
	<div class="option">
		<label for="selDuration">Duration:</label>
		<select id="selDuration"></select>
	</div>
	<div class="option">
		<label for="selRotation">Rotation:</label>
		<select id="selRotation"></select>
	</div>
</div>