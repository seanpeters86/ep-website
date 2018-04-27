<?php
/** 
 * This function takes in a color string and test whether it is in hex format.  
 * If so it will simply return a '#' prefixed version to make it the standard
 * hex format, or return it as-is.
 * 
 * This is done to make linking to this file within css a bit easier, since we'd
 * need to escape the '#' so the browser doesn't treat it as a hash and ignore 
 * it when requesting content. Otherwise users would have to link using:
 *
 *    url:(linear-gradient.php?start-color=%23AABBCC&end-color=%23CCBBAA);
 *
 * Which is not developer friendly.
 */
function fixupColor($color) {
    if (is_null($color)) {
        return "#000";
    }
    
    if (preg_match('/^[a-gA-G0-9]{3}([a-gA-G0-9]{3})?$/', $color)) {
        return "#".$color;
    }
    // return as-is
    return $color;
}


/* start processing */
$start = fixupColor($_REQUEST["start-color"]);
$end = fixupColor($_REQUEST["end-color"]);

$startOpacity = $_REQUEST["start-opacity"];
$endOpacity = $_REQUEST["end-opacity"];
if (is_null($startOpacity)) $startOpacity = "1";
if (is_null($endOpacity)) $endOpacity = "1";

header('Content-type: image/svg+xml');
    
echo '<?xml version="1.0" ?>'; ?>
<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.0" width="100%" 
   height="100%" 
     xmlns:xlink="http://www.w3.org/1999/xlink">

  <defs>
    <linearGradient id="linear-gradient"
                    x1="0%" y1="0%"
                    x2="0%" y2="100%"
                    spreadMethod="pad">
      <stop offset="0%" stop-color="<?php echo $start; ?>" stop-opacity="<?php echo $startOpacity; ?>" />
      <stop offset="100%" stop-color="<?php echo $end; ?>" stop-opacity="<?php echo $endOpacity; ?>" />
    </linearGradient>
  </defs>

  <rect width="100%" height="100%"
     style="fill:url(#linear-gradient);" />
</svg>