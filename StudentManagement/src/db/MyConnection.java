
package db;
import java.sql.DriverManager;
import java.sql.Connection;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import student.Student;
// kết nối mysql 
public class MyConnection {
   public static Connection getJDBConnection(){
       String url = "jdbc:mysql://localhost:3306/student_management";
       String user ="root";
       String password ="quangcuon2k3";
       try {
           Class.forName("com.mysql.cj.jdbc.Driver");
           return DriverManager.getConnection(url, user, password);
       } catch (ClassNotFoundException ex) {
           Logger.getLogger(MyConnection.class.getName()).log(Level.SEVERE, null, ex);
       } catch (SQLException ex) {
           Logger.getLogger(MyConnection.class.getName()).log(Level.SEVERE, null, ex);
       }
       
       return null;
       
   }    
}
