<!DOCTYPE html>
<html>
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bgimg {
    background-image: url('Heaven.jpg');
    height: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
    color: black;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
}

.topleft {
    position: absolute;
    top: 0; 
    left: 16px;
}

.bottomleft {
    position: absolute;
    bottom: 0;
    left: 16px;
}

.middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

hr {
    margin: auto;
    width: 40%;
}
</style>
<body>

<div class="bgimg">
  <div class="topleft">
    	<p>
		<img src="logo.png" style="height:65px; width:auto;">
		Mangomark.com
	</p>
  </div>
  <div class="middle">
    <h1>SEE YOU SOON!</h1>
    <hr>
    <p id="demo" style="font-size:45px; background-color: white; opacity:0.8;"></p>
<br /> <br />
  </div>
<br /> <br />
<p> </p>
  <div class="bottomleft" style="background-color: white; opacity:0.8;">
    <p  style="text-align:center; align:center;" align="center">Dear All Users...</p>
	<p style="text-align:center; align:center;" align="center">We are currently <span style="color:red;">updating the mangomark website
	to give you a more pleasurable user experience
</span>
and will be back as soon as possible.
</p>
<p style="text-align:center; align:center;" align="center">
	Thank you! <br />
	Mangomark Team.
</p>

  </div>
</div>

<script>
// Set the date we're counting down to
	// the deadline should up set here
var countDownDate = new Date("June 23, 2017 23:37:59").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
	
	//Time is retrieved
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
	//The math floor function is used
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "Day: " + hours + "H: "
    + minutes + "m: " + seconds + "s";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

</body>
</html>

