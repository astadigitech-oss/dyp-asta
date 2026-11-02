{{-- Notifikasi hasil kirim form kontak + honeypot anti-bot --}}
@if (session('contact_success'))
    <div class="rounded-xl bg-emerald-500/15 border border-emerald-400/50 text-emerald-100 px-4 py-3 text-sm">
        {{ session('contact_success') }}
    </div>
@endif

@if ($errors->contact->any())
    <div class="rounded-xl bg-red-500/15 border border-red-400/50 text-red-100 px-4 py-3 text-sm">
        <ul class="list-disc pl-5 space-y-1">
            @foreach ($errors->contact->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Field ini disembunyikan dari pengunjung; bot yang mengisinya akan ditolak --}}
<div class="hidden" aria-hidden="true">
    <label>Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
</div>
