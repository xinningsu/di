<?php

class UserController
{
    public function show(UserService $userService, int $id)
    {
        $user = $userService->get($id);

        print_r($user);
    }

    public function show2(int $id, UserService $userService)
    {
        $user = $userService->get($id);

        print_r($user);
    }
}
