import java.util.ArrayList;
import java.util.Scanner;
import static java.lang.System.out;
public class main {
    public static void main (String[] args){
        ArrayList<Vehiculo> vehiculos = new ArrayList<Vehiculo>();
        Scanner lectura= new Scanner(String Message);





        String menu= """
        1.  Ver Vehículos
        2.  Crear Coche
        3.  Conducir vehículo por marcar
        """;


        while(true){
// bucle con lectura de opcion.
            out.println(menu);

            int opcion = leerInt();// leer opcion
            while (opcion!=4){
            switch (opcion){
                case 1 -> Vervehiculos();
                case 2 -> Crearcoche();
                case 3 -> Conducir();


            }
        }
    }
    }

    private static void Vervehiculos() {
        ArrayList<Vehiculo> vehiculos = new ArrayList<Vehiculo>();
        // for que recorre el array de vehiculo
        if(Vehiculo.empty){
        out.println("No hay Vehiculos actualmente");}
        else{
            for (Vehiculos:vehiculos)
                out.println(vehiculos);

        }



    }

    private static void Conducir() {
        // accion de cada tipo de vehiculo personalizada
        // , buscar por tipo, y por tipo de vehiculo y realizar accion
    }

    private static void Crearcoche() {
        //crear mediante tipo de vehiculo, añadir tipo marca, KM y si es coche color
    }

    private static void salir() {
        // break
    }
}






