<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

</head>
<body>
<p>localStorage & sessionStorage</p>
Input your name <input type="text" id="txtName" name="txtName"> <br />
Input your email <input type="text" id="txtEmail" name="txtEmail"> <br /><br />
<input type="button" id="btnNext" value="Next">
</body>
<script type="text/javascript">
$(document).ready(function(){
	
	// validate support storage
	if(typeof(Storage) == "undefined") {    
		alert("Not storage support");
	}
	
	// button click
	$("#btnNext").click(function(){
		
		// set storage
		localStorage.setItem("sName", $("#txtName").val());
		localStorage.setItem("sEmail", $("#txtEmail").val());
		
		window.location="2.php";
	});
});
</script>
</html>