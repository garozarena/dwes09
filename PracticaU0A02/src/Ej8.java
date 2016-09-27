import java.util.*;

public class Ej8 {
	public static void main(String[]args){
		Scanner sc = new Scanner(System.in);
		int opcion;
		int subopcion;
	
		do{
			System.out.println("PULSA UN NUMERO Y ELIGE UNA OPCION");
			System.out.println("1.-OPCION 1");
			System.out.println("2.-OPCION 2");
			System.out.println("3.-OPCION 3");
	
			opcion=sc.nextInt();
			
			switch(opcion){
				case 1:
					System.out.println("HA ESCOGIDO LA OPCION 1");
					System.out.println("1.-OPCION 1.1");
					System.out.println("2.-OPCION 1.2");
					System.out.println("3.-OPCION 1.3");
					System.out.println("4.-VOLVER");
	
					subopcion=sc.nextInt();
					
					switch(subopcion){
						case 1:
							System.out.println("HA ESCOGIDO LA OPCION 1.1");
							opcion=6;
							break;
						case 2:
							System.out.println("HA ESCOGIDO LA OPCION 1.2");
							opcion=6;
							break;
						case 3:
							System.out.println("HA ESCOGIDO LA OPCION 1.3");
							opcion=6;
							break;
						case 4:
							opcion=4;
							break;
						default:
							System.out.println("ERROR, VOLVIENDO");
							opcion=4;
							break;
					}
					break;
				case 2:
					System.out.println("HA ESCOGIDO LA OPCION 2");
					System.out.println("1.-OPCION 2.1");
					System.out.println("2.-OPCION 2.2");
					System.out.println("3.-OPCION 2.3");
					System.out.println("4.-VOLVER");
	
					subopcion=sc.nextInt();
					
					switch(subopcion){
						case 1:
							System.out.println("HA ESCOGIDO LA OPCION 2.1");
							opcion=6;
							break;
						case 2:
							System.out.println("HA ESCOGIDO LA OPCION 2.2");
							opcion=6;
							break;
						case 3:
							System.out.println("HA ESCOGIDO LA OPCION 2.3");
							opcion=6;
							break;
						case 4:
							opcion=4;
							break;
						default:
							System.out.println("ERROR, VOLVIENDO");
							opcion=4;
							break;
					}
					break;
				case 3:
					System.out.println("HA ESCOGIDO LA OPCION 3");
					System.out.println("1.-OPCION 3.1");
					System.out.println("2.-OPCION 3.2");
					System.out.println("3.-OPCION 3.3");
					System.out.println("4.-VOLVER");
	
					subopcion=sc.nextInt();
					
					switch(subopcion){
						case 1:
							System.out.println("HA ESCOGIDO LA OPCION 3.1");
							opcion=6;
							break;
						case 2:
							System.out.println("HA ESCOGIDO LA OPCION 3.2");
							opcion=6;
							break;
						case 3:
							System.out.println("HA ESCOGIDO LA OPCION 3.3");
							opcion=6;
							break;
						case 4:
							opcion=4;
							break;
						default:
							System.out.println("ERROR, VOLVIENDO");
							opcion=4;
							break;
					}
					break;
				default:
					System.out.println("ERROR, VOLVIENDO");
					opcion=4;
					break;
			}
	
		}while(opcion>0 && opcion<5);
	}

}
