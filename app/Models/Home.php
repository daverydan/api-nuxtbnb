<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    use HasFactory;

    public function getFeatures()
    {
        return DB::table('features')
            ->select('features.name')
            ->join('feature_home', 'features.id', '=', 'feature_home.feature_id')
            ->where('feature_home.home_id', $this->id)
            ->get()
            ->pluck('name');
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
