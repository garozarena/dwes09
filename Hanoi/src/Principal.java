import java.util.*;

public class Principal {
	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);
		int opcion = 1, opcionPartida = 1;
		PartidaHanoi partida = null;
		int posteOrigen = 0;
		int posteDestino = 0;

		System.out.println("***********************");
		System.out.println("*LAS TORRES DE HANOI*");
		System.out.println("***********************");
		System.out.println("");
		System.out.println("Menú principal:");
		System.out.println("");
		System.out.println("1- Nueva partida");
		System.out.println("2- Salir del programa");
		System.out.println("***********************");
		opcion = sc.nextInt();

		if (opcion == 1) {
			System.out.println("Introduce el número de discos: ");
			partida = new PartidaHanoi(sc.nextInt());
		}
		while (opcionPartida != 2 && partida.haTerminado() == false) {
			System.out.println("¿Que deseas hacer?");
			System.out.println("");
			System.out.println("1- Realizar un movimiento");
			System.out.println("2- Abandonar la partida");
			opcionPartida = sc.nextInt();
			if (opcionPartida == 1) {
				System.out.print("Número de poste de origen(0-2): ");
				posteOrigen = sc.nextInt();
				System.out.println("Número de poste de destino(0-2): ");
				posteDestino = sc.nextInt();

				partida.mover(posteOrigen, posteDestino);
				partida.dibujar();

				if (partida.haTerminado() == true) {
					System.out.println("Enhorabuena, lo has conseguido");
				} else {
					opcionPartida = 1;
				}
			}

		}
	}
}
