import java.rmi.*;
import java.rmi.server.*;

public class SampleServerImpl extends UnicastRemoteObject implements SampleServer
{
    SampleServerImpl() throws RemoteException
    {
        super();
    }
    public static void main(String args[])
    {
        try
        {
            SampleServerImpl Server = new SampleServerImpl();
            Naming.rebind("SAMPLE-SERVER" , Server);
            System.out.println("Server waiting.....");
        }
        catch (java.net.MalformedURLException me)
        {
            System.out.println("Malformed URL: " + me.toString());
        }
        catch (RemoteException re)
        {
            System.out.println("Remote exception: " + re.toString());
        }
    }
    public String printHello() throws RemoteException
    {
        return "Sample Hello World";
    }


}