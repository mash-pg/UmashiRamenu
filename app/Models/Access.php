<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    use HasFactory;
    protected $table = 'access';
    /**
     * postコードを合わせて返す
     * @return string
    */
    public function getZipCodeAttribute(){
        return sprintf('%s-%s',
                        $this->post_number_1,
                        $this->post_number_2
        );
    }
}
