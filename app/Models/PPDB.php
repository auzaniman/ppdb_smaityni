<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPDB extends Model
{
    use HasFactory;

    protected $table = 'ppdb';

    protected $fillable = [
    'pilihan_tinggal',
    'pilihan_jurusan',
    'pilihan_program',
    'nama',
    'ttl',
    'alamat',
    'asal_sekolah',
    'nisn',
    'nik',
    'kartu_keluarga',
    'nama_ayah',
    'nik_ayah',
    'nama_ibu',
    'nik_ibu',
    'pekerjaan_ayah',
    'pekerjaan_ibu',
    'ukuran_baju',
    'hp_siswa',
    'hp_ortu',
    'image',
  ];

  // Relation
  public function school()
  {
    return $this->belongsTo(School::class);
  }

}
