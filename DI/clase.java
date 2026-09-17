import java.util.Scanner;

public class clase {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String password = "hola123";

        System.out.println("CONTRASEÑA: ");
        String userPassword = scanner.nextLine();

        if (password.equals(userPassword)){
            System.out.println("Acceso Concedido");
        } else {
            System.out.println("Acceso Denegado");
        }
    }
}
