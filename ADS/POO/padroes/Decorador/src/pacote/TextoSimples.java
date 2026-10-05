package pacote;

public class TextoSimples implements Texto{
	private String conteudo;
	
	public TextoSimples(String c) {
		this.conteudo = c;
	}

	@Override
	public String getConteudo() {
		return conteudo;
	}

}
