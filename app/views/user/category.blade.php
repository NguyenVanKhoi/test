@extends('layout.main')
@section('content')
<div class="grid__column-2">
    <nav class="category">
        <h3 class="category__heading">
            <i class="category__heading-icon fa-solid fa-list"></i>
            Danh mục
        </h3>
        <ul class="category-list">
            <li class="category-item">
                <a href="home.php" class="catogery-item__link">
                    Danh mục 1
                </a>
            </li>
            <li class="category-item">
                <a href="home.php" class="catogery-item__link">
                    Danh mục 2
                </a>
            </li>
            <li class="category-item">
                <a href="home.php" class="catogery-item__link">
                    Danh mục 3
                </a>
            </li>

            <li class="category-item">
                <a href="home.php" class="catogery-item__link">
                    Danh mục 4
                </a>
            </li>
        </ul>
    </nav>
</div>
@endsection