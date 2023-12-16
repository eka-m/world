<?php

namespace Eka\World\Models\Traits;

use Eka\World\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait CurrencyRelations
{
	/**
	 * @return BelongsTo
	 */
	public function country(): BelongsTo
	{
		return $this->belongsTo(Models\Country::class);
	}
}
