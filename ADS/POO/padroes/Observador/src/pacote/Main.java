package pacote;

public class Main {

	public static void main(String[] args) {
		PainelPreco painel1 = new PainelPreco();
		PainelPreco painel2 = new PainelPreco();
		SujeitoConcreto notebook = new SujeitoConcreto();
		notebook.adicionarObservador(painel1);
		notebook.adicionarObservador(painel2);
		// Uma mudança de preço notifica todos os painéis automaticamente
		notebook.setPreco(2199.00);
		
		notebook.setPreco(2530.50);
		
		notebook.removerObservador(painel1);
		
		notebook.setPreco(2200.80);
	}

}
