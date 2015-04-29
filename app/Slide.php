<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Slide extends Model implements StaplerableInterface
{

    use EloquentTrait;

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('image', []);

        parent::__construct($attributes);
    }

	protected $guarded = array('id');

}
