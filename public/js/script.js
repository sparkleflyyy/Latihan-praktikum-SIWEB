const btnTheme = document.getElementById('btn-theme');
const body = document.body;

// Cek apakah ada simpanan tema di browser?
if (localStorage.getItem('theme') === 'dark') {
    body.classList.add('dark-mode');
    btnTheme.innerText = "Mode Terang";
}

btnTheme.addEventListener('click', function() {
    body.classList.toggle('dark-mode');
    
    if (body.classList.contains('dark-mode')) {
        localStorage.setItem('theme', 'dark');
        btnTheme.innerText = "Mode Terang";
    } else {
        localStorage.removeItem('theme');
        btnTheme.innerText = "Mode Gelap";
    }
});

// 2. FITUR SEWA (Event Listener & Math)
function aktifkanTombolSewa() {
    const tombolSewa = document.querySelectorAll('.btn-detail');
    
    // Reset event listener dengan cloning (opsional, untuk mencegah double event)
    tombolSewa.forEach(function(button) {
        button.replaceWith(button.cloneNode(true));
    });

    const tombolBaru = document.querySelectorAll('.btn-detail');
    tombolBaru.forEach(function(button) {
        button.addEventListener('click', function(e) {
            const cardBody = e.target.closest('.card-body');
            const stokElement = cardBody.querySelector('.stok-text');
            let stok = parseInt(stokElement.innerText.replace(/[^0-9]/g, ""));

            if (stok > 0) {
                stok--;
                stokElement.innerText = "Tersedia: " + stok + " unit";
                const namaBarang = cardBody.querySelector('.card-title').innerText;
                alert("Berhasil menyewa " + namaBarang);
            } else {
                alert("Stok Habis!");
                e.target.disabled = true;
                e.target.innerText = "Habis";
            }
        });
    });
}

// 3. FITUR WISHLIST (Local Storage & Array)
let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

// Update counter wishlist di navbar
function updateWishlistCount() {
    document.getElementById('wishlist-count').innerText = wishlist.length;
}

// Aktifkan tombol wishlist
function aktifkanTombolWishlist() {
    const tombolWishlist = document.querySelectorAll('.btn-wishlist');
    
    tombolWishlist.forEach(function(button) {
        button.addEventListener('click', function(e) {
            const cardBody = e.target.closest('.card-body');
            const namaBarang = cardBody.querySelector('.card-title').innerText;
            const hargaBarang = cardBody.querySelector('.harga-text').innerText;
            
            // Cek apakah sudah ada di wishlist
            const sudahAda = wishlist.find(item => item.nama === namaBarang);
            
            if (!sudahAda) {
                wishlist.push({
                    nama: namaBarang,
                    harga: hargaBarang
                });
                localStorage.setItem('wishlist', JSON.stringify(wishlist));
                updateWishlistCount();
                alert(namaBarang + " ditambahkan ke wishlist!");
            } else {
                alert(namaBarang + " sudah ada di wishlist!");
            }
        });
    });
}

// Tampilkan wishlist di modal
function tampilkanwishlist() {
    const daftarWishlist = document.getElementById('daftar-wishlist');
    daftarWishlist.innerHTML = '';
    
    if (wishlist.length === 0) {
        daftarWishlist.innerHTML = '<li class="list-group-item text-center text-muted">Wishlist kosong</li>';
    } else {
        wishlist.forEach(function(item, index) {
            const li = document.createElement('li');
            li.className = 'list-group-item d-flex justify-content-between align-items-center';
            li.innerHTML = `
                <div>
                    <strong>${item.nama}</strong><br>
                    <small class="text-muted">${item.harga}</small>
                </div>
                <button class="btn btn-sm btn-outline-danger" onclick="hapusItemWishlist(${index})">Hapus</button>
            `;
            daftarWishlist.appendChild(li);
        });
    }
}

// Hapus satu item dari wishlist
function hapusItemWishlist(index) {
    wishlist.splice(index, 1);
    localStorage.setItem('wishlist', JSON.stringify(wishlist));
    updateWishlistCount();
    tampilkanwishlist();
}

// Kosongkan semua wishlist
function hapuswishlist() {
    wishlist = [];
    localStorage.removeItem('wishlist');
    updateWishlistCount();
    tampilkanwishlist();
    alert("Wishlist telah dikosongkan!");
}

// Menjalankan fungsi saat file dimuat
aktifkanTombolSewa();
aktifkanTombolWishlist();
updateWishlistCount();