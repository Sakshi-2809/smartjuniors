body{
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #e3f2fd, #f4f6f9);
    margin:0;
    padding:40px;
}

/* Container */
.container{
    width:900px;
    margin:auto;
    background:white;
    padding:40px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,0.15);
    transition:0.3s;
}

/* Hover effect */
.container:hover{
    transform:translateY(-5px);
}

/* Heading */
h2{
    text-align:center;
    margin-bottom:25px;
    color:#2c3e50;
}

/* Top Button Area */
.top-bar{
    display:flex;
    justify-content:flex-end;
    margin-bottom:15px;
}

/* Add Gallery Button */
.gallery-btn{
    padding:10px 18px;
    background:linear-gradient(135deg,#28a745,#34d058);
    color:white;
    text-decoration:none;
    border-radius:10px;
    font-size:14px;
    font-weight:bold;
    transition:0.3s;
}

.gallery-btn:hover{
    transform:scale(1.05);
}

/* Table */
table{
    width:100%;
    border-collapse:collapse;
}

/* Header */
th{
    background:linear-gradient(135deg,#28a745,#34d058);
    color:white;
    padding:14px;
    text-align:center;
    font-size:14px;
}

/* Data */
td{
    padding:12px;
    text-align:center;
    border-bottom:1px solid #eee;
    font-size:14px;
}

/* Hover row */
tr:hover{
    background:#f1fdf5;
}

/* Image */
img{
    border-radius:10px;
    width:80px;
    height:80px;
    object-fit:cover;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

/* Delete Button */
.delete-btn{
    background:#dc3545;
    color:white;
    padding:7px 12px;
    text-decoration:none;
    border-radius:8px;
    font-size:13px;
    transition:0.3s;
    display:inline-block;
}

.delete-btn:hover{
    background:#b02a37;
    transform:scale(1.05);
}
