<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Brought to you by Huts: Space Miner</title>
  <link rel="stylesheet" href="css/planet-style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<header> 


	
<div id="dashboard" class="nav">Jump into orbit<span id="button"><a href="planetdashboard.php"></a></span></div>
<div id="dashboard2" class="nav">Go to Auction House<span id="button"><a href="auctionhouse.php"></a></span></div>
<header>		
</head>
<body>
<!-- partial:index.partial.html -->
<body class="opening hide-UI view-2D zoom-large data-close controls-close">
    <div id="navbar">
      <a id="toggle-data" href="#data"><i class="icon-data"></i>Data</a>
    <h1>Space Invaderz<br><span>by <a href="curio.com" target="_blank">@ByLucRaviRubenG&Alex</a></span></h1>
    <a id="toggle-controls" href="#controls"><i class="icon-controls"></i>Controls</a>
    </div>
    <div id="data">
      <a class="thenaus" title="thenaus" href="#thenausspeed">thenaus</a>
      <a class="zyon" title="zyon" href="#zyonspeed">zyon</a>
      <a class="skorp" title="skorp" href="#skorpspeed">skorp</a>
      <a class="tubiter active" title="tubiter" href="#tubiterspeed">tubiter</a>
      <a class="ziretune" title="ziretune" href="#ziretunespeed">ziretune</a>
      <a class="resculate" title="resculate" href="#resculatespeed">resculate</a>
      <a class="titan" title="titan" href="#titanspeed">titan</a>
      <a class="amodeus" title="amodeus" href="#amodeusspeed">amodeus</a>
      <a class="plixeus" title="plixeus" href="#plixeusspeed">plixeus</a>
      <div class="flexbox">
      <form action="planetdashboard.php">
            <input type="submit" value="Jump into orbit" />
            
        </form>
        <form action="dashboard.php">
        <input type="submit" value="Go back"/>
        </form>
      </div>
    </div>
    <div id="controls">
      <label class="set-view">
        <input type="checkbox">
      </label>
      <label class="set-zoom">
        <input type="checkbox">
      </label>
      <label>
        <input type="radio" class="set-speed" name="scale" checked>
        <span>Speed</span>
      </label>
      <label>
        <input type="radio" class="set-price" name="scale">
        <span>Price</span>
      </label>
      <label>
        <input type="radio" class="set-distance" name="scale">
        <span>Distance</span>
      </label>
    </div>
    <div id="universe" class="scale-stretched">
      <div id="galaxy">
        <div id="solar-system" class="tubiter">
        <a href="https://www.lucict.com" target="_blank">
          <div id="zyon" class="orbit">
            <div class="pos">
              <div class="planet">
                <dl class="infos">
                  <dt>zyon</dt>
                  <dd><span></span></dd>
                </dl>
              </div>
            </div>
          </div>
          </a>
          <a href="https://www.lucict.com" target="_blank">
          <div id="skorp" class="orbit">
            <div class="pos">
              <div class="planet">
                <dl class="infos">
                  <dt>skorp</dt>
                  <dd><span></span></dd>
                </dl>
              </div>
            </div>
          </div>
          </a>
          <a href="https://www.lucict.com" target="_blank">
          <div id="tubiter" class="orbit">
            <div class="pos">
              <div class="orbit">
                <div class="pos">
                  <div class="moon"></div>
                </div>
              </div>
              </a>
              <a href="https://www.lucict.com" target="_blank">
              <div class="planet">
                <dl class="infos">
                  <dt>tubiter</dt>
                  <dd><span></span></dd>
                </dl>
              </div>
            </div>
          </div>
          </a>
          <a href="https://www.lucict.com" target="_blank">
          <div id="ziretune" class="orbit">
            <div class="pos">
              <div class="planet">
                <dl class="infos">
                  <dt>ziretune</dt>
                  <dd><span></span></dd>
                </dl>
              </div>
            </div>
          </div>
          </a>
          <a href="https://www.lucict.com" target="_blank">
          <div id="resculate" class="orbit">
            <div class="pos">
              <div class="planet">
                <dl class="infos">
                  <dt>resculate</dt>
                  <dd><span></span></dd>
                </dl>
              </div>
            </div>
          </div>
          </a>
          <a href="https://www.lucict.com" target="_blank">
          <div id="titan" class="orbit">
            <div class="pos">
              <div class="planet">
                <div class="ring"></div>
                <dl class="infos">
                  <dt>titan</dt>
                  <dd><span></span></dd>
                </dl>
              </div>
            </div>
          </div>
          </a>
          <a href="https://www.lucict.com" target="_blank">
          <div id="amodeus" class="orbit">
            <div class="pos">
              <div class="planet">
                <dl class="infos">
                  <dt>amodeus</dt>
                  <dd><span></span></dd>
                </dl>
              </div>
            </div>
          </div>
          </a>
          <a href="https://www.lucict.com" target="_blank">
          <div id="plixeus" class="orbit">
            <div class="pos">
              <div class="planet">
                <dl class="infos">
                  <dt>plixeus</dt>
                  <dd><span></span></dd>
                </dl>
              </div>
            </div>
          </div>
          </a>
          <a href="https://www.lucict.com" target="_blank">
          <div id="thenaus">
            <dl class="infos">
              <dt>thenaus</dt>
              <dd><span></span></dd>
            </dl>
          </div>
          </a>
        </div>
      </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script type="text/javascript">
    if (typeof jQuery == 'undefined') { 
      document.write(unescape("%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));
    }
    </script>
    <script src="js/prefixfree.min.js"></script>
    <script src="js/scripts.min.js"></script>
  </body>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
