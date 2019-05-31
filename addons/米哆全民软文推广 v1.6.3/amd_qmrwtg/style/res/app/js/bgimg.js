(function( window, undefined ) {
    "use strict";
    var _loadImgNodes;
    var auiLazyload = function(params) {
        this.errorImage = params.errorImage||false;
        this._init(params);
    };
    auiLazyload.prototype = {
        _init: function(params) {
            var self = this;
            _loadImgNodes = document.querySelectorAll('[data-src]');
            self._judgeImages();
            window.addEventListener('scroll', function(){
                _loadImgNodes = document.querySelectorAll('[data-src]');
                self._judgeImages();
            }, false);
        },
        _judgeImages:function() {
            var self = this;
            if(_loadImgNodes.length){
                for(var i = 0;  i < _loadImgNodes.length; i++){
                    if (_loadImgNodes[i].getBoundingClientRect().top < window.innerHeight) {
                        self._loadImage(_loadImgNodes[i]);
                    }
                }
            }
        },
        _loadImage:function(el){
            var self = this;
            var img = new Image();
            img.src = el.getAttribute('data-src');

            var elw=el.offsetWidth*2;

            var src=el.getAttribute('data-src')+'?x-oss-process=image/resize,w_'+elw;

            el.style.backgroundImage = "url("+src+")";

        
            el.removeAttribute("data-src");
            // // 图片加载失败
            img.onerror = function() {
                var bg= self.errorImage || el.getAttribute('src');
                 el.style.backgroundImage = "url("+bg+")";
                el.removeAttribute("data-src");
            };
        }
    }
    window.auiLazyload = auiLazyload;
})(window);
