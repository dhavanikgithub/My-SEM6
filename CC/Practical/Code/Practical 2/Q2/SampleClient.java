import java.rmi.*;
import java.util.*;

public class SampleClient
{
    public static void main(String[]  args)
    {
        double num1, num2;
        int sel;
        String res;
        Scanner sc= new Scanner(System.in);
        
        try
        {
            System.out.println("Security Manager loaded");
            String url = "//localhost/SAMPLE-SERVER";

            SampleServer remoteObject = (SampleServer)Naming.lookup(url);
            System.out.println("Got remote object\n");
            System.out.println("1. Addition");
            System.out.println("2. Subtraction");
            System.out.println("3. Multiplication");
            System.out.println("4. Division\n");
            
            System.out.print("Select Options: ");
            sel=sc.nextInt();
            System.out.print("Enter Num1: ");
            num1=sc.nextDouble();
            System.out.print("Enter Num2: ");
            num2=sc.nextDouble();
            switch(sel)
            {
                case 1: res = String.format("Addition of %f + %f: %f",num1,num2,remoteObject.sum(num1, num2));
                        System.out.println(res);
                        break;
                case 2: res = String.format("Subtraction of %f - %f: %f",num1,num2,remoteObject.sub(num1, num2));
                        System.out.println(res);
                        break;
                case 3: res = String.format("Multiplication of %f * %f: %f",num1,num2,remoteObject.mul(num1, num2));
                        System.out.println(res);
                        break;
                case 4: res = String.format("Division of %f / %f: %f",num1,num2,remoteObject.div(num1, num2));
                        System.out.println(res);
                        break;
                default: System.out.println("Invalid Selection! Retry");
            }
        }
        catch (RemoteException exc)
        {
            System.out.println("Error in lookup: " + exc.toString());
        }
        catch (java.net.MalformedURLException exc)
        {
            System.out.println("Malformed URL: " + exc.toString());
        }
        catch (java.rmi.NotBoundException exc)
        {
            System.out.println("NotBound: " + exc.toString());
        }
        sc.close();
    }
}
