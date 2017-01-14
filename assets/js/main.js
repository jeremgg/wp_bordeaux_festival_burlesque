//CHANGER LA HAUTREUR DE LA NAVBAR EN FONCTION DE LA POSITION DU SCROLL
  /*  $(window).scroll(function() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });*/





//CAROUSSEL
    // $(document).ready(function(){
    //     // setup your carousels as you normally would using JS
    //     // or via data attributes according to the documentation
    //     // http://getbootstrap.com/javascript/#carousel
    //     $('#carousel123').carousel({ interval: false });
    // });
    //
    // $(document).ready(function(){
    //     $('.carousel-showsixmoveone .item').each(function(){
    //         var itemToClone = $(this);
    //
    //         for (var i=1;i<6;i++) {
    //             itemToClone = itemToClone.next();
    //
    //             // wrap around if at end of item collection
    //             if (!itemToClone.length) {
    //                 itemToClone = $(this).siblings(':first');
    //             }
    //
    //             // grab item, clone, add marker class, add to collection
    //             itemToClone.children(':first-child').clone()
    //                 .addClass("cloneditem-"+(i))
    //                 .appendTo($(this));
    //         }
    //     });
    // });




//MENU BURGER
    jQuery(document).ready(function() {
      	jQuery('.menu-icon').click(function(e){
        		e.preventDefault();
        		$this = jQuery(this);
        		if($this.hasClass('is-opened')){
        			   $this.addClass('is-closed').removeClass('is-opened');
        		}
        		else{
        			   $this.removeClass('is-closed').addClass('is-opened');
        		}
      	})
    });


    //PROGRAMMATION
        jQuery(document).ready(function() {
            jQuery('.btn-control').click(function(e){
                e.preventDefault();
                $this = jQuery('#menu-controls');
                if($this.hasClass('is-opened')){
                     $this.addClass('is-closed').removeClass('is-opened');
                }
                else{
                     $this.removeClass('is-closed').addClass('is-opened');
                }
            })

            jQuery('#filters li a').click(function(e){
                e.preventDefault();
                $this = jQuery('#menu-controls');
                if($this.hasClass('is-opened')){
                     $this.addClass('is-closed').removeClass('is-opened');
                }
            })



            jQuery('#filters li:nth-child(2)').before("<li class='logo'><div class='left'></div><div class='image'><img src='/wp-content/uploads/2017/01/goussettransparent.gif' class='img-responsive'/></div><div class='right'></div></li>");
            jQuery('#filters li:nth-child(5)').before("<li class='logo logo2'><div class='left'></div><div class='image'><img src='/wp-content/uploads/2017/01/eventailtransparent.gif' class='img-responsive'/></div><div class='right'></div></li>");

            jQuery('ngg-album-link a').before("<p>test</p>");


        });
