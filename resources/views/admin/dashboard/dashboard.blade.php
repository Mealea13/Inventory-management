@extends('layouts.master')

@section('title', 'dashboard')

@section('content')
    <main class="main-content">
    <header class="top-bar">
      <input type="text" placeholder="Search..." />
      <div class="user-profile">
        <span>Beekhorng</span>
        <span class="role">Admin Profile</span>
      </div>
    </header>

    <!-- Cards -->
    <section class="cards">
      <div class="card green">Revenue <strong>$18,925</strong></div>
      <div class="card red">Expense <strong>$11,024</strong></div>
      <div class="card yellow">Happy Clients <strong>8,925</strong></div>
      <div class="card blue">New Store Open <strong>8,925</strong></div>
    </section>

    <!-- Filters -->
    <div class="filters">
      <button class="active">Today</button>
      <button>Week</button>
      <button>Month</button>
      <button>Year</button>
      <input type="date" />
    </div>

    <!-- Stats -->
    <section class="stats-grid">
      <div class="stat">Customers <strong>14,208</strong></div>
      <div class="stat">Orders <strong>2,314</strong></div>
      <div class="stat">Avg Sale <strong>$1,770</strong></div>
      <div class="stat">Avg Item Sale <strong>185</strong></div>
      <div class="stat">Total Sale <strong>$35,000</strong></div>
      <div class="stat">Visitors <strong>11,452</strong></div>
      <div class="stat">Total Products <strong>184,511</strong></div>
      <div class="stat">Top Selling Item <strong>122</strong></div>
      <div class="stat">Dealership <strong>32</strong></div>
    </section>
  </main>
@endsection

