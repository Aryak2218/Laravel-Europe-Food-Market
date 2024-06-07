<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="logo.jpeg" />
    <link rel="stylesheet" href="{{ asset('kategori-entry.css') }}">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Market | Categories Entry</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bxs-window-al"></i>
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
                <a href="{{ 'category' }}">
                    <i class="bx bxs-store-alt"></i>
                    <span class="links_name">Kategori</span>
                </a>
            </li>
            <li>
                <a href="../transaction/transaction.php">
                    <i class="bx bxs-wallet"></i>
                    <span class="links_name">Pembelian</span>
                </a>
            </li>
            <li>
                <a href="#">
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
                <span class="admin_name">Admin Market</span>
            </div>
        </nav>
        <div class="home-content">
            <h3>Hapus Categories</h3>
            <div class="form-login">
                <h4>Want to Delete Data ?</h4>
                <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
                    <a href={{ url('/category/destroy/' . $category->id) }}>
                        Yes
                    </a>
                </button>
                <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
                    <a href="/category">
                        No
                    </a>
                </button>
            </div>
        </div>
        </div>
    </section>
</body>

</html>
