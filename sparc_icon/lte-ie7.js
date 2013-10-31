/* Use this script if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'sparc_icon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-facebook' : '&#x23;',
			'icon-twitter' : '&#x22;',
			'icon-github' : '&#x25;',
			'icon-help' : '&#x28;',
			'icon-microphone' : '&#x29;',
			'icon-compass' : '&#x2a;',
			'icon-map' : '&#x2b;',
			'icon-location' : '&#x2c;',
			'icon-camera' : '&#x2d;',
			'icon-images' : '&#x2e;',
			'icon-song' : '&#x2f;',
			'icon-movie' : '&#x30;',
			'icon-rocket' : '&#x31;',
			'icon-stats-up' : '&#x32;',
			'icon-globe' : '&#x33;',
			'icon-youtube' : '&#x21;',
			'icon-home' : '&#x24;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; i < els.length; i += 1) {
		el = els[i];
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c) {
			addIcon(el, icons[c[0]]);
		}
	}
};