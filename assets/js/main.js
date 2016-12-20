//CHANGER LA HAUTREUR DE LA NAVBAR EN FONCTION DE LA POSITION DU SCROLL
  /*  $(window).scroll(function() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });*/





//CAROUSSEL
    $(document).ready(function(){
        // setup your carousels as you normally would using JS
        // or via data attributes according to the documentation
        // http://getbootstrap.com/javascript/#carousel
        $('#carousel123').carousel({ interval: false });
    });

    $(document).ready(function(){
        $('.carousel-showsixmoveone .item').each(function(){
            var itemToClone = $(this);

            for (var i=1;i<6;i++) {
                itemToClone = itemToClone.next();

                // wrap around if at end of item collection
                if (!itemToClone.length) {
                    itemToClone = $(this).siblings(':first');
                }

                // grab item, clone, add marker class, add to collection
                itemToClone.children(':first-child').clone()
                    .addClass("cloneditem-"+(i))
                    .appendTo($(this));
            }
        });
    });




//MENU BURGER
    $(document).ready(function() {
      	$('.menu-icon').click(function(e){
        		e.preventDefault();
        		$this = $(this);
        		if($this.hasClass('is-opened')){
        			   $this.addClass('is-closed').removeClass('is-opened');
        		}
        		else{
        			   $this.removeClass('is-closed').addClass('is-opened');
        		}
      	})
    });


    //PROGRAMMATION
        $(document).ready(function() {
            $('.btn-control').click(function(e){
                e.preventDefault();
                $this = $('#menu-controls');
                if($this.hasClass('is-opened')){
                     $this.addClass('is-closed').removeClass('is-opened');
                }
                else{
                     $this.removeClass('is-closed').addClass('is-opened');
                }
            })
        });
