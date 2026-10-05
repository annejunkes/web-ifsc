const busca = document.querySelector("#busca");
const botao = document.querySelector("#btnBuscar");
const statusEl = document.querySelector("#status");
const resultado = document.querySelector("#resultado");

botao.addEventListener("click", buscarAlunos);

let temporizador = null;

busca.addEventListener("input", () => {
  clearTimeout(temporizador);

  temporizador = setTimeout(() => {
    buscarAlunos();
  }, 400);
});

async function buscarAlunos() {
  const termo = busca.value.trim();

  if (termo.length < 2) {
    resultado.innerHTML = "";
    statusEl.textContent = "Digite pelo menos 2 caracteres.";
    return;
  }

  statusEl.textContent = "Carregando...";
  resultado.innerHTML = "";

  try {
    const url = `alunos.php?q=${encodeURIComponent(termo)}`;
    const resposta = await fetch(url);

    if (!resposta.ok) {
      throw new Error(`Erro HTTP: ${resposta.status}`);
    }

    const dados = await resposta.json();

    if (!dados.ok) {
      throw new Error(dados.mensagem || "Erro desconhecido");
    }

    renderizarAlunos(dados.alunos);
  } catch (erro) {
    statusEl.textContent = "Falha ao buscar alunos.";
    console.error(erro);
  }
}

function renderizarAlunos(alunos) {
  resultado.innerHTML = "";

  if (alunos.length === 0) {
    statusEl.textContent = "Nenhum aluno encontrado.";
    return;
  }

  statusEl.textContent = `${alunos.length} aluno(s) encontrado(s).`;

  alunos.forEach(aluno => {
    const li = document.createElement("li");
    li.textContent = `${aluno.nome} - Turma ${aluno.turma}`;
    resultado.appendChild(li);
  });
}