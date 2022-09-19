<?php

namespace App\Nova;

use App\Models\ClientPage as ClientPageModel;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class ClientPage extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = ClientPageModel::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name', 'email',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('URL', 'url')
                ->sortable()
                ->rules('required', 'max:255'),

            Boolean::make('Is Wedding?', 'is_wedding')
                ->sortable(),

            Text::make('Title Names', 'title_names')
                ->sortable()
                ->rules('required', 'max:255'),

            DateTime::make('Start Time', 'event_start_time')
                ->sortable(),

            Text::make('YouTube Hash', 'youtube_hash')
                ->sortable()
                ->rules('required', 'max:255'),
        ];
    }
}
