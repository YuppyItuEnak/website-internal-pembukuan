<div class="grid gap-4 gap-y-2 text-sm grid-cols-1 sm:grid-cols-2 md:grid-cols-5 lg:grid-cols-5 xl:grid-cols-5">
    <!-- Address / Street -->
    <div class="col-span-1 sm:col-span-2 md:col-span-3">
        <label for="addressSec">Address / Street</label>
        <input type="text" name="addressSec" id="addressSec" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
            placeholder="" />
    </div>

    <!-- Sewa / Jual -->
    <div class="col-span-1 sm:col-span-2 md:col-span-2">
        <label for="sewajual" class="">Select an option</label>
        <select id="sewajual"
            class="bg-gray-50 mt-1 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option selected>Sewa/Jual</option>
            <option value="jual">Jual</option>
            <option value="sewa">Sewa</option>
        </select>
    </div>

    <!-- Nilai Transaksi -->
    <div class="col-span-1 sm:col-span-2 md:col-span-2">
        <label for="priceSec">Nilai Transaksi</label>
        <input type="text" name="priceSec" id="priceSec" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
            placeholder="" />
    </div>

    <!-- Komisi Kotor -->
    <div class="col-span-1 sm:col-span-2 md:col-span-3">
        <label for="KomisipriceSec">Komisi Kotor</label>
        <input type="text" name="KomisipriceSec" id="KomisipriceSec"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" disabled readonly />
    </div>

    <!-- Cobroke -->
    <div class="col-span-1 sm:col-span-2 md:col-span-2">
        <label for="Cobroke" class="mb-2 text-sm font-medium text-gray-900">Cobroke:</label>
        <div class="grid grid-cols-2 gap-2">
            <div class="flex items-center">
                <input id="Cobroke1" type="radio" value="" name="Cobroke"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="Cobroke1" class="ms-2 text-sm font-medium text-gray-900">Yes</label>
            </div>
            <div class="flex items-center">
                <input checked id="Cobroke2" type="radio" value="" name="Cobroke"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="Cobroke2" class="ms-2 text-sm font-medium text-gray-900">No</label>
            </div>
        </div>
    </div>

    <!-- Hasil Co-Broke -->
    <div class="col-span-1 sm:col-span-2 md:col-span-3">
        <label for="Cobrokeprice">Hasil dari Co-Broke (Jika ada)</label>
        <input type="text" name="Cobrokeprice" id="Cobrokeprice"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" disabled readonly />
    </div>

    <!-- PPH 23 -->
    <div class="col-span-1 sm:col-span-2 md:col-span-2">
        <label for="pph23Sec" class="mb-2 text-sm font-medium text-gray-900">PPH 23:</label>
        <div class="grid grid-cols-2 gap-2">
            <div class="flex items-center">
                <input id="pph23-1Sec" type="radio" value="" name="pph23Sec"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="pph23-1Sec" class="ms-2 text-sm font-medium text-gray-900">Yes</label>
            </div>
            <div class="flex items-center">
                <input checked id="pph23-2Sec" type="radio" value="" name="pph23Sec"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="pph23-2Sec" class="ms-2 text-sm font-medium text-gray-900">No</label>
            </div>
        </div>
    </div>

    <!-- Hasil PPH 23 -->
    <div class="col-span-1 sm:col-span-2 md:col-span-3">
        <label for="PPHpriceSec">Hasil dari PPH 23 (Jika ada)</label>
        <input type="text" name="PPHpriceSec" id="PPHpriceSec"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" disabled readonly />
    </div>

    <!-- Komisi Kantor -->
    <div class="col-span-1 sm:col-span-5">
        <label for="komisikantorSec">Komisi Kantor</label>
        <input type="text" name="komisikantorSec" id="komisikantorSec"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" disabled readonly />
    </div>


    <div class="col-span-1 flex items-center justify-center mt-8">
        <div class="flex-grow h-px bg-gray-300"></div>
        <span class="px-4 bg-white text-gray-700 font-bold text-center">MARKETING</span>
        <div class="flex-grow h-px bg-gray-300"></div>
    </div>

    <!-- Komisi Marketing -->
    <div class="col-span-1 sm:col-span-5">
        <label for="komisimarketingSec">Komisi Kotor</label>
        <input type="text" name="komisimarketingSec" id="komisimarketingSec"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" disabled readonly />
    </div>

    <!-- PPH 21 -->
    <div class="col-span-1 sm:col-span-2">
        <label for="pph21Sec" class="mb-2 text-sm font-medium text-gray-900">PPH 21:</label>
        <div class="grid grid-cols-2 gap-2">
            <div class="flex items-center">
                <input id="pph21-1Sec" type="radio" value="" name="pph21Sec"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="pph21-1Sec" class="ms-2 text-sm font-medium text-gray-900">Ada NPWP</label>
            </div>
            <div class="flex items-center">
                <input checked id="pph21-2Sec" type="radio" value="" name="pph21Sec"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="pph21-2Sec" class="ms-2 text-sm font-medium text-gray-900">Tidak Ada</label>
            </div>
        </div>
    </div>

    <div class="col-span-1 sm:col-span-3">
        <label for="PPH21priceSec">Hasil dari PPH 21</label>
        <input type="text" name="PPH21priceSec" id="PPH21priceSec"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" disabled readonly />
    </div>

    <!-- Sponsorship -->
    <div class="col-span-1 sm:col-span-2">
        <label for="sponsorship">Sponsorship:</label>
        <input type="text" name="sponsorship" id="sponsorship"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" />
    </div>
    <div class="col-span-1 sm:col-span-3">
        <label for="hasilsponsorship">Hasil Sponsorship</label>
        <input type="text" name="hasilsponsorship" id="hasilsponsorship"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" disabled readonly />
    </div>

    <!-- Komisi Bersih -->
    <div class="col-span-1 sm:col-span-5">
        <label for="komisibersihSec">Komisi Bersih:</label>
        <input type="text" name="komisibersihSec" id="komisibersihSec"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" disabled readonly />
    </div>
</div>
