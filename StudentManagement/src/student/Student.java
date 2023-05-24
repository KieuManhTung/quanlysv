
package student;
import db.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.Statement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;

public class Student {
    private int id;
    private String name;    
    private String date_of_birth;
    private String gender;
    private String email;
    private String phone;
    private int point;
    private String monhoc;
    private String address1;
    private String address2;
    
    public Student(){
        
    }
    public Student(int id,String name,String date_of_birth,String gender,String email,String phone,int point,String monhoc,String address1,String address2){
        this.id = id;
        this.name = name;
        this.date_of_birth = date_of_birth;
        this.gender = gender;
        this.email = email;
        this.phone = phone;
        this.point = point;
        this.monhoc = monhoc;
        this.address1 = address1;
        this.address2 = address2;  
    }

    public int getId() {
        return id;
    }

    public String getName() {
        return name;
    }

    public String getDate_of_birth() {
        return date_of_birth;
    }

    public String getGender() {
        return gender;
    }

    public String getEmail() {
        return email;
    }

    public String getPhone() {
        return phone;
    }

    public int getPoint() {
        return point;
    }

    public String getMonhoc() {
        return monhoc;
    }

    public String getAddress1() {
        return address1;
    }

    public String getAddress2() {
        return address2;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setDate_of_birth(String date_of_birth) {
        this.date_of_birth = date_of_birth;
    }

    public void setGender(String gender) {
        this.gender = gender;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public void setPhone(String phone) {
        this.phone = phone;
    }

    public void setPoint(int point) {
        this.point = point;
    }

    public void setMonhoc(String monhoc) {
        this.monhoc = monhoc;
    }

    public void setAddress1(String address1) {
        this.address1 = address1;
    }

    public void setAddress2(String address2) {
        this.address2 = address2;
    }
    
}