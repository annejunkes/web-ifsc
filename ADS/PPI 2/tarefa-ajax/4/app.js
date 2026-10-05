const form = document.querySelector("#formTitulo");
const mensagem = document.querySelector("#mensagem");

form.addEventListener("submit", async (evento) => {
  evento.preventDefault();

  const botao = form.querySelector("button");
  botao.disabled = true;
  botao.textContent = "Salvando...";
  mensagem.textContent = "";

  const dados = {
    titulo: form.titulo.value.trim(),
    descricao: form.descricao.value.trim()
  };

  try {
    const resposta = await fetch("salvar.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(dados)
    });

    const retorno = await resposta.json();

    if (!retorno.ok) {
      mensagem.textContent = retorno.mensagem;
      return;
    }

    form.reset();
    mensagem.textContent = retorno.mensagem;
  } catch (erro) {
    mensagem.textContent = "Falha ao salvar. Tente novamente.";
    console.error(erro);
  } finally {
    botao.disabled = false;
    botao.textContent = "Salvar";
  }
});