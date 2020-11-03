const toggleNavigation = () => {
  const
    navToggle = document.getElementById( "nav-toggle" ),
    navPrimary = document.getElementById( "nav-primary" )
  ;

  navToggle.addEventListener("click", () => {
    navPrimary.classList.toggle( "is-hidden" );
  }, false);
}

toggleNavigation();

const ewHorizontalScroll = () => {
  let
    scrollMax,
    scrollNum = 0,
    featuredSlider = document.getElementById("featured-slider")
  ;

  document.addEventListener("wheel", function (e) {
    if ( window.innerWidth > 680 ) {

      scrollMax = featuredSlider.scrollWidth - featuredSlider.clientWidth;
      if (scrollNum + e.deltaX + e.deltaY >= 0 && scrollNum + e.deltaX + e.deltaY <= scrollMax) {
        scrollNum += e.deltaX + e.deltaY;
        featuredSlider.scrollLeft = scrollNum;
      }

    }

  }, false, { passive: true });
}

ewHorizontalScroll();