<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use BadassNinjas\Migrator\Traits\MigratorTrait;

class Transaction extends Model
{
    use MigratorTrait;

    public $table = 'transaction';

    protected $schema = [
      'user_id' => [
        'type' => 'string',
        'length' => 128,
        'modifiers' => [
          'nullable'
        ]
      ],
      'status' => [
        'type' => 'string',
        'length' => 128,
        'modifiers' => [
          'nullable'
        ]
      ],
      'payment_ref' => [
        'type' => 'string',
        'length' => 256
      ],
      'payment_method' => [
        'type' => 'string',
        'length' => 128,
        'modifiers' => [
          'nullable'
        ]
      ],
      'payment_status' => [
        'type' => 'string',
        'length' => 128,
        'modifiers' => [
          'nullable'
        ]
      ],
      'items' => [
        'type' => 'text',
        'length' => 64000,
        'modifiers' => [
          'nullable'
        ]
      ],
      'items_total' => [
        'type' => 'decimal',
        'length' => 12,
        'modifiers' => [
          'nullable'
        ]
      ],
    ];
}