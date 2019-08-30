<?php

// without inject
$controller = new UserController();
$controller->show(1);


// with inject
$userModel = new UserModel();
$userRepo = new UserRepo($userModel);
$userService = new UserService($userRepo);
$controller = new UserController();
$controller->show($userService, 1);
