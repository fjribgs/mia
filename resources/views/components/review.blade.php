<div id="dialog-review"
     class="hidden fixed inset-0 bg-black/40 flex items-center justify-center z-50">

    <div class="bg-white w-[450px] rounded-3xl shadow-xl p-6 animate-fadeIn">

        <!-- Title -->
        <h2 class="text-start text-xl font-semibold mb-3">Ulasan</h2>
        <div class="w-full h-[1px] bg-gray-200 mb-4"></div>

        <!-- User Info -->
        <div class="flex items-center gap-3 mb-4">
            <img src="{{ Auth::user()->profile_photo_url ?? asset('storage/defaults/default_profile_picture.png') }}"
                 class="w-10 h-10 rounded-full object-cover">
            <p class="font-semibold text-gray-700">{{ Auth::user()->name }}</p>
        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('review.store', ['umkm_id' => $umkm[0]->umkm->id]) }}" class="flex flex-col gap-4">
            @csrf

            <input type="hidden" name="umkm_id" value="{{ $umkm[0]->umkm->id }}">
            <input type="hidden" name="rating" id="rating-input">

            <!-- Rating Stars -->
            <div class="flex items-center gap-2">
                <div id="rating-stars" class="flex gap-1 cursor-pointer">
                    @for ($i = 1; $i <= 5; $i++)
                        <img src="{{ asset('images/unselected_star.svg') }}"
                             data-value="{{ $i }}"
                             class="w-8 star hover:scale-110 transition">
                    @endfor
                </div>

                <span id="rating-value" class="text-gray-600 ml-2">0/5</span>
            </div>

            <!-- Textarea -->
            <textarea name="message" rows="3"
                      class="w-full border border-gray-300 rounded-xl p-3 text-gray-700 focus:ring-2 focus:ring-[var(--primary-400)] focus:outline-none"
                      placeholder="Bagikan pengalaman Anda tentang tempat ini"></textarea>

            <!-- Footer -->
            <div class="flex justify-end gap-3 mt-2">
                <button type="button"
                    onclick="closeDialogReview()"
                    class="py-2 px-6 rounded-full border border-gray-300 text-gray-600 hover:bg-gray-100 transition">
                    Batal
                </button>

                <button type="submit"
                        id="submit-review"
                        disabled
                        class="py-2 px-6 rounded-full bg-[var(--primary-500)] text-white hover:bg-[var(--primary-600)] disabled:bg-gray-300">
                    Posting
                </button>
            </div>

        </form>

    </div>
</div>

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: scale(.95); }
    to   { opacity: 1; transform: scale(1); }
}
.animate-fadeIn {
    animation: fadeIn .2s ease-out;
}
</style>

<script>
function closeDialogReview() {
    document.getElementById('dialog-review').classList.add('hidden');
}

document.addEventListener('DOMContentLoaded', () => {
    const stars = document.querySelectorAll('#rating-stars .star');
    const ratingInput = document.getElementById('rating-input');
    const ratingValue = document.getElementById('rating-value');
    const submitBtn = document.getElementById('submit-review');

    stars.forEach(star => {
        star.addEventListener('click', function () {
            const rating = this.getAttribute('data-value');

            ratingInput.value = rating;
            ratingValue.textContent = rating + "/5";
            submitBtn.disabled = false;

            stars.forEach((s, idx) => {
                s.src = idx < rating
                    ? "{{ asset('images/star.svg') }}"
                    : "{{ asset('images/unselected_star.svg') }}";
            });
        });
    });
});
</script>
