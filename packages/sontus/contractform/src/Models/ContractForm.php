<?php

namespace Sontus\Contractform\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractForm extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','subject','message'];
}
