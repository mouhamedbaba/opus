const loader = document.getElementById("load");

window.addEventListener('Load', () => {
  loader.classList.remove('d-none');
});



window.addEventListener("scroll", function () {
  if (window.scrollY > 765) {
    document.querySelector("#bg-defined").style.backgroundColor = "#00214D";
  } else {
    document.querySelector("#bg-defined").style.backgroundColor = "rgba(0, 11, 26, 0.5)";
  }
  if (window.scrollY > 900) {
    document.getElementById("btn-scroll").classList.remove("d-none")
  } else {
    document.getElementById("btn-scroll").classList.add("d-none")
  }

});

let texts = ["Un gain de temps significatif", "Des coûts réduits", "Une flexibilité incomparable", "Une meilleure qualité"];
let index = 0;

function typeText() {
  if (index < texts.length) {
    document.getElementById("text-slide").innerHTML = texts[index];
    index++;
    setTimeout(typeText, 3000);
  } else {
    index = 0;
    setTimeout(typeText, 3000);
  }
}

typeText();


