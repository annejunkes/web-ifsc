package pacote;

public class TextoDecorator implements Texto{
	protected Texto texto;
	
	public TextoDecorator(Texto t) {
		this.texto = t;
	}
	
	@Override
	public String getConteudo() {
		return texto.getConteudo();
	}

}
