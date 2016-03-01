<?php
/*
This file is part of SeAT

Copyright (C) 2015, 2016  Leon Jacobs

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

namespace Seat\Eveapi\Models\Eve;

use Illuminate\Database\Eloquent\Model;
use Seat\Eveapi\Models\Account\ApiKeyInfo;
use Seat\Eveapi\Models\Account\ApiKeyInfoCharacters;
use Seat\Web\Models\User;

/**
 * Class ApiKey
 * @package Seat\Eveapi\Models
 */
class ApiKey extends Model
{

    /**
     * @var string
     */
    protected $table = 'eve_api_keys';

    /**
     * @var string
     */
    protected $primaryKey = 'key_id';

    /**
     * @var array
     */
    protected $fillable = ['key_id', 'v_code', 'user_id', 'enabled', 'last_error'];

    /**
     * Returns the owner of this key
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function owner()
    {

        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * Returns the key information such as accessMask
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function info()
    {

        return $this->hasOne(
            ApiKeyInfo::class, 'keyID', 'key_id');
    }

    /**
     * Returns the characters for the key
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function characters()
    {

        return $this->hasMany(
            ApiKeyInfoCharacters::class, 'keyID', 'key_id');
    }
}