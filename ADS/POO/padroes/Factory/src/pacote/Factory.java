package pacote;

public class Factory {
	
	public static Notificacao criar(String tipo) {
		switch (tipo.toLowerCase()) {
		
		case "email":
			return new EmailNotificacao();
			
		case "sms":
			return new SMS();
		
		case "dm":
			return new DM();
		
		default:
			System.out.println("Erro ao carregar tipo de notificação");
			return null;
		}
		
		
	}
}
