/* var resposta = confirm("Deseja excluir?");

console.log(resposta); */

/* var a = 10;
var b = 33;

alert (a + b); */

const a = 10;
const b = 33;


function somar(a, b) {
   return a + b;
}

/* console.log(somar(2, 5)) */

document.querySelector("#calcular").addEventListener("click", function () {
   let valorA = document.querySelector("#valorA").value;
   let valorB = document.querySelector("#valorB").value;
   if (valorA.lenght > 0 || valorB.lenght > 0) {
      alert(parseInt(valorA) + parseInt(valorB));
   } else {
      alert("Digite um número");
   };
})