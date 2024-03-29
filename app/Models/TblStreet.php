<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 17 Oct 2017 21:39:31 +0800.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblStreet
 * 
 * @property int $street_id
 * @property string $street_name
 * @property int $street_area
 * @property bool $street_exists
 * 
 * @property \App\Models\TblArea $tbl_area
 * @property \Illuminate\Database\Eloquent\Collection $tbl_incidents
 * @property \Illuminate\Database\Eloquent\Collection $tbl_residents
 *
 * @package App\Models
 */
class TblStreet extends Eloquent
{
	protected $table = 'tbl_street';
	protected $primaryKey = 'street_id';
	public $timestamps = false;

	protected $casts = [
		'street_area' => 'int',
		'street_exists' => 'bool'
	];

	protected $fillable = [
		'street_name',
		'street_area',
		'street_exists'
	];

	public function tbl_area()
	{
		return $this->belongsTo(\App\Models\TblArea::class, 'street_area');
	}

	public function tbl_incidents()
	{
		return $this->hasMany(\App\Models\TblIncident::class, 'incident_street');
	}

	public function tbl_residents()
	{
		return $this->hasMany(\App\Models\TblResident::class, 'resident_street');
	}
}
