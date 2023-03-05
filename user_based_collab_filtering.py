# -*- coding: utf-8 -*-
"""
Created on Sat Mar  4 10:44:26 2023

@author: AnhQuan
"""

import numpy as np
import math

def main():
    

    np.array(object, dtype=None, ndmin = 0) 
    #object là một mảng 2 chiều
    #dtype các kiểu phần tử trong ma trận
    #ndmin số chiều tối thiểu khi return object 


    print("---------------- BƯỚC TẠO MA TRẬN ----------------")
    Y = int(input("Số hàng: "))
    X = int(input("Số cột: "))

    _A = []

    for i in range (Y): #Vòng lặp cho hàng
        c = []
        for j in range (X): #Vòng lặp cho cột
            j = (input("Nhập dữ liệu ở tọa độ (" + str(i) + "," + str (j) + ") "))
            c.append(j)
        print()
        _A.append(c)
    """
    for i in range (Y):
        for j in range (X):
            print(_A[i][j], end = " ")
        print()
    """    
    A = np.array(_A)

    print("Đây là ma trận gốc mà bạn đã nhập: ")
    print(A)
    
    
    #tìm cột chứa dấu ?
    find = -1
    for i in range (Y):
        for j in range(X):
            if A[i,j] == '?':
                find = j #find dùng để lưu cột có chứa ?
                findx = i #findx dùng để lưu hàng có chứa ? 
    
    #Xóa cột chứa ?
        #Tạo ma trận 0 _B
    _B = []
    for i in range (Y): #Vòng lặp cho hàng
        c = []
        for j in range (X-1): #Vòng lặp cho cột
            j = (0)
            c.append(j)
        _B.append(c)
            
            
    B = np.array(_B)
    BY = Y
    BX = X-1
    for i in range(BY):
        for j in range(BX):
            if j != find:
                B[i,j] = A[i,j]
            else:
                B[i,j] = A[i, j+1]
    print()
    print("Bước 0: Ma trận sau khi bỏ cột có chứa giá trị ?: ")       
    print(B)
    
    
    #Tính trung bình từng hàng
    _avg = []
    for i in range(BY):
        c = []
        tb = 0.0
        for j in range(BX):
            tb += B[i][j]
        tb /= BX
        c.append(tb)
        _avg.append(c)
    print()
    print("Bước 1: Trung bình của mỗi hàng [avg(row)]: ")
    avg = np.array(_avg)
    print(avg)
    #Trừ ma trận với trung bình
    print()
    print("Bước 2: Ma trận sau khi trừ với trung bình: ")
    C = np.array(B - avg)
    print(C)
    

    #Tính Sim alice
    _Sim = []
    ali = 0.0
    for i in range(BX):
        ali = ali + ((C[0][i])*(C[0][i]))
    ali = math.sqrt(ali)
    
    for i in range(1, BY):
        c = []
        _sim = 0.0
        tu = 0.0
        mau = 0.0
        u = 0.0
        for j in range(BX):
            tu = tu + (C[0][j])*(C[i][j])
            u = u + ((C[i][j])*(C[i][j]))
        u = math.sqrt(u)
        mau = ali * u
        _sim = tu/mau
        c.append(_sim)
        _Sim.append(c)
    Sim = np.array(_Sim)
    
    print()
    print("Bước 3: Similarity (Sim) của từng hàng: ")
    print(Sim)
    
    #Tính a

    _aa = []
    for i in range(Y):
        if i != findx:
            c = []
            tru = 0.0
            tru = float(A[i,find]) - float(avg[i,0])
            c.append(tru)
            _aa.append(c)
            aa = np.array(_aa)
    print()
    print("Bước 4: Ta lấy giá trị u1.i5 trừ cho avg(row)(u1) == 3 - 2.25, được giá trị a1")
    print("Tương tự với u2.i5 trừ avg(row)(u2) == 5 - 3.5 = 1.5, ta được giá trị a2")
    print("Tương tự để tính a3 và a4")
    print()
    print("Các giá trị a: ")
    print(aa)
    
    #Tính Alice
    
    avgAli = float(avg[0,0])
    tongSimA = 0.0
    mauAli = 0.0
    for i in range(Y-1):
        tongSimA += (float(Sim[i,0])*float(aa[i,0]))
        mauAli += abs(float(Sim[i,0]))
    tuAli = tongSimA
    gtct = avgAli + (tuAli/mauAli)
    print()
    print("Bước 5: Giá trị (?) cần tìm: " + str(gtct))
    print()
    print("VẬY GIÁ TRỊ " + str(gtct) + " CHÍNH LÀ ĐIỂM SỐ TƯƠNG QUAN NHẰM ĐỀ XUẤT [item: i5] CHO [user: Alice]")

    
main()

    
                






