<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Pelanggan;
use App\Models\Paket;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pelanggan::class);
            $table->foreignIdFor(Paket::class);
            $table->dateTime('tgl_reservasi_wisata', $precision = 0);
            $table->integer('harga');
            $table->integer('jumlah_peserta');
            $table->decimal('diskon', $precision = 8, $scale = 2);
            $table->float('nilai_diskon', 8, 2);
            $table->bigInteger('total_bayar');  
            $table->text('file_bukti_tf');
            $table->enum('status_reservasi_wisata', ['pesan', 'dibayar','selesai']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
