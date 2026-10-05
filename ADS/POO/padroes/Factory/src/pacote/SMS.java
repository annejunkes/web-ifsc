package pacote;

public class SMS implements Notificacao{

	@Override
	public void enviar(String destinatario, String mensagem) {
		System.out.println("SMS para: " + destinatario + " - " + mensagem);
		
	}

}
