document.addEventListener("DOMContentLoaded", () => {
   let activeNews = 1;

   const width = window.innerWidth;
	
	/* Upcoming matches */
   const nextMatch = document.querySelector(".next-match");
   const previousMatch = document.querySelector(".previous-match");
   const matchesContainer = document.querySelector(".upcoming-matches-scroll");

   nextMatch.addEventListener("click", () => {
       console.log("next");
      matchesContainer.scrollBy({
         left: moveMatch,
         behavior: "smooth"
      });
   });

   previousMatch.addEventListener("click", () => {
      matchesContainer.scrollBy({
          left: -moveMatch,
          behavior: "smooth"
      });
   });

   if(width > 1600) {
       moveMatch = 350;
   }

   /* Our team */
   const ourTeam = document.querySelector(".team-slider-container");

   const next = document.querySelector(".team-slider-next");
   const previous = document.querySelector(".team-slider-previous");

   let move;

   if(width > 1600) {
       move = 350;
   }
   else if(width > 900) {
       move = 350;
   }
   else {
       move = window.innerWidth * 0.7;
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
	
	console.log("jestem");

});