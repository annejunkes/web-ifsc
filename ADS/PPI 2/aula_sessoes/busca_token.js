async function buscarDadosComToken() {
  const token = "exemplo-token-didatico";

  const resposta = await fetch(
    "https://api.exemplo.com/dados",
    {
      method: "GET",
      headers: {
        "Authorization": "Bearer " + token
      }
    }
  );
  const dados = await resposta.json();

  console.log(dados);
}