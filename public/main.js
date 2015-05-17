import {Package} from 'core/package';

import {nls} from './nls/strings';

	/** 
     * Contact package
     * @class
     */
	export default class Contact extends Package
	{			
		/**
		 * Autoloading hook
		 * @constructs Contact
		 * @param {object} element - HTML element the package is tied to in the DOM.
		 * @param {object} options - JSON string of options passed from the data-options attribute.
		 */
        constructor(element, options = {})
        {
        	let resources = {nls}
        	super(element, options, resources);
        }
	}