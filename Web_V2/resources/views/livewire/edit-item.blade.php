<div>
    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="card mb-3" style="border-radius:10px;border-color:rgb(186, 186, 186);border-width:1px;">

                @if (Session::has('update-item-success'))
                    <div class="alert alert-success" role="alert">
                        <p style="color: white; margin-bottom:0px;">{{ Session::get('update-item-success') }}
                        </p>
                    </div>
                @endif

                <div>
                    <div class="card-body p-4">
                        <div class="card-body">

                            <h2 class="card-title">Edit product</h2>
                        </div>

                        <div class="container">
                            <div class="product__item">

                                <div class="product__item__pic set-bg" data-setbg=" {{ asset($item->image) }}">
                                </div>
                            </div>
                            <form method="POST"
                                action="{{ route('update-item', [
                                    'id' => $item->id,
                                ]) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <hr style="background-color: grey">

                                <div class="checkout__input">
                                    <p>Product Name<span>*</span></p>
                                    <input type="text" name="name" wire:model="itemName">

                                    @error('name')
                                        <p style="color: red;">{{ $message }}</p>
                                    @enderror

                                </div>

                                <div class="checkout__input">
                                    <p>Product Desc<span>*</span></p>
                                    <input type="text" name="description" wire:model="itemDescription">

                                    @error('description')
                                        <p style="color: red;">{{ $message }}</p>
                                    @enderror

                                </div>


                                <div class="checkout__input">
                                    <p>Product Price<span>*</span></p>
                                    <input type="number" min="1" name="price" wire:model="itemPrice">

                                    @error('price')
                                        <p style="color: red;">{{ $message }}</p>
                                    @enderror

                                </div>

                                {{-- <div class="checkout__input">
                                    <p>Quantity<span>*</span></p>
                                    <input type="number" name="quantity">

                                    @error('quantity')
                                        <p style="color: red;">{{ $message }}</p>
                                    @enderror

                                </div> --}}


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

                                    @error('category')
                                        <p style="color: red;">{{ $message }}</p>
                                    @enderror

                                </div>

                                <div class="image" style="padding-left:5px;padding-right:5px;">
                                    <br>
                                    <br>
                                    <br>
                                    <p class="text-muted" style="text-align:left;margin-bottom:0px;">Please
                                        upload
                                        image
                                    </p>
                                    <input style="border: #ffffff;" type="file" class="form-control" name="image">
                                </div>

                                @error('image')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror

                                <div class="post_button" style="margin-top: 20px;">
                                    <button style="width:100%;" type="submit" class="site-btn">Update item</button>
                                </div>
                            </form>

                            <div class="post_button" style="margin-top: 20px;">
                                <button wire:click="deleteItem({{$item->id}})" style="width:100%;background-color:red;" type="button" class="site-btn">Delete
                                    item</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
</div>
