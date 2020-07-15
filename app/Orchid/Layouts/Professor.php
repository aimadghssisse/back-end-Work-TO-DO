<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;

class Professor extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
     protected $target = 'professors';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
          TD::set('last_name','Last name')
              ->align('center')
              ->width('100px'),

          TD::set('first_name', 'First Name')
              ->sort(),

          TD::set('phone','Phone'),

          TD::set('email','Email'),
          TD::set('created_at','Date of publication'),
        ];
    }
}
