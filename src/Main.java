public class Main {
    public static void main(String[] args) {

        System.out.println("Hola mundo");

// variables

        int edad= 18;
        System.out.println(edad<18?"Es menor de Edad": "Es mayor de edad");
        String genero="Femenino";
        System.out.println("Bienvenid"+(genero.equals("Femenino")?"a":"o"));


        int bateria=87;
        while (bateria<100){
            bateria++;
            System.out.println(bateria+"%");
        }
    }

}
