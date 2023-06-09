<x-layouts.container title="Aplikasi Tes Psikologi Terbaik">


    {{-- Transaction --}}
    <section class="pt-8">
        <div class="space-y-8">
            <div class="space-y-5">
                <div class="flex flex-wrap gap-3">
                    <x-atoms.button tag="a" status="transparent" href="#" class="text-base-400 font-normal after:content-['>'] after:pl-3">Layanan
                    </x-atoms.button>
                    <x-atoms.button tag="a" status="transparent" href="#" class="text-base-400 font-normal after:content-['>'] after:pl-3 after:text-base-800">Paket
                        Penjurusan IPA/IPS</x-atoms.button>
                    <x-atoms.button tag="a" status="transparent" href="#" class="font-normal text-base-800">Transaksi
                    </x-atoms.button>
                </div>
                <div class="flex items-center gap-4">
                    <x-atoms.button tag="a" href="transaksi" status="transparent" class="cursor-pointer text-base-800" onclick="exitTransactionModal()">
                        <i class="fas fa-arrow-left fa-xl"></i>
                    </x-atoms.button>
                    <h1 class="text-xl font-bold">Transaksi</h1>
                </div>
            </div>

            <div class="flex flex-col gap-8 lg:flex-row">
                <div class="w-full p-8 space-y-4 rounded-3xl bg-light-100 h-fit">
                    <div class="">
                        <h2 class="text-xl font-bold">Apa yang bisa kamu dapatkan</h2>
                    </div>
                    <div class="text-base-600">
                        <p class="">Dengan membeli paket layanan Kuliah Karier, kamu bisa dapat banyak hal menarik
                            loh!</p>
                        <ul class="mt-2 space-y-2">
                            <li class="flex items-center gap-3"><i
                                    class="p-1 bg-green-500 rounded-full text-light-100 fa-2xs fas fa-check"></i>
                                Workshop</li>
                            <li class="flex items-center gap-3"><i
                                    class="p-1 bg-green-500 rounded-full text-light-100 fa-2xs fas fa-check"></i>
                                Psikotest</li>
                            <li class="flex items-center gap-3"><i
                                    class="p-1 bg-green-500 rounded-full text-light-100 fa-2xs fas fa-check"></i>
                                Tes Minat dan Bakat</li>
                            <li class="flex items-center gap-3"><i
                                    class="p-1 bg-green-500 rounded-full text-light-100 fa-2xs fas fa-check"></i>
                                Tes IPA/IPS</li>
                        </ul>
                    </div>
                    <div class="pt-3 space-y-3">
                        <h3 class="font-medium text-base-800">Keterangan</h3>
                        <p class="text-base-700 text-sm">Pemesananmu yang dibayarkan melalui metode Manual akan diproses Maksimal dalam 1 hari kerja.</p>
                    </div>
                </div>


                <div class="px-8 py-5 lg:w-[640px] rounded-xl bg-light-100">
                    <h2 class="text-xl font-bold py-4">Paket IPA/IPS</h2>
                    
                    <table class="w-full transction-tables mb-4">
                        <tbody class="">
                            <tr>
                                <td>ID Transaksi</td>
                                <td>PJ01202211290002</td>
                            </tr>
                            <tr>
                                <td>Metode</td>
                                <td>BRI (Transfer)</td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>Rp 150.000</td>
                            </tr>
                            <tr>
                                <td>Diskon</td>
                                <td>-Rp 90.000</td>
                            </tr>
                            <tr>
                                <td>Total Harga</td>
                                <td class="font-bold">Rp 60.000</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="space-y-4">
                        <x-atoms.button tag="a" href="rincian" class="w-full text-center">Selanjutnya
                        </x-atoms.button>
                        <x-atoms.button href="/" status="outline" class="w-full text-center">Ubah Metode</x-atoms.button>
                    </div>
                </div>
</x-layouts.container>

