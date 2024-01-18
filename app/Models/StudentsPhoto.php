<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StudentsPhoto
 * 
 * @property int $student_id
 * @property string|null $image
 *
 * @package App\Models
 */
class StudentsPhoto extends Model
{
	protected $table = 'students_photos';
	protected $primaryKey = 'student_id';
	public $timestamps = false;

	protected $fillable = [
		'image'
	];
}
