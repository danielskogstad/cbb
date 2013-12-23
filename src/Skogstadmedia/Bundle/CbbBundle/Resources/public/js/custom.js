// Onepage Nav adjust speed 
     $('#top-nav').onePageNav({
         scrollSpeed: 1200,
         currentClass: 'active',
         changeHash: true,
         filter: ':not(.external)'
         });


    
//  animate css + jquery inview 
  jQuery('#myTabContent').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.tab-pane').addClass("animated fadeIn");

            
        }else{
            jQuery('.tab-pane').removeClass("animated fadeIn");

            //jQuery('.effect-box').unbind('inview');
        }
    });

  //  animate css + jquery inview configuration  
  jQuery('.section-box').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.icon').addClass("animated fadeInDown");

            
        }else{
            jQuery('.icon').removeClass("animated fadeInDown");

            //jQuery('.effect-box').unbind('inview');
        }
    });

//  animate css + jquery inview configuration 
  jQuery('#news').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.news-pic').addClass("animated fadeInRightBig");

            
        }else{
            jQuery('.news-pic').removeClass("animated fadeInRightBig");

            //jQuery('.effect-box').unbind('inview');
        }
    });

//  animate css + jquery inview configuration
  jQuery('#pricing').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.pricing-table').addClass("animated fadeInDown");

            
        }else{
            jQuery('.pricing-table').removeClass("animated fadeInDown");

            //jQuery('.effect-box').unbind('inview');
        }
    });



// Javascript to enable link to tab
var hash = document.location.hash;
var prefix = "tab_";

if (hash) {
    hash = hash.replace(prefix,'');
    var hashPieces = hash.split('?');
    activeTab = $('.nav-tabs a[href=' + hashPieces[0] + ']');
    activeTab && activeTab.tab('show');
} 

// Change hash for page-reload
$('.nav-tabs a').on('shown', function (e) {
    window.location.hash = e.target.hash.replace("#", "#" + prefix);
});
