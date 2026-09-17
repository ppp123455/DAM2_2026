import java.util.Scanner;
public class CALCULADORA {

    public static void main(String[] args) {
        String Menu = """
                1.Sumar
                2.Restar
                3.Multiplicar
                4.Dividir
                5.Salir """;
        System.out.println(Menu);
        do {
            switch (opcion("Introducir Opcion: ")) {
                case 1 -> Sumar();
                case 2 -> Restar();
                case 3 ->  Multiplicar();
                case 4 -> Dividir();


            }
        }
        while (opcion("")!= 5);
    }
    public static int Numero1(String message){
        Scanner scanner = new Scanner(System.in);
        System.out.print(message);
        return scanner.nextInt();
    }


    public static int opcion(String message){
        Scanner opciones =new Scanner(System.in);
        System.out.print(message);
        return opciones.nextInt();
    }

    public static void Sumar(){
        System.out.println("SUMAR");
        System.out.println("---------------------------------------");
    int numero1=Numero1("Numero 1: ") ;
    int numero2=Numero1("Numero 2: ");
    int total=numero1+numero2;

    System.out.println(numero1+" +"+" "+numero2+" "+"= "+total);
    }
    public static void Restar(){
        System.out.println("RESTAR");
        System.out.println("-----------------------------------------------");

        int numero1=Numero1("Numero 1: ") ;
        int numero2=Numero1("Numero 2: ");
        int total=numero1-numero2;

        System.out.println(numero1+" -"+" "+numero2+" "+"= "+total);}
    public static void Multiplicar (){
        System.out.println("MULTIPLICAR");
        System.out.println("-----------------------------------------------");
        int aux2=0;
        int numeroaux=Numero1("Numero 1: ");
        int aux3=Numero1("Numero 2: ");
        for (int i = 0; i < aux3; i++) {
            aux2+=numeroaux;
        }
        System.out.println(numeroaux+" * "+aux3+" = "+aux2);
    }
    public static void Dividir(){
        System.out.println("DIVIDIR");
        System.out.println("-----------------------------------------------");
        int numero1=Numero1("Numero 1: ");
        int numero2=Numero1("Numero 2: ");
        int resultado=numero1 /numero2;
        System.out.println(numero1+" /"+" "+numero2+" "+"= "+resultado);

    }
}
