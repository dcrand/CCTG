//////////////////////////////////////////
////////////// 	 CCTG JS    //////////////
//////////////////////////////////////////


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/

function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y }
}
// setting the viewport width
var viewport = updateViewportDimensions();


jQuery(document).ready(function($) {
	

if( viewport.width >= 768 ) {
		   	$(window).stellar({
	  			parallaxBackgrounds: true,
	  		 	horizontalScrolling: false,
	  		 	verticalOffset: 50,
	  		 	responsive: true,  		
			});
		  }


}); /* end of as page load scripts */

