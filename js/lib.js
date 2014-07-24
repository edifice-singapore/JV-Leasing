(function() {
  (function() {
    window.loadServerContent = function(container, action, callback, autoredirect) {
      var ajax;
      autoredirect = typeof autoredirect !== 'undefined' ? false : autoredirect;
      ajax = $.ajax({
        url: app.baseUrl + '/' + action,
        success: function(response) {
          try {
            if (typeof response === 'string') {
              if (response.search('session_expired') !== -1) {
                modLogin(function() {
                  loadServerContent(container, action, callback, autoredirect);
                });
                return;
              }
            }
          } catch (_error) {}
          $(container).html(response);
          if (callback != null) {
            callback(response);
          }
        }
      });
      return ajax;
    };
  })();

}).call(this);

(function() {
  (function() {
    window.ajaxPagination = function(_options) {
      var ajax, fn_data, fn_isloaded, fn_load, fn_loadPage, fn_next, fn_options, fn_prev, isloaded, options, setLinks, _url;
      isloaded = false;
      ajax = null;
      options = {
        loader_img: null,
        id: null,
        html: null,
        container: null,
        action: null,
        page: 1,
        data: null,
        load: true,
        sortby: null,
        callback: null
      };
      _url = function() {
        var result, _data;
        if (options.action.indexOf('?') !== -1) {
          result = "&";
        } else {
          result = "?";
        }
        result += "page=" + options.page;
        _data = fn_data();
        if (!(_data === null || _data === '')) {
          result += "&" + _data;
        }
        if (!(options.sortby === null || options.sortby === void 0 || options.sortby === '')) {
          result += "&sortby=" + options.sortby;
        }
        return result;
      };
      setLinks = function(response) {
        options = $.extend({}, options, {
          load: true
        });
        $(options.container).find('.pagination a.gotopage').click(function() {
          options.page = parseInt($(this).attr('data-page'));
          fn_loadPage();
          return false;
        });
        $(options.container).find('.pagination a.page_back, .arrow_prev').click(function() {
          fn_prev();
          return false;
        });
        $(options.container).find('.pagination a.page_next, .arrow_next').click(function() {
          fn_next();
          return false;
        });
        $(options.container).find('.sortable').click(function() {
          options.sortby = $(this).attr('data-sortby');
          fn_loadPage();
          return false;
        });
        if (options.callback != null) {
          options.callback();
        }
      };
      fn_loadPage = function() {
        var ch, cw, h, w;
        if (options.loader_img != null) {
          w = $(options.container).width();
          h = $(options.container).height();
          cw = (w / 2) - 30;
          ch = (h / 2) - 30;
        }
        if (ajax != null) {
          ajax.abort();
        }
        ajax = loadServerContent(options.container, "" + options.action + (_url()), setLinks);
        isloaded = true;
      };
      fn_prev = function() {
        options.page--;
        fn_loadPage();
      };
      fn_next = function() {
        options.page++;
        fn_loadPage();
      };
      fn_load = function(page, callback) {
        if (page == null) {
          page = 1;
        }
        options.page = page;
        fn_loadPage();
        if (callback != null) {
          callback();
        }
      };
      fn_options = function(_options) {
        if (_options != null) {
          options = $.extend({}, options, _options);
        }
        return options;
      };
      fn_isloaded = function() {
        return isloaded;
      };
      fn_data = function() {
        if (typeof options.data === "function") {
          return options.data();
        } else {
          return options.data;
        }
      };
      options = $.extend({}, options, _options);
      if (options.load) {
        if (options.html !== null) {
          $(options.container).html(options.html);
          setLinks();
        } else {
          fn_loadPage();
        }
      } else {
        setLinks(null);
      }
      return {
        refresh: fn_loadPage,
        next: fn_next,
        prev: fn_prev,
        options: fn_options,
        isLoaded: fn_isloaded,
        load: fn_load,
        data: fn_data
      };
    };
  })();

}).call(this);