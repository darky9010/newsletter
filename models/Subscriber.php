<?php namespace Acme\Newsletter\Models;

use Model;

class Subscriber extends Model
{
    protected $table = 'acme_newsletter_subscribers';
    protected $fillable = ['email'];
}
