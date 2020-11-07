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

   /* Our team */
   const ourTeam = document.querySelector(".team-slider-container");

   const next = document.querySelector(".team-slider-next");
   const previous = document.querySelector(".team-slider-previous");

   let move;

   if(width > 1600) {
       move = 350;
   }
   else if(width > 900) {
       move = 310;
   }
   else {
       move = 290;
   }

   previous.addEventListener("click", () => {
       ourTeam.scrollBy({
           left: -move,
           behavior: "smooth"
       });
   });

   next.addEventListener("click", () => {
       ourTeam.scrollBy({
           left: move,
           behavior: "smooth"
       });
   });

   /* Team stats */
   let first = true;
   const teamStats = document.querySelector(".stats-main");

   const gamesPlayed = document.querySelector(".games-played-number");
   const goalsScored = document.querySelector(".goals-scored-number");
   const goalsConceded = document.querySelector(".goals-conceded-number");
   const points = document.querySelector(".points-number");

   const numberGamesPlayed = gamesPlayed.textContent;
   const numberGoalsScored = goalsScored.textContent;
   const numberGoalsConceded = goalsConceded.textContent;
   const numberPoints = points.textContent;

   window.addEventListener("scroll", () => {
      if((isScrolledIntoView(teamStats))&&(first)) {
          first = false;
          let i = 0, j = 0, k = 0, l = 0;
          const ivl1 = setInterval(() => {
              if(i<numberGamesPlayed) {
                  i++;
                  gamesPlayed.textContent = i.toString();
              }
              else {
                  clearInterval(ivl1);
              }
          }, 50);
          const ivl2 = setInterval(() => {
              if(j<numberGoalsScored) {
                  j++;
                  goalsScored.textContent = j.toString();
              }
              else {
                  clearInterval(ivl2);
              }
          }, 50);
          const ivl3 = setInterval(() => {
              if(k<numberGoalsConceded) {
                  k++;
                  goalsConceded.textContent = k.toString();
              }
              else {
                  clearInterval(ivl3);
              }
          }, 50);
          const ivl4 = setInterval(() => {
              if(l<numberPoints) {
                  l++;
                  points.textContent = l.toString();
              }
              else {
                  clearInterval(ivl4);
              }
          }, 50);
      }
   });

    function isScrolledIntoView(el) {
        const rect = el.getBoundingClientRect();
        const elemTop = rect.top;
        const elemBottom = rect.bottom;
        let isVisible;

        // Only completely visible elements return true:
        //const isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
        // Partially visible elements return true:
        isVisible = elemTop < window.innerHeight && elemBottom >= 0;
        return isVisible;
    }

});