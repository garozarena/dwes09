import java.util.*;
public class Principal {
	public static void main(String[]args){
		
		Scanner sc=new Scanner(System.in);
		int opcion=1;
		PartidaHanoi partida;
		
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
			
		}while(opcion!=2);
	}
}
