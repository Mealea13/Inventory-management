@extends('admin.layouts.master')

@section('title', 'Product')

@section('content')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<div class="container">
  <header class="top-bar">
    <input type="text" id="searchInput" placeholder="Search Product...">
    <div class="user-profile">
      <div class="beekhorng">Beekhorng</div>
      <div class="role">Admin Profile</div>
    </div>
  </header>

  <h1 class="title-page">📦Product Page</h1>

  <div class="layout">
    <aside class="filter-panel">
      <div class="filter">
        <h5>Filter</h5>
        <button type="reset" id="resetFilters">Reset</button>
      </div>

      <div class="filter-section">
        <div class="filter-title">
          <a class="title" href="#">Categories</a>
        </div>
        <ul id="categoryList">
          <li data-category="Centaphil">Centaphil</li>
          <li data-category="Cerave">Cerave</li>
          <li data-category="Ordinary">Ordinary</li>
        </ul>
      </div>

      <div class="filter-section">
        <div class="filter-title">
          <a class="title" href="#">Select Size</a>
        </div>
        <ul id="sizeList">
          <li data-size="XS">125ML</li>
          <li data-size="S">250ML</li>
          <li data-size="M">500ML</li>
          <li data-size="L">1000ML</li>
        </ul>
      </div>
    </aside>

    <section class="product-grid" id="productGrid">
      <h2 class="Main-Text">Centaphil</h2>
      @foreach ([
        ['name' => 'Centaphil Cleansing Gel', 'category' => 'Cleansing', 'size' => 'M', 'price' => 9.99, 'img' => 'https://i.pinimg.com/1200x/98/da/69/98da694d65306a8162e1fce76bd61d5a.jpg'],
        // ['name' => 'Centaphil Moisturising', 'category' => 'Moisturising', 'size' => 'S', 'price' => 11.99, 'img' => 'https://i.pinimg.com/1200x/47/56/35/475635fce131eeca4d1c5d13609ef849.jpg']
      ] as $product)
      <div class="product-card" data-category="{{ $product['category'] }}" data-size="{{ $product['size'] }}" data-name="{{ $product['name'] }}">
        <div class="card">
          <img src="{{ asset($product['img']) }}" alt="{{ $product['name'] }}">
          <div class="card-body">
            <p><i class="star">★</i> 4.5 (145)</p>
            <h6>{{ $product['name'] }}</h6>
            <p>Reference 1204</p>
            <h5>${{ $product['price'] }}</h5>
            <button class="add-to-cart">Add to Cart</button>
          </div>
        </div>
      </div>
      @endforeach
      @foreach ([
        ['name' => 'Centaphil Sun Screen', 'category' => 'Sun Screen', 'size' => 'L', 'price' => 9.95, 'img' => 'https://i.pinimg.com/1200x/11/aa/b7/11aab734909ece58d5a8c2adb07fe985.jpg']
        // ['name' => 'Centaphil Moisturising', 'category' => 'Moisturising', 'size' => 'S', 'price' => 11.99, 'img' => 'https://i.pinimg.com/1200x/47/56/35/475635fce131eeca4d1c5d13609ef849.jpg']
      ] as $product)
      <div class="product-card" data-category="{{ $product['category'] }}" data-size="{{ $product['size'] }}" data-name="{{ $product['name'] }}">
        <div class="card">
          <img src="{{ asset($product['img']) }}" alt="{{ $product['name'] }}">
          <div class="card-body">
            <p><i class="star">★</i> 4.5 (145)</p>
            <h6>{{ $product['name'] }}</h6>
            <p>Reference 1204</p>
            <h5>${{ $product['price'] }}</h5>
            <button class="add-to-cart">Add to Cart</button>
          </div>
        </div>
      </div>
      @endforeach
      @foreach ([
        ['name' => 'Centaphil Moisturising', 'category' => 'Moisturising', 'size' => 'S', 'price' => 11.99, 'img' => 'https://i.pinimg.com/1200x/47/56/35/475635fce131eeca4d1c5d13609ef849.jpg']
      ] as $product)
      <div class="product-card" data-category="{{ $product['category'] }}" data-size="{{ $product['size'] }}" data-name="{{ $product['name'] }}">
        <div class="card">
          <img src="{{ asset($product['img']) }}" alt="{{ $product['name'] }}">
          <div class="card-body">
            <p><i class="star">★</i> 4.5 (145)</p>
            <h6>{{ $product['name'] }}</h6>
            <p>Reference 1204</p>
            <h5>${{ $product['price'] }}</h5>
            <button class="add-to-cart">Add to Cart</button>
          </div>
        </div>
      </div>
      @endforeach
      <h2 class="Main-Text">Cerave</h2>
      @foreach ([
        ['name' => 'Cerave Cleansing Foam', 'category' => 'Cleansing', 'size' => 'M', 'price' => 9.99, 'img' => 'https://i.pinimg.com/1200x/46/19/11/461911b99afdf1e17839032f613b8769.jpg']
      ] as $product)
      <div class="product-card" data-category="{{ $product['category'] }}" data-size="{{ $product['size'] }}" data-name="{{ $product['name'] }}">
        <div class="card">
          <img src="{{ asset($product['img']) }}" alt="{{ $product['name'] }}">
          <div class="card-body">
            <p><i class="star">★</i> 4.5 (145)</p>
            <h6>{{ $product['name'] }}</h6>
            <p>Reference 1204</p>
            <h5>${{ $product['price'] }}</h5>
            <button class="add-to-cart">Add to Cart</button>
          </div>
        </div>
      </div>
      @endforeach
      @foreach ([
        ['name' => 'Cerave Sun Screen', 'category' => 'Sun Screen', 'size' => 'L', 'price' => 9.95, 'img' => 'https://i.pinimg.com/1200x/3c/b6/53/3cb6535d41cc17391d10ba51146987bd.jpg']
      ] as $product)
      <div class="product-card" data-category="{{ $product['category'] }}" data-size="{{ $product['size'] }}" data-name="{{ $product['name'] }}">
        <div class="card">
          <img src="{{ asset($product['img']) }}" alt="{{ $product['name'] }}">
          <div class="card-body">
            <p><i class="star">★</i> 4.5 (145)</p>
            <h6>{{ $product['name'] }}</h6>
            <p>Reference 1204</p>
            <h5>${{ $product['price'] }}</h5>
            <button class="add-to-cart">Add to Cart</button>
          </div>
        </div>
      </div>
      @endforeach
      @foreach ([
        ['name' => 'Cerave Moisturising', 'category' => 'Moisturising', 'size' => 'S', 'price' => 11.99, 'img' => 'https://i.pinimg.com/1200x/3c/fd/da/3cfdda5f23f2f971c27b524f93cba5cd.jpg']
      ] as $product)
      <div class="product-card" data-category="{{ $product['category'] }}" data-size="{{ $product['size'] }}" data-name="{{ $product['name'] }}">
        <div class="card">
          <img src="{{ asset($product['img']) }}" alt="{{ $product['name'] }}">
          <div class="card-body">
            <p><i class="star">★</i> 4.5 (145)</p>
            <h6>{{ $product['name'] }}</h6>
            <p>Reference 1204</p>
            <h5>${{ $product['price'] }}</h5>
            <button class="add-to-cart">Add to Cart</button>
          </div>
        </div>
      </div>
      @endforeach
      <h2 class="Main-Text">Ordinary</h2>
      @foreach ([
        ['name' => 'Centaphil Cleansing Gel', 'category' => 'Cleansing', 'size' => 'M', 'price' => 9.99, 'img' => 'https://i.pinimg.com/1200x/98/da/69/98da694d65306a8162e1fce76bd61d5a.jpg'],
        // ['name' => 'Centaphil Moisturising', 'category' => 'Moisturising', 'size' => 'S', 'price' => 11.99, 'img' => 'https://i.pinimg.com/1200x/47/56/35/475635fce131eeca4d1c5d13609ef849.jpg']
      ] as $product)
      <div class="product-card" data-category="{{ $product['category'] }}" data-size="{{ $product['size'] }}" data-name="{{ $product['name'] }}">
        <div class="card">
          <img src="{{ asset($product['img']) }}" alt="{{ $product['name'] }}">
          <div class="card-body">
            <p><i class="star">★</i> 4.5 (145)</p>
            <h6>{{ $product['name'] }}</h6>
            <p>Reference 1204</p>
            <h5>${{ $product['price'] }}</h5>
            <button class="add-to-cart">Add to Cart</button>
          </div>
        </div>
      </div>
      @endforeach
      @foreach ([
        ['name' => 'Centaphil Sun Screen', 'category' => 'Sun Screen', 'size' => 'L', 'price' => 9.95, 'img' => 'https://i.pinimg.com/1200x/11/aa/b7/11aab734909ece58d5a8c2adb07fe985.jpg']
        // ['name' => 'Centaphil Moisturising', 'category' => 'Moisturising', 'size' => 'S', 'price' => 11.99, 'img' => 'https://i.pinimg.com/1200x/47/56/35/475635fce131eeca4d1c5d13609ef849.jpg']
      ] as $product)
      <div class="product-card" data-category="{{ $product['category'] }}" data-size="{{ $product['size'] }}" data-name="{{ $product['name'] }}">
        <div class="card">
          <img src="{{ asset($product['img']) }}" alt="{{ $product['name'] }}">
          <div class="card-body">
            <p><i class="star">★</i> 4.5 (145)</p>
            <h6>{{ $product['name'] }}</h6>
            <p>Reference 1204</p>
            <h5>${{ $product['price'] }}</h5>
            <button class="add-to-cart">Add to Cart</button>
          </div>
        </div>
      </div>
      @endforeach
      @foreach ([
        ['name' => 'Centaphil Moisturising', 'category' => 'Moisturising', 'size' => 'S', 'price' => 11.99, 'img' => 'https://i.pinimg.com/1200x/47/56/35/475635fce131eeca4d1c5d13609ef849.jpg']
      ] as $product)
      <div class="product-card" data-category="{{ $product['category'] }}" data-size="{{ $product['size'] }}" data-name="{{ $product['name'] }}">
        <div class="card">
          <img src="{{ asset($product['img']) }}" alt="{{ $product['name'] }}">
          <div class="card-body">
            <p><i class="star">★</i> 4.5 (145)</p>
            <h6>{{ $product['name'] }}</h6>
            <p>Reference 1204</p>
            <h5>${{ $product['price'] }}</h5>
            <button class="add-to-cart">Add to Cart</button>
          </div>
        </div>
      </div>
      @endforeach
    </section>
  </div>
</div>
<script src="{{ asset('js/product.js') }}"></script>
@endsection
