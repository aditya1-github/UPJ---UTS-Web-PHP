<?php
	$page_title = 'My Page';//Names page and <h1>
	//$thisPage='mypage';//Gives the page an indentifier
	include ('./includes/header.html');
    include ('./includes/connection.php');
?>
<!-- Content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php
            $query = mysqli_query($conn,"select * from tblm_test");
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['age']; ?></td>
        </tr>
        <?php 
            }
        ?>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



<!-- Content ends -->
<?php
	include ('./includes/footer.html');
?>