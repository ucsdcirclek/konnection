<?php

use LaravelBook\Ardent\Ardent;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

/**
 * Slide
 *
 * @property integer $id
 * @property string $title
 * @property string $body
 * @property string $link
 * @property integer $priority
 * @property string $image_file_name
 * @property integer $image_file_size
 * @property string $image_content_type
 * @property string $image_updated_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Slide whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Slide whereTitle($value) 
 * @method static \Illuminate\Database\Query\Builder|\Slide whereBody($value) 
 * @method static \Illuminate\Database\Query\Builder|\Slide whereLink($value) 
 * @method static \Illuminate\Database\Query\Builder|\Slide wherePriority($value) 
 * @method static \Illuminate\Database\Query\Builder|\Slide whereImageFileName($value) 
 * @method static \Illuminate\Database\Query\Builder|\Slide whereImageFileSize($value) 
 * @method static \Illuminate\Database\Query\Builder|\Slide whereImageContentType($value) 
 * @method static \Illuminate\Database\Query\Builder|\Slide whereImageUpdatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Slide whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Slide whereUpdatedAt($value) 
 */
class Slide extends Ardent implements StaplerableInterface
{

	use EloquentTrait;

	protected $guarded = array('id');

	public function __construct(array $attributes = array()) {
		$this->hasAttachedFile('image', []);

		parent::__construct($attributes);
	}

}
