<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
     @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

body {
    background: -webkit-linear-gradient(left, #333, rgb(177,177,177));
    font-family: 'Calibri', sans-serif !important
}

.container {
    margin-top: 100px
}

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid transparent;
    border-radius: 0px
}
}

.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem
}

.card .card-title {
    position: relative;
    font-weight: 600;
    margin-bottom: 10px
}

.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent
}

* {
    outline: none
}

.table th,
.table thead th {
    font-weight: 500
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6
}

.table th {
    padding: 1rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6
}

.table th,
.table thead th {
    font-weight: 500
}

th {
    text-align: inherit
}

.m-b-20 {
    margin-bottom: 20px
}

.customcheckbox {
    display: block;
    position: relative;
    padding-left: 24px;
    font-weight: 100;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.customcheckbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer
}

.checkmark {
    position: absolute;
    top: -3px;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #CDCDCD;
    border-radius: 6px
}

.customcheckbox input:checked~.checkmark {
    background-color: #2196BB
}

.customcheckbox .checkmark:after {
    left: 8px;
    top: 4px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg)
}
    </style>
<?php
include('../db_connect.php');
if (isset($_SESSION['admin'])){
$query="select * from employees e,role r where e.role=r.rid and (e.role=2 or e.role=5);";
$result=mysqli_query($conn,$query);?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title m-b-0">Employees</h5>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th><a class="btn btn-dark ms-3" href="createemployee.php">Create new</a></th>
                                <th scope="col">Name</th>
                                <th scope="col">email</th>
                                <th scope="col">phone</th>
                                <th scope="col">role</th>
                            </tr>
                        </thead>
                        <tbody class="customtable">
                            <?php while ($row=mysqli_fetch_object($result)):?>
                            <tr>
                                <th> <label class="customcheckbox"><a class="btn btn-success me-1" href=editemployee.php?eid="<?php echo $row->eid;?>">edit </a>
                                <a class="btn btn-danger me-1" href=deleteemployee.php?eid="<?php echo $row->eid;?>">Delete</a></th>
                                <td><?=$row->ename.'  '.$row->esurname?></td>
                                <td><?=$row->eemail?></td>
                                <td><?=$row->ephone?></td>
                                <td><?=$row->rname?></td>
                            </tr>
                            <?php endwhile;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } else include('formlogin.html'); ?>