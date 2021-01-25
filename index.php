<!DOCTYPE HTML>
<html>
<head>
  <title>Ospoly Exams</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
  color: red;
  font-family:cursive;
  
}
img {
  width: 130px;
  height: 80px;

}
</style>
</head>
 <div class="bgimg">
  <div class="topleft">
    <p><img src="ospoly.png"></p>
  </div>
  <div class="middle">
    <h1>COMING SOON.........</h1>
    <hr>
    <p>OSPOLY FINAL YEAR EXAMS</p>
    <p id="demo"></p>
  </div>
  <div class="bottomleft">
  </div>
  <div class="solace">
    <h5>@Solace_tech 08068367072</h5>
  </div>
</div> 
<body>



<script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 1, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
</html>
<style>
body, html {
height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('afusa.jpg');
  height: 100%;
  background-position: center;
  background-size: repeat;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}
/* Position text in the top-left corner */
.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

/* Position text in the bottom-left corner */
.bottomleft {
 
  text-align: center;
}
.solace{


 position: absolute;
  bottom: 0;
  font-size: 1em;
  color:white;
  margin-bottom: -30px;
}

/* Position text in the middle */
.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/* Style the <hr> element */
hr {
  margin: auto;
  width: 40%;
}
</style>