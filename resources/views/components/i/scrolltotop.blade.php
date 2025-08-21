<button onclick="scrollToTop()" id="scrollToTopBtn" class="fixed bottom-10 right-10 z-50 backdrop-blur-sm bg-white/20 hover:bg-white/40 rounded-full size-10 text-xl" title="Go to top">↑</button>

<script>    
    window.scrollFunction = f => {
      var scrollToTopBtn = document.getElementById("scrollToTopBtn");
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopBtn.style.display = "block";
      } else {
        scrollToTopBtn.style.display = "none";
      }
    };

    window.onscroll = f => scrollFunction();
    
    window.scrollToTop = f => {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    };
    </script>
