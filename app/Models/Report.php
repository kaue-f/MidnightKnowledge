<?php

namespace App\Models;

use App\Enums\ReviewStateEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Report extends Model
{
    use HasUlids;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'reporter_id',
        'reported_type',
        'reported_id',
        'report_type_id',
        'details',
        'status',
        'resolved_by_id',
        'resolution_details',
        'resolved_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'resolved_at' => 'datetime',
            'status' => ReviewStateEnum::class,
        ];
    }

    /**
     * Get the user who reported this report.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<User, Report> 
     */
    public function reporter()
    {
        return $this->belongsTo(User::class, 'reporter_id');
    }

    /**
     * Get the reported entity.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function reported()
    {
        return $this->morphTo();
    }

    /**
     * Get the type of report.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<ReportType, Report>
     */
    public function reportType()
    {
        return $this->belongsTo(ReportType::class);
    }

    /**
     * Get the user who resolved this report.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<User, Report>
     */
    public function resolvedBy()
    {
        return $this->belongsTo(User::class, 'resolved_by_id');
    }
}
