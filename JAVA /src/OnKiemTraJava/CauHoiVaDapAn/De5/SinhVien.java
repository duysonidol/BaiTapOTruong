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
package OnKiemTraJava.CauHoiVaDapAn.De5;

import java.util.Scanner;

/**
 *
 * @author Cường <duongcuong96 at gmail dot com>
 */
public class SinhVien {

    private String maSv;
    private String tenSv;
    private float diemTl;
    private String ghiChu;

    public void nhapDuLieu() {
        Scanner scan = new Scanner(System.in);
        System.out.print("nhập mã sv: ");
        maSv = scan.nextLine();
        System.out.print("nhập tên sv: ");
        tenSv = scan.nextLine();
        System.out.println("nhập điểm: ");
        diemTl = scan.nextFloat();
        scan.nextLine();
        System.out.println("Nhập ghi chú : ");
        ghiChu = scan.nextLine();
    }

    public void hienThi() {
        System.out.println("Thông tin về sinh viên : " + tenSv);
        System.out.print("Mã: " + maSv + "| tên: " + tenSv + "| điểm: " + diemTl + "| ghi chú: " + ghiChu);
    }

    public String getMaSv() {
        return maSv;
    }

    public String getTenSv() {
        return tenSv;
    }

    public float getDiemTl() {
        return diemTl;
    }

    public String getGhiChu() {
        return ghiChu;
    }

    public void setMaSv(String maSv) {
        this.maSv = maSv;
    }

    public void setTenSv(String tenSv) {
        this.tenSv = tenSv;
    }

    public void setDiemTl(float diemTl) {
        this.diemTl = diemTl;
    }

    public void setGhiChu(String ghiChu) {
        this.ghiChu = ghiChu;
    }

}
