<?php

namespace Eka\World\Models;

use Eka\World\Models\Traits\CountryRelations;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	use CountryRelations;

	protected $guarded = [];

	public $timestamps = false;

	/**
	 * Get the table associated with the model.
	 *
	 * @return string
	 */
	public function getTable(): string
	{
		return config('world.migrations.countries.table_name', parent::getTable());
	}
}
