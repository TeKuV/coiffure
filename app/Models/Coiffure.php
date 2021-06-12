<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coiffure extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function image(){
        $image = Image::select('images.*')
                    ->join('coiffures', 'images.id_coiffure', '=', 'coiffures.id')
                    ->where('coiffures.id', $this->id)
                    ->limit(1)
                    ->get()[0];
        // dd($image);
        return $image;
    }

    public function images(){
        $images = Image::select('images.*')
                    ->join('coiffures', 'images.id_coiffure', '=', 'coiffures.id')
                    ->where('coiffures.id', $this->id)
                    ->get();

        return $images;
    }

    public function category(){
        $category = Category::select('categories.*')
                            ->join('coiffures', 'categories.id', '=', 'id_category')
                            ->where('coiffures.id', $this->id)
                            ->get()[0];
        return $category;
    }
}
