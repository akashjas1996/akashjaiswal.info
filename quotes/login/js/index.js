/* --------------------------------
 * Simple ripple effect for
 * custom checkbox and buttons.
 * Plus a simple floating label example.
 * -------------------------------- */

(function () {
	'use strict';

	/**
	 * Toggle classes.
	 */
	var IS_ANIMATING = 'is-animating';
	var IS_DIRTY = 'is-dirty';

	// @shout https://davidwalsh.name/css-animation-callback
	// @shout https://tympanus.net/codrops/?p=23217

	/**
	 * Animation end event.
	 * @return	mixed
	 */
	var whichAnimationEvent = function () {
		var a;
		var el = document.createElement('loginfakeelement');
		var animations = {
			'animation'				:'animationend',
			'OAnimation'			:'oAnimationEnd',
			'MozAnimation'		:'animationend',
			'WebkitAnimation'	:'webkitAnimationEnd'
		}

		for (a in animations) {
			if (el.style[a] !== undefined) {
				return animations[a];
			}
		}

		return flase;
	}

	/**
	 * Check if device is mobile.
	 * @return	boolean
	 */
	var mobilecheck = function () {
		var check = false;

		(function (a) {
			if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)) {
				check = true;
			}
		})(navigator.userAgent || navigator.vendor || window.opera);

		return check;
	};

	// Event type.
	var eventtype = mobilecheck() ? 'touchstart' : 'click';
	// Animation end short var.
	var animationEnd = whichAnimationEvent();
	/**
		* Toggle animation class.
		* @return	void
		*/
	var animationClassToggle = function () {
		// Add `animating` class.
		this.classList.add(IS_ANIMATING);

		// Remove `animating` class if
		// animation end is not supported.
		if ( ! animationEnd) {
			this.classList.remove(IS_ANIMATING);

			return;
		}

		// Remove `animating` class on animation end.
		animationEnd && this.addEventListener(animationEnd, function () {
			if (this.classList.contains(IS_ANIMATING)) {
				this.classList.remove(IS_ANIMATING);
			}
		});
	};

	/**
	 * Checkbox ripple event.
	 * @see checkBoxRipple	line 404 CSS
	 * @see animationClassToggle()
	 */
	[].slice.call(document.querySelectorAll('.toggle__checkbox')).forEach(function (el) {
		el.addEventListener(eventtype, animationClassToggle.bind(el));
	});

	/**
	 * Button ripple event.
	 * @see btnRipple		line 293 CSS
	 * @see animationClassToggle()
	 */
	[].slice.call(document.querySelectorAll('.btn')).forEach(function (el) {
		el.addEventListener(eventtype, animationClassToggle.bind(el));
	});

	/**
	 * Inputfields floating label.
	 */
	[].slice.call(document.querySelectorAll('.inputfield')).forEach(function (el) {
		var input = el.querySelector('.inputfield__input');
		/**
		 * Check input value.
		 * @return	void
		 */
		var checkValue = function () {
			if (input.value != '' && ! el.classList.contains(IS_DIRTY)) {
				el.classList.add(IS_DIRTY);
			} else if (input.value == '' && el.classList.contains(IS_DIRTY)) {
				el.classList.remove(IS_DIRTY);
			}
		};

		// Add `input` and `change` event listeners.
		input.addEventListener('input', checkValue);
		input.addEventListener('change', checkValue);
		// Check value on content load.
		document.addEventListener('DOMContentLoaded', checkValue);
	});

})();