var singlePageNextPost = (function($){
    return {
        singleNextPost: function() {
            $(window).scroll(function () {
                var footerPos = $('footer').last().position().top;
                var pos = $(window).scrollTop();
                // Load next article
          if (pos+(screen.height*4) > footerPos) {
            if ($(".centil-infinite-scroll").first().hasClass('working')) {
                return false;
            } else {
                $(".centil-infinite-scroll").first().addClass('working');
            }

            var centilNextPostId = $(".centil-infinite-scroll").first().text();
            var ajaxurl = $(".centil-infinite-scroll").data('url');
            var data = {
                'action': 'centil_is',
                'centilNextPostId': centilNextPostId
            };
            // $.ajax({
            //     url: ajaxurl,
            //     type : 'post',
            //     data : {
            //         centilNextPostId: centilNextPostId,
            //         action : 'centil_is'
            //     },
            //     error : function( response ){
            //         console.log(response);
            //     },
            //     success : function (response) {
            //         $(".centil-infinite-scroll").first().replaceWith(response);
            //     }
            // });
            // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
            $.post(ajaxurl, data, function(response) {
                $(".centil-infinite-scroll").first().replaceWith(response);
            }, 'html');
        }

        // Update new URL
        var currUrl = $(".centil-post-header").first().attr("url");
        var currTitle = $(".centil-post-header").first().attr("title");

        if ($(".centil-post-header").length > 1 && history.pushState) {
            for (var i=0; i<$(".centil-post-header").length; i++) {
                if (pos+(screen.height/2) >= $(".centil-post-header").eq(i).next().position().top) {
                    currUrl = $(".centil-post-header").eq(i).attr("url");
                    currTitle = $(".centil-post-header").eq(i).attr("title");
                }
            }
        }
           if (location.href != currUrl) {
               history.pushState({}, currTitle, currUrl);
        }

            });
        },

        init: function(){
            this.singleNextPost();
        }
    }
})(jQuery);

singlePageNextPost.init();