import java.util.*;
public class PartidaHanoi {

	private ArrayList<Poste> partida;
	private int discosPartida;
	
	public PartidaHanoi(int discos){
		
		if(discos<1){
			this.discosPartida=1;
			System.out.println("ERROR: la partida debe tener al menos un disco.");
		}else{this.discosPartida=discos;}
		
		this.partida = new ArrayList<Poste>();
		
		Poste poste1 = new Poste(discosPartida);
		Poste poste2 = new Poste(discosPartida);
		Poste poste3 = new Poste(discosPartida);
		
		Disco disco;
		
		for(int i=1;i<=this.discosPartida;i++){
			disco = new Disco(i*2+1);
			poste1.insertarDiscoPrimero(disco);
			System.out.println("Creados el disco "+disco.getDiametro());
		}
		
		partida.add(poste1);
		partida.add(poste2);
		partida.add(poste3);
		
	}
	
	public boolean haTerminado(){
		
		if(partida.get(0).esVacio()==true && partida.get(1).esVacio()==true){return true;}
		return false;
		
	}
	
	public void mover(int origen, int destino){
		
		if(origen>2 && origen<0){
			System.out.println("Error: ese poste no existe");
		}else if(partida.get(origen).esVacio()==true){
				System.out.println("Error: el poste de origen está vacío");
			}
		else if(partida.get(destino).obtenerDiametroDiscoCima()!=0 && partida.get(destino).obtenerDiametroDiscoCima()<partida.get(origen).obtenerDiametroDiscoCima()){
			System.out.println("Error: El disco de la cima es mayor que el de origen");
		}else{
			partida.get(destino).insertarDisco(partida.get(origen).extraerDisco());
			System.out.println("Disco movido con éxito");
		}
		
	}
	
	public void dibujar(){
		for(int i=0;i<3;i++){
			System.out.println("Poste "+i);
			partida.get(i).dibujar();
		}
	}
}
