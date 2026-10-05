package pacote;

public interface Sujeito {
	void adicionarObservador(Observador o);
	 void removerObservador(Observador o);
	 void notificarTodos(String evento, Object dado);

}
