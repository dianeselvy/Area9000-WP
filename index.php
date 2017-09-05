<?php get_header(); ?> 
<body>    
    <img src="img/metal.jpg" id="space">
    <div id="splash">
        <!--<h2 id="enter">ENTER</h2><Br />-->
                <img src="img/enter3.png" id="enter">
        
    </div>
    
    <div id="splash-2" style="display:none;">
        <form id="ageCheck">
                <input type="checkbox" name="age" class="age" required>
            <label for="age"> I am 21 years of age or older</label>
        </form>
    </div>
    
    <div id="splash-3" style="display:none;">
        <form id="alienCheck">
                <input type="checkbox" name="age" class="alien" required><label for="alien"> I am not an alien</label>
        </form>
    </div>
    
    
    <div id="post-splash" style="display:none;">   
        <video id="video-bg-elem" loop="loop">
            <source src="alien.mp4" type="video/mp4">
            Video not supported
        </video>
    </div>
    
<?php get_footer(); ?>