package pacote;

public class DM implements Notificacao{

	@Override
	public void enviar(String destinatario, String mensagem) {
		System.out.println("@" + destinatario + " enviou uma mensagem: '" + mensagem + "'");
		
	}

}
