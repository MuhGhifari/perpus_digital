<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BookSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // Ensure the covers directory exists
    Storage::makeDirectory('public/covers');

    // Array of Indonesian books data
    $indonesianBooks = [
      [
        'title' => 'Sang Pemimpi',
        'author' => 'Andrea Hirata',
        'description' => 'Kisah tentang Baso, seorang anak Belitung yang penuh impian dan perjuangan.',
        'publisher' => 'Bentang Pustaka',
        'cover' => 'sang_pemimpi.jpg',
        'publishing_year' => 2006,
        'isbn' => '9789793062791',
        'language' => 'id',
        'categories' => [1, 2], // Adjust category IDs as needed
      ],
      [
        'title' => 'Negeri 5 Menara',
        'author' => 'Ahmad Fuadi',
        'description' => 'Cerita tentang perjalanan Alif Fikri di pesantren.',
        'publisher' => 'Gramedia Pustaka Utama',
        'cover' => 'negeri_5_menara.jpg',
        'publishing_year' => 2009,
        'isbn' => '9789792273138',
        'language' => 'id',
        'categories' => [1, 3],
      ],
      [
        'title' => 'Bumi',
        'author' => 'Tere Liye',
        'description' => 'Bagian pertama dari seri fantasi Tere Liye.',
        'publisher' => 'Gramedia Pustaka Utama',
        'cover' => 'bumi.jpg',
        'publishing_year' => 2014,
        'isbn' => '9786020304736',
        'language' => 'id',
        'categories' => [4, 5],
      ],
      [
        'title' => 'Laskar Pelangi',
        'author' => 'Andrea Hirata',
        'description' => 'Kisah anak-anak di Belitung yang berjuang untuk pendidikan.',
        'publisher' => 'Bentang Pustaka',
        'cover' => 'laskar_pelangi.jpg',
        'publishing_year' => 2005,
        'isbn' => '9789793062784',
        'language' => 'id',
        'categories' => [1, 2],
      ],
      [
        'title' => 'Ayat-Ayat Cinta',
        'author' => 'Habiburrahman El Shirazy',
        'description' => 'Cerita tentang cinta dan perjalanan spiritual di Mesir.',
        'publisher' => 'Republika',
        'cover' => 'ayat_ayat_cinta.jpg',
        'publishing_year' => 2004,
        'isbn' => '9789791102023',
        'language' => 'id',
        'categories' => [6, 7],
      ],
    ];

    foreach ($indonesianBooks as $bookData) {
      // Handle image copying similar to addBook()
      $sourcePath = storage_path('app/public/samples/' . $bookData['cover']);
      $imageName = null;
      if (File::exists($sourcePath)) {
        $extension = pathinfo($sourcePath, PATHINFO_EXTENSION);
        $imageName = time() . '_' . uniqid() . '.' . $extension;
        $destinationPath = storage_path('app/public/covers/' . $imageName);
        File::copy($sourcePath, $destinationPath);
      }

      $book = Book::create([
        'title' => $bookData['title'],
        'author' => $bookData['author'],
        'stock' => rand(2, 5),
        'description' => $bookData['description'],
        'publisher' => $bookData['publisher'],
        'cover' => $imageName,
        'publishing_year' => $bookData['publishing_year'],
        'isbn' => $bookData['isbn'],
        'language' => $bookData['language'],
      ]);

      // Attach categories using sync, matching addBook()
      $book->categories()->sync($bookData['categories']);
    }
  }
}
