<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed ticket_id
 */
class Ticket extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'ticket_id', 'title', 'priority', 'message', 'status'
    ];

    public function category()
    {
        return $this->belongsTo(TicketCategory::class);
    }
}
