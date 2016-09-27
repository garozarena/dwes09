import java.util.*;

public class Ej9 {
	public static void main(String[]args){
		Scanner sc = new Scanner(System.in);

		int num = 0;



		System.out.println("Introduce un número del 1 al 10:");

		num=sc.nextInt();

		if(num%2==0){

			for(int i=num;i>=0;i--){

				System.out.print(i+" ");

			}

		}else{

			for(int j=num;j<=10;j++){

				System.out.print(j+" ");

			}

		}
	}
}
