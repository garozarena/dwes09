import java.util.*;

public class Poste {

	ArrayList<Disco> discos;

	public Poste(int discosPartida) {
		discos = new ArrayList<Disco>(discosPartida);
	}

	public boolean esVacio() {
		for (int i = 0; i < discos.size(); i++) {
			if (discos.get(i) != null) {
				return false;
			}
		}
		return true;
	}

	public int obtenerDiametroDiscoCima() {

		if (discos.size() == 0) {
			return 0;
		}
		return discos.get(discos.size() - 1).getDiametro();
	}

	public void insertarDisco(Disco disco) {

		discos.add(0, disco);

	}

	public void insertarDiscoPrimero(Disco disco) {
		discos.add(disco);
	}

	public Disco extraerDisco() {

		Disco result = new Disco(0);

		if (esVacio() == true) {
			return null;
		}
		for (int i = 0; i < discos.size(); i++) {
			if (discos.get(i) != null) {
				result = discos.get(i);
				discos.remove(i);
				break;
			}
		}

		return result;
	}

	public void dibujar(int numDiscos) {
		int tamaņoPoste = discos.size();
		if (discos.isEmpty() == true) {
			tamaņoPoste = 0;
		}
		int discosVacios = numDiscos - tamaņoPoste;

		for (int j = 0; j < discosVacios; j++) {
			System.out.println("    |");
		}
		for (int i = 0; i < discos.size(); i++) {
			discos.get(i).dibujar();
			System.out.print("\n");
		}
		System.out.println("=========");

	}

}
