namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_divisi';

    protected $fillable = [
        'id_divisi', 'nama_divisi', 'deskripsi_divisi'
    ];

    // Relasi dengan Anggota
    public function anggota()
    {
        return $this->hasMany(Anggota::class, 'id_divisi', 'id_divisi');
    }
}