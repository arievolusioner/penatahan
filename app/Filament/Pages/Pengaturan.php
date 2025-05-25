<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Illuminate\Support\Facades\Storage;
use App\Models\Setelan;

class Pengaturan extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $view = 'filament.pages.pengaturan';

    protected static ?string $navigationLabel = 'Setelan';

    protected static ?int $navigationSort = 20;

    protected static ?string $navigationGroup = 'Pengaturan';

    protected static ?string $title = 'Setelan';

    public $tiktok, $facebook, $instagram, $linkedin, $youtube, $number, $email, $logo, $tentang_kami, $gmaps;

    public function mount(): void
    {
        $this->form->fill([
            'tiktok' => $this->getSetting('tiktok'),
            'facebook' => $this->getSetting('facebook'),
            'instagram' => $this->getSetting('instagram'),
            'linkedin' => $this->getSetting('linkedin'),
            'youtube' => $this->getSetting('youtube'),
            'number' => $this->getSetting('number'),
            'email' => $this->getSetting('email'),
            'tentang_kami' => $this->getSetting('tentang_kami'),
            'gmaps' => $this->getSetting('gmaps'),
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('tiktok')->label('Tiktok URL'),
            TextInput::make('facebook')->label('Facebook URL'),
            TextInput::make('instagram')->label('Instagram URL'),
            TextInput::make('linkedin')->label('LinkedIn URL'),
            TextInput::make('youtube')->label('Youtube URL'),
            TextInput::make('number')->label('Nomor Telepon / WhatsApp'),
            TextInput::make('email')->label('Email'),
            FileUpload::make('logo')
                ->label('Logo')
                ->directory('logos')
                ->image()
                ->preserveFilenames(),
            RichEditor::make('tentang_kami')->label('Tentang Kami'),
            Textarea::make('gmaps')->label('Embed Google Maps'),
        ];
    }

    public function submit()
    {
        $data = $this->form->getState();

        foreach ($data as $key => $value) {
            if ($key === 'logo' && $value) {
                $value = Storage::url($value);
            }

            Setelan::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        session()->flash('success', 'Pengaturan berhasil disimpan.');

        // Redirect ulang ke halaman ini supaya flash message muncul
        return redirect(request()->header('Referer') ?: url()->current());
    }



    protected function getSetting($key)
    {
        return Setelan::where('key', $key)->value('value');
    }
}
