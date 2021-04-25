<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    
    public function addNews()
    {
        $title = $_POST['title'];
        $description=$_POST['description'];
        $photo=$_POST['photo'];

        $conn =mysqli_connect('localhost','root','','lab8');

        DB::insert('insert into users (title, description,photo) values (?, ?,?)', array($title,$description,$photo)); 
        // $sql="INSERT INTO newsletters (title,description,photo) values('$title','$description','$photo')";
    
    }

}
