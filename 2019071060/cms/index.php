<?php
	$page_title = 'My Page';//Names page and <h1>
	$thisPage='mypage';//Gives the page an indentifier
	include ('./includes/header.html');
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
          Hai ini halaman home

          <h1><?php echo $page_title ?></h1>
<p>Bacon ipsum dolor amet pork loin pancetta filet mignon strip
	steak salami sirloin pork doner. Rump porchetta bresaola, spare
	ribs ball tip brisket t-bone shankle chicken. Shankle prosciutto
	chuck, shoulder bacon flank short ribs pork chop kielbasa pig
	cupim. Tri-tip landjaeger pancetta pork, chuck t-bone biltong ham
	pork loin. Turkey tail chuck, shank bresaola capicola corned beef
	short loin. Shoulder picanha kielbasa, andouille leberkas tongue
	doner jerky ham hock sausage cupim frankfurter rump spare ribs pork
	belly.
</p>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



<!-- Content ends -->
<?php
	include ('./includes/footer.html');
?>