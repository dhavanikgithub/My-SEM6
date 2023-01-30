import java.rmi.*;

public class SampleClient
{
    public static void main(String[]  args)
    {
        try
        {
            System.out.println("Security Manager loaded");
            String url = "//localhost/SAMPLE-SERVER";

            SampleServer remoteObject = (SampleServer)Naming.lookup(url);
            System.out.println("Got remote object\n");

            System.out.println("Print Hello: "+remoteObject.printHello());
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

    }
}
