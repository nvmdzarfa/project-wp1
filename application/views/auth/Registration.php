<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;600;700;800;900&family=Pacifico&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <div class="wrapper">
            <form method="post" action="<?= base_url('auth/registration') ?>">
                <h1>Registration</h1>
                <div class="input-box">
                    <input type="text" name="name" placeholder="Full Name" value="<?= set_value('name') ?>">
                    <i class='bx bxs-user' ></i>
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                    <i class='bx bxs-envelope'></i>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="input-box">
                    <input type="password" name="password" placeholder="Password">
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <button type="submit" name="registerUser" class="btn">Register</button>

                <div class="link">
                    <p>Already have an account? <a href="<?= base_url('auth'); ?>">Login</a></p>
                </div>
            </form>
        </div>
    </section>
</body>