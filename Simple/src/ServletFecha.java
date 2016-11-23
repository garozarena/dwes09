import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.util.*;
public class ServletFecha extends HttpServlet {

    private static final long serialVersionUID = 1L;

    public void doGet(HttpServletRequest req, HttpServletResponse res) throws IOException {
    	
    	Calendar fecha = new GregorianCalendar();
        
        int año = fecha.get(Calendar.YEAR);
        int mes = fecha.get(Calendar.MONTH);
        int dia = fecha.get(Calendar.DAY_OF_MONTH);
    	
        res.setContentType("text/html");
        PrintWriter out = res.getWriter();
        out.println("<html><head><title>EjemploServletHttp</title></head>");
        out.println("<body><h3>La fecha de hoy es: "+dia+"/"+mes+"/"+año+"</h3></body></html>");
        out.close();
    }

    public void doPost(HttpServletRequest req, HttpServletResponse res) throws IOException {
        doGet(req, res);
    }

    public String getServletInfo() {
        return "Servlet de Ejemplo usando HttpServlet";
    }
}