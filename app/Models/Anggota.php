namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_anggota';

    protected $fillable = [
        'id_anggota', 'id_divisi', 'status_keanggotaan'
    ];

    // Relasi dengan AkunPengguna
    public function akunPengguna()
    {
        return $this->belongsTo(AkunPengguna::class, 'id_anggota', 'id_akun');
    }

    // Relasi dengan Divisi
    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'id_divisi', 'id_divisi');
    }
}