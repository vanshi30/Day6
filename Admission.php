<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>GLS</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include './theme/menu.php';
include './theme/logo.php';
?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="photo7.jpg" width="920" height="300" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">ADMISSION </a></h2>
				
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                                    <p>
                                        GLS University offers various under-graduate courses in B.Com., BBA, B.Ed., BCA along with Post-graduate, Integrated and Diploma courses in MBA, Integrated MBA, M.Com., M.Sc.(IT), Integrated M.Sc.(IT), MCA, PGDCA and PGDMA. The University also extends its education to Research level courses.
                                        <ul>
                                            <li>Applicants to B.Com., BBA, B.Ed., BCA, Integrated MBA and Integrated M.Sc. courses need to pass 10+2 from a recognized board.</li>
                                            <li>Candidates applying in MBA, M.Com. and MCA course must have passed Bachelor’s program with at least 50% marks in aggregate.</li>
                                        <li>Students who have cleared their Bachelor of Computer Applications or Bachelor of Science (IT/ Computers) level may apply for MCA Lateral entry scheme.</li>
                                        <li>Students applying for Ph.D. must hold a Master’s degree or M.Phil. Degree with at least 55% marks in aggregate.</li>
                                        <li>Applicants to MBA and MCA must appear for CMAT entrance exam to be eligible for admission to the course.</li>
                                        <li>Candidates applying for PGDCA, PGDMA and Ph.D. must pass the entrance test conducted by the University.</i>
                                        <li>Admission to GLS University is online and can be filled by visiting http://admission.glsuniversity.ac.in/</li>
                                        </ul>
                                    </p>
					<p class="links"><a href="https://collegedunia.com/university/55864-gls-university-ahmedabad/admission">Read More</a></p>
				</div>
			</div>
			<div class="post">
				<h2 class="title"><a href="#">REGISTRATION  FORM </a></h2>
				
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                                    <form method="post">
                                        Name:<input type="text" name="t1" placeholder="Full name" required/>
                                        <br></br>
                                        Address:
                                        <textarea name="ta" cols="30" rows="10" placeholder="Current Address"></textarea>
                                        <br></br>
                                        Email:<input type="email" name="t2" required/>
                                        <br></br>
                                        Number:<input type="text" name="t3" placeholder="Mobile Number"required/>
                                        <br></br>
                                        
                                        <input type="submit" value="REGISTER"/>
                                    </form>
                                    
					<p class="links"><a href="https://www.glsuniversity.ac.in/">Read More</a></p>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<?php
                include './theme/slider.php';
                ?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php
                include './theme/footer.php';
?>
<!-- end #footer -->
</body>
</html>

<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_theme";
        
$connection = mysqli_connect($host,$username,$passwd,$dbname);
if($_POST){
            
$name = $_POST['t1'];
$address = $_POST['ta'];
$email = $_POST['t2'];
$number = $_POST['t3'];
        
$q = mysqli_query($connection ,
"insert into tbl_theme(theme_name,theme_address,theme_email,theme_number)values('{$name}','{$address}','{$email}','{$number}')")or die("Error".mysqli_error($connection));
                                            
//$q = mysqli_query($connection,"INSERT INTO 'db_theme'.'tbl_theme' ('name', 'address', 'email', ) VALUES ('$name', '$address', '$email',)")or die("error".mysql_error($connectin));
//$q = "INSERT INTO `tbl_theme`(`theme_name`, `theme_address`, `theme_email`, `theme_number`) VALUES ('{$name}','{$address}','{$email}','{$number}')";
//$q = "INSERT INTO `tbl_theme`(`theme_name`, `theme_address`, `theme_email`, `theme_number`) VALUES ('$name','$address','$email','$number')";
        if($q){
            echo "<script>alert('Record added')</script>";
        }
        }
?>

