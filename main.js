document.addEventListener("DOMContentLoaded", () => {
   let activeNews = 1;

   const button1 = document.querySelector(".button-1");
   const button2 = document.querySelector(".button-2");

   const news1 = document.querySelector(".news-1");
   const news2 = document.querySelector(".news-2");

   const width = window.innerWidth;

   gsap.set(news2, { x: -width });

   button1.addEventListener("click", () => {
       console.log(activeNews);
        if(activeNews === 2) {

            gsap.fromTo(news2, { x: 0 }, { x: width, duration: 1 });
            gsap.fromTo(news1, { x: -width }, { x: 0, duration: 1 });

            button1.style.opacity = "1";
            button2.style.opacity = ".5";

            /*
            news1.classList.add("news-active");
            news2.classList.remove("news-active");

             */
            activeNews = 1;
        }
   });

   button2.addEventListener("click", () => {
       console.log(activeNews);
      if(activeNews === 1) {
          /* news1.classList.remove("news-active");
          news2.classList.add("news-active");

          */

          gsap.fromTo(news1, { x: 0 }, { x: width, duration: 1 });
          gsap.fromTo(news2, { x: -width }, { x: 0, duration: 1 });

          button2.style.opacity = "1";
          button1.style.opacity = ".5";

          activeNews = 2;
      }
   });

});