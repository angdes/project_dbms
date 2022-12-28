<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="index.php">หน้าหลัก</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
            &nbsp;
            <div class="nav-item active">
              <a class="nav-link" href="admin_form_add.php">สมัครสมาชิก</a>
            </div>
            &nbsp;
            
            <?php
            if ($member_id!='') {
            
            } else {
            ?>
            <div class="nav-item active">
              <a class="nav-link" href="form_login.php">เข้าสู่ระบบ</a>
            </div>
            <?php } ?>
      <li class="nav-item active">
        <a class="nav-link" href="https://www.facebook.com/fdafee.fkhadafee">ช่องทางติดต่อ</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="index.php" method="GET">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>