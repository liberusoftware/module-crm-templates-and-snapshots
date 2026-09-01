<?php

declare(strict_types=1);

namespace Liberu\CRM\TemplatesAndSnapshots\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

final class SnapshotBundle extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_snapshot_bundles';

    protected $fillable = ['team_id', 'name', 'version', 'status', 'payload', 'checksum', 'share_token_hash', 'shared_at', 'created_by'];

    protected function casts(): array
    {
        return ['payload' => 'array', 'version' => 'integer', 'shared_at' => 'datetime'];
    }
}
