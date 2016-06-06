(function(){
    "use strict";

    var planetsString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";
    var planetsArray = planetsString.split('|');

    // TODO: Convert planetsString to an array, save it to planetsArray.

    console.log(planetsArray);

    // TODO: Create a string with <br> tags between each planet. console.log() your results.
    //       Why might this be useful?

    var planetsStringBreaks = planetsArray.join('<br>');
    console.log(planetsStringBreaks);

    // Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.

    for (var i = 0; i <= 7; i++) {
        planetsArray.splice(i * 2, 0, '<li>');
    }
    
    planetsArray.unshift('<ul>');
    planetsArray.push('</ul>');
    
    var planetsStringUL = planetsArray.join('');
    console.log(planetsStringUL);

})();
