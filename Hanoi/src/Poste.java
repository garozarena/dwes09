import java.util.*;
public class Poste {

	ArrayList<Disco> discos;
	
	public Poste(){
		discos = new ArrayList<Disco>();
	}
	
	public boolean esVacio(){
		for(int i=0;i<discos.size();i++){
			if (discos.get(i)!=null){
				return false;
			}
		}
		return true;
	}
	
	public int obtenerDiametroDiscoCima(){
		
		if(discos.size()==0){
			return 0;
		}
			return discos.get(discos.size()-1).getDiametro();
	}
	
	public void insertarDisco(Disco disco){
		
		discos.add(disco);
		
	}
	
	public Disco extraerDisco(){
		
		if(esVacio()==true){
			return null;
		}
		return discos.get(discos.size()-1);
	}
	
	public void dibujar(){
		if(esVacio()==true){System.out.println("=====");
		}else{
			for(int i=0;i<discos.size();i++){
				discos.get(i).dibujar();
				System.out.print("\n");
			}
			System.out.println("=========");
		}
	}
	
	
	
}
