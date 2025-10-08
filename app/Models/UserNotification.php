<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class UserNotification extends Model
{
    use HasUlids, SoftDeletes;

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
        'user_id',
        'type',
        'title',
        'message',
        'params',
        'related_type',
        'related_id',
        'read_at',
    ];


    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['image'];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'params' => 'array',
            'read_at' => 'datetime',
        ];
    }

    /**
     * Summary of related
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo<Model, UserNotification>
     */
    public function related()
    {
        return $this->morphTo();
    }

    /**
     * Get image for the notification.
     * 
     * @return string
     */
    public function image(): Attribute
    {
        return Attribute::make(
            get: fn(): string => match ($this->type) {
                'info' => asset('images/midnight/midnight-info.png'),
                'success' => asset('images/midnight/midnight-success.png'),
                'warning' => asset('images/midnight/midnight-warning.png'),
                'error' => asset('images/midnight/midnight-error.png'),
            }
        );
    }

    public function title(): Attribute
    {
        return Attribute::make(
            get: fn($value): string => trans($value, $this->params ?? [])
        );
    }

    public function message(): Attribute
    {
        return Attribute::make(
            get: fn($value): string => trans($value, $this->params ?? [])
        );
    }

    public function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn($value): string => Carbon::parse($value)->translatedFormat('d F Y H:i:s')
        );
    }

    #[Scope]
    public function getUnread(Builder $query): Builder
    {
        return $query->whereNull('read_at');
    }

    #[Scope]
    public function getRead(Builder $query): Builder
    {
        return $query->whereNotNull('read_at');
    }

    #[Scope]
    public function read(Builder $query): bool
    {
        return $query->update(['read_at' => now()]);
    }
}
