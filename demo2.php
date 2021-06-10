<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="logo.png" type="image/icon type">
	<title>Result</title>
	<style type="text/css">
		.container
		{
			background-color: #F6C324;
            position: sticky;
            position: -webkit-sticky;
            top: 0px;
		}

        .colum
        {
            margin-top: -10%;
        }

        .col1
        {
        	font-family: sans-serif;
        }

        table
        {
        	margin-left: auto;
            margin-right: auto;
        }

        table,tr,th,td
        {
        	border: 2px solid black;
        	border-collapse: collapse;
        	padding: 5px;
        	color: white;
        }

        th
        {
        	background-color: green;
        }

        td
        {
        	background-color: #a35709;
        	text-align: center;
        }

        .colhead h2
        {
        	text-align: center;
        	font-family: sans-serif;
        	color: #a35709;
        	text-decoration-line: underline;
        	text-decoration-style: double;
        }

		ul 
		{
            list-style-type: none;
            margin-top: -1.2%;
            padding: 0;
            overflow: hidden;
            border: 1px solid #e7e7e7;
            background-color: #f1f1f1;
        }

        li a 
        {
            display: block;
            color: #666666;
            text-align: center;
            font-size: 20px;
            padding: 14px 22px;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
        }

        li a:hover:not(.active)
        {
            background-color: #a35709;
            color: white;
            font-weight: bold;
        }

        li a.active 
        {
            color: white;
            background-color: #4CAF50;
        }

        li button 
        {
            display: block;
            color: #666666;
            text-align: center;
            font-size: 20px;
            padding: 14px 22px;
            text-decoration: none;
            font-family: sans-serif;
            border: 0px;
        }

        li button:hover:not(.active)
        {
            background-color: #a35709;
            color: white;
            font-weight: bold;
        }

        li button.active 
        {
            color: white;
            background-color: #4CAF50;
        }

        .topnav .icon {
          display: none;
        }
        
        @media screen and (max-width: 600px) {
          .topnav li:not(:first-child) {display: none;}
          .topnav li.icon {
            float: right;
            display: block;
            position: relative;
          }
        }

        @media screen and (max-width: 600px) {
          .topnav.responsive {position: relative;}
          .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
          }
          .topnav.responsive li{
            float: left;
            display: block;
            width: 100%;
            text-align: left;
          }
          .icon i
          {
            float: right;
            cursor: pointer;
            font-size: 24px;
          }
        }
        .foot
        {
            background-color: #F6C324;
            padding-bottom: 1%;
            margin-bottom: -1%;
            text-align: center;
            color: #cc0000;
            font-weight: bold;
        }

        .foot h2
        {
            cursor: default;
        }

        .foot h2 a
        {
            text-decoration: none;
            color: #cc0000;
        }

        .foot h2 a:hover
        {
            text-decoration: underline;
        }

        .fa 
        {
            padding: 15px;
            font-size: 30px;
            width: 30px;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
        }

        .fa:hover 
        {
            opacity: 0.8;
        }

        .fa-facebook 
        {
            background: #3B5998;
            color: white;
            margin-right: 1%;
        }

        .fa-google 
        {
           background: #dd4b39;
           color: white;
           margin-right: 1%;
        }

        .fa-linkedin 
        {
           background: #007bb5;
           color: white;
           margin-right: 1%;
        }
        
        .fa-youtube 
        {
           background: #bb0000;
           color: white;
           margin-right: 1%;
        }

        .fa-instagram 
        {
           background: #125688;
           color: white;
           margin-right: 1%;
        }

        .remo
        {
        	display: none;
        }

        .rem
        {
        	display: none;
        }

    @media only screen and (max-width: 1205px)
    {
        .container
        {
            position: static;
            position: -webkit-static;
        }
        .column img
        {
            width: 15%;
        }

        table,th,td
        {
            padding: 0px;
        }

        .column
        {
            padding-left: 25%;
        }

        .colum
        {
            margin-top: -2%;
        }
        .content
        {
            display: none;
        }

        .rem
        {
           display: contents;
        }

        .re
        {
        	display: none;
        }
    }

    @media only screen and (max-width: 535px)
    {

        table,th,td
        {
            padding: 0px;
        }

    	.remo
    	{
    		display: contents;
    	}

    	.rem
    	{
    		display: none;
    	}

    	.re
    	{
    		display: none;
    	}
    }

    @media only screen and (max-width: 600px)
    {
        .column img 
        {
            width: 25%;
        }
    }

    @media (orientation: Landscape)
    {
        table,th,td {
            padding: 10px;
        }
    }

</style>

</head>
<body style="margin: 0; overflow-x: hidden;" onload="abc()">
    <div class="container">
        <div class="column">
        	<img src="logo.png" style="padding-left: 25%; padding-top: 1.5%;" width="7%" alt="VEC Logo">
        </div>
        <div class="colum" style="cursor: default;">
            <h1 style="color: #a35709; text-align: center; font-weight: bold; padding-top: 1%;">Velammal Engineering College</h1>
     	    <h3 style="color: white; text-align: center; font-family: sans-serif; margin: -1.35%;"><em>The Wheel of Knowledge rolls on!</em></h3>
     	    <h3 style="color: white; text-align: center; font-family: sans-serif;">(An Autonomous Institution)</h3>
     	    <h3 style="color: white; text-align: center; font-family: sans-serif; margin-top: -1%;">Affilliated to Anna University, Chennai</h3>
            <h3 style="color: white; text-align: center; font-family: sans-serif;margin-top: -1%; padding-bottom: 1%;">& Approved by AICTE, New Delhi</h3>
        </div>
    <ul class="topnav" id="myTopnav">
        <li style="float: left;" class="active"><a href="index.html">Home</a></li>
        <li style="float: left;"><a href="college.html">College</a></li>
        <li style="float: left;"><a href="academics.html">Academics</a></li>
        <li style="float: left;"><a href="COE.html">COE</a></li>
        <li style="float: left;"><a href="research.html">Research</a></li>
        <li style="float: left;"><a href="placement.html">Placement</a></li>
        <li style="float: left;"><a href="services.html">Services</a></li>
        <li style="float: left;"><a href="alumni.html">Alumni</a></li>
        <li style="float: left;"><a href="gallery.html">Gallery</a></li>
        <li style="float: left;"><a href="studlog.html">Student Login</a></li>
        <li style="float: left;"><a href="contact.html">Contact Us</a></li>
        <li style="float: left;"><a href="about.html">About</a></li>
        <li href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
        </li>
    </ul>
    </div>

    <div class="colhead">
    	<h2>Exam Result</h2>
    </div>

    <div class="col1">
    <?php 
   $conn=mysqli_connect("sql313.epizy.com","epiz_26842594","O0bXrbwnohm","epiz_26842594_blogdb");
   if(!$conn)
   {
      die('Error in connecting database'.mysql_error());
   }
   mysqli_select_db($conn,"epiz_26842594_blogdb");
   $univ=intval($_POST['Univ']);
   $result=mysqli_query($conn,"SELECT * FROM stud WHERE univ=$univ",);
   if($row=mysqli_fetch_array($result))
   {
    	echo '<table>';
    		echo '<tr>';
    			echo '<th colspan="9">'.$row['name'].'</th>';
    		echo '</tr>';
    		echo '<tr>';
    			echo '<th colspan="5">Univ. No: 112330'.$row['univ'].'</th>';
    			echo '<th colspan="4">DOB: '.$row['dob'].'</th>';
    		echo '</tr>';
    		echo '<tr class="re">';
    			echo '<th></th>';
    			echo '<th>Semester-1</th>';
    			echo '<th>Semester-2</th>';
    			echo '<th>Semester-3</th>';
    			echo '<th>Semester-4</th>';
    			echo '<th>Semester-5</th>';
    			echo '<th>Semester-6</th>';
    			echo '<th>Semester-7</th>';
    			echo '<th>Semester-8</th>';
    		echo '</tr>';
    		echo '<tr class="rem">';
    			echo '<th></th>';
    			echo '<th>Sem-1</th>';
    			echo '<th>Sem-2</th>';
    			echo '<th>Sem-3</th>';
    			echo '<th>Sem-4</th>';
    			echo '<th>Sem-5</th>';
    			echo '<th>Sem-6</th>';
    			echo '<th>Sem-7</th>';
    			echo '<th>Sem-8</th>';
    		echo '</tr>';
    		echo '<tr class="remo">';
    			echo '<th></th>';
    			echo '<th>S1</th>';
    			echo '<th>S2</th>';
    			echo '<th>S3</th>';
    			echo '<th>S4</th>';
    			echo '<th>S5</th>';
    			echo '<th>S6</th>';
    			echo '<th>S7</th>';
    			echo '<th>S8</th>';
    		echo '</tr>';
            echo '<tr>';
    			echo '<th>BEE&CE /ECE /BEEE</th>';
    			echo '<td>'.$row['s11'].'</td>';
    			echo '<td>'.$row['s12'].'</td>';
    			echo '<td>'.$row['s13'].'</td>';
    			echo '<td>'.$row['s14'].'</td>';
    			echo '<td>'.$row['s15'].'</td>';
    			echo '<td>'.$row['s16'].'</td>';
    			echo '<td>'.$row['s17'].'</td>';
    			echo '<td>'.$row['s18'].'</td>';
    		echo '</tr>';
    		echo '<tr>';
    			echo '<th>Subject-2</th>';
    			echo '<td>'.$row['s21'].'</td>';
    			echo '<td>'.$row['s22'].'</td>';
    			echo '<td>'.$row['s23'].'</td>';
    			echo '<td>'.$row['s24'].'</td>';
    			echo '<td>'.$row['s25'].'</td>';
    			echo '<td>'.$row['s26'].'</td>';
    			echo '<td>'.$row['s27'].'</td>';
    			echo '<td>'.$row['s28'].'</td>';
    		echo '</tr>';
            echo '<tr>';
                echo '<th>Subject-3</th>';
                echo '<td>'.$row['s31'].'</td>';
                echo '<td>'.$row['s32'].'</td>';
                echo '<td>'.$row['s33'].'</td>';
                echo '<td>'.$row['s34'].'</td>';
                echo '<td>'.$row['s35'].'</td>';
                echo '<td>'.$row['s36'].'</td>';
                echo '<td>'.$row['s37'].'</td>';
                echo '<td>'.$row['s38'].'</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>Subject-4</th>';
                echo '<td>'.$row['s41'].'</td>';
                echo '<td>'.$row['s42'].'</td>';
                echo '<td>'.$row['s43'].'</td>';
                echo '<td>'.$row['s44'].'</td>';
                echo '<td>'.$row['s45'].'</td>';
                echo '<td>'.$row['s46'].'</td>';
                echo '<td>'.$row['s47'].'</td>';
                echo '<td>'.$row['s48'].'</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>Subject-5</th>';
                echo '<td>'.$row['s51'].'</td>';
                echo '<td>'.$row['s52'].'</td>';
                echo '<td>'.$row['s53'].'</td>';
                echo '<td>'.$row['s54'].'</td>';
                echo '<td>'.$row['s55'].'</td>';
                echo '<td>'.$row['s56'].'</td>';
                echo '<td>'.$row['s57'].'</td>';
                echo '<td>'.$row['s58'].'</td>';
            echo '</tr>';    		
            echo '<tr>';
                echo '<th>Subject-6</th>';
                echo '<td>'.$row['s61'].'</td>';
                echo '<td>'.$row['s62'].'</td>';
                echo '<td>'.$row['s63'].'</td>';
                echo '<td>'.$row['s64'].'</td>';
                echo '<td>'.$row['s65'].'</td>';
                echo '<td>'.$row['s66'].'</td>';
                echo '<td>'.$row['s67'].'</td>';
                echo '<td>'.$row['s68'].'</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>Subject-7</th>';
                echo '<td>'.$row['s71'].'</td>';
                echo '<td>'.$row['s72'].'</td>';
                echo '<td>'.$row['s73'].'</td>';
                echo '<td>'.$row['s74'].'</td>';
                echo '<td>'.$row['s75'].'</td>';
                echo '<td>'.$row['s76'].'</td>';
                echo '<td>'.$row['s77'].'</td>';
                echo '<td>'.$row['s78'].'</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>Subject-8</th>';
                echo '<td>'.$row['s81'].'</td>';
                echo '<td>'.$row['s82'].'</td>';
                echo '<td>'.$row['s83'].'</td>';
                echo '<td>'.$row['s84'].'</td>';
                echo '<td>'.$row['s85'].'</td>';
                echo '<td>'.$row['s86'].'</td>';
                echo '<td>'.$row['s87'].'</td>';
                echo '<td>'.$row['s88'].'</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>Total GPA</th>';
                echo '<td>'.$row['s91'].'</td>';
                echo '<td>'.$row['s92'].'</td>';
                echo '<td>'.$row['s93'].'</td>';
                echo '<td>'.$row['s94'].'</td>';
                echo '<td>'.$row['s95'].'</td>';
                echo '<td>'.$row['s96'].'</td>';
                echo '<td>'.$row['s97'].'</td>';
                echo '<td>'.$row['s98'].'</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>Total CGPA</th>';
                echo '<td>'.$row['s101'].'</td>';
                echo '<td>'.$row['s102'].'</td>';
                echo '<td>'.$row['s103'].'</td>';
                echo '<td>'.$row['s104'].'</td>';
                echo '<td>'.$row['s105'].'</td>';
                echo '<td>'.$row['s106'].'</td>';
                echo '<td>'.$row['s107'].'</td>';
                echo '<td>'.$row['s108'].'</td>';
            echo '</tr>';
    	echo '</table>';
       }
       else
       {
    	echo '<table>';
    		echo '<tr>';
    			echo '<th colspan="9">Name</th>';
    		echo '</tr>';
    		echo '<tr>';
    			echo '<th colspan="5">Univ. NO : </th>';
    			echo '<th colspan="4">DOB : </th>';
    		echo '</tr>';
    		echo '<tr class="re">';
    			echo '<th></th>';
    			echo '<th>Semester-1</th>';
    			echo '<th>Semester-2</th>';
    			echo '<th>Semester-3</th>';
    			echo '<th>Semester-4</th>';
    			echo '<th>Semester-5</th>';
    			echo '<th>Semester-6</th>';
    			echo '<th>Semester-7</th>';
    			echo '<th>Semester-8</th>';
    		echo '</tr>';
    		echo '<tr class="rem">';
    			echo '<th></th>';
    			echo '<th>Sem-1</th>';
    			echo '<th>Sem-2</th>';
    			echo '<th>Sem-3</th>';
    			echo '<th>Sem-4</th>';
    			echo '<th>Sem-5</th>';
    			echo '<th>Sem-6</th>';
    			echo '<th>Sem-7</th>';
    			echo '<th>Sem-8</th>';
    		echo '</tr>';
    		echo '<tr class="remo">';
    			echo '<th></th>';
    			echo '<th>S1</th>';
    			echo '<th>S2</th>';
    			echo '<th>S3</th>';
    			echo '<th>S4</th>';
    			echo '<th>S5</th>';
    			echo '<th>S6</th>';
    			echo '<th>S7</th>';
    			echo '<th>S8</th>';
    		echo '</tr>';
            echo '<tr>';
    			echo '<th>BEE&CE /ECE /BEEE</th>';
    			echo '<td></td>';
    			echo '<td></td>';
    			echo '<td></td>';
    			echo '<td></td>';
    			echo '<td></td>';
    			echo '<td></td>';
    			echo '<td></td>';
    			echo '<td></td>';
    		echo '</tr>';
    		echo '<tr>';
    			echo '<th>Subject-2</th>';
    			echo '<td></td>';
    			echo '<td></td>';
    			echo '<td></td>';
    			echo '<td></td>';
    			echo '<td></td>';
    			echo '<td></td>';
    			echo '<td></td>';
    			echo '<td></td>';
    		echo '</tr>';
            echo '<tr>';
                echo '<th>Subject-3</th>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>Subject-4</th>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>Subject-5</th>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
            echo '</tr>';    		
            echo '<tr>';
                echo '<th>Subject-6</th>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>Subject-7</th>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>Subject-8</th>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>Total GPA</th>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>Total CGPA</th>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
            echo '</tr>';
    	echo '</table>';
       }
       mysqli_close($conn);
   ?>
    </div>
    <br>

<div class="foot">
    <span><hr style="height: 3px; margin-top: 0%; background-color: #a35709;"></span>
    <h2>Follow Us!</h2>
    <a href="https://www.facebook.com/velammalengineeringcollege" target="_blank" class="fa fa-facebook"></a>
    <a href="http://www.velammal.edu.in" target="_blank" class="fa fa-google"></a>
    <a href="https://www.linkedin.com/school/velammal-engineering-college/" target="_blank" class="fa fa-linkedin"></a>
    <a href="https://www.youtube.com/channel/UC10EVvADTccFuSu2hGrH9vw/" target="_blank" class="fa fa-youtube"></a>
    <a href="https://www.instagram.com/vecchennai/" target="_blank" class="fa fa-instagram"></a>
    <h2>Registered &#174; 2021 Velammal Engineering College. All Rights Reserved. Powered By <a href="http://sbmhss.000webhostapp.com">Sinehan</a></h2>
</div>

<script>
  function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function abc()
{
    alert("View in Landscape for Better Experience!");
}

function show()
{
    alert("University Number is wrong!!!")
}
</script>

</body>
</html>