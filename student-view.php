?php 
require 'dbcon.php'; 
?> 
<!doctype html> 
<html lang="pt-BR"> 
<head> 
<!-- Required meta tags -> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<!-- Bootstrap CSS --> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
<title>Detalhes do aluno</title> 
</head> 
<body> 
<div class="container mt-5"> 
<div class="row"> 
<div class="col-md-12"> 
<div class="card"> 
<div class="card-header"> 
float-end">VOLTAR</a> 
<h4>Dados do aluno 
<a href="index.php" class="btn btn-danger 
</h4> 
</div> 
<div class="card-body"> 
<?php 
if(isset($_GET['id'])) 
{ 
$student_id = mysqli_real_escape_string($con, $_GET['id']); 
= 
$query "SELECT * FROM students WHERE id='$student_id' "; $query_run = mysqli_query($con, $query); if(mysqli_num_rows($query_run) > 0) 
{ 
$student 
?> 
= 
mysqli_fetch_array($query_run);} 
else 
{ 
} 
<div class="mb-3"> 
<label>Nome</label> 
<p class="form-control"> 
</p> 
</div> 
<?=$student['name']; ?> 
<div class="mb-3"><label>Email</label> 
<p class="form-control"> 
</p> 
</div> 
<?=$student['email']; ?> 
<div class="mb-3"> 
<label>Telefone</label> 
<p class="form-control"> 
</p> 
</div> 
<?=$student['phone']; ?> 
<div class="mb-3"> 
<label>Curso</label> 
<p class="form-control"> 
<?=$student['course']; ?> 
</p> 
</div> 
<?php 
echo "<h4>Nenhum ID encontrado</h4>"; 
} 
?> 
</div> 
</div> 
</div> 
</div> 
</div> 
<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
</body> </html> 