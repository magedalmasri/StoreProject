@extends('layouts.admin')
@section('content')
<div class="py-4">
    <a href="{{url('categories/create')}}" >
      <input type="submit" value="اضف صنف جديد" class="btn btn-success">
      </a>
  </div>
    <div class="py-10">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم الصنف</th>
                    <th scope="col">الاحداث</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)

                <tr>
                    <th scope="row">1</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ url('categories/delete/' . $category->id) }}" class="btn btn-danger"> حذف</a>
                        <a href="{{ url('categories/edit/' . $category->id) }}" class="btn btn-info"> تعديل</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
