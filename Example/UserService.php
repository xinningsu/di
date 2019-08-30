<?php
class UserService
{
    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function get($id)
    {
        $user = $this->userRepo->get($id);
        $user['full_name'] = $user['first_name'] . ' ' . $user['last_name'];

        return $user;
    }
}
