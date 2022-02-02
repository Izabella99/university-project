
timer = (target, date) => {
  var target = document.querySelector(target);
  var countDownDate = new Date(date).getTime();

  setInterval(() => {
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    target.innerText =
      " Hátralevő idő:  "+days + " nap  " + hours + " óra  " + minutes + " perc  " ;

    if (distance < 0) {
      target.innerText = "Már lejárt";
    }
  }, 1000);
};

timer("#timer1", "Oct 23, 2020 23:59:59");
timer("#timer2", "Nov 1, 2020 23:59:59");
timer("#timer3", "Feb 17, 2021 23:59:59");
timer("#timer4", "Feb 18, 2021 23:59:59");
timer("#timer5", "Mar 18, 2021 23:59:59");
timer("#timer6", "May 2, 2021 23:59:59");
timer("#timer7", "Jun 10, 2021 23:59:59");
timer("#timer8", "Jun 15, 2021 23:59:59");
timer("#timer9", "Jun 29, 2021 23:59:59");