<div class="grid gap-4 gap-y-2 text-sm md:grid-cols-5">
    <!-- Address -->
    <div class="md:col-span-3 col-span-5">
        <label for="addressPrimary" class="block text-gray-700">Address / Street</label>
        <input type="text" name="addressPrimary" id="addressPrimary"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="Enter address" />
    </div>

    <!-- Transaction Value -->
    <div class="md:col-span-2 col-span-5">
        <label for="pricePrimary" class="block text-gray-700">Nilai Transaksi</label>
        <input type="text" name="pricePrimary" id="pricePrimary"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="Enter transaction value" />
    </div>

    <!-- Gross Commission -->
    <div class="col-span-5">
        <label for="KomisipricePrimary" class="block text-gray-700">Komisi Kotor</label>
        <input type="text" name="KomisipricePrimary" id="KomisipricePrimary"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" disabled readonly />
    </div>

    <!-- PPH 23 -->
    <div class="col-span-5">
        <label class="block text-gray-700 mb-2">PPH 23:</label>
        <div class="flex flex-col sm:flex-row gap-4">
            <div class="flex items-center">
                <input id="pph23-1Primary" type="radio" value="yes" name="pph23Primary"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="pph23-1Primary" class="ms-2 text-sm text-gray-700">Yes</label>
            </div>
            <div class="flex items-center">
                <input id="pph23-2Primary" type="radio" value="no" name="pph23Primary"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="pph23-2Primary" class="ms-2 text-sm text-gray-700">No</label>
            </div>
        </div>
    </div>

    <!-- PPH 23 Result -->
    <div class="col-span-5">
        <label for="PPHprice" class="block text-gray-700">Hasil dari PPH 23</label>
        <input type="text" name="PPHprice" id="PPHprice" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
            disabled readonly />
    </div>

    <!-- Office Commission -->
    <div class="col-span-5">
        <label for="komisikantorPrimary" class="block text-gray-700">Komisi Kantor</label>
        <input type="text" name="komisikantorPrimary" id="komisikantorPrimary"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" disabled readonly />
    </div>

    <!-- Divider and Section Title -->
    <div class="col-span-5 flex items-center justify-center mt-8">
        <div class="flex-grow h-px bg-gray-300"></div>
        <span class="px-4 bg-white text-gray-700 font-bold text-center">PROJECT LEADER</span>
        <div class="flex-grow h-px bg-gray-300"></div>
    </div>


    <!-- Gross Commission Leader -->
    <div class="col-span-5">
        <label for="komisileaderPrimary" class="block text-gray-700">Komisi Kotor Leader</label>
        <input type="text" name="komisileaderPrimary" id="komisileaderPrimary"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" disabled readonly />
    </div>

    <!-- PPH 21 Leader -->
    <div class="col-span-5">
        <label class="block text-gray-700 mb-2">PPH 21:</label>
        <div class="flex flex-col sm:flex-row gap-4">
            <div class="flex items-center">
                <input id="pph21-1leaderPrimary" type="radio" value="npwp" name="pph21leaderPrimary"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="pph21-1leaderPrimary" class="ms-2 text-sm text-gray-700">Ada NPWP</label>
            </div>
            <div class="flex items-center">
                <input id="pph21-2leaderPrimary" type="radio" value="no-npwp" name="pph21leaderPrimary"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="pph21-2leaderPrimary" class="ms-2 text-sm text-gray-700">Tidak ada</label>
            </div>
        </div>
    </div>

    <!-- PPH 21 Result Leader -->
    <div class="col-span-5">
        <label for="PPH21priceleaderPrimary" class="block text-gray-700">Hasil dari PPH 21</label>
        <input type="text" name="PPH21priceleaderPrimary" id="PPH21priceleaderPrimary"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" disabled readonly />
    </div>

    <!-- Net Commission Leader -->
    <div class="col-span-5">
        <label for="komisibersihleaderPrimary" class="block text-gray-700">Komisi Bersih</label>
        <input type="text" name="komisibersihleaderPrimary" id="komisibersihleaderPrimary"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" disabled readonly />
    </div>

    <!-- Divider and Section Title -->
    <div class="col-span-5 flex items-center justify-center mt-8">
        <div class="flex-grow h-px bg-gray-300"></div>
        <span class="px-4 bg-white text-gray-700 font-bold text-center">MARKETING</span>
        <div class="flex-grow h-px bg-gray-300"></div>
    </div>

    <!-- Gross Commission Marketing -->
    <div class="col-span-5">
        <label for="komisimarketingPrimary" class="block text-gray-700">Komisi Kotor Marketing</label>
        <input type="text" name="komisimarketingPrimary" id="komisimarketingPrimary"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" disabled readonly />
    </div>

    <!-- PPH 21 Marketing -->
    <div class="col-span-5">
        <label class="block text-gray-700 mb-2">PPH 21:</label>
        <div class="flex flex-col sm:flex-row gap-4">
            <div class="flex items-center">
                <input id="pph21-1marketingPrimary" type="radio" value="npwp" name="pph21marketingPrimary"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="pph21-1marketingPrimary" class="ms-2 text-sm text-gray-700">Ada NPWP</label>
            </div>
            <div class="flex items-center">
                <input id="pph21-2marketingPrimary" type="radio" value="no-npwp" name="pph21marketingPrimary"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="pph21-2marketingPrimary" class="ms-2 text-sm text-gray-700">Tidak ada</label>
            </div>
        </div>
    </div>

    <!-- PPH 21 Result Marketing -->
    <div class="col-span-5">
        <label for="PPH21pricemarketingPrimary" class="block text-gray-700">Hasil dari PPH 21</label>
        <input type="text" name="PPH21pricemarketingPrimary" id="PPH21pricemarketingPrimary"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" disabled readonly />
    </div>

    <!-- Net Commission Marketing -->
    <div class="col-span-5">
        <label for="komisibersihmarketingPrimary" class="block text-gray-700">Komisi Bersih</label>
        <input type="text" name="komisibersihmarketingPrimary" id="komisibersihmarketingPrimary"
            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" disabled readonly />
    </div>
</div>
