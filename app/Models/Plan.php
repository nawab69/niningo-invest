<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function updateByMonth($arr)
    {
        $m = self::where('month',$arr['month'])->first();
        try{
            $m->update($arr);
        }catch(Exception $exception){
            return null;
        }

    }
}
