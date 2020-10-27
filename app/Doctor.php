<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function scopeFilter($query, $params)
    {

    	if ( isset($params['name']) && trim($params['name'] !== '') ) {
            $query->where('name', 'LIKE', trim($params['name']) . '%');
        }

        if ( isset($params['firstname']) && trim($params['firstname'] !== '') ) {
            $query->where('firstname', 'LIKE', trim($params['firstname']) . '%');
        }

        if ( isset($params['email']) && trim($params['email'] !== '') ) {
            $query->where('email', 'LIKE', trim($params['email']) . '%');
        }

        if ( isset($params['phone_number']) && trim($params['phone_number'] !== '') ) {
            $query->where('phone_number', 'LIKE', trim($params['phone_number']) . '%');
        }

        if ( isset($params['country']) && trim($params['country'] !== '') ) {
            $query->where('country', 'LIKE', trim($params['country']) . '%');
        }

        if ( isset($params['gender']) && trim($params['gender'] !== '') ) {

            $query->where('gender', '=', trim($params['gender']));

        }

        /*if ( isset($params['speciality_id']) && trim($params['speciality_id']) !== '' )
        {
            $query->where('speciality_id', '=', trim($params['speciality_id']));
        }*/
        return $query;
    }
}
