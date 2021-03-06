<!DOCTYPE html>
<html>

<head>
    <title>vinemaket-register</title>
<style>
    * {
    margin: 1px;
    padding: 1px;
    outline: 1px;
    font-family: 'Open Sans', sans-serif;
}

body {
    height: 100vh;
    background-color: whitesmoke;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.header {
    background-color: rgba(128, 128, 128, .7);
    box-shadow: 0 0 10px rgba(255, 0, 0, .3);

    font-family: 'broadway';
    color: white;
    font-size: 20px;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    margin: 0;
    padding: 15px 0px 15px 20px;
    text-align: left;
    letter-spacing: 4px;
}

.container {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    padding: 30px 40px;
    width: 500px;

    background-color: rgba(128, 128, 128, .7);
    box-shadow: 0 0 10px rgba(0, 0, 0, .3);
}

.container h1 {
    text-align: center;
    color: white;
    margin-bottom: 30px;
    font-family: 'Open Sans', sans-serif;
    font-size: 40px;
    border-bottom: 3px solid white;

}

.container h3 {
    text-align: left;
    color: white;
    margin-bottom: 5px;
    font-family: 'Open Sans', sans-serif;
    font-size: 30px;

}

.container table tr {
    text-align: center;
    color: white;

}

.container table td {
    width: calc(100% - 20px);
    padding: 5px 8px;
    font-family: 'Open Sans', 'bold';
    font-size: 23px;
}

.container table input {
    width: calc(100%-15px);
    padding: 5px 6px;
    margin-bottom: 15px;
    background-color: white;
    color: black;
    font-family: 'Open Sans', 'bold';
    font-size: 15px;
}
 
</style>
</head>

<body>
<div class="container">
		<h1>Welcom To Vinemaket</h1>
		<h3>Daftar Akun:</h3>
		 
     
    <form action="resLog.php" method="post">
        <table>
            <tr>
                <td><label>Email:</label></td>
                <td><input type="email" name="email" placeholder="Masukan Email" /></td>
            </tr>
            <tr>
                <td><label>Username:</label></td>
                <td><input type="text" name="username" placeholder="Masukan Username" /></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="password" placeholder="Masukan Password" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Daftar" ></input></td>
            </tr>
            <td><a href="index.php" style="color: white"   >Back</a></td>
        </table>
        
    </form>
</body>

</html>