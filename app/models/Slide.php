<?php

use LaravelBook\Ardent\Ardent;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Slide extends Ardent implements StaplerableInterface
{

	use EloquentTrait;

	protected $guarded = array('id');

	public function __construct(array $attributes = array()) {
		$this->hasAttachedFile('image', null);

		parent::__construct($attributes);
	}

}
