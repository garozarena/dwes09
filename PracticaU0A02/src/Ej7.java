import java.util.*;

public class Ej7 {
	public static void main(String[]args){
		
		Scanner sc = new Scanner(System.in);
		
		int num;
		int factorial=1;
		int cajon=0;
		
		System.out.println("INTRODUCE UN NUMERO: ");
		num=sc.nextInt();
		cajon=num;
		
		do{
			factorial=factorial*num;
			num--;
		}while(num!=0);
		System.out.println(factorial+" -> (do while)");
		
		num=cajon;
		factorial=1;
		
		while(num!=0){
			factorial=factorial*num;
			num--;
		}
		System.out.println(factorial+" -> (while)");
		
		num=cajon;
		factorial=1;
		
		for(int i=num;i>0;i--){
			factorial=factorial*num;
			num--;
		}
		System.out.println(factorial+" -> (for)");
	}
}
