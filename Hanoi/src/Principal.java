import java.util.*;
public class Principal {
	public static void main(String[]args){
		
		Scanner sc=new Scanner(System.in);
		int opcion=1, opcionPartida=1;
		PartidaHanoi partida = null;
		int posteOrigen=0;
		int posteDestino=0;
		
		do{
			System.out.println("***********************");
			System.out.println("*LAS TORRES DE HANOI*");
			System.out.println("***********************");
			System.out.println("");
			System.out.println("Menú principal:");
			System.out.println("");
			System.out.println("1- Nueva partida");
			System.out.println("2- Salir del programa");
			System.out.println("***********************");
			opcion=sc.nextInt();
			
			if(opcion==1){
				System.out.println("Introduce el número de discos: ");
				partida=new PartidaHanoi(sc.nextInt());
			}
			do{
				System.out.println("¿Que deseas hacer?");
				System.out.println("");
				System.out.println("1- Realizar un movimiento");
				System.out.println("2- Abandonar la partida");
				System.out.print("Número de poste de origen(0-2): ");
				posteOrigen=sc.nextInt();
				System.out.println("Número de poste de destino(0-2): ");
				posteDestino=sc.nextInt();
				
				partida.mover(posteOrigen, posteDestino);
				
				if(partida.haTerminado()==true){
					System.out.println("Enhorabuena, lo has conseguido");
				}
				
			}while(opcionPartida!=2 && partida.haTerminado()==false);
			
		}while(opcion!=2);
	}
}
