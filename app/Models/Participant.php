<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = ['author_id', 'name', 'email', 'x', 'y', 'z', 'w'];

    public function getIntelligent()
    {
        return ($this->x * 0.4 + $this->y * 0.6) / 2;
    }

    public function getIntelligentRate()
    {
        return round((($this->getIntelligent() - 0.5) / 13) * 4 + 1);
    }

    public function getNumeric()
    {
        return ($this->z * 0.3 + $this->w * 0.7) / 2;
    }

    public function getNumericRate()
    {
        return round((($this->getNumeric() - 0.5) / 6.75) * 4 + 1);
    }
}
