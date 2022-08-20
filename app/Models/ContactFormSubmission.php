<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $location
 * @property string $event_date
 * @property string $found_us_how
 * @property string $message
 */
class ContactFormSubmission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'location',
        'event_date',
        'found_us_how',
        'message',
    ];

    protected $table = 'contact_form_submissions';
}
