<?php

use Carbon\Carbon;

class BaseModel extends Eloquent {


 // alternatively, you could change $utc = Carbon::... to $utc = Carbon\Carbon::...

	public function getCreatedAtAttribute($value)
	{
	    return $this->convertToLocalTimeZones($value);
	}

	public function getUpdatedAtAttribute($value)
	{

	    return $this->convertToLocalTimeZones($value);
	}

	private function convertToLocalTimeZones($value) 
	{

		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');	
	}
}
