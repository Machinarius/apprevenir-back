<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class EnabledTest extends Model
{
    protected $table = 'enabled_tests';

    protected $fillable = [
      'test_id',
      'user_id'
    ];

    public function test() {
      return $this->hasOne(Test::class);
    }

    public function user() {
      return $this->hasOne(User::class);
    }
}