package pacote;

public class Negrito extends TextoDecorator {
	 public Negrito(Texto t) {
		 super(t);
	 }
	 @Override public String getConteudo() {
		 return "**" + texto.getConteudo() + "**";
	 }

}
