<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StudentsClass
 * 
 * @property int $sc_id
 * @property Carbon|null $date_enrolled
 * @property int $student_id
 * @property int $class_id
 *
 * @package App\Models
 */
class StudentsClass extends Model
{
	protected $table = 'students_classes';
	protected $primaryKey = 'sc_id';
	public $timestamps = false;

	protected $casts = [
		'date_enrolled' => 'datetime',
		'student_id' => 'int',
		'class_id' => 'int'
	];

	protected $fillable = [
		'date_enrolled',
		'student_id',
		'class_id'
	];
}
