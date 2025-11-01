 <!DOCTYPE html>
<html>
<head>
<title>AIUB Course Registration</title>
<style>
 
#page {
  font-family: 'Times New Roman', Times, serif;
  background:white;
   
}

 
#main_heading {
  color: navy;
  
  text-align: center;
  font-size:40px;
}

 
#notice {
  color: red;
  background-color: white;
  border: 1px  ;
  padding: 10px;
  width: 320px;
  text-align: center;
   
}

 
#form_table {
  background-color: white;
   
  padding: 20px;
}

 
#form_table td {
  padding: 12px 25px;
  font-size: 16px;
  color: darkblue ;
}

 
 

 
 
#submit_btn {
  background-color: navy;
  color: white;
   
   
  font-size: 16px;
  
}

#submit_btn:hover {
  background-color: royalblue;
}
</style>
</head>

<body id="page">

<h1 id="main_heading">AIUB COURSE REGISTRATION</h1>
<center>
<p id="notice">Make sure your ID and name is correct.</p>
</center>
<center>
<table id="form_table">
  <tr>
    <td>Enter Your Name:</td>
    <td><input type="text" id="name_input"></td>
  </tr>

  <tr>
    <td>Enter Your ID:</td>
    <td><input type="text" id="id_input"></td>
  </tr>

  <tr>
    <td>How many credits do you want:</td>
    <td><input type="number" id="credit_input"></td>
  </tr>

  <tr>
    <td>Select Your Preferred Section:</td>
    <td>
      <select id="section_select">
        <option value="">Select</option>
        <option>A</option>
        <option>B</option>
        <option>C</option>
        <option>D</option>
      </select>
    </td>
  </tr>

  <tr id="course_options">
    <td>Enter Your Preferred Course:</td>
    <td>
      <input type="radio" name="course"> Math1
      <input type="radio" name="course"> Web Tech
      <input type="radio" name="course"> Data Communication
    </td>
  </tr>

  <tr>
    <td colspan="2" align="center">
      <input type="submit" id="submit_btn" value="Register">
    </td>
  </tr>
</table>
</center>

</body>
</html>
