(function($) {
  if ($ && !/touch|tablet|mobile|phone|android|iphone|ipad|blackberry/i.test(window.navigator.userAgent)) {
    $.preload({
      forward: $.pjax.follow,
      check: $.pjax.getCache,
      encode: true,
      ajax: {
        timeout: 2000,
        success: function ( data, textStatus, XMLHttpRequest ) {
          !$.pjax.getCache( this.url ) && $.pjax.setCache( this.url, null, textStatus, XMLHttpRequest );
        }
      }
    });

    $.pjax({
      area: 'body',
      scope: {
        '/': ['/', '!/wp-login.php', '!/wp-admin/']
      },
      load: {
        head: 'base, meta, link',
        css: true,
        script: true
      },
      cache: { click: true, submit: false, popstate: true },
      speedcheck: true
    });

    $(document).bind('pjax:ready', function() {$(document).trigger('preload');});
  }
})(jQuery);
