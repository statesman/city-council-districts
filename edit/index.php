<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
<?php session_start(); ?>
<head>
  <meta charset="utf-8">

<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />


  <title>Candiate Edit Index</title>

  <link rel="stylesheet" href="../../../foundation/css/normalize.css">
  <link rel="stylesheet" href="../../../foundation/css/foundation.css">
  <script src="../../../foundation/js/vendor/custom.modernizr.js"></script>

<style type="text/css">
  table {border: none; width:100%; margin-bottom: inherit;}
  table tr td {padding: 0;}
  input[type="text"] {height:inherit !important}
  form#caspioform p {font-size: 0.875rem !important;line-height: 1.125rem !important;}
  h2 {font-size: 1.5rem;}

</style>

</head>
<body>

<?php include "nav.php" ?>


<div class="row">
  <div class="large-12 large-centered medium-centered columns">
    <h1>Candidate database management</h1>
  </div>
</div>

<div class="row">
  <div class="large-7 medium-7 columns">
    <h3>Candidates</h3>
      <ul>
        <li><a href="candidate_add.php">Add candidate</a></li>
        <li><a href="candidate_edit.php">Edit candidate</li>
      </ul>
    <h3>Finance reports</h3>
      <ul>
        <li><a href="finance_add.php">Add finance report</a></li>
        <li><a href="finance_edit.php">Edit finance report</a></li>
      </ul>
    <h3>Candidate surveys</h3>
    <ul>
      <li><a href="survey_edit.php">Edit candidate survey</a></li>
    </ul>
  </div>
  <div class="large-5 medium-5 panel columns">
    <h3>How it works</h3>
    <p>Candidates and finance reports are separate tables, so you have to create a candidate first before you can add a new finance report. But <strong>before you add a candidate</strong>, make sure they aren't already there by searching using the <a href="candidate_edit.php">Edit Candidate</a> page.</p>
  </div>
</div>

<hr>


 
          <script src="../../../foundation/js/vendor/jquery.js"></script>
          <script src="../../../foundation/js/foundation.min.js"></script>
          <script>
            $(document).foundation();
          </script>

<?php include "../../../common/footer.php"; ?>
</body>
</html>