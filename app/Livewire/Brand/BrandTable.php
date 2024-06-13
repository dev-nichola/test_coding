<?php

namespace App\Livewire\Brand;

use Exception;
use App\Models\Brand;
use Illuminate\Support\Carbon;
use Masmerise\Toaster\Toaster;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class BrandTable extends PowerGridComponent
{
    use WithExport;
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function getListeners()
    {
        return array_merge(
            parent::getListeners(),
            [
                'bulkCheckedEdit',
                'bulkCheckedDelete',
            ],
        );
    }
    public function header(): array
    {
        return [
            Button::add('bulk-delete-checked')
                ->slot(__('Hapus'))
                ->class('py-3 px-3 text-sm font-semibold bg-red-500 rounded-lg text-white')
                ->dispatch('bulkCheckedDelete', []),
            Button::add('bulk-edit-checked')
                ->slot(__('Ubah'))
                ->class('py-3 px-3 text-sm font-semibold bg-teal-500 rounded-lg text-white')
                ->dispatch('bulkCheckedEdit', []),
        ];
    }

    public function bulkCheckedEdit()
    {
        $ids = $this->checkedValues();

        if (!$ids) {
            Toaster::error('Pilih Data Terlebih Dahulu Untuk Di Edit');
            return;
        }

        $ids = implode('-', $ids);

        return redirect()->route('ekspedisi.edit', [
            'ids' => $ids
        ]);
    }

    public function bulkCheckedDelete()
    {
        $ids = $this->checkedValues();

        if (!$ids) {
            Toaster::error('Pilih Data Terlebih Dahulu Untuk Di Hapus');
            return;
        }

        try {
            Brand::query()->whereIn('id', $ids)->delete();
            Toaster::success("Sukses Menghapus " . count($ids) . " Data Brand");
        } catch (Exception $exception) {
            Toaster::error('Gagal Menghapus Data Brand');
        }
    }

    public function datasource(): Builder
    {
        return Brand::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('slug');
    }

    public function columns(): array
    {
        return [
            Column::make('Nama Brand', 'name')
                ->sortable()
                ->searchable(),

            Column::make('Link URL', 'slug')
                ->sortable()
                ->searchable(),
        ];
    }

    public function filters(): array
    {
        return [];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert(' . $rowId . ')');
    }

    // public function actions(Brand $row): array
    // {
    //     return [
    //         Button::add('edit')
    //             ->slot('Edit: '.$row->id)
    //             ->id()
    //             ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
    //             ->dispatch('edit', ['rowId' => $row->id])
    //     ];
    // }

    /*
            public function actionRules($row): array
            {
            return [
                    // Hide button edit for ID 1
                    Rule::button('edit')
                        ->when(fn($row) => $row->id === 1)
                        ->hide(),
                ];
            }
            */
}
