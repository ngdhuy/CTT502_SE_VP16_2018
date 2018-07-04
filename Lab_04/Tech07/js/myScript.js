var arrHocVien = [
    {
        "MSSV": 1,
        "HoTen": "Nguyen Van Teo",
        "Lop": "C1709G"
    },
    {
        "MSSV": 2,
        "HoTen": "Tran Thi Ty",
        "Lop": "C1712L"
    },
    {
        "MSSV": 3,
        "HoTen": "Le Van Be",
        "Lop": "C1709G"
    },
    {
        "MSSV": 4,
        "HoTen": "Ho Thi Ut",
        "Lop": "C1712L"
    }
];

window.onload = LoadData;

function LoadData(){
    var danhSachHocVien = document.getElementById("DanhSachHocVien");
    for(var i = 0; i < arrHocVien.length; i++){
        var trNode = document.createElement("tr");
        danhSachHocVien.appendChild(trNode);

        var td_1 = document.createElement("td");
        trNode.appendChild(td_1);
        var mssvNode = document.createTextNode(arrHocVien[i].MSSV);
        td_1.appendChild(mssvNode);

        var td_2 = document.createElement("td");
        trNode.appendChild(td_2);
        var hotenNode = document.createTextNode(arrHocVien[i].HoTen);
        td_2.appendChild(hotenNode);

        var td_3 = document.createElement("td");
        trNode.appendChild(td_3);
        var lopNode = document.createTextNode(arrHocVien[i].Lop);
        td_3.appendChild(lopNode);

        var td_4 = document.createElement("td");
        trNode.appendChild(td_4);
        var btnChon = document.createElement("button");
        btnChon.type = "button";
        btnChon.setAttribute("onclick","Chon(" + i + ")");
        td_4.appendChild(btnChon);

        var btnChonString = document.createTextNode("Chọn");
        btnChon.appendChild(btnChonString);
    }
}

function ClearTable(){
    var danhSachHocVien = document.getElementById("DanhSachHocVien");
  
    while(danhSachHocVien.children.length > 1){
        danhSachHocVien.removeChild(danhSachHocVien.lastChild);
    }
}

function ThemMoi(){
    var mssv = document.getElementById("txtMSHV").value;
    var hoten = document.getElementById("txtHoTen").value;
    var lop = document.getElementById("cmbLop").value;

    if(mssv === "" || hoten === ""){
        return;
    }
    
    arrHocVien.push({
        "MSSV": mssv,
        "HoTen": hoten,
        "Lop": lop
    });

    ClearTable();
    LoadData(); 
}

function Xoa(){
    var mssv = document.getElementById("txtMSHV").value;

    if(mssv === ""){
        return;
    }

    mssv = parseInt(mssv);
    console.log(mssv);

    for(var i = 0; i < arrHocVien.length; i++){
        if(arrHocVien[i].MSSV == mssv)
            break;
    }

    if(i < arrHocVien.length){
        arrHocVien.splice(i,1);
    }

    ClearTable();
    LoadData();
}

function CapNhat(){
    var mssv = document.getElementById("txtMSHV").value;
    var hoten = document.getElementById("txtHoTen").value;
    var lop = document.getElementById("cmbLop").value;

    if(mssv === "" || hoten === ""){
        return;
    }

    for(var i = 0; i < arrHocVien.length; i++){
        if(arrHocVien[i].MSSV == mssv)
            break;
    }

    if(i < arrHocVien.length){
        arrHocVien[i].MSSV = mssv;
        arrHocVien[i].HoTen = hoten;
        arrHocVien[i].Lop = lop;
    }

    ClearTable();
    LoadData();
}

function Chon(i){
    document.getElementById("txtMSHV").value = arrHocVien[i].MSSV;
    document.getElementById("txtHoTen").value = arrHocVien[i].HoTen;
    document.getElementById("cmbLop").value = arrHocVien[i].Lop;
}