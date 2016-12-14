<style>
#slider {
  position: relative;
  margin-top:160px;
  z-index:-1;
  width:100%;
  overflow:visible;
  height:350px;
  left:0px;
}

#slider ul {
  position:relative;
  margin:0;
  padding:0;
  height: 350px;
  list-style: none;
}

#slider ul li {
  position: relative;
  display: block;
  float: left;
  margin: 0;
  padding: 0;
  width:1340px;
  height: 350px;
  background: #ccc;
  text-align: center;
  line-height: 300px;
}

a.control_prev,
a.control_next {
  position: absolute;
  top: 40%;
  z-index: 999;
  display: block;
  padding: 0px 0px;
  color:#fff;
  text-decoration: none;
  font-weight: 600;
  font-size: 18px;
  cursor: pointer;
}

a.control_prev:hover,
a.control_next:hover {
  opacity:1;
  -webkit-transition: all 0.2s ease;
}

a.control_prev {
	opacity:0.01;
    border-radius: 0 2px 2px 0;
}

a.control_next {
	opacity:0.01;
  right: 0;
  border-radius: 2px 0 0 2px;
}
</style>
<script type="text/javascript" src="jquery.js"></script>
<script>
function visit(value)
{
	var loc=value;
	window.location.href='Moviedescp.php?id='+loc;
}
</script>
<script>
$(document).ready(function () {

  $('#slider').ready(function(){
    setInterval(function () {
        moveRight();
    }, 6000);
  });
  
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ width: slideWidth, height: slideHeight });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});  
</script>
</head>
<div id="slider">
  <a href="#" class="control_next"><img src="next-1.png" width="30px" height="30px" /></a>
  <a href="#" class="control_prev"><img src="back.png" width="30px" height="30px" /></a>
      <ul>
    <li>
    <img src="Slider_01.png" width="1340px" height="350px" onmousedown="visit(9)" />
	</li>
    <li>
	<img src="Slider_04.png" width="1340px" height="350px" onmousedown="visit(4)" />
	</li>
    <li>
	<img src="Slider_02.png" width="1340px" height="350px" onmousedown="visit(2)" />
	</li>
    <li>
	<img src="Slider_03.png" width="1340px" height="350px" onmousedown="visit(1)" />
	</li>
    </ul>
</div>