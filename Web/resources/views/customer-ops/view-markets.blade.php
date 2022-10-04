@extends('components.customer-layout')

@section('title', 'Marketplace')

@section('body')

    <div class="container">
        <div class="d-sm-flex justify-content-between align-items-center mb-4" style="padding: 20px;">
            <h2 class="text-light mb-0"
                style="color: var(--white-color);font-size: 32px;font-family: 'Alegreya Sans', sans-serif;">Markets
            </h2>
        </div>
    </div>
    <div class="container">
        <div>
            <form>
                <div class="align-items-center align-content-center">
                    <div class="input-group input-group-lg shadow">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                viewBox="0 0 16 16" class="bi bi-search">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                </path>
                            </svg>
                        </span>
                        <input class="form-control form-control-sm" type="text" placeholder="Search For Product"
                            name="product_search">
                        <select class="form-select">
                            <option value="all" selected="">All Departments</option>
                            <option value="Baby">Baby &amp; Toddler</option>
                            <option value="Beauty">Beauty</option>
                            <option value="">Books</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Camping">Camping &amp; Outdoors</option>
                            <option value="">Cellphones</option>
                            <option value="">Fashion</option>
                            <option value="Food ">Food &amp; Bevarages</option>
                            <option value="Garden">Garden, Pool &amp; Patio</option>
                            <option value="Health">Health &amp; Fitness</option>
                            <option value="Home">Home &amp; kitchen</option>
                            <option value="Luggage">Luggage &amp; Travel</option>
                            <option value="Movies">Movies &amp; Series</option>
                            <option value="Music">Music</option>
                            <option value="Office">Office &amp; Stationery</option>
                            <option value="">Pets</option>
                            <option value="Sports">Sports</option>
                            <option value="">Toys</option>
                        </select>
                        <button class="btn btn-outline-warning border rounded-0 border-warning" type="submit">Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container" style="padding-top: 40px;">
        <div>
            <div class="row">

                @unless(count($items) > 0)
                    <div class="col-md-12">
                        <div class="alert alert-warning" role="alert">
                            <h4 class="alert-heading">No Markets Found!</h4>
                            <p>There are no markets available at the moment. Please check back later.</p>
                        </div>
                    </div>
                @else
                    @foreach ($items as $item)
                        @foreach ($categories as $category)
                            @if ($item->cat_id == $category->id)
                                <div class="col text-start" style="padding-bottom: 50px;"><a href="#">
                                        <div class="card" data-bss-hover-animate="pulse" style="width: 300px;">
                                            <div class="card-body">
                                                <div>
                                                    <img class="rounded img-fluid bg-dark border border-dark shadow"
                                                        data-bs-toggle="tooltip" data-bss-tooltip=""
                                                        style="width: 270px;height: 237px;"
                                                        src="../assets/img/223-2238298_4k-wallpaper-for-ps4.jpg"
                                                        title="$Product_Title">
                                                </div>
                                                <div>
                                                    <h3 class="fw-lighter text-start"
                                                        style="width: 201px;padding: 2px 0px 0px;">
                                                        {{ $item->name }}
                                                    </h3>
                                                    <p class="text-start text-muted">{{ $item->desc }}</p>
                                                    <p class="text-start text-muted">{{ $category->name }}</p>
                                                    <span class="fw-bolder">R{{ $item->price }}</span>
                                                    <div>
                                                        <button
                                                            class="btn btn-outline-success border rounded-pill border-success shadow"
                                                            type="button" style="margin-top: 6px;">Add To Cart</button>
                                                        <button
                                                            class="btn btn-outline-danger border rounded-pill border-danger shadow"
                                                            type="button"
                                                            style="margin-top: 6px;margin-right: 0px;margin-left: 20px;">Add
                                                            To
                                                            Wishlist
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endforeach

                @endunless

            </div>
        </div>

    </div>
