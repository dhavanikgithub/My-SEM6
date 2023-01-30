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
    @Override
    public double sum(double a, double b) throws RemoteException {
        return a+b;
    }
    @Override
    public double sub(double a, double b) throws RemoteException {
        return a-b;
    }
    @Override
    public double mul(double a, double b) throws RemoteException {
        return a*b;
    }
    @Override
    public double div(double a, double b) throws RemoteException {
        if(b!=0)
        {
            return a/b;
        }
        else{
            return 0;
        }
        
    }

}