<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AR.js Example</title>
    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/jeromeetienne/ar.js/aframe/build/aframe-ar.min.js"></script>
</head>


<body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs>
    <a-marker preset="hiro">
          <a-box position='0 0.5 0' material='color: yellow;'></a-box>
      </a-marker>
      <a-entity camera></a-entity>
    </a-scene>
</body>

</html>