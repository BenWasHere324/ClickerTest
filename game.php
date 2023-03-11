<!DOCTYPE html>
<html>
  <link href="game.css" rel="stylesheet" type="text/css" />
  <head>
    <title>clicler game</title>
  </head>
  <body>
    
    <h1 id="title">Clicker Game</h1>
    <a><p style="font-size: 15px; color:#1F9AFE;">
<a href="index.html">Home(WARNING! THIS RESETS POINTS AND UPGRADES TO 0!)</a>
</p></a>
    <details>dev menu
    <button id="devM">999999 points</button>
      <button id="devM1">*2 points</button>
    </details>
    <p id="tut"><div id="tut">Click the Click Me! button to start playing!</div></p>
    <p id="pcss"><span id="points"> 0 </span></p>
    <p id="pps">P/s: <span id="acn">0</span></p>
    <p id="stats"> Mouse Value: <span id="mouseVD">1</span> </p>
    <button id="clickButton">Click me!</button>
    <p>
      
    </p>
    <button id="Upgrade">+1 Upgrade Price: 20</span> </button>
    <p>
      
    </p>
     <button id="Upgrade2">+5 Upgrade Price: 150</span> </button>
    <p>
      
    </p>
    <button id="ac1B">1cps auto Price: 100</button>
    <button id="ac2B">5cps auto Price: 2500</button>
    <p>
      
    </p>
    <p id="log"> </p>
  
    
   <script>
function delay(time) {
  return new Promise(resolve => setTimeout(resolve, time));
};
   </script>
    <script>
    acc1();
     
     function acc1(){
      delay(1000).then(() => setTimeout(ac1, 0));
    }
    
     
    function ac1(){
  console.log("1");
      points = points + acpu;
      pointsDisplay.innerHTML = points;
       setTimeout(acc1, 0);
}
     
  </script>
    <script>
      // Set starting variables
      var points = 0;
      var clickValue = 1;
      var upgradeDis = 0;
      var upgradeDis2 = 0;
      var mouseV = 1;
      var uP1 = 20;
      var uP2 = 150;
      var acp1 = 100;
      var acpu = 0;
      var acp2 = 2500;
      // Get DOM elements
      var clickButton = document.getElementById("clickButton");
      var Upgrade = document.getElementById("Upgrade");
      var pointsDisplay = document.getElementById("points");
      var upgradeDisplay = document.getElementById("upgradeDis");
      var log = document.getElementById("log");
     var upgradeDisplay2 = document.getElementById("upgradeDis2");
      var mouseV = document.getElementById("mouseV");
      var mouseVD = document.getElementById("mouseVD")
      var uP1 = document.getElementById("uP1");
      var up2 = document.getElementById("uP2");
      var acp1 = document.getElementById("ac1");
      var acpu = document.getElementById("acpu");
      var acp2 = document.getElementById("acp1");
      // Add click event listener to button
      clickButton.addEventListener("click", function() {
        points += clickValue;
        pointsDisplay.textContent = points;
         
      });
      
     uP1 = 20
      uP2 = 150
        mouseV = 1
         Upgrade.addEventListener("click",
       function(){ 
         if (points < uP1) {
           console.log("not enough cash")
           log.textContent = "not enough cash";
           
delay(2200).then(() => log.textContent = " ");
           
         } else {
         clickValue = clickValue + 1;
         points = points - uP1;
           
         pointsDisplay.innerHTML = points;
         
          uP1 = uP1 * 3;
         
             Upgrade.innerHTML = "+1 Upgrade Price: " + uP1;
           mouseV = mouseV + 1;
           mouseVD.innerHTML = mouseV;
         
       }});

      Upgrade2.addEventListener("click",
       function(){ 
        
         if (points < uP2) {
           console.log("not enough cash")
           log.textContent = "not enough cash";
           
delay(2200).then(() => log.textContent = " ");
           
         } else {
         clickValue = clickValue + 5;
         points = points - uP2;
           uP2 = uP2 * 3;
         pointsDisplay.innerHTML = points;
         
         
           Upgrade2.innerHTML = "+5 Upgrade Price: " + uP2
             mouseV = mouseV + 5;
           mouseVD.innerHTML = mouseV;
       }});
acp1 = 100;
  ac1B.addEventListener("click", function(){
    if (points < acp1) {
    console.log("not enough cash");
    log.textContent = "not enough cash"; 
      delay(2200).then(() => log.textContent = " ");
    }
    else {
      points = points - acp1;
      pointsDisplay.textContent = points;
      acp1 = acp1 * 2;
      ac1B.innerHTML = "1cps auto Price: " + acp1;
      acpu = acpu + 1;
      acn.innerHTML = acpu;
}});
acp2 = 2500;
      ac2B.addEventListener("click", function(){
    if (points < acp2) {
    console.log("not enough cash");
    log.textContent = "not enough cash"; 
      delay(2200).then(() => log.textContent = " ");
    }
    else {
      points = points - acp2;
      pointsDisplay.textContent = points;
      acp2 = acp2 * 2;
      ac2B.innerHTML = "5cps auto Price: " + acp2;
      acpu = acpu + 5;
      acn.innerHTML = acpu;
}
    
  });

      
    </script>
    <script>
      devM.addEventListener("click", function(){
        points = points + 999999;
      });
       devM1.addEventListener("click", function(){
        points = points * 2;
      });
    </script>
  </body>
</html
  
   