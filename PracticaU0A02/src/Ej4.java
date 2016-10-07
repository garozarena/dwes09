import java.util.*;
public class Ej4 {
	public static void main(String[]args){
		Scanner sc = new Scanner(System.in);
		int num=15;
		
			while (num < 1 || num > 10) {
				try{
				System.out.println("Introduce un número del 1 al 10");
				num = sc.nextInt();
				}catch (Exception e){
					System.out.println("ERROR: "+e);
					break;
				}
		}
	}
}
