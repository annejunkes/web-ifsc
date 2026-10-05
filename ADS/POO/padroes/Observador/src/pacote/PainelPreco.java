package pacote;

public class PainelPreco implements Observador {
	 @Override
	 public void atualizar(String evento, Object dado) {
		 System.out.println("[PAINEL] " + this.hashCode() + " Novo preço: R$ "
		+ dado);
	 }

}
