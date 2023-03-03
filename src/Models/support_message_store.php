<?php

namespace Coded\Codedlivechat\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class support_message_store extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable =
    [
       'message_from',
       'message_to',
       'senders_id',
       'receivers_id',
       'ticket_id',
       'message_body',
       'is_admin',
       'expirytime'

    ];

    protected $casts = [
        'expirytime' => 'datetime:Y-m-d'
    ];
}
