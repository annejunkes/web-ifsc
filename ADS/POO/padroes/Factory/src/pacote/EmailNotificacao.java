package pacote;

public class EmailNotificacao implements Notificacao{

	@Override
	public void enviar(String destinatario, String mensagem) {
		System.out.println("Email para: " + destinatario + " - " + mensagem);
		
	}

}
