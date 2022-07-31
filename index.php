<?php 

include './inc/conn.php';
include './inc/form.php';

include './inc/select.php';
include './inc/db_close.php';

?>
<?php 

include_once './parts/header.php'; ?>
<div class="al">
    <div class=" position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center ">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center ">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <div class="texts">

                    <h1 class="display-4 fw-normal">Win with Amine</h1>
                    <p class="lead fw-normal">Remaining to open registration</p>
                </div>

                <p id="demo"></p>





                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Hey Guys !</li>
                    <li class="list-group-item">Register Now and You can win a good Trophy</li>
                    <li class="list-group-item">Take the opprtunity </li>
                    <li class="list-group-item">and you don't regret</li>
                </ul>

            </div>
        </div>
    </div>






    <div class="container">

        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center ">

        <section class="vh-100">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Enter your Informations
                                            here</p>

                                        <form class="mx-1 mx-md-4" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                                            <div class="error"><?php echo $errors['firstNameError'] ?></div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="text" name='firstName' id="firstName"
                                                        class="form-control" value="<?php echo $firstName ?>" />
                                                    <label class="form-label" for="firstName">Your FirstName</label>
                                                </div>
                                            </div>
                                            <div class="error"><?php echo $errors['lastNameError'] ?></div>

                                            <div class="d-flex flex-row align-items-center mb-4">

                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="text" name='lastName' id="lastName"
                                                        class="form-control" value="<?php echo $lastName ?>" />
                                                    <label class="form-label" for="lastName">Your LastName</label>
                                                </div>
                                            </div>
                                            <div class="error"><?php echo $errors['emailError'] ?></div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="email" name='email' id="email" class="form-control"
                                                        value="<?php echo $email ?>" /> <label class="form-label"
                                                        for="form3Example3c">Your Email</label>
                                                </div>
                                            </div>






                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                <button name='submit' type="submit"
                                                    class="btn btn-primary btn-lg">Submit</button>
                                            </div>

                                        </form>

                                    </div>
                                    <div
                                        class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                            class="img-fluid" alt="Sample image">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>



<!--
    <form >
        <input type='text'  id='firstName' placeholder="First Name">
        <input type='text'  id='lastName' placeholder="Last Name">
        <input type='text'  id='email' placeholder="Email">
        <input type='submit'   value="send">


    </form>

-->


<!--- Loader Pourcentage --->

<div class="preloader">
    <div class="preloader_inner"></div>
</div>

<div class="page">
</div>





<div class="footer">

    <!-- Button trigger modal -->
    <button type="button" id="winner" class="btn btn-outline-primary d-grid gap-2 col-6 mx-auto my-10">Choose The
        Winner</button>


    <!-- Modal -->

    <div class="modal fade" id="mod" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">The Winner Is :</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body display-1 text-center">
                    <?php foreach($users as $user)  : ?>

                    <?php echo (htmlspecialchars($user['firstName']). " ");  ?>
                    <?php echo (htmlspecialchars($user['lastName'])); ?>
                    <?php endforeach ?>
                </div>
            </div>


        </div>
    </div>
</div>





<!---            
<div id="cards" >
    <?php foreach($users as $user)  : ?> 
  
  <div class="card ">
  <div class="card-header">
    <?php echo (htmlspecialchars($user['firstName']). " ");  ?> <?php echo (htmlspecialchars($user['lastName'])); ?> 
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p><?php echo (htmlspecialchars($user['email'])); ?>   </p>
    </blockquote>
  </div>
   </div> <br><br><br>
  <?php endforeach ?>
    
  --->


<?php 

include_once './parts/footer.php'; ?>