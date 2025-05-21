<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriVideo extends Model
{
    use HasFactory;

    protected $table = 'galeri_videos';

    protected $fillable = [
        'judul',
        'deskripsi',
        'jenis',
        'path_video',
        'url_video',
        'thumbnail',
        'kategori',
        'is_featured',
        'urutan',
        'status',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'status' => 'boolean',
    ];

    public function getEmbedUrl()
    {
        if ($this->jenis !== 'embed' || empty($this->url_video)) {
            return null;
        }

        if (strpos($this->url_video, 'youtube.com') !== false || strpos($this->url_video, 'youtu.be') !== false) {
            $videoId = null;

            if (preg_match('/youtube\.com\/watch\?v=([^&]+)/', $this->url_video, $matches)) {
                $videoId = $matches[1];
            } elseif (preg_match('/youtu\.be\/([^?]+)/', $this->url_video, $matches)) {
                $videoId = $matches[1];
            }

            if ($videoId) {
                return 'https://www.youtube.com/embed/' . $videoId;
            }
        }

        return $this->url_video;
    }
}
