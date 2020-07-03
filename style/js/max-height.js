jQuery.fn.setAllToMaxHeight = function(){
    return this.css({ 'height' : '' }).height( Math.max.apply(this, jQuery.map( this , function(e){ return jQuery(e).height() }) ) );
}