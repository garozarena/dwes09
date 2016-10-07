import java.util.*;
public class Ej10 {
	public static void main(String[]args){
		
		Scanner sc = new Scanner(System.in);
		
		int nummaq= (int)Math.floor(Math.random()*100);
		int numuser=0;
		boolean adivinado=false;
		int i=1;
		
		while(numuser!=nummaq && i<12){
		System.out.println("INTRODUCE UN NÚMERO: ");
		numuser=sc.nextInt();
		if(numuser>nummaq){System.out.println("EL NUMERO ES MENOR");}
		else if(numuser<nummaq){System.out.println("EL NUMERO ES MAYOR");}
		else if(numuser==nummaq){System.out.println("ENHORABUENA, ERA EL "+nummaq);}
		i++;
		}
	}
}
