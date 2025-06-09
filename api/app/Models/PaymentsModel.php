<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentsModel extends Model
{
    use HasFactory;

    protected $table = 'payments'; 

    protected $fillable = [
        'amount',
        'month',
        'price', 
    ];


    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 10, 2);
            $table->string('month');
            $table->timestamps();
        });
    }
}
