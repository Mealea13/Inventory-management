@extends('admin.layouts.master')

@section('title', 'Product')

@section('content')
<div class="container-fluid py-4">
  <!-- Header -->
  <header class="top-bar d-flex justify-content-between align-items-center mb-4">
    <input type="text" id="searchInput" class="form-control w-50" placeholder="Search Product..." />
    <div class="user-profile text-end">
      <div class="beekhorng text-white">Beekhorng</div>
      <div class="role text-white">Admin Profile</div>
    </div>
  </header>
  <h1 class="mb-4 fw-bold text-white">📦 Product Page</h1>

  <div class="row">
    <!-- Filter Panel -->
    <div class="col-md-3">
      <div class="filter-panel">
        <div class="filter d-flex justify-content-between align-items-center mb-3">
          <h5 class="fw-bold mb-0 text-white">Filter</h5>
          <button type="reset" id="resetFilters" class="btn btn-sm btn-primary">Reset</button>
        </div>

        <!-- Categories -->
        <div class="filter-section mb-4">
          <div class="filter-title d-flex justify-content-between align-items-center">
            <a class="title text-white" data-bs-toggle="collapse" href="#categories" role="button" aria-expanded="true">Categories</a>
            <i class="bi bi-chevron-down text-white"></i>
          </div>
          <div class="collapse show text-white" id="categories">
            <ul class="list-unstyled mt-2" id="categoryList">
              <li data-category="Cleansing">Cleansing</li>
              <li data-category="Sun Screen">Sun Screen</li>
              <li data-category="Moisturising">Moisturising</li>
              <li data-category="Watch">Watch</li>
              <li data-category="Accessories">Accessories</li>
            </ul>
          </div>
        </div>

        <!-- Select Size -->
        <div class="filter-section mb-4">
          <div class="filter-title d-flex justify-content-between align-items-center">
            <a class="title text-white" data-bs-toggle="collapse"  href="#size" role="button" aria-expanded="true">Select Size</a>
            <i class="bi bi-chevron-down text-white"></i>
          </div>
          <div class="collapse show text-white" id="size">
            <div class="filter-size mt-2">
              <ul id="sizeList">
                <li data-size="XS">XS</li>
                <li data-size="S">S</li>
                <li data-size="M">M</li>
                <li data-size="L">L</li>
                <li data-size="XL">XL</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Grid -->
    <div class="col-md-9">
      <div class="row g-4" id="productGrid">
        @foreach([
          ['name' => 'Centaphil Cleansing Gel', 'category' => 'Cleansing', 'size' => 'M', 'price' => 9.99],
        ] as $product)
        <div class="col-md-4 product-card bg-dark-blue p-3" data-category="{{ $product['category'] }}" data-size="{{ $product['size'] }}" data-name="{{ $product['name'] }}">
          <div class="card position-relative p-3">
            <i class="bi bi-heart-fill text-danger position-absolute top-0 end-0 m-2 fs-5"></i>
            <img src="{{ asset('https://i.pinimg.com/1200x/98/da/69/98da694d65306a8162e1fce76bd61d5a.jpg') }}" class="card-img-first" alt="{{ $product['name'] }}">
            <div class="card-body text-center">
              <p class="mb-1 text-warning"><i class="bi bi-star-fill"></i> 4.5 (145)</p>
              <h6 class="fw-bold">{{ $product['name'] }}</h6>
              <p class="text-muted">Reference 1204</p>
              <h5 class="text-warning fw-bold">${{ $product['price'] }}</h5>
              <button class="btn btn-primary w-90 mt-2 ">Add to Cart</button>
            </div>
          </div>
        </div>
        @endforeach
        @foreach([
          ['name' => 'Centaphil Sun Screen', 'category' => 'Sun Screen', 'size' => 'L', 'price' => 9.95]
        ] as $product)
        <div class="col-md-4 product-card bg-dark-blue p-3" data-category="{{ $product['category'] }}" data-size="{{ $product['size'] }}" data-name="{{ $product['name'] }}">
          <div class="card position-relative p-3">
            <i class="bi bi-heart-fill text-danger position-absolute top-0 end-0 m-2 fs-5"></i>
            <img src="{{ asset('https://i.pinimg.com/1200x/11/aa/b7/11aab734909ece58d5a8c2adb07fe985.jpg') }}" class="card-img-second" alt="{{ $product['name'] }}">
            <div class="card-body text-center">
              <p class="mb-1 text-warning"><i class="bi bi-star-fill"></i> 4.5 (145)</p>
              <h6 class="fw-bold">{{ $product['name'] }}</h6>
              <p class="text-muted">Reference 1204</p>
              <h5 class="text-warning fw-bold">${{ $product['price'] }}</h5>
              <button class="btn btn-primary w-90 mt-2 ">Add to Cart</button>
            </div>
          </div>https://i.pinimg.com/1200x/47/56/35/475635fce131eeca4d1c5d13609ef849.jpg
        </div>
        @endforeach
        @foreach([
          ['name' => 'Centaphil Moisturising', 'category' => 'Moisturising', 'size' => 'S', 'price' => 11.99]
        ] as $product)
        <div class="col-md-4 product-card bg-dark-blue p-3" data-category="{{ $product['category'] }}" data-size="{{ $product['size'] }}" data-name="{{ $product['name'] }}">
          <div class="card position-relative p-3">
            <i class="bi bi-heart-fill text-danger position-absolute top-0 end-0 m-2 fs-5"></i>
            <img src="{{ asset('https://i.pinimg.com/1200x/47/56/35/475635fce131eeca4d1c5d13609ef849.jpg') }}" class="card-img-third" alt="{{ $product['name'] }}">
            <div class="card-body text-center">
              <p class="mb-1 text-warning"><i class="bi bi-star-fill"></i> 4.5 (145)</p>
              <h6 class="fw-bold">{{ $product['name'] }}</h6>
              <p class="text-muted">Reference 1204</p>
              <h5 class="text-warning fw-bold">${{ $product['price'] }}</h5>
              <button class="btn btn-primary w-90 mt-2 ">Add to Cart</button>
            </div>
          </div>
        </div>
        @endforeach
        @foreach([
          ['name' => 'Centaphil Cleansing Gel', 'category' => 'Cleansing', 'size' => 'M', 'price' => 9.99],
        ] as $product)
        <div class="col-md-4 product-card bg-dark-blue p-3" data-category="{{ $product['category'] }}" data-size="{{ $product['size'] }}" data-name="{{ $product['name'] }}">
          <div class="card position-relative p-3">
            <i class="bi bi-heart-fill text-danger position-absolute top-0 end-0 m-2 fs-5"></i>
            <img src="{{ asset('https://i.pinimg.com/1200x/98/da/69/98da694d65306a8162e1fce76bd61d5a.jpg') }}" class="card-img-first" alt="{{ $product['name'] }}">
            <div class="card-body text-center">
              <p class="mb-1 text-warning"><i class="bi bi-star-fill"></i> 4.5 (145)</p>
              <h6 class="fw-bold">{{ $product['name'] }}</h6>
              <p class="text-muted">Reference 1204</p>
              <h5 class="text-warning fw-bold">${{ $product['price'] }}</h5>
              <button class="btn btn-primary w-90 mt-2 ">Add to Cart</button>
            </div>
          </div>
        </div>
        @endforeach
        @foreach([
          ['name' => 'Centaphil Cleansing Gel', 'category' => 'Cleansing', 'size' => 'M', 'price' => 9.99],
        ] as $product)
        <div class="col-md-4 product-card bg-dark-blue p-3" data-category="{{ $product['category'] }}" data-size="{{ $product['size'] }}" data-name="{{ $product['name'] }}">
          <div class="card position-relative p-3">
            <i class="bi bi-heart-fill text-danger position-absolute top-0 end-0 m-2 fs-5"></i>
            <img src="{{ asset('https://i.pinimg.com/1200x/98/da/69/98da694d65306a8162e1fce76bd61d5a.jpg') }}" class="card-img-first" alt="{{ $product['name'] }}">
            <div class="card-body text-center">
              <p class="mb-1 text-warning"><i class="bi bi-star-fill"></i> 4.5 (145)</p>
              <h6 class="fw-bold">{{ $product['name'] }}</h6>
              <p class="text-muted">Reference 1204</p>
              <h5 class="text-warning fw-bold">${{ $product['price'] }}</h5>
              <button class="btn btn-primary w-90 mt-2 ">Add to Cart</button>
            </div>
          </div>
        </div>
        @endforeach
        @foreach([
          ['name' => 'Centaphil Cleansing Gel', 'category' => 'Cleansing', 'size' => 'M', 'price' => 9.99],
        ] as $product)
        <div class="col-md-4 product-card bg-dark-blue p-3" data-category="{{ $product['category'] }}" data-size="{{ $product['size'] }}" data-name="{{ $product['name'] }}">
          <div class="card position-relative p-3">
            <i class="bi bi-heart-fill text-danger position-absolute top-0 end-0 m-2 fs-5"></i>
            <img src="{{ asset('https://i.pinimg.com/1200x/98/da/69/98da694d65306a8162e1fce76bd61d5a.jpg') }}" class="card-img-first" alt="{{ $product['name'] }}">
            <div class="card-body text-center">
              <p class="mb-1 text-warning"><i class="bi bi-star-fill"></i> 4.5 (145)</p>
              <h6 class="fw-bold">{{ $product['name'] }}</h6>
              <p class="text-muted">Reference 1204</p>
              <h5 class="text-warning fw-bold">${{ $product['price'] }}</h5>
              <button class="btn btn-primary w-90 mt-2 ">Add to Cart</button>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<!-- CSS & JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/product.js') }}"></script>
@endsection
