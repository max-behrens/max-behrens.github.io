const header = document.querySelector("header");
const sectionOne = document.querySelector(".home-intro");

const sectionOneOptions = {
  rootMargin: "-200px 0px 0px 0px"
};

const sectionOneObserver = new IntersectionObserver(function(
  entries,
  sectionOneObserver
) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      header.classList.add("nav-scrolled");
    } else {
      header.classList.remove("nav-scrolled");
    }
  });
},
sectionOneOptions);

sectionOneObserver.observe(sectionOne);


var i = 0;
var txt = "Software Developer and Mathematics Teacher";
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("subtitle").innerHTML += txt.charAt(i);
	
    i++;
    setTimeout(typeWriter, speed);
  }
}


typeWriter();




