import java.rmi.*;

public interface SampleServer extends Remote
{
    public String printHello() throws RemoteException;
}