(function(window,undefined){

    var Slide = function(options){

        var defaults = {

        };

        this.extend(defaults,options);

        return {

        };

    };

    Slide.prototype = {

        /**
         * Extend object a with the properties of object b.
         * If there's a conflict, object b takes precedence.
         *
         * @param {Object} a - The first object to merge
         * @param {Object} b - The second object to merge (takes precedence)
         * @api private
         */
        extend: function(a, b) {

            for (var i in b) {
                a[i] = b[i];
            }

            return a;
        }
    };

    window.Slide = Slide;

})(window,undefined);