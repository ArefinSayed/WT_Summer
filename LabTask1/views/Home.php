<html>
    <head>
        <title>Registration</title>
</head>
<body>
<h1>Registration Form<hr></h1>
<form action="../control/process.php" method="Post">
<table>
    <tr>
        <td>
            First Name:
        </td>
        <td>
            <input type="text" name="fname">
        </td>
    </tr>
    <tr>
        <td>
            Last Name:
        </td>
        <td>
            <input type="text" name="lname">
        </td>
    </tr>
    <tr>
        <td>
            Age:
        </td>
        <td>
            <input type="text" name="age">
        </td>
    </tr>
    <tr>
        <td>
            Designation:
        </td>
        <td>
            <input type="radio" name="designation" value="Junior Programmer">Junior Programmer
            <input type="radio" name="designation" value="Senior Programmer">Senior Programmer
            <input type="radio" name="designation" value="Project Lead">Project Lead
        </td>
    </tr>
    <tr>
        <td>
            Preferred language
        </td>
        <td>
        <input type="checkbox" name="1stlanguage" value="Java">Java
        <input type="checkbox" name="2ndlanguage" value="PHP">PHP
        <input type="checkbox" name="3rdlanguage" value="C++">C++
        </td>
    </tr>
    <tr>
        <td>
            E-mail:
        </td>
        <td>
            <input type="text" name="email">
        </td>
    </tr>
    <tr>
        <td>
            Password:
        </td>
        <td>
            <input type="text" name="password">
        </td>
    </tr>
    <tr>
        <td>
            Please choose a file
        </td>
        <td>
        <input type="file" name="myfile">
        </td>
    </tr>
    <tr>
        <td>
            <input type="Submit" >   <input type="Submit" value="Reset">
        </td>
       
           
       
    </tr>
</table>    
</form>
</body>
</html>