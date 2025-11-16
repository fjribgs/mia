<div class="fixed inset-0 bg-black/40 flex items-center justify-center z-50">
    <div class="bg-white w-[450px] rounded-3xl shadow-xl p-6 animate-fadeIn">

        <!-- Title -->
        <h2 class="text-start text-xl font-semibold mb-4">Informasi</h2>
        <div class="w-full h-[1px] bg-gray-200 mb-4"></div>

        <!-- Content -->
        <div class="flex flex-col items-center text-center px-4">
            <svg class="text-gray-400 mb-3" width="60" height="60" viewBox="0 0 24 24">
                <path class="fill-current"
                    d="M12 2a10 10 0 100 20 10 10 0 000-20zm.75 14.5h-1.5v-1.5h1.5v1.5zm0-3h-1.5v-6h1.5v6z" />
            </svg>

            <p class="text-gray-600 text-base mb-6">
                Nomor UMKM tidak tersedia untuk UMKM ini.
            </p>
        </div>

        <!-- Footer -->
        <div class="flex justify-center mt-2">
            <button onclick="closeDialogPhoneEmpty()"
                class="py-2 px-6 rounded-full border border-gray-300 text-gray-600 hover:bg-gray-100 transition">
                Tutup
            </button>
        </div>

    </div>
</div>

<style>
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(.95);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}
.animate-fadeIn {
    animation: fadeIn .2s ease-out;
}
</style>

<script>
    function closeDialogPhoneEmpty() {
        const dialogDesktop = document.getElementById('dialog-phone-empty-desktop');
        const dialogPhone = document.getElementById('dialog-phone-empty-phone');
        dialogDesktop.style.display = 'none';
        dialogPhone.style.display = 'none';
    }
</script>
