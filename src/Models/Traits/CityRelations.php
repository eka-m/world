<?php

namespace Eka\World\Models\Traits;

use Eka\World\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait CityRelations
{
	/**
	 * @return BelongsTo
	 */
	public function country(): BelongsTo
	{
		return $this->belongsTo(Models\Country::class);
	}

	/**
	 * @return BelongsTo
	 */
	public function state(): BelongsTo
	{
		return $this->belongsTo(Models\State::class);
	}
}
