public class Coches extends Vehiculo{

    private String color;


    public String getColor(){
        return this.color;
    }
     public abstract void acctionbycategory(String Marca,String Kilometros,String color){
    System.out.println("Coche"+Marca+" de "+color+" con "+Kilometros+"  -- Viajando");
}
}
