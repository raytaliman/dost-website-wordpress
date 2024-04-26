<!-- start Simple Custom CSS and JS -->

<script id="gwt-pst-jsdk" src="//gwhs.i.gov.ph/pst/gwtpst.js?1712453059251"></script>
jQuery(document).ready(function( $ ){
 
var gwtpstReady = function(){
  var otherFormat = 'h:MM:ss TT';
  var firstPst = new gwtpstTime({
    timerClass: 'pst-example',
    format: otherFormat
  });
	var secondPst = new gwtpstTime({
    timerClass: 'date-pst',
     format: 'dd mmmm yyyy dddd'
  });
}


});
<script id="gwt-pst-jsonp-time" src="//gwhs.i.gov.ph/pst/jsonp_unix.php?1712453059391"></script>

<!-- end Simple Custom CSS and JS -->
