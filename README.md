kohana-twitter-bootstrap
========================

Kohana Twitter Bootstrap Module

	Use Twitter Bootstrap 2.2.1 version

## Methods

### Twitterbootstrap::css($list = array())

return array with url for css files

run:
	
	Twitterbootstrap::css();

return:
	
	array(2) (
    0 => string(42) "twitter-bootstrap/assets/css/bootstrap.css"
    1 => string(53) "twitter-bootstrap/assets/css/bootstrap-responsive.css")

or define file list, example:

	Twitterbootstrap::css('bootstrap.css');
	
return:

	array(1) (
    0 => string(42) "twitter-bootstrap/assets/css/bootstrap.css"
    )


### Twitterbootstrap::js($list = array())

return array with url for js plugins

run:

	Twitterbootstrap::js()
	
return:

	array(14) (
    0 => string(37) "twitter-bootstrap/assets/js/jquery.js"
    1 => string(51) "twitter-bootstrap/assets/js/bootstrap-transition.js"
    2 => string(46) "twitter-bootstrap/assets/js/bootstrap-alert.js"
    3 => string(46) "twitter-bootstrap/assets/js/bootstrap-modal.js"
    4 => string(49) "twitter-bootstrap/assets/js/bootstrap-dropdown.js"
    5 => string(50) "twitter-bootstrap/assets/js/bootstrap-scrollspy.js"
    6 => string(44) "twitter-bootstrap/assets/js/bootstrap-tab.js"
    7 => string(48) "twitter-bootstrap/assets/js/bootstrap-tooltip.js"
    8 => string(48) "twitter-bootstrap/assets/js/bootstrap-popover.js"
    9 => string(47) "twitter-bootstrap/assets/js/bootstrap-button.js"
    10 => string(49) "twitter-bootstrap/assets/js/bootstrap-collapse.js"
    11 => string(49) "twitter-bootstrap/assets/js/bootstrap-carousel.js"
    12 => string(50) "twitter-bootstrap/assets/js/bootstrap-typeahead.js"
    13 => string(46) "twitter-bootstrap/assets/js/bootstrap-affix.js")
    
or define js plugin files:

	Twitterbootstrap::js(array('jquery.js', 'bootstrap-transition.js', 'bootstrap-alert.js'));
	
return:

	array(3) (
    0 => string(37) "twitter-bootstrap/assets/js/jquery.js"
    1 => string(51) "twitter-bootstrap/assets/js/bootstrap-transition.js"
    2 => string(46) "twitter-bootstrap/assets/js/bootstrap-alert.js")


### Twitterbootstrap::print_css($list = array())

This method print HTML tag to include css files using Twitterbootstrap::css() method

run:

	Twitterbootstrap::print_css()
	
return:

	<link type="text/css" href="/kickoff/twitter-bootstrap/assets/css/bootstrap.css" rel="stylesheet" />
	
	<link type="text/css" href="/kickoff/twitter-bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet" />
	

### Twitterbootstrap::print_js($list = array())

This method print HTML tag to include js plugin files using Twitterbootstrap::js() method

run:

	Twitterbootstrap::print_js(array('jquery.js', 'bootstrap-transition.js', 'bootstrap-alert.js'))
	
return:

	<script type="text/javascript" src="/kickoff/twitter-bootstrap/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/kickoff/twitter-bootstrap/assets/js/bootstrap-transition.js"></script>
	<script type="text/javascript" src="/kickoff/twitter-bootstrap/assets/js/bootstrap-alert.js"></script>
	

## Examples View

located in MODPATH.'kohana-twitter-bootstrap/views/twitterbootstrap/'

* carrousel
* fluid
* hero
* marketing-alternate
* marketing-narrow
* signin
* starter-template
* sticky-footer	
	




[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/madeinnordeste/kohana-twitter-bootstrap/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

