package pacote;

public class Italico extends TextoDecorator {
	public Italico(Texto t) {
		super(t);
	 }
	 @Override public String getConteudo() {
		 return "_" + texto.getConteudo() + "_";
	 }

}
