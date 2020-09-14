const btnNext = document.getElementById("next");
const displayJokes = document.querySelector(".jokes");
/** Função que carrega a API */
function fetchJokes() {
  fetch("https://api.chucknorris.io/jokes/random")
    .then((r) => r.json())
    .then((piada) => {
      displayJokes.innerText = piada.value;
    });
}
/**evento para atualizar uma nova piada */
btnNext.addEventListener("click", fetchJokes);

fetchJokes();
