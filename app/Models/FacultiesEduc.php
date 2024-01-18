<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FacultiesEduc
 * 
 * @property int $faculty_id
 * @property bool $has_unders
 * @property string|null $unders_enrolled
 * @property Carbon|null $unders_year_received
 * @property bool $has_masters
 * @property string|null $masters_enrolled
 * @property Carbon|null $masters_year_received
 * @property bool $has_doctors
 * @property string|null $doctors_enrolled
 * @property Carbon|null $doctors_year_received
 * @property int $academe_points
 *
 * @package App\Models
 */
class FacultiesEduc extends Model
{
	protected $table = 'faculties_educ';
	protected $primaryKey = 'faculty_id';
	public $timestamps = false;

	protected $casts = [
		'has_unders' => 'bool',
		'unders_year_received' => 'datetime',
		'has_masters' => 'bool',
		'masters_year_received' => 'datetime',
		'has_doctors' => 'bool',
		'doctors_year_received' => 'datetime',
		'academe_points' => 'int'
	];

	protected $fillable = [
		'has_unders',
		'unders_enrolled',
		'unders_year_received',
		'has_masters',
		'masters_enrolled',
		'masters_year_received',
		'has_doctors',
		'doctors_enrolled',
		'doctors_year_received',
		'academe_points'
	];
}
