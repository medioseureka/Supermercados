<?php

namespace App\DataTables;

use App\Models\Company;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CompanyDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query->withTrashed()->orderBy("deleted_at"))
            ->addColumn('action', 'history.seebtn', 2);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Company $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Company $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('eureka-table')
                    ->columns($this->getColumns())
                    ->dom('Bfrtip')
                    ->minifiedAjax()
                    ->parameters([
                        'buttons' => ['csv'],
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
                    Column::make('id')->title('No'),
                    Column::make('name')->title(trans('history.name')),
                    Column::make('email')->title(trans('history.email')),
                    Column::make('address')->title(trans('history.address')),
                    Column::make('phone1')->title(trans('history.phone')),
                    Column::make('phone2')->title(trans('history.phone')),
                    Column::make('contact')->title(trans('history.contact')),
                    Column::make('nit')->title(trans('history.nit')),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Company_' . date('YmdHis');
    }
}
