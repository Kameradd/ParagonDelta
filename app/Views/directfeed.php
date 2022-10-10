<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">
    <title>GC-001</title>
</head>
<style>



      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body {
  background: #111;
  color: white;
  padding-top: 20px;
  padding-left: 20px;
}

#switch {
    
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
}

.switch-label {
  display: inline-block;
  cursor: pointer;
  background: #fff;
  color: #111;
  padding: 10px;
  padding-left: 15px;
  padding-right: 15px;
  border-radius: 5px;
  margin-top: 10px;
  box-shadow: 0 2px #666;
}
.switch-label::after {
  content: "on";
}
.switch-label::before {
  content: " ";
  display: inline-block;
  border-radius: 100%;
  width: 10px;
  height: 10px;
  background: #003321;
  margin-right: 10px;
  border: 1px solid #111;
}
.switch-label:active {
  box-shadow: none;
  transform: translate3d(0, 2px, 0);
}

#switch:checked + .switch-label::before {
  background: #22ff55;
}
#switch:checked + .switch-label::after {
  content: "off";
}

@keyframes flicker {
  0% {
    opacity: 0.3109;
  }
  5% {
    opacity: 0.42238;
  }
  10% {
    opacity: 0.32827;
  }
  15% {
    opacity: 0.26875;
  }
  20% {
    opacity: 0.76958;
  }
  25% {
    opacity: 0.05153;
  }
  30% {
    opacity: 0.65236;
  }
  35% {
    opacity: 0.81689;
  }
  40% {
    opacity: 0.66447;
  }
  45% {
    opacity: 0.49361;
  }
  50% {
    opacity: 0.72103;
  }
  55% {
    opacity: 0.23069;
  }
  60% {
    opacity: 0.23861;
  }
  65% {
    opacity: 0.95736;
  }
  70% {
    opacity: 0.95103;
  }
  75% {
    opacity: 0.55341;
  }
  80% {
    opacity: 0.14107;
  }
  85% {
    opacity: 0.02611;
  }
  90% {
    opacity: 0.63295;
  }
  95% {
    opacity: 0.52393;
  }
  100% {
    opacity: 0.12967;
  }
}
/* #121010 */
.container {
  background: black;
  width: 1400px;
  height: 900px;
  margin-top: 3px;
    position:absolute;
    left: calc(1% + 240px);
  overflow: hidden;
  border: 2px solid #666;
}
.container::after {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: rgba(18, 16, 16, 0.1);
  opacity: 0;
  z-index: 2;
  pointer-events: none;
}
.container::before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.25) 50%), linear-gradient(90deg, rgba(255, 0, 0, 0.06), rgba(0, 255, 0, 0.02), rgba(0, 0, 255, 0.06));
  z-index: 2;
  background-size: 100% 2px, 3px 100%;
  pointer-events: none;
}

#switch:checked ~ .container::after {
  animation: flicker 0.15s infinite;
}

@keyframes turn-on {
  0% {
    transform: scale(1, 0.8) translate3d(0, 0, 0);
    -webkit-filter: brightness(30);
    filter: brightness(30);
    opacity: 1;
  }
  3.5% {
    transform: scale(1, 0.8) translate3d(0, 100%, 0);
  }
  3.6% {
    transform: scale(1, 0.8) translate3d(0, -100%, 0);
    opacity: 1;
  }
  9% {
    transform: scale(1.3, 0.6) translate3d(0, 100%, 0);
    -webkit-filter: brightness(30);
    filter: brightness(30);
    opacity: 0;
  }
  11% {
    transform: scale(1, 1) translate3d(0, 0, 0);
    -webkit-filter: contrast(0) brightness(0);
    filter: contrast(0) brightness(0);
    opacity: 0;
  }
  100% {
    transform: scale(1, 1) translate3d(0, 0, 0);
    -webkit-filter: contrast(1) brightness(1.2) saturate(1.3);
    filter: contrast(1) brightness(1.2) saturate(1.3);
    opacity: 1;
  }
}
@keyframes turn-off {
  0% {
    transform: scale(1, 1.3) translate3d(0, 0, 0);
    -webkit-filter: brightness(1);
    filter: brightness(1);
    opacity: 1;
  }
  60% {
    transform: scale(1.3, 0.001) translate3d(0, 0, 0);
    -webkit-filter: brightness(10);
    filter: brightness(10);
  }
  100% {
    animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    transform: scale(0, 0.0001) translate3d(0, 0, 0);
    -webkit-filter: brightness(50);
    filter: brightness(50);
  }
}
.screen {
  width: 100%;
  height: 100%;
  border: none;
   
}

#switch ~ .container > .screen {
  animation: turn-off 0.55s cubic-bezier(0.23, 1, 0.32, 1);
  animation-fill-mode: forwards;
}

#switch:checked ~ .container > .screen {
  animation: turn-on 4s linear;
  animation-fill-mode: forwards;
}
#switch:checked ~ .container > #screen {
  background-color: black;
}

@keyframes overlay-anim {
  0% {
    visibility: hidden;
  }
  20% {
    visibility: hidden;
  }
  21% {
    visibility: visible;
  }
  100% {
    visibility: hidden;
  }
}
.overlay {
  color: #00FF00;
  position: absolute;
  top: 20px;
  left: 20px;
  font-size: 60px;
  visibility: hidden;
  pointer-events: none;
}

#switch:checked ~ .container .overlay {
  animation: overlay-anim 5s linear;
  animation-fill-mode: forwards;
}
#switch:checked ~ #screen {
 animation: turn-on 3s;
 background-color: #1a4209;
}
#switch ~ #screen {
    /* animation: turn-off 0.5s; */
 background-color: #111111;
}

   




    .noselect {
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
}
      #screen{
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgb(0, 128, 0);
        
        
        
    }

    #scan, #bezel{
        position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    pointer-events: none;
    }
    #content{
        padding: 90px;
        font-family: VT323;
        /* color: rgb(177,253,0); */
        color: greenyellow;
        font-size: 20px;
        text-shadow: 1px 1px 2px rgb(150, 167, 124), 0 0 1em rgb(150, 167, 124), 0 0 0.2em rgb(150, 167, 124);
    }
    #scan{
        opacity: 60%;
    }
    #body{
        margin: 0%;
        height: 100%;
    }
    html {
    /* To make use of full height of page*/
    min-height: 100%;
    margin: 0;
}
body {
    min-height: 100%;
    margin: 0;
}
    </style>
<body id="body">
<input type="checkbox" id="switch" checked>
    <div id="screen" class="container" style="left: 0px;">
        <div class="screen">
        <img src="/img/bezel.png" id="bezel" class="noselect">
        <img src="/img/scanlines.png" id="scan" class="noselect">
        <div id="content">
            <h1>
                Development in Commence
            </h1>
            <h2>Under development - Kameradd</h2>
            <a href="/download" class="active">Download</a></div>
        

    </div>
    </div>

    
    
</body>
</html>