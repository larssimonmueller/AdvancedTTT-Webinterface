<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/">
    <link rel="stylesheet" href="localstyle/">
    <link rel="icon" href="logo/">
    <title>AdvancedTTT Webinterface</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand">
        <img src="logo/" width="34" height="34" class="d-inline-block align-top" alt="" loading="lazy">
        AdvancedTTT Webinterface
    </a>
</nav>
<div class="content">
    <h1>Spielinfo</h1>
    <div class="status">
        <div class="row">
            <div class="col-sm">
                <div class="testcontainer">
                    <div class="row">
                        <div class="col-2">
                            <img src="testsicon/" height="150">
                        </div>
                        <div class="col-8">
                            <div class="testone">
                                <h3 class="lo"><strong>Testlevel 1:</strong> <div id="onetext">Verbinde...</div></h3>
                            </div>
                            <div class="testtwo">
                                <h3 class="lt"><strong>Testlevel 2:</strong> <div id="twotext">Verbinde...</div></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm"></div>
        <div class="col-sm"></div>
        <div class="bigrolecontainer">
            <div class="row">
                <div class="col-2">
                    <img src="roleicon/" height="150">
                </div>
                <div class="col-8">
                    <div class="rollecontainer">
                        <h3 class="rolle"><strong>Rolle:</strong> <div id="rolletext">Verbinde...</div></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="bigtrapcontainer">
            <div class="row">
                <div class="col-2">
                    <img src="trapicon/" height="150">
                </div>
                <div class="col-8">
                    <div class="fallecontainer">
                        <h3 class="falle"><strong>Falle:</strong> <div id="falletext">Verbinde...</div></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    setInterval(update, 1000);

    function httpGet(theUrl)
    {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
        xmlHttp.send( null );
        return xmlHttp.responseText;
    }

    function update() {
        var one = httpGet("/one");
        var two = httpGet("two");
        var rolle = httpGet("/rolle");
        var falle = httpGet("/falle");
        document.getElementById("onetext").innerHTML = one;
        document.getElementById("twotext").innerHTML = two;
        document.getElementById("rolletext").innerHTML = rolle;
        document.getElementById("falletext").innerHTML = falle;
    }
</script>
</body>
</html>