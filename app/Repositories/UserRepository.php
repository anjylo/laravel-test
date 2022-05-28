<?php 

namespace App\Repositories;

class UserRepository
{
    public function getAll()
    {
        return [
            [
                "id" => 1,
                "firstname" => "jon",
                "lastname" => "doe",
                "username" => "jd",
                "email" => "jd@mail.com"
            ],
            [
                "id" => 2,
                "firstname" => "mark",
                "lastname" => "smith",
                "username" => "ms",
                "email" => "ms@mail.com"
            ]
        ];
    }
}