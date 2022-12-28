<?php include('h.php');?>
<div class="col-md-10">
<form  name="register" action="web/admin_form_add_db.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2">  </div>
    <div class="col-sm-6" align="left">
      
      <h4> สมัครสมาชิก </h4><hr>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2" align=""> Username :</div>
    <div class="col-sm-6" align="left">
      <input  name="a_user" type="text" required class="form-control" />  
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2" align=""> Password :</div>
    <div class="col-sm-6" align="left">
      <input  name="a_pass" type="password" required class="form-control" id="m_pass"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align=""> ชื่อ-สกุล :</div>
    <div class="col-sm-6" align="left">
      <input  name="a_name" type="text" required class="form-control" id="m_name" placeholder="ภาษาอังกฤษหรือภาษาไทย" />
    </div>
  </div>
    
  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-sm-6" align="right">
      <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-saved"></span> สมัครสมาชิก  
      </button> <a href="index.php" type="button" class="btn btn-danger" id="btn"><span class="glyphicon glyphicon-saved"></span> ยกเลิก  </a>
    </div>
    
  </div>
</form>
</div>