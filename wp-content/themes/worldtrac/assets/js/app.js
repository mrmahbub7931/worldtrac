(function ($) {
    "use strict";
    $('.navbar-menu .menu-item-has-children').hover(function() {
        $(this).find('.sub-menu').first().stop(true, true).delay(250).slideDown();
    }, function() {
        $(this).find('.sub-menu').first().stop(true, true).delay(100).slideUp();
    });
    
    $('.right-menu-nav .menu-item-has-children').hover(function() {
        $(this).find('.sub-menu').first().stop(true, true).delay(250).slideDown();
    }, function() {
        $(this).find('.sub-menu').first().stop(true, true).delay(100).slideUp();
    });

    var mainMenu,mainMenuWdith, mainMenuChildren,mainMenuChildrenParent, mChildrenWidth = 0;
    
    mainMenu = document.querySelector('#main-navbar');
    if (mainMenu) {
        mainMenuChildrenParent = document.querySelectorAll('#main-navbar #navbar-menu');
        mainMenuChildren = document.querySelectorAll('#main-navbar #navbar-menu li');
        mainMenuWdith = mainMenu.clientWidth;
        mainMenuChildren = Array.prototype.slice.call(mainMenuChildren);

        for (var i = 0; i < mainMenuChildren.length; i++) {
            mChildrenWidth += mainMenuChildren[i].offsetWidth;
        }

        if (mainMenuChildren.length > 4) {
            var ul = $('<ul class="sub-menu"/>').append(mainMenuChildren.slice(4));
            ul.wrap('<li class="menu-item-has-children" />').parent().appendTo(mainMenuChildrenParent).prepend("<a href='#'>More</a>");
    
            $('.navbar-menu .menu-item-has-children').hover(function() {
                $(this).find('.sub-menu').first().stop(true, true).delay(250).slideDown();
            }, function() {
                $(this).find('.sub-menu').first().stop(true, true).delay(100).slideUp();
            });
        }
    }
    
    
    
    // mobile menu
    $('.navbar-menu').clone().appendTo("#mNav");
    $('.mobile_menu .menu-item-has-children').hover(function() {
        $(this).find('.sub-menu').first().stop(true, true).delay(250).slideDown();
    }, function() {
        $(this).find('.sub-menu').first().stop(true, true).delay(100).slideUp();
    });



    $(document).ready(function () {
        $('div#main-navbar > ul').css({ "opacity": "1", "z-index": "3" });
        $('.blog-featured-parent').css({"opacity": "1"});
        var singleItem = $('.blog-featured-parent .single-featured-news');
        if (singleItem.length) {
    
            if (singleItem.length > 1) {
    
                var divVideo = $('<div class="single-featured-news-child"/>').append(singleItem.slice(1));
    
                divVideo.wrap('<div class="single-featured-news-right" />').parent().appendTo('.blog-featured-parent')
    
            }
    
            if (document.querySelector('.single-featured-news-child')) {
    
                var singleVideoList = document.querySelector('.single-featured-news-child').children;
                var singleVideo = Array.prototype.slice.call(singleVideoList);
                singleVideo.forEach(e => {
                    e.classList.remove('single-featured-news');
                    e.classList.add('single-featured-news-right');
    
                });
            }
    
        }
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.worldtrac_navbar > .header-bottom').addClass('sticky');
            $('.worldtrac_navbar > .header-bottom').css({"position" : "fixed","width" : "100%", "top" : "-100%"});
        }else {
            $('.worldtrac_navbar > .header-bottom').removeClass('sticky');
            $('.worldtrac_navbar > .header-bottom').css({"position" : "relative"});
        }
    });

    // append child item to parent div video section

    $('#next_post').on("click", load_next_posts);
    $('#author_post_btn').on("click", load_author_posts);
    function load_author_posts(){
        var that, page,author, newpage,ajaxurl;
        that = $('#author_post_btn');
        page = that.data('page');
        author = that.data('author');
        newpage = page + 1;
        ajaxurl = that.data('url');
        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                page: page,
                action: 'load_author_posts_ajax',
                author: author
            },
            success: function (response) {
                that.data('page',newpage);
                if (response) {
                    $('#author_post_btn img').removeClass('none');
                    that.css({"background" : "#171717","transition" : "0.5s ease-in-out"});
                    setTimeout(() => {
                        $('.single-author-post-wrap').append(response);
                        $('#author_post_btn img').addClass('none');
                        that.css({"background" : "#dC0000","transition" : "0.5s ease-in-out"});
                    }, 1000);
                } else {
                    
                    that.html("No more post!");
                }
            }
        });
    }

    function load_next_posts() {
        var that, page, newpage,ajaxurl;
        that = $('#next_post');
        page = that.data('page');
        newpage = page + 1;
        ajaxurl = that.data('url');
        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                page: page,
                action: 'load_next_posts_ajax'
            },
            success: function (response) {
                that.data('page',newpage);
                if (response) {
                    var wrap = $('.single-posts-wrap').html(response);
                    // wrap.html(response);
                }
                console.log(response);
            }
        });
    }

})(jQuery)