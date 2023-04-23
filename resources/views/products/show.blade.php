@extends('layouts.app')

@section('content')
<div class="container">
    <img src="C:\Users\krzys\OneDrive\Pulpit\LB_6\tr_el\public\storage\products\1.jpg">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Podgląd produktów</div>

                <div class="card-body">

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$product->name}}"  disabled>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="surname" class="col-md-4 col-form-label text-md-end">{{ __('Opis') }}</label>
                           <div class="col-md-6">
                                <textarea id="description"  maxlength="500" class="form-control"  name="description" autofocus {{old('description')}} disabled> {{$product->description}} </textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="amount" class="col-md-4 col-form-label text-md-end">Ilość</label>
                            <div class="col-md-6">
                                <input id="amount" type="number" min="0" value="{{$product->amount}}" class="form-control " name="amount" value="{{ old('amount') }}" disabled>                                                                                                       
                            </div>
                                           
                         </div>
                                                
                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">Cena</label>
                            <div class="col-md-6">
                                <input id="price" type="number" step="0.01" min="0" class="form-control" name="price" value="{{$product->price}}" disabled >  
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
