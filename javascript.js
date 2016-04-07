var apiKey    = "45531972";
var sessionId = "2_MX40NTUzMTk3Mn5-MTQ1OTk0NDE5NDI3Nn5zOXp2Um9xTzZEQ3htWUlPMXI5bHhjL1l-UH4";
var token     = "T1==cGFydG5lcl9pZD00NTUzMTk3MiZzaWc9MjMxNTk4MDliN2M3YmQ0NDEwNDkxNTczODViNGVhM2FjOWJmYTk2NDpyb2xlPXB1Ymxpc2hlciZzZXNzaW9uX2lkPTJfTVg0ME5UVXpNVGszTW41LU1UUTFPVGswTkRFNU5ESTNObjV6T1hwMlVtOXhUelpFUTNodFdVbFBNWEk1YkhoakwxbC1VSDQmY3JlYXRlX3RpbWU9MTQ1OTk0NDIwNSZub25jZT0wLjE4MjEzMDY5NjUxNjQ5ODcmZXhwaXJlX3RpbWU9MTQ2MjUzNjE2MSZjb25uZWN0aW9uX2RhdGE9";

document.addEventListener("DOMContentLoaded", function(){
    if(location.hash){

        //MANIPULATE DOM, REMOVE THE ABILITY TO CHOOSE ROOM AND ADD THE CHOSEN ROOM
        $('#choose-room').remove();
        $('#session-room').removeClass('session-room-deactive');
        $('#session-room').addClass('session-room-active');

        startSession(); 
    }
})

var publisher;

function startSession(){
    var session = OT.initSession(apiKey, sessionId);

    session.on("streamCreated", function(event) {
        session.subscribe(event.stream);
    });

    session.connect(token, function(error) {
        publisher = OT.initPublisher('player-div', {name: "sajjad", insertMode: 'append'});
        session.publish(publisher);
    });

}

$(window).resize(function() {
    console.log('INNERWIDTH: ' + window.innerWidth);
});

//$('#join-room-one').click(function(){
//    console.log('CLICKED');
//    if(!$('#username-room-one').val()){
//        $('#username-room-one').addClass('username-input-no-name');   
//    }else{
//        document.location = document.URL + '#' + sessionId;
//    }
//});