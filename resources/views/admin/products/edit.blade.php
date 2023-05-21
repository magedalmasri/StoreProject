@extends('layouts.admin')
@section('content')
    <div class="py-3">
        <form action="{{url('products/update/'.$product->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="nameFormControlInput" class="form-label">اسم المنتج</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}"
                    placeholder="اسم المنتج">
            </div>
            <div class="mb-3">
                <label for="quantityFormControlInput" class="form-label">الكمية</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}"
                    placeholder="ادخل الكمية">
            </div>
            <div class="mb-3">
                <label for="priceFormControlInput" class="form-label">السعر</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}"
                    placeholder="ادخل السعر">
            </div>
            <div class="mb-3">
                <label for="descriptionFormControlTextarea" class="form-label">الوصف</label>
                <textarea class="form-control" id="description" name="description" value="{{ $product->description }}" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="descriptionFormControlTextarea" class="form-label"> اختر الصنف</label>
                <select class="form-control" name="category" id="category">
                    <option value="{{$category_name->id}}">{{$category_name->name}} </option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

                </select>

            </div>
            <div class="mb-3">
                <input type="submit" value="احفظ" class="btn btn-info">
            </div>

        </form>
    </div>
@endsection
