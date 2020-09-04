<body class="opening hide-UI view-2D zoom-large data-close controls-close">
<div id="navbar">
    <a id="toggle-data" href="#data"><i class="icon-data"></i>Data</a>
    <h1>Space Invaderz<br><span>by <a href="curio.com" target="_blank">@Alex</a></span></h1>
    <a id="toggle-controls" href="#controls"><i class="icon-controls"></i>Controls</a>
</div>
<div id="data">
    <a class="ziretune" title="ziretune" href="#ziretunespeed">ziretune</a>
    <a class="skorp" title="skorp" href="#skorpspeed">skorp</a>
    <a class="tubiter" title="tubiter" href="#tubiterspeed">tubiter</a>
    <a class="1 active" title="1" href="#1speed">1</a>
    <a class="2" title="2" href="#2speed">2</a>
    <a class="3" title="3" href="#3speed">3</a>
    <a class="4" title="4" href="#4speed">4</a>
    <a class="5" title="5" href="#5speed">5</a>
    <a class="6" title="6" href="#6speed">6</a>
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
        <input type="radio" class="set-size" name="scale">
        <span>Size</span>
    </label>
    <label>
        <input type="radio" class="set-distance" name="scale">
        <span>Distance</span>
    </label>
</div>
<div id="universe" class="scale-stretched">
    <div id="galaxy">
        <div id="solar-system" class="1">
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
            <div id="tubiter" class="orbit">
                <div class="pos">
                    <div class="planet">
                        <dl class="infos">
                            <dt>tubiter</dt>
                            <dd><span></span></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="1" class="orbit">
                <div class="pos">
                    <div class="orbit">
                        <div class="pos">
                            <div class="moon"></div>
                        </div>
                    </div>
                    <div class="planet">
                        <dl class="infos">
                            <dt>1</dt>
                            <dd><span></span></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="2" class="orbit">
                <div class="pos">
                    <div class="planet">
                        <dl class="infos">
                            <dt>2</dt>
                            <dd><span></span></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="3" class="orbit">
                <div class="pos">
                    <div class="planet">
                        <dl class="infos">
                            <dt>3</dt>
                            <dd><span></span></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="4" class="orbit">
                <div class="pos">
                    <div class="planet">
                        <div class="ring"></div>
                        <dl class="infos">
                            <dt>4</dt>
                            <dd><span></span></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="5" class="orbit">
                <div class="pos">
                    <div class="planet">
                        <dl class="infos">
                            <dt>5</dt>
                            <dd><span></span></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="6" class="orbit">
                <div class="pos">
                    <div class="planet">
                        <dl class="infos">
                            <dt>6</dt>
                            <dd><span></span></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="ziretune">
                <dl class="infos">
                    <dt>ziretune</dt>
                    <dd><span></span></dd>
                </dl>
            </div>
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