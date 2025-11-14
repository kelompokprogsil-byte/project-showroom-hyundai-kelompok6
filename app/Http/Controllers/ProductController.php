<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display all products
     */
    public function index(Request $request)
    {
        return 'Controller OK';
        
        $query = Produk::with(['kategoriDetail', 'stok.dealer']);

        // Filter by category
        if ($request->has('kategori') && $request->kategori != 'all') {
            $query->where('id_kategori', $request->kategori);
        }

        // Search
        if ($request->has('search') && $request->search != '') {
            $query->where('nama_produk', 'like', '%' . $request->search . '%');
        }

        // Sort by price
        if ($request->has('sort')) {
            if ($request->sort == 'price_asc') {
                $query->orderBy('harga', 'asc');
            } elseif ($request->sort == 'price_desc') {
                $query->orderBy('harga', 'desc');
            } elseif ($request->sort == 'name') {
                $query->orderBy('nama_produk', 'asc');
            }
        } else {
            $query->orderBy('id_produk', 'desc');
        }

        $produk = $query->paginate(12);
        $kategori = Kategori::all();

        return view('product', [
            'title' => 'Products',
            'produk' => $produk,
            'kategori' => $kategori
        ]);
    }

    /**
     * Display mobil only
     */
    public function mobil()
    {
        $produk = Produk::mobil()
                       ->with(['stok.dealer'])
                       ->orderBy('harga', 'desc')
                       ->get();

        return view('product_mobil', [
            'title' => 'Mobil Hyundai',
            'produk' => $produk
        ]);
    }

    /**
     * Display sparepart only
     */
    public function sparepart()
    {
        $produk = Produk::sparepart()
                       ->orderBy('nama_produk', 'asc')
                       ->get();

        return view('product_sparepart', [
            'title' => 'Sparepart',
            'produk' => $produk
        ]);
    }

    /**
     * Display aksesoris only
     */
    public function aksesoris()
    {
        $produk = Produk::aksesoris()
                       ->orderBy('nama_produk', 'asc')
                       ->get();

        return view('product_aksesoris', [
            'title' => 'Aksesoris',
            'produk' => $produk
        ]);
    }

    /**
     * Display product detail
     */
    public function show($id)
    {
        $produk = Produk::with(['kategoriDetail', 'stok.dealer'])
                       ->findOrFail($id);

        // Get related products (same category, different product)
        $relatedProducts = Produk::where('id_kategori', $produk->id_kategori)
                                 ->where('id_produk', '!=', $id)
                                 ->limit(4)
                                 ->get();

        return view('product_detail', [
            'title' => $produk->nama_produk,
            'produk' => $produk,
            'relatedProducts' => $relatedProducts
        ]);
    }

    /**
     * Check product availability
     */
    public function checkAvailability($id)
    {
        $produk = Produk::with('stok.dealer')->findOrFail($id);

        $availability = $produk->stok->map(function($stok) {
            return [
                'dealer' => $stok->dealer->nama_dealer,
                'kota' => $stok->dealer->kota,
                'stok' => $stok->stok,
                'available' => $stok->isAvailable(),
                'low_stock' => $stok->isLowStock()
            ];
        });

        return response()->json([
            'produk' => $produk->nama_produk,
            'total_stok' => $produk->total_stok,
            'availability' => $availability
        ]);
    }
}