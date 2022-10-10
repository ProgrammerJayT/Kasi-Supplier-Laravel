@extends('components.vendor-layout')

@section('title', 'My products')

@section('body')
    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">

                        @unless(count($items) > 0)
                            <div class="col-lg-12">
                                <div class="shop__cart__item">
                                    <h1>You have no products added yet</h1>
                                </div>
                            </div>
                        @else
                            @foreach ($items as $item)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg=" {{ asset($item->image) }}">
                                            <ul class="product__hover">
                                                <li><a href="#"><img src="assets/img/icon/heart.png" alt=""></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__item__text" style="border-width: 5px;border-color:black;">
                                            <h6 style="color: blue;"><b>{{ $item->name }}</b></h6>
                                            <a href="#" class="add-cart">+ Edit item</a>
                                            <h5>R{{ $item->price }}</h5>
                                            <h6 style="color: rgb(89, 89, 89);">{{ $item->desc }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        @endunless


                    </div>
                </div>

                
                <div class="col-lg-4">
                    <div class="card mb-3" style="border-radius:10px;border-color:rgb(186, 186, 186);border-width:1px;">

                        @if (Session::has('add-product-success'))
                            <div class="alert alert-success" role="alert">
                                <p style="color: white; margin-bottom:0px;">{{ Session::get('add-product-success') }}
                                </p>
                            </div>
                        @endif

                        <div>
                            <div class="card-body p-4">
                                <div class="card-body">

                                    @if (Session::has('add-item-failure'))
                                        <div class="alert alert-danger" role="alert">
                                            <p style="color: white; margin-bottom:0px;">
                                                {{ Session::get('add-item-failure') }}
                                            </p>
                                        </div>
                                    @endif

                                    @if (Session::has('add-item-success'))
                                        <div class="alert alert-success" role="alert">
                                            <p style="color: white; margin-bottom:0px;">
                                                {{ Session::get('add-item-success') }}
                                            </p>
                                        </div>
                                    @endif

                                    <h5 class="card-title">Add new product</h5>
                                    <p style="margin-bottom: 0px;" class="card-text">Add a new product to your store.</p>
                                </div>

                                <div class="container">
                                    <form method="post" action="{{ route('add-item') }}" enctype="multipart/form-data">
                                        @csrf
                                        <hr style="background-color: grey">

                                        <div class="checkout__input">
                                            <p>Product Name<span>*</span></p>
                                            <input type="text" name="name">

                                            @error('name')
                                                <p style="color: red;">{{ $message }}</p>
                                            @enderror

                                        </div>

                                        <div class="checkout__input">
                                            <p>Product Desc<span>*</span></p>
                                            <input type="text" name="description">

                                            @error('description')
                                                <p style="color: red;">{{ $message }}</p>
                                            @enderror

                                        </div>


                                        <div class="checkout__input">
                                            <p>Product Price<span>*</span></p>
                                            <input type="number" name="price">

                                            @error('price')
                                                <p style="color: red;">{{ $message }}</p>
                                            @enderror

                                        </div>

                                        <div class="checkout__input">
                                            <p>Quantity<span>*</span></p>
                                            <input type="number" name="quantity">

                                            @error('quantity')
                                                <p style="color: red;">{{ $message }}</p>
                                            @enderror

                                        </div>


                                        <div class="checkout__input">
                                            <p>Category<span>*</span></p>
                                            <select name="category" id="type" style="width: 100%;">
                                                <option value="">Choose category</option>

                                                @unless(count($categories) > 0)
                                                    <option value="">No categories</option>
                                                @else
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id . $category->value }}">
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                @endunless

                                            </select>

                                            @error('type')
                                                <p style="color: red;">{{ $message }}</p>
                                            @enderror

                                        </div>

                                        <div class="image" style="padding-left:5px;padding-right:5px;">
                                            <br>
                                            <br>
                                            <br>
                                            <p class="text-muted" style="text-align:left;margin-bottom:0px;">Please upload
                                                image
                                            </p>
                                            <input style="border: #ffffff;" type="file" class="form-control"
                                                name="image">
                                        </div>

                                        @error('image')
                                            <p style="color: red;">{{ $message }}</p>
                                        @enderror

                                        <div class="post_button" style="margin-top: 20px;">
                                            <button style="width:100%;" type="submit" class="site-btn">Add product</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
@endsection
