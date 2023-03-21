export default function cities(stateElement,cityAndStatesElement,cityElement){
  stateElement.addEventListener("change", async () => {
    cityAndStatesElement.classList.remove("cityState");
    cityAndStatesElement.classList.remove("cityStateSpouse");
    cityAndStatesElement.classList.remove("cityStateExSpouse");

    //Usamos o cityElement.length = 0 para recarregar as cidades sempre que o estado for alterado
    cityElement.length = 0;
    const urlCyty =
      "https://servicodados.ibge.gov.br/api/v1/localidades/estados/" +
      stateElement.value +
      "/municipios";
    const request = await fetch(urlCyty);
    const response = await request.json();
    for (let citiesAll of response) {

      cityElement.innerHTML += `
        <option>${citiesAll.nome}</option>
        `;
    }
  });
}
