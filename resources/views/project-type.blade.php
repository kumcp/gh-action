
@extends('layouts.create')

@section('form')
    <form action="#">
        <div class="form-group-row mb-3">
            @include('components.input-text', [
                'name' => 'project_code', 
                'label' => 'Mã',
                'inputClass' => 'form-control d-inline w-75'
            ])
        </div>
        <div class="form-group-row mb-3">
            @include('components.input-text', [
                'name' => 'project_name', 
                'label' => 'Tên',
                'inputClass' => 'form-control d-inline w-75'
            ])
        </div>
        <div class="form-group-row mb-5">
            @include('components.input-date', [
                'name' => 'deadline', 
                'type' => 'date',
                'label' => 'Hạn xử lý',
            ])
            @include('components.select', [
                'name' => 'common', 
                'label' => 'Thường xuyên',
                'options' => ['Không', 'Có'],
            ])
        </div>

        @include('components.buttons', [
            'buttons' => [
                ['iconClass' => 'fas fa-save', 'value' => 'Lưu', 'action' => 'save'], 
                ['iconClass' => 'fas fa-trash', 'value' => 'Xóa', 'action' => 'delete'], 
            ] 
        ])
    </form>
@endsection

@section('table')
    @include('components.table', [
        'cols' => ['Mã', 'Tên'],
        'rows' => [
            ['ABC', 'CodeStar'],
            ['ABC', 'CodeStar'],
            ['ABC', 'CodeStar'],
            ['ABC', 'CodeStar'],
        ]
    ])
    
@endsection