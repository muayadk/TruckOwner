<html>
<head>
<style>
canvas {
  background-color: blue; 
  width: 100%;
  height: auto;
}
</style>

<script>
$( document ).ready(function() {

    var c=document.getElementById("canvas");
    var ctx=c.getContext("2d");
    ctx.beginPath();
    ctx.arc(95,50,40,0,2*Math.PI);
    ctx.stroke();

});
</script>
</head>
<body>


<div class="container">
      
        <div class="">
            <canvas id="canvas" width="300" height="300">
              Sorry, your browser doesn't support the &lt;canvas&gt; element.
            </canvas>
        
      </div> <!-- /row -->
    </div>


</body>
</html>