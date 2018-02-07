var np = np || {};

np.script = (function($) {
	var _init = function(param){
		particlesJS.load('particles-js', 'js/particlesjs-config.json', function() {
			console.log('callback - particles.js config loaded');
		});
	};
	return {
		init: _init
	}

})(jQuery);

jQuery(document).ready(function($) {
	np.script.init({});
});