

 //for Date
let dateToday = document.getElementById("current_date");
let today = new Date();
let week = today.getDay();
let day = `${today.getDate() < 10 ? "0" : ""}${today.getDate()}`;
let month = today.getMonth();
let year = today.getFullYear();

      let monthname = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
      let weekn = [ "Sun.", "Mon.", "Tue.", "Wed.", "Thu.", "Fri.", "Sat."];
      let weekend = [weekn[week]];
      let monthss = [monthname[month]];
     
dateToday.textContent = `${weekend} ${monthss} ${day}, ${year}`
