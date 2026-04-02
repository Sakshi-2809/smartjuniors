body{
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #e3f2fd, #f4f6f9);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    margin:0;
}

.admin-panel{
    background:white;
    padding:40px;
    width:450px;
    text-align:center;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,0.15);
    transition:0.3s;
}

.admin-panel:hover{
    transform:translateY(-5px);
}

/* Heading */
.admin-panel h1{
    margin-bottom:20px;
    color:#2c3e50;
}

/* Section Title */
.admin-panel h3{
    margin-top:25px;
    margin-bottom:10px;
    color:#555;
}

.grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:15px;
    margin-bottom:15px;
}

/* Button Style */
.mng{
    display:block;
    text-decoration:none;
    background:linear-gradient(135deg,#28a745,#34d058);
    color:white;
    padding:14px;
    border-radius:10px;
    font-size:15px;
    font-weight:bold;
    transition:0.3s;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

.mng:hover{
    transform:translateY(-3px) scale(1.03);
    box-shadow:0 8px 20px rgba(0,0,0,0.2);
}

/* Logout Button */
.logout{
    width:100%;
    display:block;
    text-decoration:none;
    background:linear-gradient(135deg,#dc3545,#ff5c5c);
    color:white;
    padding:14px;
    border-radius:10px;
    font-size:15px;
    font-weight:bold;
    margin-top:15px;
    margin-left: 100px;
    transition:0.3s;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

.logout:hover{
    transform:translateY(-3px);
    box-shadow:0 8px 20px rgba(0,0,0,0.2);
}

button,
input[type="submit"] {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 6px;
    cursor: pointer;
}

button:hover,
input[type="submit"]:hover {
    background-color: #218838;
}
