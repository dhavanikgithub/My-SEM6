import java.rmi.*;

public interface SampleServer extends Remote
{
    public double sum(double a, double b) throws RemoteException;
    public double sub(double a, double b) throws RemoteException;
    public double mul(double a, double b) throws RemoteException;
    public double div(double a, double b) throws RemoteException;
}