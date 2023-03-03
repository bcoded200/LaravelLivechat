<?php

namespace  Coded\Codedlivechat\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class support_chat_store extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable =
    [
        'client_name',
        'client_email',
        'client_message',
        'report_department',
        'user_id',
        'guest_id',
        'ticket_status',
        'ticket_id'
    ];


}
