package pacote;

public class Main {
	 public static void main(String[] args) {
	 Texto base = new TextoSimples("Olá Mundo");
	 System.out.println(base.getConteudo()); // Olá Mundo
	 // Combinação livre sem herança
	 Texto formatado = new Italico(new Negrito(base));
	 System.out.println(formatado.getConteudo()); // _**Olá Mundo**_
	 }
	}