const vet = [5];
let runners = [
  {
    position: 1,
    name: "",
    time: 0,
  },
];
function atualiza() {
  recuperaCorredor = document.getElementById("corredor");
  recuperaTempo = document.getElementById("tempo");
  console.log(recuperaCorredor.value);
  console.log(recuperaTempo.value);
  runners.position = runners.position;
  console.log(runners.position);
  runners.name = recuperaCorredor.value;
  console.log(runners.name);
  runners.time = recuperaTempo.value;
  console.log(runners.time);
  vet.push(runners);
  console.log(vet);
  //console.log(vet[0]);
  //console.log(vet[0]runners[0].time);
}

//console.log(vet.runners);
