@extends('layouts.default')
@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <div class="u-s-p-b-60">
        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-16">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">
                                CREATE PRODUCT
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <form method="post" action="{{ route('products.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input name="name" value="Iphone 14" required type="text" class="form-control" id="name"
                                        placeholder="ingrese nombre de producto">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea required name="description" class="form-control" id="description"
                                        placeholder="ingrese descripcion del producto"
                                        rows="3">Nuevo iphone con mas memoria mas camaras mas precio</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input name="price" value="10000000" required type="number" class="form-control"
                                        placeholder="ingrese precio del producto">
                                </div>
                                <div class="form-group">
                                    <label for="stock">Stock</label>
                                    <input name="stock" value="10" required type="number" class="form-control" id="stock"
                                        placeholder="ingrese precio del producto">
                                </div>
                                <div class="form-check">
                                    <input name="available" class="available" type="checkbox" id="available">
                                    <label class="form-check-label" for="available">
                                        Available
                                    </label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="categories">Select product categories</label>
                                    <select name="categories[]" multiple class="form-control" id="categories">
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="score">Score</label>
                                    <input name="score" value="5" required type="number" class="form-control" id="score"
                                        placeholder="ingrese calificacion por defecto">
                                </div>
                                <div class="form-group">
                                    <label for="video_url">Product video</label>
                                    <input name="video_url" required type="text" class="form-control" id="video_url"
                                        placeholder="ingrese el video trailer del producto">
                                </div>
                                <div class="form-group">
                                    <label for="images">Product image</label>
                                    <input name="images" required type="text" class="form-control" id="images"
                                        placeholder="Ingrese la imagen del producto">
                                </div>
                                <div class="form-group">
                                    <label for="discount">Discount</label>
                                    <input name="discount" value="50" required type="number" class="form-control"
                                        id="discount" placeholder="ingrese el descuento del producto">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->
    </div>
@endsection
