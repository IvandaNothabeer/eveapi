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

namespace Seat\Eveapi\Models\Character;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contract
 * @package Seat\Eveapi\Models
 */
class Contract extends Model
{

    /**
     * @var string
     */
    protected $table = 'character_contracts';

    /**
     * @var string
     */
    protected $primaryKey = 'contractID';

    /**
     * @var array
     */
    protected $fillable = [
        'characterID', 'contractID', 'issuerID', 'issuerCorpID', 'assigneeID',
        'acceptorID', 'startStationID', 'endStationID', 'type', 'status',
        'title', 'forCorp', 'availability', 'dateIssued', 'dateExpired',
        'dateAccepted', 'numDays', 'dateCompleted', 'price', 'reward',
        'collateral', 'buyout', 'volume'
    ];
}