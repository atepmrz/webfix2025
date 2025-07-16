<?php

namespace App\Livewire;

use Livewire\Component;

class PromoItemBulanan extends Component
{
    
    public function render()
    {
        $files = [];
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'svg'];
        $directory = public_path('img/promo/items');

        if (is_dir($directory)) {
            $allFiles = scandir($directory);

            foreach ($allFiles as $file) {
                if ($file === '.' || $file === '..') continue;

                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_extensions)) {
                    $files[] = 'img/promo/items/' . $file;
                }
            }
        }
        return view('livewire.promo-item-bulanan', compact('files'));
    }
}
