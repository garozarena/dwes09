import java.util.*;
public class Ej7 {
	public static void main(String[]args){
		Scanner sc = new Scanner(System.in);
		int num;
		int contador=2;
		int operacion=2;
		
		System.out.println("INTRODUCE UN NUMERO:");
		num = sc.nextInt();
		
		do{
			operacion=operacion*contador;
			contador++;
		}while(contador<=num);
		System.out.println("EL RESULTADO ES: "+operacion/2+"       (do while)");
		
		operacion=2;
		for(int i=2;i<=num;i++){
			
		}
	}
}
