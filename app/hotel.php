<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    //
	 Schema::create('hotels', function (Blueprint $table) {
	 $table->increments('id');
	 $table->string('foto')->nullable();
	 $table->string('pasilitas');
	 $table->text('spesifikasi');
	 $table->string('harga_sewa');
	 $table->timestamps	
}
