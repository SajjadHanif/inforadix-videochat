<!DOCTYPE html>

<head>

    <title>InfoRadx VideoChat</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src='http://static.opentok.com/webrtc/v2.2/js/opentok.min.js'></script>
    <!--    <script src="http://underscorejs.org/underscore.js"></script>-->


    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.14.1/build/cssnormalize/cssnormalize-min.css">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>

    <meta property="og:title" content="title"/>
    <meta property="og:url" content="">
    <meta property="og:description" content=""/>
    <meta property="og:image" content="icon.png">
    <link rel="shortcut icon" href="icon.png"/>

</head>

<script type="text/javascript">
    var session1 = '123';

</script>

<body>

    <div id='header'>
        <a href=''><h1><i class='fa fa-group'></i> InfoRadx VideoChat prototype</h1></a>
    </div>

    <div class='content' id='choose-room'>

        <p>Click on link below to enter a room.</p>

        <div class='room-div'>    

            <div class="room-title-div">InfoRadix Talk</div>

<!--            <input type='text' class='username-input' id='username-room-one' autocomplete='off' maxlength='16' placeholder='Please enter username'>-->

            <a onClick="location.hash = this.hash; location.reload()" href="#2_MX40NDY4NjI5Mn5-RnJpIE1hciAyOCAwOTozMjo1MiBQRFQgMjAxNH4wLjQxNzg3MjZ-">

                <div class='button-div' id='join-room-one'><i class='fa fa-bolt'></i> join</div>

            </a>

        </div>

    </div>

    <div class='content session-room-deactive' id="session-room">

        <h2>room started</h2>

        <div id='player-div'></div>

    </div>

</body>

<script src="javascript.js"></script>

</html>
