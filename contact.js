
// const Nom = document.getElementById("Nom")
// const Email = document.getElementById("Email")
// const Telephone = document.getElementById("Telephone")
// const Message = document.getElementById("Textarea")
// const form = document.getElementById('myForm');


// form.addEventListener('submit', function (e) {
//     e.preventDefault();
//     const nomComplet = Nom.value
//     const email = Email.value
//     const telephone = Telephone.value
//     const message = Message.value
//     const nomCompletSplit = nomComplet.split(" ")
//     console.log(nomCompletSplit)
//     console.log(nomCompletSplit.length)

//     if (nomCompletSplit.length < 2) {
//         document.getElementById("NomAlert").innerHTML = "veuiller entrer votre Prenom et Nom"
//         document.getElementById("TextareaAlert").innerHTML = ""

//     } else {
//         if (telephone.length != 9) {
//             document.getElementById("TextareaAlert").innerHTML = ""
//             document.getElementById("NomAlert").innerHTML = ""
//             document.getElementById("TelephoneAlert").innerHTML = "numero invalide"
//         } else {
//             if (telephone.charAt(0) != 7) {
//                 document.getElementById("TextareaAlert").innerHTML = ""
//                 document.getElementById("NomAlert").innerHTML = ""
//                 document.getElementById("TelephoneAlert").innerHTML = "numero invalide"
//             } else {
//                 if (telephone.charAt(1) != 7 && telephone.charAt(1) != 8 && telephone.charAt(1) != 6 && telephone.charAt(1) != 5 && telephone.charAt(1) != 0) {
//                     // alert("votre numero de telephone est invalide")
//                     document.getElementById("TextareaAlert").innerHTML = ""
//                     document.getElementById("NomAlert").innerHTML = ""
//                     document.getElementById("TelephoneAlert").innerHTML = "numero invalide"
//                 } else {
//                     if (message.length < 5) {
//                         // alert("votre mot de passe doit compoter au moins 8 carractere")
//                         document.getElementById("TextareaAlert").innerHTML = "votre message semble ne pas etre valide"
//                         document.getElementById("NomAlert").innerHTML = ""
//                         document.getElementById("TelephoneAlert").innerHTML = ""

//                     } else {
//                         document.getElementById("submit").classList.add("dots")
//                         document.getElementById("submit").classList.remove("btn")
//                         document.getElementById("submit").value = ""
//                         document.getElementById("submit").innerHTML = ""
//                         document.getElementById("TextareaAlert").innerHTML = ""
//                         document.getElementById("NomAlert").innerHTML = ""
//                         document.getElementById("TelephoneAlert").innerHTML = ""
//                         console.log("merci de nous avoir contacte M(me) " + nomCompletSplit[1])
//                         const data = new FormData(form);

//                         fetch('index.php', {
//                             method: 'POST',
//                             body: data
//                         })
//                             .then(response => response.text())
//                             .then(data => {
//                                 form.reset();
//                                 document.getElementById("submit").classList.add("btn");
//                                 document.getElementById("submit").value = "Envoyer";
//                                 document.getElementById("submit").classList.remove("dots");
//                                 document.getElementById("flash").classList.remove("d-none")
//                                 document.getElementById("flash-recup-name").innerHTML = nomCompletSplit[1]
//                             })
//                             .catch(error => console.error(error));
//                     }
//                 }
//             }
//         }
//     }
// });