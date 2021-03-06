/* 
 * Copyright (C) 2017 Cường <duongcuong96 at gmail dot com>.
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301  USA
 */
// Đại khái là dùng thoải mái đuê :3 , cái này t code ở mức chạy dc thôi chứ ko bắt exception đâu, cho nhanh =))
package seri;

import java.io.Serializable;
import java.util.Scanner;

/**
 *
 * @author Cường <duongcuong96 at gmail dot com>
 */
public class EmployeeSerializable implements Serializable {
// phải implement Serialize thì mới có thể lưu được thành file 

    private String name;
    private int exprements;
    private String info;

    public EmployeeSerializable(String name, int exprements, String info) {
        this.name = name;
        this.exprements = exprements;
        this.info = info;
    }

    public EmployeeSerializable() {
        //tạo hàm khởi tạo ko tham số, mọi thuộc tính của class này sẽ để là mặc định do Java quy định
        // eg: String cũng như các object khác,default null 
        // int defaut 0 
    }

    // getters và setters , ở NetBeans, ấn Ctrl + insert để tạo code getter + setter, ngoài ra có thể tạo cả constructor
    public String getName() {
        return name;
    }

    public int getExprements() {
        return exprements;
    }

    public String getInfo() {
        return info;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setExprements(int exprements) {
        this.exprements = exprements;
    }

    public void setInfo(String info) {
        this.info = info;
    }

    public void setData(Scanner scan) {
        System.out.print(" nhập tên: ");
        this.name = scan.next();// chỉ next thôi nhá, ko nextLine
        System.out.print("  nhập năm kinh nghiệm: ");
        this.exprements = scan.nextInt();
        System.out.print("  nhập thông tin : ");
        this.info = scan.next();
        scan.nextLine();// bỏ 1 line cuối tránh line tiếp theo bị mất ( đại khái là có cái này thì mới nhập dc tên ! )
    }

    @Override
    public String toString() {
        System.out.println("-------------------------------");
        System.out.println("name: " + name);
        System.out.println("exprements: " + exprements);
        System.out.println("info:" + info);
        System.out.println("-------------------------------");

        return "";
    }

}
