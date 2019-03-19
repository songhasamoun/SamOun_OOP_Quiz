<div class="card">
    <div class="card-body bg-dark ">
    <h4 class="text-center text-light">Result</h4>
    <ul class="list-group">
<?php 
    include_once "src/GetInformation.php";

    if(isset($_POST['btn-submit'])) {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $province = $_POST['province'];
        $email = $_POST['email'];
        $person = new GetInformation($name, $gender, $province, $email);
    ?>
    <li class="list-group-item"><b>Name:</b> <?php echo $person->getName() ?></li>
    <li class="list-group-item"><b>Gender:</b> <?php echo $person->getGender() ?></li>
    <li class="list-group-item"><b>Province:</b> <?php echo $person->getProvince() ?></li>
    <li class="list-group-item"><b>Email:</b> <?php echo $person->getEmail() ?></li>
<?php 
    }
?>  
    </ul>
    </div>
</div>
