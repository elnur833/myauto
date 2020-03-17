$('.card-like-icon').click(function(){
	$(this).toggleClass('liked');
});


$(document).ready(function() {

  $('.main_bloq_section .main_blog_cats a').on('click', function(e) {
    var currentNewsValue = $(this).attr('href');
       
            $('.mainblogtab').hide();
            $(currentNewsValue).fadeIn(500);
        
    
    $(this).addClass('active').siblings().removeClass('active');
    e.preventDefault();
 });
 });



$(document).ready(function() {

  $('.blog_page_cat_links a').on('click', function(e) {
    var currentNewsValue = $(this).attr('href');
        if(currentNewsValue=='.mbcat_all'){
            $('.blog_cat').show();
        
        }else{
            $('.blog_cat').hide();
            $(currentNewsValue).fadeIn(500);
        }
    
    $(this).addClass('active').siblings().removeClass('active');
    e.preventDefault();
  });
  });


$(document).ready(function(){
     var $tabs =  $('.profile_has_submenu>a').click(function(event){
          $('.profile_submenu').slideUp();
          $(this).next('.profile_submenu').stop().slideToggle();
          var $parent = $(this);       
          if ($parent.is('.opened')) {
              $parent.removeClass('opened');
              $tabs.removeClass('opened');
              return;
          }
          
          $tabs.removeClass('opened');
          $parent.addClass("opened");
      });
  });


/*wishlist remove*/
$('.wishlist_remove').click(function(){
    $(this).parent('.wishlist_box').remove();
});
/*wishlist remove*/

/*show/hide password*/
$(document).ready(function() {

  $(".show_pass, .hide_pass").on('click', function() {
    var passwordId = $(this).parents('.form-group').find('input');
    if ($(this).hasClass('show_pass')) {
      passwordId.attr("type", "text");
      $(this).parent().find(".show_pass").hide();
      $(this).parent().find(".hide_pass").show();
    } else {
      passwordId.attr("type", "password");
      $(this).parent().find(".hide_pass").hide();
      $(this).parent().find(".show_pass").show();
    }
  });
});


/*show/hide password*/

/* blog inner slider */

 $('.ei_slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.ei_slider_thumbs'
    });
    $('.ei_slider_thumbs').slick({
      slidesToShow: 5,
      slidesToScroll: 5,
      asNavFor: '.ei_slider',
      dots: false,
      infinite: true,
      arrows: false,
      centerMode: false,
      variableWidth: true,
      focusOnSelect: true,
       responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 550,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 430,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    });
  /* blog inner slider */


/*popup*/

$('.popup_btn').magnificPopup({
  removalDelay: 500, //delay removal by X to allow out-animation
  callbacks: {
    beforeOpen: function() {
       this.st.mainClass = this.st.el.attr('data-effect');
    }
  },
  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
});

/* chosen select*/

$(".chosen-select").chosen();

/* chosen select end*/

/* color checkbox */

var cat_colors = $(".cat_colors input");
for(var i = 0; i < cat_colors.length; i++){
   var cat_color = $(cat_colors[i]).attr('data-color');
   
   $(cat_colors[i]).css('background-color' , cat_color);
} 

/* color checkbox end */

/**/

$('.colorbox_open').click(function(){
  $('.cat_colors').toggleClass('colorbox_dropdown');
});


$('.vip_popup ul li').click(function(){
  $('.vip_popup ul li').removeClass('active');
  $(this).addClass('active');
});


/* message sender colors*/
var message_colors = $(".message_sender");
for(var i = 0; i < message_colors.length; i++){
   var message_color = $(message_colors[i]).attr('data-background');
   
   $(message_colors[i]).children('.message_count').css('background-color' , message_color);
   $(message_colors[i]).children('.message_sender_img').css('color' , message_color);
} 

/* message senders color end*/

/* advanced search */

$(document).ready(function(){
  $('.forms_show_more').click(function(){
    $('.advanced_search_container').addClass('open');
    $(this).hide();
    $('.forms_show_less').show();
  });

  $('.forms_show_less').click(function(){
    $('.advanced_search_container').removeClass('open');
    $(this).hide();
    $('.forms_show_more').show();
    $("html, body").animate({ scrollTop: 0 }, "slow");
  });
});

/* advanced search end*/




/*elan yerlesdir tab*/

$(document).ready(function() {

  $('.add_card_type_links a').on('click', function(e) {
    var currentTypeValue = $(this).attr('href');
    
        $('.elan_yerlesdir_forms').hide();
        $(currentTypeValue).fadeIn(500);
    
    $(this).parent('div').addClass('active').siblings().removeClass('active');
    e.preventDefault();

    $('.advanced_search_container').removeClass('open');
    $('.forms_show_less').hide();
  });
  });

  $(document).ready(function() {

    $('.main_filter_tabs a').on('click', function(e) {
      var currentTypeValue = $(this).attr('href');
      
          $('.main_banner_tab').hide();
          $(currentTypeValue).fadeIn(500);
      
      $(this).addClass('active').siblings().removeClass('active');
      e.preventDefault();
  
      $('.advanced_search_container').removeClass('open');
      $('.forms_show_less').hide();
    });
    });

/*elan yerlesdir tab*/

$(".shop_price_range").ionRangeSlider({
  
  grid: false,
  min: 0,
  max: 500000,
  from: 200000,
  to: 500000,
  
});

$('[data-fancybox="gallery"]').fancybox({
  thumbs : {
    autoStart : true,
    axis      : 'x'
  }
});

$('.floating-select').change(function(){
  var val = $(this).val();
  if( $(this).val() ) {
    $(this).next('.animate_label').addClass('animate_select_label');
  } else {
    $(this).next('.animate_label').removeClass('animate_select_label');
  }
});


$('.menu_open').click(function(){
  $('.mega_menu').fadeToggle(200);
  $(this).toggleClass('menu_close');
});

$('.menu_open').click(function(e){
  e.stopPropagation();
});

$('.mega_menu').click(function(e){
e.stopPropagation();
});

$(document).click(function() {

$('.mega_menu').fadeOut(200);
$('.menu_open').removeClass('menu_close');
});


