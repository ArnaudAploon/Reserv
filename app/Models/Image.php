<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $materiel_id
 * @property string $nom
 * @property string $chemin
 * @property string $created_at
 * @property string $updated_at
 * @property Materiel $materiel
 */
class Image extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['materiel_id', 'nom', 'chemin', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function materiel()
    {
        return $this->belongsTo('App\Models\Materiel');
    }
}