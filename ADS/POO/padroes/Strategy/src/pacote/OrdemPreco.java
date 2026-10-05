package pacote;

import java.util.Comparator;
import java.util.List;

public class OrdemPreco implements EstrategiaOrdenacao {
	 @Override
	 public void ordenar(List<Produto> produtos) {
	 produtos.sort(Comparator.comparing(Produto::getPreco));
	 System.out.println("Ordenado por preço");
	 }
	}
