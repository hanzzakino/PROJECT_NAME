<?php

namespace App\Models;

class Tasks {
    public static function all() {
        return [
            [
                'id'=> 0,
                'taskName'=>'ALPHA',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repudiandae tempore quod rerum iusto a beatae debitis earum laboriosam excepturi dolores tenetur quasi aperiam, atque quo nostrum nesciunt repellendus ipsum.'
            ],
            [
                'id'=> 1,
                'taskName'=>'BETA',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repudiandae tempore quod rerum iusto a beatae debitis earum laboriosam excepturi dolores tenetur quasi aperiam, atque quo nostrum nesciunt repellendus ipsum.'
            ],
            [
                'id'=> 2,
                'taskName'=>'GAMMA',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repudiandae tempore quod rerum iusto a beatae debitis earum laboriosam excepturi dolores tenetur quasi aperiam, atque quo nostrum nesciunt repellendus ipsum.'
            ],
            [
                'id'=> 3,
                'taskName'=>'DELTA',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repudiandae tempore quod rerum iusto a beatae debitis earum laboriosam excepturi dolores tenetur quasi aperiam, atque quo nostrum nesciunt repellendus ipsum.'
            ],
        ];
    }

    public static function find($id) {
        $tasks = self::all();

        foreach($tasks as $task) {
            if($task['id'] == $id){
                return $task;
            }
        }
    }


     
}