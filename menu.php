<html>
<?php include "header.php";?>
<?php include "head.php";
include "connectdb.php";
    if (empty($_GET['status']))
    {
        $status="99";
        $check_inout="เข้าสู่ระบบ";
    }
    else
    {
        $Cus_User=$_GET['id'];
        $Cus_Status=$_GET['status'];
        $check_inout="ออกจากระบบ";
    }    
?>
<style>
.dropdown{
float:left;
margin-right:5px;
margin-left:5px;
}
.col-md-2{
left:0;
}
#pad{
	margin-left:73px;
}
</style>
<div class="container">
    <div class="row">
        <h4>
            Services
        </h4>
	
		<span style="display:inline-block" class="dropdown">
		<input type=text name=foo id=foo />
		</span>
		<span style="display:inline-block" class="dropdown">
		<input type=text name=bar id=bar />
		</span><br><br>
		<span style="display:inline-block" class="dropdown" id="pad">
		<input type=text name=bar id=bar />
		</span>
		<span style="display:inline-block" class="dropdown">
		<input type=text name=bar id=bar />
		</span><br><br><br>
        <div class="col-md-2">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4 class="text-center">
                        DEV PLAN</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>$10 / month</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Personal use</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
                </ul>
                <div class="panel-footer">
                    <a class="btn btn-lg btn-block btn-danger" href="http://www.jquery2dotnet.com">BUY NOW!</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="text-center">
                        PRO PLAN</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>$10 / month</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Personal use</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
                </ul>
                <div class="panel-footer">
                    <a class="btn btn-lg btn-block btn-info" href="http://www.jquery2dotnet.com">BUY NOW!</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="text-center">
                        FREE PLAN</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>$10 / month</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Personal use</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
                </ul>
                <div class="panel-footer">
                    <a class="btn btn-lg btn-block btn-success" href="http://www.jquery2dotnet.com">BUY
                        NOW!</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="text-center">
                        SILVER PLAN</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>$10 / month</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Personal use</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
                </ul>
                <div class="panel-footer">
                    <a class="btn btn-lg btn-block btn-primary" href="http://www.jquery2dotnet.com">BUY
                        NOW!</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4 class="text-center">
                        GOLD PLAN</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>$10 / month</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Personal use</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
                </ul>
                <div class="panel-footer">
                    <a class="btn btn-lg btn-block btn-warning" href="http://www.jquery2dotnet.com">BUY
                        NOW!</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">
                        PLAT PLAN</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>$10 / month</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Personal use</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
                </ul>
                <div class="panel-footer">
                    <a class="btn btn-lg btn-block btn-default" href="http://www.jquery2dotnet.com">BUY
                        NOW!</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
	<div class="row">
	 <div class="col-md-12 ">
	 <div class="table-responsive">
	  <h3 class="text-muted">รายการทั้งหมด</h3>
	 </div>
	 <table id="mytable" class="table table-boarded table-striped">
	  <tr class="text-center">
	  <td>No.</td>
	  <td>Order Name</td>
	  <td>Order Price</td>
	  <td>Action</td>
	  </tr>
	</table>
	</div>
	</div>
	</div><br>
	<center><input type="submit" value="Submit"></center>


</html>