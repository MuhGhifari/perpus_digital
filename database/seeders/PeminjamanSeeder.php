<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Peminjaman;
use App\Models\User;
use App\Models\Book;
use Carbon\Carbon;

class PeminjamanSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // Get all users except admins and books
    $users = User::where('role', '!=', 'a')->get();
    $books = Book::all();

    if ($users->isEmpty() || $books->isEmpty()) {
      return; // No users or books to create transactions
    }

    // Define possible statuses
    $statuses = ['requested', 'borrowed', 'declined', 'returned', 'vanished', 'confirmed'];

    // Simulate transactions over the past 6 months
    $startDate = Carbon::now()->subMonths(6);
    $endDate = Carbon::now();

    // Create approximately 200-300 transactions
    $numberOfTransactions = rand(200, 300);

    for ($i = 0; $i < $numberOfTransactions; $i++) {
      // Random user and book
      $user = $users->random();
      $book = $books->random();

      // Random date within the past 6 months
      $createdAt = Carbon::createFromTimestamp(rand($startDate->timestamp, $endDate->timestamp));

      // Random status with weighted probabilities
      $statusWeights = [
        'returned' => 40,  // Most transactions are completed
        'borrowed' => 30,  // Some currently borrowed
        'confirmed' => 15, // Confirmed but not yet returned
        'requested' => 10, // Pending requests
        'declined' => 3,   // Few declined
        'vanished' => 2,   // Very few lost books
      ];

      $status = $this->getRandomWeightedElement($statusWeights);

      // Set return_at based on status
      $returnAt = null;
      if (in_array($status, ['returned', 'confirmed'])) {
        // Return date is after creation, within 1-4 weeks
        $returnAt = $createdAt->copy()->addDays(rand(7, 28));
      } elseif ($status === 'borrowed') {
        // If currently borrowed, return_at could be in the future or null
        if (rand(0, 1)) {
          $returnAt = Carbon::now()->addDays(rand(1, 14)); // Expected return soon
        }
      }

      // Create the peminjaman record
      $data = [
        'book_id' => $book->id,
        'user_id' => $user->id,
        'status' => $status,
        'created_at' => $createdAt,
        'updated_at' => $createdAt,
      ];

      if ($returnAt !== null) {
        $data['return_at'] = $returnAt;
      }

      Peminjaman::create($data);
    }
  }

  /**
   * Get a random element from an array based on weights
   */
  private function getRandomWeightedElement(array $weightedValues)
  {
    $rand = rand(1, array_sum($weightedValues));

    foreach ($weightedValues as $key => $value) {
      $rand -= $value;
      if ($rand <= 0) {
        return $key;
      }
    }
  }
}