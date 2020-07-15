<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\Students;
use App\Student;

class StudentScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Students';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Listing Students';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
          'students'  => Student::orderby('id')->filters()
                      ->defaultSort('id', 'desc')
                      ->paginate()
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
          Students::class,
        ];
    }
}
