package pacote;

public class Main {

	public static void main(String[] args) {
		
		Notificacao n1 = Factory.criar("Email");
		Notificacao n2 = Factory.criar("SMS");
		Notificacao n3 = Factory.criar("DM");

		
		n1.enviar("mabi@yahoo.com", "Venha comemorar meu aniversário de 17 anos amanhã!");
		n2.enviar("+55 (47) 89934-3033", "Seu código de verificação é 901 232");
		n3.enviar("xui", "olha esse vídeo!!");
		

	}

}
