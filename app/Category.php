<?php

namespace App;

use Baum\Node;
use Illuminate\Support\Facades\Storage;

class Category extends Node
{
    protected $table = 'categories';

    public static function boot()
    {
        parent::boot();
        static::creating(function ($instance) {
            if (is_null($instance->parent_id)) {
                $instance->path = "uploads/{$instance->name}";
                //Storage::makeDirectory($instance->path . "/" . strftime("%Y"));
            } else {
                $parent = static::findOrFail($instance->parent_id);
                  foreach ($parent->root()->getDescendants() as $ancestor) {
                    $instance->path .= "{$ancestor->name}/";
                }
                $instance->path .= "{$instance->name}";
                //dd($instance->path);
            }
            return true;
        });
    }
}
