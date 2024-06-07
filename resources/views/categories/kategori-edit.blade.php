<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="europe.png" />
    <link rel="stylesheet" href="{{ asset('kategori-entry.css') }}">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catshop Admin | Edit Category</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bxs-window-alt"></i>
            <span class="logo_name">Europe Food Market</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin.php" class="active">
                    <i class="bx bxs-flag-checkered"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="kategori.php">
                    <i class="bx bxs-store-alt"></i>
                    <span class="links_name">Kategori</span>
                </a>
            </li>
            <li>
                <a href="transaction.php">
                    <i class="bx bxs-wallet"></i>
                    <span class="links_name">Pembelian</span>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class="bx bxs-log-out-circle"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
            </div>
            <div class="profile-details">
                <span class="admin_name">MarMin</span>
            </div>
        </nav>
        <div class="home-content">
            <h3>Edit Categories</h3>
            <div class="form-login">
                <form action="{{ url('/category/update/' . $category->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <label for="categories">categories</label>
                    <input class="input" type="text" name="category" id="categories"
                        placeholder="Categories"value="{{ old('category', $category->category) }}" />
                    @error('category')
                        <p style="font-size: 10px; color: rgb(255, 0, 225)">{{ $message }}</p>
                    @enderror

                    <label for="price">price</label>
                    <input class="input" type="text" name="price" id="price" placeholder="price"
                        value="{{ old('price', $category->price) }}" />
                    @error('harga')
                        <p style="font-size: 10px; color: rgb(255, 0, 225)">{{ $message }}</p>
                    @enderror

                    <label for="description">description</label>
                    <textarea class="input" name="description" id="description" placeholder="description">{{ old('description', $category->description) }}</textarea>
                    @error('description')
                        <p style="font-size: 10px; color:  rgb(255, 0, 225)">{{ $message }}</p>
                    @enderror

                    <label for="region">region</label>
                    <input class="input" type="text" name="region" id="region" placeholder="region"
                        value="{{ old('region', $category->region) }}" />
                    @error('region')
                        <p style="font-size: 10px; color: rgb(255, 0, 225)">{{ $message }}</p>
                    @enderror

                    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
                        Edit
                    </button>
                </form>
            </div>
        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };
    </script>
</body>

</html>
