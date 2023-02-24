// const loader = document.querySelector('.loader-site');

// window.addEventListener('load', () => {

//     loader.classList.add('fondu-out');

// })

window.addEventListener("scroll", function () {
  if (window.scrollY > 765) {
    document.querySelector("#bg-defined").style.backgroundColor = "#00214D";
  } else {
    document.querySelector("#bg-defined").style.backgroundColor = "rgba(0, 11, 26, 0.5)";
  }
  // if (window.scrollY > 800) {
  //   document.getElementById("btn-scroll").innerHTML = `
 
  //             <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
  //             <g filter="url(#filter0_d_322_1114)">
  //             <rect x="4" width="80" height="80" rx="40" fill="#00214D"/>
  //             <path d="M44.13 65.2427C29.8582 65.2427 18.2401 53.6245 18.2401 39.3527C18.2401 25.0808 29.8582 13.4627 44.13 13.4627C58.4019 13.4627 70.02 25.0808 70.02 39.3527C70.02 53.6245 58.4019 65.2427 44.13 65.2427ZM44.13 71.7151C61.9941 71.7151 76.4925 57.2168 76.4925 39.3527C76.4925 21.4886 61.9941 6.99023 44.13 6.99023C26.266 6.99023 11.7676 21.4886 11.7676 39.3527C11.7676 57.2168 26.266 71.7151 44.13 71.7151ZM40.8938 39.3527V52.2977H47.3663V39.3527H57.075L44.13 26.4077L31.1851 39.3527H40.8938Z" fill="#0083CF"/>
  //             </g>
  //             <defs>
  //             <filter id="filter0_d_322_1114" x="0" y="0" width="88" height="88" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
  //             <feFlood flood-opacity="0" result="BackgroundImageFix"/>
  //             <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
  //             <feOffset dy="4"/>
  //             <feGaussianBlur stdDeviation="2"/>
  //             <feComposite in2="hardAlpha" operator="out"/>
  //             <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
  //             <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_322_1114"/>
  //             <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_322_1114" result="shape"/>
  //             </filter>
  //             </defs>
  //             </svg>
  //     `
  // } else {
  //   document.getElementById("btn-scroll").innerHTML = `
  //     <div></div>
  //     `
  // }
  
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
