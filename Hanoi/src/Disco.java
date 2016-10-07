
public class Disco {

	private int diametro;
	
	public Disco(int diametro){
		this.diametro=crearDisco(diametro);
	}
	
	public int crearDisco(int diametro){
		if(diametro<3){
			System.out.println("ADVERTENCIA: diámetro demasiado pequeño, se le asigna un 3.");
			diametro=3;
		}else{
			if(diametro%2==0){
				diametro++;
				System.out.println("ADVERTENCIA: diámetro del disco inválido, se le asigna un "+diametro);
			}
		}
		return diametro;
	}
	
	public int getDiametro(){
		return this.diametro;
	}
	
	public void dibujar(){
		for(int i=0;i<diametro;i++){System.out.print("o");}
	}
	
}
