<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{




    protected $fillable = [
        'category_id',
        'brand_id',
        'product_name',
        'product_slug',
        'product_code',
        'product_quantity',
        'short_description',
        'long_description',
        'price',
        'image_one',
        'image_two',
        'image_three',
        'status',
    ];

    public function category(){

        return $this->belongsTo(Category::class,'category_id');
    }

    public function scopeSearch($query,$keyword){

        $query->where('product_name','Like','%'.$keyword.'%')->paginate(3);
        return $query;

    }

//    protected $table = 'products';
//
//    protected $guarded = [
//        'id'
//    ];
//
//    protected $appends = [
//        'image_url'
//    ];
//
//    public $timestamps = true;
//
//    public function getPriceAttribute($value){
////        $newForm = "$".$value;
////        return $newForm;
//        return $value;
//
//    }
//
//    public function getImageUrlAttribute()
//    {
//        return url("/storage/product_images") . "/" . $this->attributes['image'];
//    }
////    public function getPriceAttribute($value){
////        $newForm = "تومان".$value;
////        return $newForm;
////
////    }
//
//    public function category(Type $var = null)
//    {
//        return $this->belongsTo(Category::class, 'category_id');
//    }
//
//    public function brand(Type $var = null)
//    {
//        return $this->belongsTo(Brand::class, 'brand_id');
//    }
}
