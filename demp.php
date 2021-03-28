<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}
button {   
       background-color: black;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;
        font-size: 40px;   
        border: none;   
        cursor: pointer;   
         }
 button:hover {   
        opacity: 0.7; 
/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>
<header>
  <h2>Student Database Managemt System</h2>
  </article>
  <form action="" method="POST">
    <table>
    <tr>
      <td width="8000px"><button input type="submit"name="admin_login" value="Admin Login" required style="width: 100%; height: 100px;">Admin Login</button>
      </td>
    </tr>
    <tr>
      <td><button input type="submit" name="student_login" value="Student Login" required style="width: 100%; height: 100px;">Student Login </button>
      </td>
    </tr>
    </table>
  </form>
  <?php
    if(isset($_POST['admin_login'])){
      header("Location: admin_login.php");
    }
    if(isset($_POST['student_login'])){
      header("Location: student_login.php");
    }
  ?>
</header>
<section>
  <nav>
    <ul>
      <h1>Members</h1>
      <li>Shikhar Uttam <a href="#">cv</a></li>
      <p>Mentor- Mrs. Priti Mishra</p>
      <li> Shahebe Alam  <a href="#">cv</a></li>
      <p>Mentor - Mrs. Raspreet Kaur</p>
    </ul>
  </nav>
  
  <article>
    <h1>AboutThe Project</h1>
    <p>This project <b>“Student Information Management System” </b>provides us a simple
        interface for maintainance of student information.</p>
      <p>It can be used by educationalinstitutes or colleges to maintain the records of students easily.</p> <p>Achieving thisobjective is difficult using a manual system as the information is scattered, can be
      redundant and collecting relevant information may be very time consuming. All these
        problems are solved using this project.
      </p>
    

</section>

<footer>
  <p>Minor Project BCA Semester 5</p>
</footer>

</body>
</html>
