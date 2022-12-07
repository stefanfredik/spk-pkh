<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<?= $this->include("temp/layout/head"); ?>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?= $this->include("temp/layout/nav"); ?>

    <?= $this->include("temp/layout/sidebar"); ?>

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?= $title; ?></h1>
            </div>
            <?= $this->include("/temp/layout/breadcrumb"); ?>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="container-fluid">
          <?= $this->renderSection("content"); ?>
        </div>
      </div>
    </div>

    <?= $this->include("temp/layout/footer"); ?>
  </div>
  <?= $this->include("temp/layout/script"); ?>
</body>

</html>