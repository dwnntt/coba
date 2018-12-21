harga_laptop = 7000000
uang_muka = 1000000

sisa_cicilan = harga_laptop - uang_muka

suku_bunga = 10 # dalam persen

jumlah_bunga = sisa_cicilan * suku_bunga / 100

total_tagihan = sisa_cicilan + jumlah_bunga

tagihan_bulanan = total_tagihan / 12

print tagihan_bulanan

