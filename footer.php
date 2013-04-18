<div class="footerTier">
        
</div>







	
<!-----------------------This scripts are for the nivo sl -------------------->

	<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="nivo-slider/jquery.nivo.slider.js"></script>
 	<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect: 'fade,fade,fade,fade', // Specify sets like: 'fold,fade,sliceDown'
        animSpeed: 1000, // Slide transition speed
        pauseTime: 3000, // How long each slide will show
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});
</script>


	<script type="text/javascript">
$(window).load(function() {
    $('#textslider').nivoSlider({
        effect: 'fade,fade,fade,fade', // Specify sets like: 'fold,fade,sliceDown'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 3000, // Slide transition speed
        pauseTime: 3000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        controlNav: false, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: true, // Force manual transitions
        prevText: '', // Prev directionNav text
        nextText: 'More', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});
</script>
<!-- ******************************************************************************* -->


<!-----------------------This scripts are for the flip effect -------------------->

<script type="text/javascript" src="flip/jquery.flip.min.js"></script>
<script>
<script type="text/javascript">
			$(function(){
				
				$("#header a:not(.revert)").bind("click",function(){
					var $this = $(this);
					$("#header").flip({
						direction: $this.attr("rel"),
						color: $this.attr("rev"),
						content: $this.attr("title"),//(new Date()).getTime(),
						onBefore: function(){$(".revert").show()}
					})
					return false;
				});
				
				$(".revert").bind("click",function(){
					$("#header").revertFlip();
					return false;
				});
				
				
			});
		</script>

<!-- ******************************************************************************* -->


<!-- //**************** OPTIONAL FUNCTIONALLITY JUST TO HELP THE USER ****************      
        //Change the URL adding '#!/' + the linked file name
        window.location.hash = '!/'+$(this).attr('href');
//**************** END OF OPTIONAL FUNCTIONALLITY ******************************* -->
<script>


        //Load the new content, after it is loaded fade in the new content
        $('#content').load(toLoad,'',function(){
            $('#content').fadeIn(1000);
        });


        //Stop the link from reloading the page
        return false;    
    });
</script>




</div>	
</body>
</html>