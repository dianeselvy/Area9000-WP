<script>
       
var video = document.getElementById("video-bg-elem"); 

$( "#enter" ).click(function() {
        $( "#splash" ).fadeOut( "fast" );
        $( "#splash-2" ).fadeIn( "fast" );    
});
    
$( "#ageCheck" ).click(function() {
        $( "#splash-2" ).fadeOut( "fast" );
        $( "#splash-3" ).fadeIn( "fast" );    
});
    
$( "#alienCheck" ).click(function() {
    var alienCheck = $('.alien').is(':checked');
    if(alienCheck == true){
        $( "#splash-3" ).fadeOut( "slow" );
        $( "#space" ).fadeOut( "slow" );
        $( "#post-splash" ).fadeIn( "slow" ); 
        video.play();
    }
});
</script>   
</body>

</html>