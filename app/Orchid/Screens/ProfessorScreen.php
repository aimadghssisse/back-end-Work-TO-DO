<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\Professor;
use App\Professor as ModelProfessor;

class ProfessorScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Professors';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Listing Professors';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
          'professors'  => ModelProfessor::orderby('id')->filters()
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
          Professor::class,
        ];
    }
}
