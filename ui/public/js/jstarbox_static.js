/*
 * Copyright (c) 2011 Raphael Schweikert, http://sabberworm.com/
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

(function() {
	var dataKey = 'jstarbox_static-data';
	var eventNamespace = '.jstarbox_static';
	var defaultOptions = {
		average: 0.5,
		stars: 5,
		buttons: 5, //false will allow any value between 0 and 1 to be set
		ghosting: false,
		changeable: true, // true, false, or "once"
		autoUpdateAverage: false
	};
	var methods = {
		destroy: function() {
			this.removeData(dataKey);
			this.unbind(eventNamespace).find('*').unbind(eventNamespace);
			this.removeClass('starbox_static');
			this.empty();
		},

		getValue: function() {
			var data = this.data(dataKey);
			return data.opts.currentValue;
		},

		setValue: function(val) {
			var data = this.data(dataKey);
			var size = arguments[1] || data.positioner.width();
			var include_ghost = arguments[2];
			if(include_ghost) {
				data.ghost.css({width: ""+(val*size)+"px"});
			}
			data.colorbar.css({width: ""+(val*size)+"px"});
			data.opts.currentValue = val;
		},

		getOption: function(option) {
			var data = this.data(dataKey);
			return data.opts[option];
		},

		setOption: function(option, value) {
			var data = this.data(dataKey);

			if(option === 'changeable' && value === false) {
				data.positioner.triggerHandler('mouseleave');
			}

			data.opts[option] = value;

			if(option === 'stars') {
				data.methods.update_stars();
			} else if(option === 'average') {
				this.starbox_static('setValue', value, null, true);
			}
		},

		markAsRated: function() {
			var data = this.data(dataKey);
			data.positioner.addClass('rated');
		}
	};
	jQuery.fn.extend({
		starbox_static: function(options) {
			if(options.constructor === String && methods[options]) {
				return methods[options].apply(this, Array.prototype.slice.call(arguments, 1)) || this;
			}
			options = jQuery.extend({}, defaultOptions, options);
			this.each(function(count) {
				var element = jQuery(this);

				var opts = jQuery.extend({}, options);
				var data = {
					opts: opts,
					methods: {}
				};
				element.data(dataKey, data);

				var positioner = data.positioner = jQuery('<div/>').addClass('positioner');

				var stars = data.stars = jQuery('<div/>').addClass('stars').appendTo(positioner);
				var ghost = data.ghost = jQuery('<div/>').addClass('ghost').hide().appendTo(stars);
				var colorbar = data.colorbar = jQuery('<div/>').addClass('colorbar').appendTo(stars);
				var star_holder = data.star_holder = jQuery('<div/>').addClass('star_holder').appendTo(stars);

				element.empty().addClass('starbox_static').append(positioner);
				data.methods.update_stars = function() {
					star_holder.empty();
					for(var i=0;i<opts.stars;i++) {
						var star = jQuery('<div/>').addClass('star').addClass('star-'+i).appendTo(star_holder);
					}
					// (Re-)Set initial value
					methods.setOption.call(element, 'average', opts.average);
				};
				data.methods.update_stars();

			});
			return this;
		}
	});
})();

jQuery(function() {
		jQuery('.starbox_static').each(function() {
			var starbox_static = jQuery(this);
			starbox_static.starbox_static({
				average: starbox_static.attr('data-start-value'),
				changeable: starbox_static.hasClass('unchangeable') ? false : starbox_static.hasClass('clickonce') ? 'once' : true,
				ghosting: starbox_static.hasClass('ghosting'),
				autoUpdateAverage: starbox_static.hasClass('autoupdate'),
				buttons: starbox_static.hasClass('smooth') ? false : starbox_static.attr('data-button-count') || 5,
				stars: starbox_static.attr('data-star-count') || 5
			}).bind('starbox_static-value-changed', function(event, value) {
				if(starbox_static.hasClass('random')) {
					var val = Math.random();
					starbox_static.next().text(val);
					return val;
				} else {
					var total = value * 5;
					starbox_static.next().text(total);
				}
			}).bind('starbox_static-value-moved', function(event, value) {
				var total = value * 5;
				starbox_static.next().text(total);
			});
		});
	});